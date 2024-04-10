@extends('layout.app')

<?php

$arr_cards = [1, 2, 3, 4, 5, 6];

?>

@if (Route::is('home'))
    @section('title', 'home')
@endif

@section('content')
    <div class="max-w-[80rem] m-auto">
        @include('include.header')
        @if (Route::is('all'))
            @include('max.colect.home')
        @endif

        @include('include.success')


    </div>
    @if (Route::is('home'))
        @include('include.homepage')
    @endif
    <div class="max-w-[80rem] m-auto">
        @include('include.footer')
    </div>
@endsection
