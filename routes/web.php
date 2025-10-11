<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApplicationController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('test', function () {
    return view('modal-test');
})->name('test');

// Coconut Farmers FAQ page
Route::get('/coconut-farmers-faq', function () {
    return view('coconut-farmers-faq');
})->name('coconut-farmers-faq');

Route::get('/applications/{applicationId}', [ApplicationController::class, 'show']);