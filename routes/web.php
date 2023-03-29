<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/**
 * Frontend Routes
 */
Route::get('/', [Controllers\HomeController::class, 'home']);
Route::get('about', [Controllers\HomeController::class, 'about']);
Route::get('service/{slug}', [Controllers\HomeController::class, 'service']);
Route::get('portfolio', [Controllers\HomeController::class, 'portfolio']);
Route::get('contact', [Controllers\HomeController::class, 'contact']);

/**
 * Backend Routes
 */

Route::get('admin', [Controllers\AdminController::class, 'index']);
Route::get('dashboard', [Controllers\AdminController::class, 'dashboard']);
Route::get('register', [Controllers\AdminController::class, 'register']);

Route::resource('users', Controllers\UserController::class);
Route::post('login-user', [Controllers\UserController::class, 'cuslogin'])->name('loginuser');
Route::get('logout-user',[Controllers\UserController::class, 'logout'])->name('logoutuser');
Route::resource('studentreg', Controllers\StudentController::class);
Route::post('/post-update/{id}/{path}', [Controllers\StudentController::class, 'update'])->name('postupdate');
Route::get('/post-delete/{id}/{path}', [Controllers\StudentController::class, 'destroy'])->name('postdelete');