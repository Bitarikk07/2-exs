@extends('layout.app')

@section('title', 'home')

@section('content')
    <div class="max-w-[80rem] m-auto">
        @include('include.header')
        @include('max.colect.home')


        @include('include.footer')
    </div>
@endsection
