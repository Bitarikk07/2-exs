@extends('layout.app')


@section('title')
    Collection {{ $collection->name }}
@endsection


@section('content')
    <div class="max-w-[80rem] m-auto text-center">
        @include('include.header')
        <h1 class="text-[3rem] my-[2rem] bg-[#DCF06B] rounded-2xl">{{ $collection->name }}</h1>
        <div class="grid grid-cards">
            @foreach ($nfts as $nft)
                @if ($list = $nft->listing_nft)
                    @include('shared.component.grid')
                @else
                    @include('shared.component.nft')
                @endif
            @endforeach

        </div>


        @include('include.footer')
    </div>
@endsection
