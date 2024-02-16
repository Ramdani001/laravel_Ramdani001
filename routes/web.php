<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login/main');
});

Route::controller(UserController::class)->group(function() {
    Route::post('/login', 'authLogin');
    Route::post('/regist', 'authRegister');
    Route::get('/logout', 'logout');
});

Route::get('/dashboard', Function() {
    return view('dashboard/main');
});