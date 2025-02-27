<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum', 'test'])->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout']);
});