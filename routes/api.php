<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostApiController;

# Route to test service function    
Route::get('fetch', [PostApiController::class, 'fetch']);

Route::get('post', [PostApiController::class, 'index']);
Route::get('post/{post}', [PostApiController::class, 'show']);
Route::post('post', [PostApiController::class, 'store']);
Route::put('post/{post}', [PostApiController::class, 'update']);
Route::delete('post/{post}', [PostApiController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
