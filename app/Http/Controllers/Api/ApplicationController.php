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
        // Add CORS headers for API access
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, Authorization');

        try {
            // Find the application by ApplicationID (your primary key)
            $application = applications::where('ApplicationID', $applicationId)->first();
            
            if (!$application) {
                return response()->json([
                    'message' => 'Application not found'
                ], 404)->header('Access-Control-Allow-Origin', '*');
            }

            // Format the response data using your actual column names
            $responseData = [
                'reference_id' => $application->ApplicationID, // Using ApplicationID as reference
                'title' => $application->ApplicationTitle,
                'proponent_name' => $this->getApplicantName($application->ApplicantID),
                'date_submitted' => $application->DateSubmitted,
                'current_status' => $application->GeneralStatus,
                'amount_requested' => $this->getAmountRequested($application->ApplicationID),
                'program_type' => $application->CFIDPProgramCategory,
                'province' => $this->getProvinceName($application->ProvincialOfficeID),
                'municipality' => $this->getMunicipalityName($application->ApplicantID),
                'contact_number' => $this->getContactNumber($application->ApplicantID),
                'history' => $this->getApplicationHistory($application->ApplicationID),
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

    // Helper method to get applicant name
    private function getApplicantName($applicantId)
    {
        try {
            $applicant = \DB::table('applicant')->where('ApplicantID', $applicantId)->first();
            return $applicant ? ($applicant->FirstName . ' ' . $applicant->LastName) : 'Unknown';
        } catch (\Exception $e) {
            return 'Unknown';
        }
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
            // If you have application history/tracking table, adjust the table name
            // For now, creating a simple history from the application status
            $application = \DB::table('applications')->where('ApplicationID', $applicationId)->first();
            
            if (!$application) {
                return [];
            }

            $history = [
                [
                    'date' => $application->DateSubmitted,
                    'action' => 'Application Submitted',
                    'remarks' => 'Application submitted to ' . $application->CFIDPProgramCategory,
                    'personnel' => 'System',
                    'office' => 'Provincial Office',
                    'status' => 'Completed'
                ]
            ];

            // Add current status as latest entry
            if ($application->LastUpdated) {
                $history[] = [
                    'date' => date('Y-m-d', strtotime($application->LastUpdated)),
                    'action' => 'Status Update',
                    'remarks' => 'Current status: ' . $application->GeneralStatus,
                    'personnel' => 'System',
                    'office' => 'Processing Office',
                    'status' => $application->GeneralStatus
                ];
            }

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
                'name' => 'Application Form',
                'description' => 'Completed CFIDP application form',
                'status' => 'completed'
            ];

            $requirements[] = [
                'name' => 'Valid ID',
                'description' => 'Government-issued identification',
                'status' => 'completed'
            ];

            // Add specific requirements based on program category
            switch ($application->CFIDPProgramCategory) {
                case 'Credit':
                    $requirements[] = [
                        'name' => 'Income Statement',
                        'description' => 'Proof of income or financial capacity',
                        'status' => $application->ValidationStatus === 'Validated' ? 'completed' : 'pending'
                    ];
                    break;
                    
                case 'Trainings and Farm Schools':
                    $requirements[] = [
                        'name' => 'Farmer Certification',
                        'description' => 'Proof of being a coconut farmer',
                        'status' => $application->ValidationStatus === 'Validated' ? 'completed' : 'pending'
                    ];
                    break;
                    
                case 'Shared Processing Facilities':
                    $requirements[] = [
                        'name' => 'Project Proposal',
                        'description' => 'Detailed project implementation plan',
                        'status' => $application->ValidationStatus === 'Validated' ? 'completed' : 'pending'
                    ];
                    break;
                    
                case 'Infrastructure':
                    $requirements[] = [
                        'name' => 'Site Plan',
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
}