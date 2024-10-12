<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest.home');
})->name('home');

Route::get('/register',[AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login',[AuthController::class, 'showLogin']);
Route::post('/login',[AuthController::class, 'login'])->name('login');