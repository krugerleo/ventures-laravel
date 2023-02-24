<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('post', [PostController::class, 'index']);
Route::get('post/{post}', [PostController::class, 'show']);

Route::get('/', function () {
    return view('index');
});
