@extends('layout.app')

@section('title', 'FAQ')

@section('content')
    @include('include.header')


    @include('rin.include.our-clans')
    @include('rin.include.popular')

    @include('include.footer')
@endsection
