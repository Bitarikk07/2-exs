<?php

use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\NftController;
use App\Http\Controllers\RowController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home');
});
Route::get('/create', [RowController::class, 'create'])->name('post.create');
Route::get('/create/colect', [NftController::class, 'colect'])->name('form.colect');
// <!-- nft - image,other-image,name,description; -->
