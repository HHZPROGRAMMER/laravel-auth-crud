<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CrudController::class, 'index'])->name('index');
Route::get('/create', [CrudController::class, 'create'])->name('create');
Route::post('/store', [CrudController::class, 'store'])->name('store');
