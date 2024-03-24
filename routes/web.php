<?php

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
Route::get('/create', [RowController::class, 'create'])->name('post.create');
Route::get('/listing/{id}', [RowController::class, 'listing'])->name('create.listing');

Route::get('/list/{id}', [RowController::class, 'list']);

Route::post('/listing/{id}', [ListingNftController::class, 'listing'])->name('nft.listing');

// Route::post('/createi', [);
Route::get('/createi', [NftController::class, 'store']);
Route::post('/createi', [NftController::class, 'store']);

Route::get('/colect', [CollectionController::class, 'show'])->name('create.colect');
Route::post('/colect/create', [CollectionController::class, 'create'])->name('colect.create');
