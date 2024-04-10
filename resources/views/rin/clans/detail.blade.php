@extends('layout.app')

@section('title', 'detail')

@section('content')
    <div class="max-w-[80rem] m-auto">
        @include('include.header')
        @if ($list = $nft->listing_nft)
            @include('rin.include.card')
        @else
            @include('rin.include.nolist')
        @endif
        @include('rin.include.popular')
        @include('include.footer')
    </div>
@endsection
