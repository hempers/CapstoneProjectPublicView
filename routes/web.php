<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApplicationController;


Route::get('/', function () {
    return view('welcome');
});

// Add this route for getting application by reference ID
Route::get('/applications/{referenceId}', [ApplicationController::class, 'getByReferenceId']);