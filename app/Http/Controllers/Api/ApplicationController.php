<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\applications; // Your actual model name
use Illuminate\Http\JsonResponse;

class ApplicationController extends Controller
{
    public function show(string $applicationId): JsonResponse
    {
        try {
            // Find the application by ApplicationID (your primary key)
            $application = applications::where('ApplicationID', $applicationId)->first();
            
            if (!$application) {
                return response()->json([
                    'message' => 'Application not found'
                ], 404)->header('Access-Control-Allow-Origin', '*');
            }

            // Format the response data to match frontend expectations
            $responseData = [
                'application_id' => $application->ApplicationID, // Reference ID (ApplicationID in DB)
                'application_title' => $application->ApplicationTitle,
                'contact_person' => $this->getContactPersonName($application->ApplicantID),
                'date_submitted' => $application->DateSubmitted,
                'application_status' => $application->GeneralStatus,
                'stage_history' => $this->getApplicationHistory($application->ApplicationID),
                'requirements' => $this->getApplicationRequirements($application->ApplicationID)
            ];

            return response()->json($responseData)->header('Access-Control-Allow-Origin', '*');

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to fetch application data',
                'error' => $e->getMessage()
            ], 500)->header('Access-Control-Allow-Origin', '*');
        }
    }

    // Helper method to get contact person name (ContactPersonName)
    private function getContactPersonName($applicantId)
    {
        try {
            $applicant = \DB::table('applicant')->where('ApplicantID', $applicantId)->first();
            
            // Try to get ContactPersonName field first, fallback to FirstName + LastName
            if ($applicant) {
                if (isset($applicant->ContactPersonName) && !empty($applicant->ContactPersonName)) {
                    return $applicant->ContactPersonName;
                } else {
                    return ($applicant->FirstName ?? '') . ' ' . ($applicant->LastName ?? '');
                }
            }
            
            return 'Unknown';
        } catch (\Exception $e) {
            return 'Unknown';
        }
    }

    // Helper method to get applicant name (kept for backwards compatibility)
    private function getApplicantName($applicantId)
    {
        return $this->getContactPersonName($applicantId);
    }

    // Helper method to get amount requested (you might have this in a separate table)
    private function getAmountRequested($applicationId)
    {
        try {
            // Adjust this based on where you store the amount requested
            // This might be in a project details table or budget table
            return 'Contact office for details';
        } catch (\Exception $e) {
            return 'N/A';
        }
    }

    // Helper method to get province name
    private function getProvinceName($provincialOfficeId)
    {
        try {
            $office = \DB::table('offices')->where('OfficeID', $provincialOfficeId)->first();
            return $office ? $office->OfficeName : 'Unknown';
        } catch (\Exception $e) {
            return 'Unknown';
        }
    }

    // Helper method to get municipality (from applicant address)
    private function getMunicipalityName($applicantId)
    {
        try {
            $applicant = \DB::table('applicant')->where('ApplicantID', $applicantId)->first();
            return $applicant && isset($applicant->Municipality) ? $applicant->Municipality : 'Unknown';
        } catch (\Exception $e) {
            return 'Unknown';
        }
    }

    // Helper method to get contact number
    private function getContactNumber($applicantId)
    {
        try {
            $applicant = \DB::table('applicant')->where('ApplicantID', $applicantId)->first();
            return $applicant && isset($applicant->ContactNumber) ? $applicant->ContactNumber : 'Not provided';
        } catch (\Exception $e) {
            return 'Not provided';
        }
    }

    private function getApplicationHistory($applicationId)
    {
        try {
            // Fetch actual history data from application_stage_history table 
            // Only include records where IsVisibleToApplicant = 1 (explicitly check for integer 1)
            $historyRecords = \DB::table('application_stage_history')
                ->where('ApplicationID', $applicationId)
                ->where('IsVisibleToApplicant', '=', 1) // Explicitly filter for records with IsVisibleToApplicant = 1 only
                ->orderBy('Date', 'desc') // Most recent first based on the Date field
                ->get();
            
            if ($historyRecords->isEmpty()) {
                // Fallback to creating a basic history if no records found
                $application = \DB::table('applications')->where('ApplicationID', $applicationId)->first();
                
                if (!$application) {
                    return [];
                }

                $history = [
                    [
                        'date' => $application->DateSubmitted,
                        'stage' => 'Application Submitted',
                        'remarks' => 'Application submitted to ' . $application->CFIDPProgramCategory,
                        'staff_name' => 'System',
                        'office' => 'Provincial Office',
                        'status' => 'Completed',
                        'action_taken' => 'Submission recorded'
                    ]
                ];

                // Add current status as latest entry
                if ($application->LastUpdated) {
                    $history[] = [
                        'date' => $application->LastUpdated,
                        'stage' => 'Status Update',
                        'remarks' => 'Current status: ' . $application->GeneralStatus,
                        'staff_name' => 'System',
                        'office' => 'Processing Office',
                        'status' => $application->GeneralStatus,
                        'action_taken' => 'Status updated'
                    ];
                }

                return $history;
            }

            // Map the database records to the format expected by the frontend
            // Note: Only records with IsVisibleToApplicant = 1 are included in the query above
            $history = $historyRecords->map(function($record) {
                // Get staff info based on OwnerStaffID if needed
                $staffInfo = $this->getStaffInfo($record->OwnerStaffID);
                
                return [
                    'date' => $record->Date, // Using Date field from database
                    'stage' => $record->Stage, // Using Stage field from database
                    'remarks' => $record->Remarks ?? '', // Using Remarks field from database
                    'staff_name' => $staffInfo['name'] ?? 'PCA Staff',
                    'office' => $staffInfo['office'] ?? 'PCA Office',
                    'status' => $this->deriveStatusFromStage($record->Stage),
                    'action_taken' => $record->ActionTaken // Using ActionTaken field from database
                ];
            })->toArray();

            return $history;
        } catch (\Exception $e) {
            return [];
        }
    }

    private function getApplicationRequirements($applicationId)
    {
        try {
            // Basic requirements based on your CFIDPProgramCategory
            $application = \DB::table('applications')->where('ApplicationID', $applicationId)->first();
            
            if (!$application) {
                return [];
            }

            $requirements = [];
            
            // Basic requirements for all applications
            $requirements[] = [
                'requirement_name' => 'Application Form',
                'description' => 'Completed CFIDP application form',
                'status' => 'completed'
            ];

            $requirements[] = [
                'requirement_name' => 'Valid ID',
                'description' => 'Government-issued identification',
                'status' => 'completed'
            ];

            // Add specific requirements based on program category
            switch ($application->CFIDPProgramCategory) {
                case 'Credit':
                    $requirements[] = [
                        'requirement_name' => 'Income Statement',
                        'description' => 'Proof of income or financial capacity',
                        'status' => $application->ValidationStatus === 'Validated' ? 'completed' : 'pending'
                    ];
                    break;
                    
                case 'Trainings and Farm Schools':
                    $requirements[] = [
                        'requirement_name' => 'Farmer Certification',
                        'description' => 'Proof of being a coconut farmer',
                        'status' => $application->ValidationStatus === 'Validated' ? 'completed' : 'pending'
                    ];
                    break;
                    
                case 'Shared Processing Facilities':
                    $requirements[] = [
                        'requirement_name' => 'Project Proposal',
                        'description' => 'Detailed project implementation plan',
                        'status' => $application->ValidationStatus === 'Validated' ? 'completed' : 'pending'
                    ];
                    break;
                    
                case 'Infrastructure':
                    $requirements[] = [
                        'requirement_name' => 'Site Plan',
                        'description' => 'Detailed site and construction plan',
                        'status' => $application->ValidationStatus === 'Validated' ? 'completed' : 'pending'
                    ];
                    break;
            }

            return $requirements;
        } catch (\Exception $e) {
            return [];
        }
    }

    // Helper method to get staff information
    private function getStaffInfo($staffId)
    {
        try {
            // Try to get staff information from the staff table
            $staff = \DB::table('staff')->where('StaffID', $staffId)->first();
            
            if ($staff) {
                // If staff record exists, use actual data
                $office = \DB::table('offices')->where('OfficeID', $staff->OfficeID ?? 0)->first();
                
                return [
                    'name' => $staff->FirstName . ' ' . $staff->LastName,
                    'office' => $office ? $office->OfficeName : 'PCA Office'
                ];
            }
            
            // Fallback data if staff record not found
            return [
                'name' => 'PCA Staff',
                'office' => 'PCA Office'
            ];
        } catch (\Exception $e) {
            // Default values if error occurs
            return [
                'name' => 'PCA Staff',
                'office' => 'PCA Office'
            ];
        }
    }
    
    // Helper method to derive status from stage name
    private function deriveStatusFromStage($stageName)
    {
        // Map stage names to appropriate statuses
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