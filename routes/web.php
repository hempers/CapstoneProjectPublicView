<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SitemapController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Coconut Farmers FAQ page
Route::get('/coconut-farmers-faq', function () {
    return view('coconut-farmers-faq');
})->name('coconut-farmers-faq');

// SEO Routes
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/robots.txt', [SitemapController::class, 'robots'])->name('robots');