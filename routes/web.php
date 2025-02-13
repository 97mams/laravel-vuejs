<?php

use App\Http\Controllers\taskController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', [userController::class, 'show']);
Route::get('/task', [taskController::class, 'index'])->name('add.task');
