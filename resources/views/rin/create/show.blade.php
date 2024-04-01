@extends('layout.app')
@section('content')
    <div class="relative pt-10" style="min-height: 75vh;">

        <div class="min-h-screen bg-gray-100 flex flex-col items-center justify-center">
            <div class="relative max-w-xl w-full h-36 bg-white rounded-lg shadow-lg overflow-hidde mb-20">
                <div class="absolute inset-0 rounded-lg overflow-hidden bg-red-200">
                    <img src="https://images.unsplash.com/photo-1543794327-59a91fb815d1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&h=200&q=80"
                        alt="">
                    <div class="absolute inset-0 backdrop backdrop-blur-10 bg-gradient-to-b from-transparent to-black"></div>
                </div>
                <div class="absolute flex space-x-6 transform translate-x-6 translate-y-8">
                    <div class="w-36 h-36 rounded-lg shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1543794327-59a91fb815d1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                            alt="">
                    </div>
                    <div class="text-white pt-12">
                        <h3 class="font-bold">Media</h3>
                        <div class="text-sm opacity-60">Super Play</div>
                        <div class="mt-8 text-gray-400">
                            <div class="flex items-center space-x-2 text-xs">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                    <path
                                        d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z">
                                    </path>
                                </svg>
                                <span>Easy watching</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-xl bg-white rounded-lg shadow-lg overflow-hidden" style="min-width: 75vh;">
                <div class="relative">
                    @if ($file)
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe src="{{ asset($file->getPath()) }}" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    @else
                        <img src="https://images.unsplash.com/photo-1500099817043-86d46000d58f?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=800&h=250&q=80"
                            class="object-cover">
                    @endif
                </div>
                <div class="text-xs font-semibold text-gray-500 px-4 py-1">
                    @if ($file)
                        <h5 class="text-2xl font-bold leading-normal mt-0 mb-1 text-green-800 text-center">
                            {{ $file->name }}</h5>
                        <div class="pt-2 text-base leading-6 font-normal sm:text-lg sm:leading-7">
                            <p>{{ $file->description }}</p>
                        </div>
                    @else
                        <div class="pt-2 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                            <p>{{ __('No Video Available') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
