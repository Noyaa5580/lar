<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', [App\Http\Controllers\MainController::class, 'home']);

Route::get('/about', [App\Http\Controllers\MainController::class, 'about']);
Route::get('/review', [App\Http\Controllers\MainController::class, 'review'])->name('rev');
Route::post('/review/check', [App\Http\Controllers\MainController::class, 'review_check']);