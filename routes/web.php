<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApplicationController;


Route::get('/', function () {
    return view('welcome');
});

// Coconut Farmers FAQ page
Route::get('/coconut-farmers-faq', function () {
    return view('coconut-farmers-faq');
});

// Add this route for getting application by reference ID
Route::get('/applications/{referenceId}', [ApplicationController::class, 'getByReferenceId']);