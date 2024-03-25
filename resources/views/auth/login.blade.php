@extends('layout.app')

@section('title', 'Login page')

@section('content')
    <div class=" m-auto">
        {{-- @include('include.header') --}}
        @include('layout.login')
        {{-- @include('include.footer') --}}
    </div>
@endsection
