<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('fetch', [PostsController::class, 'fetch']);
Route::get('post', [PostsController::class, 'index']);
Route::get('post/{post}', [PostsController::class, 'show']);
Route::post('post', [PostsController::class, 'store']);
Route::put('post/{post}', [PostsController::class, 'update']);
Route::delete('post/{post}', [PostsController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
