@extends('layout.app')

<?php

$arr_cards = [1, 2, 3, 4, 5, 6];

?>

@section('title', 'home')

@section('content')
    <div class="max-w-[80rem] m-auto">
        @include('include.header')

        @include('include.success')

        @include('include.footer')
    </div>
@endsection
