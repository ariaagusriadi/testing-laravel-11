<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PostController::class, 'index']);
Route::get('/post',[PostController::class, 'create']);
Route::post('/post',[PostController::class, 'store']);
