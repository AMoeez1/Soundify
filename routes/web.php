<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesRoutesController;
use App\Http\Controllers\SongController;
use App\Http\Middleware\AuthUser;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;



// Public Routes
Route::get('/',[PagesRoutesController::class,'home'])->name('home');
Route::get('/register', function(){
    // return view('Auth.register');
    return view('page');
});
Route::get('/login', function() {
    return view('Auth.login');
});
Route::get('/register',[ AuthController::class, 'showRegister']);
Route::middleware([ValidUser::class])->group(function () {
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::get('/edit/profile', [AuthController::class, 'showEdit'])->name('edit_profile');
    Route::post('/edit/profile', [AuthController::class, 'editProfile'])->name('editProfile');
    Route::get('/add/song', [SongController::class, 'showSong'])->name('show_song');
    Route::post('/add/song', [SongController::class, 'addSong'])->name('add_song');
    Route::get('/{username}/edit/song/{id}', [SongController::class,'showEditSong']);
    Route::get('/{username}', [PagesRoutesController::class, 'other_profile'])->name('other_profile');
});
// Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
Route::post('/register', [AuthController::class, 'register'])->name('register');
// Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::middleware([AuthUser::class])->group(function () {
// });
