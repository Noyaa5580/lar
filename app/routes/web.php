<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::get('/', [App\Http\Controllers\MainController::class, 'home']);

Route::get('/about', [App\Http\Controllers\MainController::class, 'about']);

Route::get('/review', [App\Http\Controllers\MainController::class, 'review'])->name('rev');
Route::post('/review/check', [App\Http\Controllers\MainController::class, 'review_check']);

Route::get('/review/{id}', [App\Http\Controllers\MainController::class, 'rev_id'])->name('review-id');

Route::get('/review/{id}/update', [App\Http\Controllers\MainController::class, 'rev_update'])->name('review-up');
Route::post('/review/{id}update', [App\Http\Controllers\MainController::class, 'save_update'])->name('save-update');

Route::get('/review/{id}/delete', [App\Http\Controllers\MainController::class, 'rev_delete'])->name('review-del');