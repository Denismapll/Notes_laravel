<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\checkIsLogged;
use App\Http\Middleware\checkIsNotLogged;
use Illuminate\Support\Facades\Route;

// Auth routes - user not logged
Route::middleware([checkIsNotLogged::class])->group(function () {
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);
});

// App routes - user logged
Route::middleware([checkIsLogged::class])->group(function () {
    Route::get('/', [MainController::class, 'index']);
    Route::get('/newNote', [MainController::class, 'newNote']);
    Route::get('/logout', [AuthController::class, 'logout']);
});