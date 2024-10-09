<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('create', [HomeController::class, 'create']);
Route::post('/', [HomeController::class, 'store'])->name('student.store');
Route::delete('/students/{id}', [HomeController::class, 'destroy'])->name('student.destroy');
Route::get('/students/{id}/edit', [HomeController::class, 'edit'])->name('student.edit');
Route::put('/students/{id}', [HomeController::class, 'update'])->name('student.update');


Route::get('login', [LoginController::class, 'index']);
