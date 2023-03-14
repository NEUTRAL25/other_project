<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/task', [TaskController::class, 'store']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::delete('/task/{task}', [HomeController::class, 'destroy']);
Auth::routes();