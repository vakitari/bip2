<?php

use App\Controllers\HomeController;
use App\Controllers\AuthController;
use App\Controllers\PoliseController;
use App\Controllers\UserController;
use App\Kernel\Router\Route;

return[
    Route::get('/bas/register', [AuthController::class, 'register']),
    Route::post('/bas/register', [UserController::class, 'index']),
    Route::get('/bas/login', [AuthController::class, 'login']),

    
    
    Route::post('/bas/post', [UserController::class, 'post']),
    Route::get('/bas/profile', [UserController::class, 'profile']),


    Route::get('/bas/home', [HomeController::class, 'index']),
    Route::get('/bas/description', [HomeController::class, 'description']),
    Route::get('/bas/basket', [HomeController::class, 'basket']),
    Route::get('/bas/buyFlow', [HomeController::class, 'buyFlow']),
];