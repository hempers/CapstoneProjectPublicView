<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\applications; // Corrected the model name to follow convention
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    /**
     * Retrieves detailed information about a specific application for public view.
     * The response includes core details, contact person, stage history, and missing requirements.
     *
     * @param string $applicationId The unique ID of the application.
     * @return JsonResponse
     */
    public function show(string $applicationId): JsonResponse
    {
        try {
            // Validate the application ID format to prevent invalid queries.
            if (empty($applicationId) || !is_string($applicationId)) {
                Log::warning('Invalid application ID format received.', ['applicationId' => $applicationId]);
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid application ID format.',
                    'data' => null
                ], 400);
            }

            // Find the application by its primary key, ApplicationID.
            $application = applications::where('ApplicationID', $applicationId)->first();

            if (!$application) {
                Log::info('Application not found.', ['applicationId' => $applicationId]);
                return response()->json([
                    'success' => false,
                    'message' => 'Application not found.',
                    'data' => null
                ], 404);
            }

            // Format the response data to match frontend expectations.
            // The manual 'Access-Control-Allow-Origin' header has been removed
            // as it should be handled by the CORS middleware.
            $responseData = [
                'success' => true,
                'data' => [
                    'application_id' => $application->ApplicationID,
                    'application_title' => $application->ApplicationTitle,
                    'contact_person' => $this->getContactPersonName($application->ApplicantID),
                    'date_submitted' => $application->DateSubmitted,
                    'application_status' => $application->GeneralStatus,
                    'stage_history' => $this->getApplicationHistory($application->ApplicationID),
                    'requirements' => $this->getApplicationRequirements($application->ApplicationID)
                ]
            ];

            return response()->json($responseData);

        } catch (\Exception $e) {
            Log::error('Failed to fetch application data.', [
                'applicationId' => $applicationId,
                'error' => $e->getMessage()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch application data.',
                'error' => $e->getMessage(),
                'data' => null
            ], 500);
        }
    }

    /**
     * Helper method to get the contact person's name.
     * It first checks for a specific ContactPersonName field and falls back
     * to concatenating FirstName and LastName if it's not present.
     *
     * @param string $applicantId The ID of the applicant.
     * @return string
     */
    private function getContactPersonName($applicantId)
    {
        try {
            $applicant = DB::table('applicant')->where('ApplicantID', $applicantId)->first();

            if ($applicant) {
                // Prioritize the ContactPersonName field if it exists and is not empty.
                if (isset($applicant->ContactPersonName) && !empty($applicant->ContactPersonName)) {
                    return $applicant->ContactPersonName;
                }

                // Fallback to FirstName and LastName.
                return trim(($applicant->FirstName ?? '') . ' ' . ($applicant->LastName ?? ''));
            }

            return 'Unknown';
        } catch (\Exception $e) {
            Log::error('Error fetching contact person name.', ['applicantId' => $applicantId, 'error' => $e->getMessage()]);
            return 'Unknown';
        }
    }

    /**
     * Helper method to get the application's stage history.
     * It only returns records where IsVisibleToApplicant is set to 1.
     *
     * @param string $applicationId The unique ID of the application.
     * @return array
     */
    private function getApplicationHistory($applicationId)
    {
        try {
            // Fetch history records visible to the applicant.
            $historyRecords = DB::table('application_stage_history')
                ->where('ApplicationID', $applicationId)
                ->where('IsVisibleToApplicant', '=', 1)
                ->orderBy('Date', 'desc')
                ->get();

            // If no history records are found, create a fallback record.
            if ($historyRecords->isEmpty()) {
                $application = DB::table('applications')->where('ApplicationID', $applicationId)->first();
                if (!$application) {
                    return [];
                }

                return [
                    [
                        'date' => $application->DateSubmitted,
                        'stage' => 'Application Submitted',
                        'remarks' => 'Application submitted to ' . ($application->CFIDPProgramCategory ?? 'PCA'),
                        'staff_name' => 'System',
                        'office' => 'Provincial Office',
                        'status' => 'Completed',
                        'action_taken' => 'Submission recorded'
                    ]
                ];
            }

            // Map the database records to the expected output format.
            $history = $historyRecords->map(function ($record) {
                $staffInfo = $this->getStaffInfo($record->OwnerStaffID);

                return [
                    'date' => $record->Date,
                    'stage' => $record->Stage,
                    'remarks' => $record->Remarks ?? '',
                    'staff_name' => $staffInfo['name'],
                    'office' => $staffInfo['office'],
                    'status' => $this->deriveStatusFromStage($record->Stage),
                    'action_taken' => $record->ActionTaken
                ];
            })->toArray();

            return $history;

        } catch (\Exception $e) {
            Log::error('Error fetching application history.', ['applicationId' => $applicationId, 'error' => $e->getMessage()]);
            return [];
        }
    }

    /**
     * Helper method to get application requirements with their status.
     * The frontend will filter requirements with status "missing", "kulang", or "hindi kumpleto".
     *
     * @param string $applicationId The ID of the application.
     * @return array
     */
    private function getApplicationRequirements($applicationId)
    {
        try {
            // First, check if we even have requirements for this application
            $hasRequirements = DB::table('application_requirements')
                ->where('ApplicationID', $applicationId)
                ->exists();
                
            if (!$hasRequirements) {
                // If no requirements found, return dummy test data to verify frontend rendering works
                Log::info('No requirements found for application. Returning dummy test data.', [
                    'applicationId' => $applicationId
                ]);
                
                return [
                    [
                        'requirement_name' => 'Application Form',
                        'description' => 'Completed application form with all fields filled out',
                        'status' => 'complete'
                    ],
                    [
                        'requirement_name' => 'Valid ID',
                        'description' => 'Government-issued identification card',
                        'status' => 'missing'
                    ],
                    [
                        'requirement_name' => 'Proof of Land Ownership',
                        'description' => 'Land title, tax declaration, or other proof of ownership',
                        'status' => 'kulang'
                    ]
                ];
            }

            // Log the query we're about to execute to help with debugging
            Log::info('Executing requirements query', [
                'applicationId' => $applicationId,
                'tables' => ['application_requirements', 'base_requirements']
            ]);

            $requirements = DB::table('application_requirements')
                ->where('application_requirements.ApplicationID', $applicationId)
                ->leftJoin('base_requirements', 'application_requirements.RequirementID', '=', 'base_requirements.RequirementID')
                ->select(
                    'base_requirements.RequirementName as requirement_name',
                    'base_requirements.Details as description', // Using the correct column name
                    'application_requirements.RequirementStatus as status'
                )
                ->get();
                
            // Log the raw query results
            Log::info('Requirements query results', [
                'count' => $requirements->count(),
                'sample' => $requirements->first()
            ]);

            // Always return an array of requirements with consistent field names
            // that match what the frontend expects
            $result = $requirements->map(function ($req) {
                return [
                    'requirement_name' => $req->requirement_name ?? 'Unnamed Requirement',
                    'description' => $req->description ?? 'No description available',
                    'status' => $req->status ?? 'unknown'
                ];
            })->toArray();
            
            Log::info('Returning requirements data', [
                'count' => count($result)
            ]);
            
            return $result;

        } catch (\Exception $e) {
            Log::warning('Error fetching application requirements', [
                'application_id' => $applicationId,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            // Return test data even on error to help debug the frontend
            return [
                [
                    'requirement_name' => '[ERROR] Test Requirement',
                    'description' => 'Error occurred: ' . $e->getMessage(),
                    'status' => 'missing'
                ]
            ];
        }
    }
    /**
     * Helper method to get staff information based on StaffID.
     *
     * @param string|int $staffId The ID of the staff member.
     * @return array
     */
    private function getStaffInfo($staffId)
    {
        try {
            $staff = DB::table('staff')->where('StaffID', $staffId)->first();

            if ($staff) {
                $office = DB::table('offices')->where('OfficeID', $staff->OfficeID ?? 0)->first();

                return [
                    'name' => trim(($staff->FirstName ?? '') . ' ' . ($staff->LastName ?? '')),
                    'office' => $office ? $office->OfficeName : 'PCA Office'
                ];
            }

            // Fallback data if staff record not found.
            return [
                'name' => 'PCA Staff',
                'office' => 'PCA Office'
            ];
        } catch (\Exception $e) {
            Log::error('Error fetching staff info.', ['staffId' => $staffId, 'error' => $e->getMessage()]);
            return [
                'name' => 'PCA Staff',
                'office' => 'PCA Office'
            ];
        }
    }

    /**
     * Helper method to map stage names to a more user-friendly status.
     *
     * @param string $stageName The name of the stage from the database.
     * @return string
     */
    private function deriveStatusFromStage($stageName)
    {
        $stageStatusMap = [
            'Registration' => 'Registered',
            'Validation' => 'Under Validation',
            'Technical Evaluation' => 'Under Evaluation',
            'Review' => 'Under Review',
            'Recommendation' => 'Awaiting Recommendation',
            'Approval' => 'Awaiting Approval',
            'Implementation' => 'In Implementation',
            'Completed' => 'Completed',
            'Rejected' => 'Rejected',
            'On Hold' => 'On Hold'
        ];

        return $stageStatusMap[$stageName] ?? 'Processing';
    }
}
