<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApplicationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Public API Routes with Rate Limiting for Application Tracking
Route::middleware(['throttle:60,1', 'noindex.api'])->group(function () {
    // Add OPTIONS route for CORS preflight requests
    Route::options('/applications/{applicationId}', function () {
        return response()->json([], 200)
            ->header('Access-Control-Allow-Origin', request()->getSchemeAndHttpHost())
            ->header('Access-Control-Allow-Methods', 'GET, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Accept, X-Requested-With')
            ->header('Access-Control-Max-Age', '86400');
    });

    // API route for application tracking with additional security
    Route::get('/applications/{applicationId}', [ApplicationController::class, 'show'])
        ->where('applicationId', '[A-Za-z0-9]{6,20}') // Restrict to alphanumeric, 6-20 chars
        ->middleware(['throttle:30,1']); // More restrictive rate limit for this endpoint
});
