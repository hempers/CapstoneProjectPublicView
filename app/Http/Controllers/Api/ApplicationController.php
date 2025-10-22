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
    private $mainApiTimeout;

    public function __construct()
    {
        // Load configuration from config file
        $this->mainApiUrl = config('api.main.url');
        $this->mainApiToken = config('api.main.token');
        $this->mainApiTimeout = config('api.main.timeout');
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
            // Enhanced validation for application ID format
            if (empty($applicationId) || !is_string($applicationId)) {
                Log::warning('Invalid application ID format received.', [
                    'applicationId' => $applicationId,
                    'ip' => request()->ip(),
                    'user_agent' => request()->userAgent()
                ]);
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid application ID format.',
                    'data' => null
                ], 400)
                ->header('Cache-Control', 'no-cache, no-store, must-revalidate, private')
                ->header('X-Robots-Tag', 'noindex, nofollow, nosnippet, noarchive');
            }

            // Additional security: Check for suspicious patterns
            if (preg_match('/[<>"\'\\\\\x00-\x1f\x7f-\xff]/', $applicationId)) {
                Log::warning('Potentially malicious application ID detected.', [
                    'applicationId' => $applicationId,
                    'ip' => request()->ip()
                ]);
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid application ID format.',
                    'data' => null
                ], 400);
            }

            // Rate limiting check - additional layer
            $cacheKey = 'api_limit_' . request()->ip();
            $attempts = cache()->get($cacheKey, 0);
            if ($attempts > 100) { // Per hour limit
                Log::warning('Rate limit exceeded for IP', ['ip' => request()->ip()]);
                return response()->json([
                    'success' => false,
                    'message' => 'Too many requests. Please try again later.',
                    'data' => null
                ], 429);
            }

            // Check if API token is configured
            if (empty($this->mainApiToken)) {
                Log::error('Main API token is not configured in config/api.php');
                return response()->json([
                    'success' => false,
                    'message' => 'Service temporarily unavailable. Please try again later.',
                    'data' => null
                ], 503);
            }

            // Make API request to main project with authentication
            Log::info('Fetching application data from main API', [
                'applicationId' => $applicationId,
                'apiUrl' => $this->mainApiUrl,
                'ip' => request()->ip()
            ]);

            // Track API usage
            cache()->put($cacheKey, $attempts + 1, now()->addHour());

            $response = Http::timeout($this->mainApiTimeout)
                ->withHeaders([
                    'Authorization' => 'Bearer ' . $this->mainApiToken,
                    'Accept' => 'application/json',
                    'User-Agent' => 'PCAppTrack-Public/1.0',
                    'X-Forwarded-For' => request()->ip()
                ])
                ->get("{$this->mainApiUrl}/public/applications/{$applicationId}", [
                    'include_missing_requirements' => true
                ]);

            // Handle API response
            if ($response->successful()) {
                $data = $response->json();

                Log::info('Successfully fetched application data from main API', [
                    'applicationId' => $applicationId,
                    'statusCode' => $response->status()
                ]);

                return response()->json($data)
                    ->header('Cache-Control', 'no-cache, no-store, must-revalidate, private')
                    ->header('Pragma', 'no-cache')
                    ->header('Expires', '0')
                    ->header('X-Robots-Tag', 'noindex, nofollow, nosnippet, noarchive');
            }

            // Handle various error responses from main API
            if ($response->status() === 404) {
                Log::info('Application not found in main API', ['applicationId' => $applicationId]);
                return response()->json([
                    'success' => false,
                    'message' => 'Application not found.',
                    'data' => null
                ], 404)
                ->header('Cache-Control', 'no-cache, no-store, must-revalidate, private')
                ->header('X-Robots-Tag', 'noindex, nofollow, nosnippet, noarchive');
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
