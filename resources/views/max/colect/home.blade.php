@extends('layout.app')

@section('title', 'profile')

@section('content')
    <div class="max-w-[80rem] m-auto">
        @include('include.header')
        @if (session()->has('message'))
            @include('include.success')
        @endif
        @if (Route::is('users.show'))
            @include('shared.grid-1')
        @endif
        @if (Route::is('two'))
            @include('shared.grid-2')
        @endif
        @if (Route::is('all'))
            @include('shared.grid-3')
        @endif
        @include('include.footer')
    </div>
@endsection
