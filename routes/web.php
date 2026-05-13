<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CrudController::class, 'index'])->name('index');
Route::get('/create', [CrudController::class, 'create'])->name('create');
Route::post('/store', [CrudController::class, 'store'])->name('store');
Route::get('/show/{id}', [CrudController::class, 'show'])->name('show');
Route::get('/edit/{id}', [CrudController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [CrudController::class, 'update'])->name('update');
Route::delete('/destroy/{id}', [CrudController::class, 'destroy'])->name('destroy');
