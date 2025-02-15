<?php

use App\Http\Controllers\taskController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [userController::class, 'show']);
Route::get('/', [taskController::class, 'index'])->name('list.task');
Route::post('/task', [taskController::class, 'store']);
