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

            // If no history records are found, return an empty array
            // The frontend will handle displaying "No History Found!"
            if ($historyRecords->isEmpty()) {
                return [];
            }

            // Map the database records to the expected output format.
            $history = $historyRecords->map(function ($record) {
                return [
                    'date' => $record->Date,
                    'stage' => $record->StageName,
                    'remarks' => $record->Remarks ?? '',
                   
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
                // If no requirements found, return an empty array
                Log::info('No requirements found for application.', [
                    'applicationId' => $applicationId
                ]);

                return [];
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

            // Return an empty array on error
            return [];
        }
    }
   
}
