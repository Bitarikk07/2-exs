<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\ListingNftController;
use App\Http\Controllers\NftController;
use App\Http\Controllers\RowController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\CheckboxToggle;
use App\Http\Livewire\CheckComponent;
use App\Models\ListingNft;
use Illuminate\Support\Facades\Route;
use App\Models\Nft;

Route::get('/', [RowController::class, 'home'])->name('home');

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
Route::get('/detail/{id}', [RowController::class, 'detail'])->name('detail');
Route::get('/faq', [RowController::class, 'faq'])->name('faq');
Route::get('/collection', [RowController::class, 'collection'])->name('colection');
Route::get('/colect-two', [RowController::class, 'colect_two'])->name('colection-two');

Route::resource('users', UserController::class)->only('edit', 'update')->middleware('auth');
Route::resource('users', UserController::class)->only('show');
Route::resource('colect', CollectionController::class)->only('edit', 'update')->middleware('auth');
Route::resource('colect', CollectionController::class)->only('show');
Route::get('/two/{id}', [RowController::class, 'show_two'])->name('two');

Route::get('/all/{id}', [RowController::class, 'show_two'])->name('all');

// Route::get('/create', [RowController::class, 'create'])->name('post.create')->middleware('auth');
