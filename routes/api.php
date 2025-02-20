<?php

use App\Http\Controllers\api\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::put('/task/{id}', [TaskController::class, 'store']);
Route::get('/task', [TaskController::class, 'index']);
Route::get('/task/completed', [TaskController::class, 'completed']);
