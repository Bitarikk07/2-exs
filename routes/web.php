<?php

use App\Http\Controllers\RowController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/create', [RowController::class, 'create'])->name('post.create');
Route::get('/upload', [UploadController::class, 'create']);
Route::post('/upload', [UploadController::class, 'store'])->name('store');

Route::get('/display', [UploadController::class, 'display'])->name('display');
