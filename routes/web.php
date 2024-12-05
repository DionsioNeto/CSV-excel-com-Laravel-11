<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [UserController::class, 'index'])->name('index');
Route::post('/store', [UserController::class, 'store'])->name('store');
Route::get('/Editar/{nome}', [UserController::class, 'editar']);
