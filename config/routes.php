<?php

use App\Controllers\HomeController;
use App\Controllers\AuthController;
use App\Controllers\UserController;
use App\Kernel\Router\Route;

return[
    Route::get('/bas/register', [AuthController::class, 'register']),
    Route::post('/bas/reg', [AuthController::class, 'reg']),
    Route::get('/bas/login', [AuthController::class, 'login']),
    Route::post('/bas/log', [AuthController::class, 'log']),

    
    
    Route::post('/bas/post', [UserController::class, 'post']),
    Route::get('/bas/profile', [UserController::class, 'profile']),
    Route::post('/bas/addFlow', [UserController::class, 'addFlow']),
    Route::get('/bas/delivery', [UserController::class, 'delivery']),


    

    Route::get('/bas/home', [HomeController::class, 'index']),
    Route::get('/bas/contact', [HomeController::class, 'contact']),
    Route::get('/bas/about', [HomeController::class, 'about']),
    Route::get('/bas/description', [HomeController::class, 'description']),
    Route::get('/bas/basket', [HomeController::class, 'basket']),
    Route::get('/bas/buyFlow', [HomeController::class, 'buyFlow']),
];