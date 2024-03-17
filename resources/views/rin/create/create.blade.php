@extends('layout.app')

@section('title', 'Create New Item')

@section('content')
    <div class=" m-auto">
        @include('include.header')
        @if ($listing ?? false)
        @else
            @include('rin.include.create-page')
        @endif
        @include('include.footer')
    </div>
@endsection
