<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InsertController;


Route::get('/home', [InsertController::class, 'index']);
Route::post('/home', [InsertController::class, 'post']);
Route::get('/home', [InsertController::class, 'display']);
Route::get('/update/{id}', [InsertController::class, 'update']);
Route::post('/home', [InsertController::class, 'updateData']);
Route::get('/del/{id}', [InsertController::class, 'deldata']);