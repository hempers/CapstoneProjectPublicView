<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ApplicationController extends Controller
{
    private $mainApiUrl;
    private $mainApiToken;

    public function __construct()
    {
        // Load configuration from .env file
        $this->mainApiUrl = env('MAIN_API_URL', 'https://pcapptrack-admin.tech/api');
        $this->mainApiToken = env('MAIN_API_TOKEN');
    }

    /**
     * Retrieves detailed information about a specific application for public view.
     * This method fetches data from the main project's secure API endpoint.
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

            // Check if API token is configured
            if (empty($this->mainApiToken)) {
                Log::error('Main API token is not configured in .env file');
                return response()->json([
                    'success' => false,
                    'message' => 'API configuration error. Please contact administrator.',
                    'data' => null
                ], 500);
            }

            // Make API request to main project with authentication
            Log::info('Fetching application data from main API', [
                'applicationId' => $applicationId,
                'apiUrl' => $this->mainApiUrl
            ]);

            $response = Http::timeout(30)
                ->withHeaders([
                    'Authorization' => 'Bearer ' . $this->mainApiToken,
                    'Accept' => 'application/json',
                ])
                ->get("{$this->mainApiUrl}/public/applications/{$applicationId}");

            // Handle API response
            if ($response->successful()) {
                $data = $response->json();

                Log::info('Successfully fetched application data from main API', [
                    'applicationId' => $applicationId,
                    'statusCode' => $response->status()
                ]);

                return response()->json($data);
            }

            // Handle various error responses from main API
            if ($response->status() === 404) {
                Log::info('Application not found in main API', ['applicationId' => $applicationId]);
                return response()->json([
                    'success' => false,
                    'message' => 'Application not found.',
                    'data' => null
                ], 404);
            }

            if ($response->status() === 401) {
                Log::error('Unauthorized access to main API - invalid token', [
                    'applicationId' => $applicationId
                ]);
                return response()->json([
                    'success' => false,
                    'message' => 'API authentication failed. Please contact administrator.',
                    'data' => null
                ], 500);
            }

            if ($response->status() === 429) {
                Log::warning('Rate limit exceeded on main API', [
                    'applicationId' => $applicationId
                ]);
                return response()->json([
                    'success' => false,
                    'message' => 'Too many requests. Please try again later.',
                    'data' => null
                ], 429);
            }

            // Generic error for other status codes
            Log::error('Failed to fetch from main API', [
                'applicationId' => $applicationId,
                'statusCode' => $response->status(),
                'response' => $response->body()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch application data.',
                'data' => null
            ], $response->status());

        } catch (\Illuminate\Http\Client\ConnectionException $e) {
            Log::error('Connection error while fetching from main API', [
                'applicationId' => $applicationId,
                'error' => $e->getMessage(),
                'apiUrl' => $this->mainApiUrl
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Unable to connect to application tracking service. Please try again later.',
                'data' => null
            ], 503);
        } catch (\Exception $e) {
            Log::error('Unexpected error while fetching application data', [
                'applicationId' => $applicationId,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'An unexpected error occurred. Please try again later.',
                'data' => null
            ], 500);
        }
    }

}
