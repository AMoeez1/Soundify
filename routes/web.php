<?php

use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthUser;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;



// Public Routes
Route::get('/', function () {
    if(Auth::check()){
        return view('home');
    } else {
        return view('guest.home');
    }
})->name('home');


Route::middleware([ValidUser::class])->group(function(){
    Route::get('/profile', function(){
        return view('profile');
    })->name('profile');
});


Route::middleware([AuthUser::class])->group( function(){
    Route::get('/register',[AuthController::class, 'showRegister']);
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/login',[AuthController::class, 'showLogin']);
    Route::post('/login',[AuthController::class, 'login'])->name('login');
});