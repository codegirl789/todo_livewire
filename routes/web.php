<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', [TodoController::class, 'index']);
Route::get('/todo/create', [TodoController::class, 'create']);
Route::post('/todo/store', [TodoController::class, 'store']);
Route::get('/todo/{todo}/edit', [TodoController::class, 'edit']);
Route::put('/todo/{todo}/update', [TodoController::class, 'update']);
