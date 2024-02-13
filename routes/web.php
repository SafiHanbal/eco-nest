<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home');
})->name('home');

Route::get('/sign-up', [AuthController::class, 'signUpView'])->name('sign-up-view');
Route::post('/sign-up', [AuthController::class, 'signUp'])->name('sign-up');

Route::get('/login', [AuthController::class, 'loginView'])->name('login-view');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');