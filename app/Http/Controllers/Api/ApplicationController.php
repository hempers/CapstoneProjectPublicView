<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application; // Replace with your actual Application model
use Illuminate\Http\JsonResponse;

class ApplicationController extends Controller
{
    public function getByReferenceId(string $referenceId): JsonResponse
    {
        try {
            // Find the application by reference ID
            // Replace 'Application' with your actual model name
            // Replace 'reference_id' with your actual column name
            $application = Application::where('reference_id', $referenceId)->first();
            
            if (!$application) {
                return response()->json([
                    'error' => 'Application not found'
                ], 404);
            }

            // Format the response data
            $responseData = [
                'reference_id' => $application->reference_id,
                'title' => $application->title,
                'proponent_name' => $application->proponent_name,
                'date_submitted' => $application->date_submitted,
                'current_status' => $application->current_status,
                'amount_requested' => $application->amount_requested,
                'program_type' => $application->program_type,
                'province' => $application->province,
                'municipality' => $application->municipality,
                'contact_number' => $application->contact_number,
                'history' => $this->getApplicationHistory($application->id),
                'requirements' => $this->getApplicationRequirements($application->id)
            ];

            return response()->json($responseData);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to fetch application data'
            ], 500);
        }
    }

    private function getApplicationHistory($applicationId)
    {
        // Replace this with your actual history logic
        // This is just an example - adjust based on your database structure
        try {
            // If you have a separate history table
            $history = \DB::table('application_history')
                ->where('application_id', $applicationId)
                ->orderBy('created_at', 'desc')
                ->get()
                ->map(function ($item) {
                    return [
                        'date' => $item->created_at,
                        'action' => $item->action,
                        'remarks' => $item->remarks,
                        'personnel' => $item->personnel,
                        'office' => $item->office,
                        'status' => $item->status
                    ];
                })
                ->toArray();

            return $history;
        } catch (\Exception $e) {
            return [];
        }
    }

    private function getApplicationRequirements($applicationId)
    {
        // Replace this with your actual requirements logic
        try {
            // If you have a separate requirements table
            $requirements = \DB::table('application_requirements')
                ->where('application_id', $applicationId)
                ->get()
                ->map(function ($item) {
                    return [
                        'name' => $item->requirement_name,
                        'description' => $item->description,
                        'status' => $item->status // 'completed', 'missing', 'pending'
                    ];
                })
                ->toArray();

            return $requirements;
        } catch (\Exception $e) {
            return [];
        }
    }
}