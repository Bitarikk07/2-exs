<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/collection', function () {
    return view('altyn.colect');
})
;Route::get('/colect-two', function () {
    return view('altyn.colect-two');
});