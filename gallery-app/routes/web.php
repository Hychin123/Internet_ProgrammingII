<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\Thumbnails;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::post('/upload', [Thumbnails::class, 'store'])->name('upload');

Route::get('/gallery', [ImageController::class, 'index']); // Fixed syntax
Route::get('/upload', [ImageController::class, 'create']); // Fixed syntax
Route::post('/store', [ImageController::class, 'store']); // Fixed syntax