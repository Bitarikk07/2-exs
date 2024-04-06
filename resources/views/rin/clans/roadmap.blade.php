@extends('layout.app')

@section('title', 'home')

@section('content')
    @include('include.header')

    <section>
        <div class="flex items-center gap-[20rem] mt-[25rem] flex-col">
            {{-- <div class="max-w-[80rem] m-auto pt-[2.5rem] text-center flex-col flex items-center justify-center">
                <div class="flex items-center flex-col w-[41.125rem] gap-[1.5rem]">
                    <h1 class="text-[#171717] text-[4rem] font-bold flex flex-col items-center">
                        Collect Super Rare
                        <p class="flex">
                            <span class="text-[#52B4C1] underline">NFTs</span> Art
                            <img src="./assets/img/icons/1.svg" alt="" />
                        </p>
                    </h1>
                    <p class="text-[#171717] w-[22rem] font-normal">
                        Design, create, store and trade unique NFTs easily with zero fees!
                    </p>
                    <img src="./assets/img/icons.png" alt="" />
                </div>
            </div> --}}
            <div class="relative w-full h-full flex justify-center items-center">
                <img class="absolute inset-[-18rem] mx-auto" src="img/roadmap/roadmap.png" alt="" />
                <div class="bg-[#171717] w-full p-[10rem] gap-[3.5rem] items-center flex flex-col">
                    <div class="flex items-center w-[40rem] text-center flex-col">
                        <h2 class="text-[#FEFEFE] text-[3rem] font-bold">Road-Map</h2>
                        <p class="text-[#FEFEFEB8]">
                            Where Dreams Come True
                        </p>
                    </div>
                    <div class="flex items-start w-full gap-4">
                        <div class="flex w-[50%] flex-col items-start gap-[16.25rem]">
                            <div class="flex mt-[11rem] flex-col items-end text-end ">
                                <h2 class="text-[2rem] text-[#FEFEFE] font-bold">Phase 2 <span
                                        class="text-[#52B4C1]">(Completed)</span></h2>
                                <p class="text-[#FEFEFEB8]">Building dreams require the right people and tools. We will look
                                    to hire the best talents in the space that shares our vision.</p>
                            </div>
                            <div class="flex flex-col items-end text-end">
                                <h2 class="text-[2rem] text-[#FEFEFE] font-bold">Phase 4 <span class="text-[#DCF06B]">(On
                                        Progress)</span></h2>
                                <p class="text-[#FEFEFEB8]">The Imaginary World continues to expand. Explore Imaginary Lands
                                    and Companions that provide additional utility.</p>
                            </div>
                        </div>
                        <img class=" " src="img/roadmap/line.png" alt="" />
                        <div class="flex w-[50%] flex-col items-start gap-[16.25rem]">
                            <div class="flex flex-col items-start">
                                <h2 class="text-[2rem] text-[#FEFEFE] font-bold">Phase 1 <span
                                        class="text-[#52B4C1]">(Completed)</span></h2>
                                <p class="text-[#FEFEFEB8]">The project sparked from a single moment of inspiration. With
                                    some
                                    imagination and work, it
                                    started to take shape.</p>
                            </div>
                            <div class="flex flex-col items-start">
                                <h2 class="text-[2rem] text-[#FEFEFE] font-bold">Phase 3 <span class="text-[#DCF06B]">(On
                                        Progress) </span></h2>
                                <p class="text-[#FEFEFEB8]">The project sparked from a single moment of inspiration. With
                                    some
                                    imagination and work, it
                                    started to take shape.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @include('rin.include.our-clans')


    </section>

    @include('include.footer')
@endsection
