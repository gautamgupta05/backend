<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PageController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\MediaController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');

// Route::middleware('auth:sanctum')->group(function () {

    Route::apiResource('posts', PostController::class);
    Route::patch('posts/{post}/publish', [PostController::class, 'publish']);
    Route::post('media/upload', [MediaController::class, 'upload']);
// });

Route::apiResource('pages', PageController::class)->middleware('auth:sanctum');
