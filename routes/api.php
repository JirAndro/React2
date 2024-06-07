<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\RegisterController;

//Route::post('/register', [RegisterController::class, 'register']);
//Route::post('/login', [AuthController::class, 'login']);

Route::prefix('auth')->group(function(){
    Route::post('register',[AuthController::class, 'register']);
});
