<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginForm'])->name('loginForm');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/registerForm', [RegisterController::class, 'registerForm'])->name('registerForm');

Route::get('/index', [CrudController::class, 'index'])->name('index');
Route::get('/create', [CrudController::class, 'create'])->name('create');
Route::post('/store', [CrudController::class, 'store'])->name('store');
Route::get('/show/{id}', [CrudController::class, 'show'])->name('show');
Route::get('/edit/{id}', [CrudController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [CrudController::class, 'update'])->name('update');
Route::delete('/destroy/{id}', [CrudController::class, 'destroy'])->name('destroy');


