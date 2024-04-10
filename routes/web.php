<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\ListingNftController;
use App\Http\Controllers\NftController;
use App\Http\Controllers\RowController;
use App\Http\Controllers\UploadController;
use App\Http\Livewire\CheckboxToggle;
use App\Http\Livewire\CheckComponent;
use App\Models\ListingNft;
use Illuminate\Support\Facades\Route;
use App\Models\Nft;

Route::get('/', function () {
  return view('home');
});

Route::get('/create', [RowController::class, 'create'])->name('post.create')->middleware('auth');
Route::get('/listing/{id}', [RowController::class, 'listing'])->name('create.listing')->middleware('auth');

Route::get('/list/{id}', [RowController::class, 'list'])->middleware('auth');

Route::post('/listing/{id}', [ListingNftController::class, 'listing'])->name('nft.listing');

// Route::post('/createi', [);
Route::get('/createi', [NftController::class, 'store'])->middleware('auth');
Route::post('/createi', [NftController::class, 'store']);

Route::get('/colect', [CollectionController::class, 'show'])->name('create.colect')->middleware('auth');
Route::post('/colect/create', [CollectionController::class, 'create'])->name('colect.create');

Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.reg');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.log');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/our-clans', [RowController::class, 'our_clans'])->name('our.clans');
Route::get('/road-map', [RowController::class, 'road_map'])->name('road.map');
Route::get('/collection', function () {
  return view('altyn.colect');
})->name('colection');
Route::get('/colect-two', function () {
  return view('altyn.colect-two');
})->name('colection-two');
