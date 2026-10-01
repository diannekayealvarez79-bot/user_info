<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user_info', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/user_info', [\App\Http\Controllers\UserController::class, 'store']);
Route::get('/user_info', [\App\Http\Controllers\UserController::class, 'index']);