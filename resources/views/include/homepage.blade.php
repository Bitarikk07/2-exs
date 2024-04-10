<section>
    <div class="flex items-center gap-[20rem] flex-col">
        <div class="max-w-[80rem] m-auto pt-[2.5rem] text-center flex-col flex items-center justify-center">
            <div class="flex items-center flex-col w-[41.125rem] gap-[1.5rem]">
                <h1 class="text-[#171717] text-[4rem] font-bold flex flex-col items-center">
                    Collect Super Rare
                    <p class="flex">
                        <span class="text-[#52B4C1] underline">NFTs</span> Art
                        <img src="img/icons/1.svg" alt="" />
                    </p>
                </h1>
                <p class="text-[#171717] w-[22rem] font-normal">
                    Design, create, store and trade unique NFTs easily with zero fees!
                </p>
                <img src="img/icons.png" alt="" />
            </div>
        </div>
        <div class="relative w-full h-full flex justify-center items-center">
            <img class="absolute inset-[-18rem] mx-auto" src="img/roadmap/roadmap.png" alt="" />
            <div class="bg-[#171717] w-full p-[10rem] gap-[3.5rem] items-center flex flex-col">
                <div class="flex items-center w-[40rem] text-center flex-col">
                    <h2 class="text-[#FEFEFE] text-[3rem] font-bold">Road-Map</h2>
                    <p class="text-[#FEFEFEB8]">
                        This is our roadmap so far, but this is only the begining, we
                        want to build our project around our community, so if you have
                        more ideas we are all ears.
                    </p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="img/icons/line.svg" alt="" />
                    <div class="flex items-center gap-[2rem]">
                        <div class="flex flex-col text-center w-[14.9rem] items-center gap-[0.75rem]">
                            <h2 class="text-[2rem] text-[#FEFEFE]">Phase 1</h2>
                            <p class="text-[1rem] text-[#FEFEFEB8]">
                                It is a long estabilished fact that a reader will be
                            </p>
                        </div>
                        <div class="flex flex-col text-center w-[14.9rem] items-center gap-[0.75rem]">
                            <h2 class="text-[2rem] text-[#FEFEFE]">Phase 2</h2>
                            <p class="text-[1rem] text-[#FEFEFEB8]">
                                It is a long estabilished fact that a reader will be
                            </p>
                        </div>
                        <div class="flex flex-col text-center w-[14.9rem] items-center gap-[0.75rem]">
                            <h2 class="text-[2rem] text-[#FEFEFE]">Phase 3</h2>
                            <p class="text-[1rem] text-[#FEFEFEB8]">
                                It is a long estabilished fact that a reader will be
                            </p>
                        </div>
                        <div class="flex flex-col text-center w-[14.9rem] items-center gap-[0.75rem]">
                            <h2 class="text-[2rem] text-[#FEFEFE]">Phase 4</h2>
                            <p class="text-[1rem] text-[#FEFEFEB8]">
                                It is a long estabilished fact that a reader will be
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        @foreach ($nfts->take(1) as $nft)
            @if ($list = $nft->listing_nft)
                @include('rin.include.card')
            @else
                @include('rin.include.nolist')
            @endif
        @endforeach
    </div>
    @include('rin.include.popular')
    @include('rin.include.top-colect')

    @include('rin.include.our-clans')

    <div class="py-[7.5rem] max-w-[80rem]  m-auto ">
        <div class="w-full flex items-center flex-col gap-[3rem]">
            <div class="flex flex-col items-center gap-[1.5rem]">
                <h2 class="text-[#090909] font-bold text-[3rem]">Let’s Join The Team</h2>
                <p class="text-[#171717] text-[1rem]">Let us guide you!</p>
            </div>
            <div class="flex items-center gap-8">
                <a href="#"
                    class="py-[1.5rem] px-[4.9rem] bg-[#DCF06B] text-[#171717] font-medium rounded-[2rem]">Try Now </a>
                <a href="#"
                    class="py-[1.5rem] px-[3rem] flex items-center gap-2 bg-transparent border border-[#DCF06B] text-[#171717] font-medium rounded-[2rem]">
                    <img src="img/icons/discord.svg" alt="">Join Discord
                </a>
            </div>
        </div>
    </div>
    <div class="w-full flex py-[5rem] justify-center flex-col text-center items-center gap-[3rem]">

        <marquee scrollamount="20">
            <div class="flex gap-[2rem]">
                <a href="#"
                    class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
                    <img src="img/icons-footer/1.svg" alt="">
                </a>
                <a href="#"
                    class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
                    <img src="img/icons-footer/2.svg" alt="">
                </a>
                <a href="#"
                    class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
                    <img src="img/icons-footer/3.svg" alt="">
                </a>
                <a href="#"
                    class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
                    <img src="img/icons-footer/4.svg" alt="">
                </a>
                <a href="#"
                    class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
                    <img src="img/icons-footer/5.svg" alt="">
                </a>
            </div>
            <!-- Добавьте другие элементы списка здесь -->
        </marquee>
        <marquee scrollamount="35">
            <div class="flex gap-[2rem]">
                <a href="#"
                    class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
                    <img src="img/icons-footer/1.svg" alt="">
                </a>
                <a href="#"
                    class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
                    <img src="img/icons-footer/2.svg" alt="">
                </a>
                <a href="#"
                    class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
                    <img src="img/icons-footer/3.svg" alt="">
                </a>
                <a href="#"
                    class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
                    <img src="img/icons-footer/4.svg" alt="">
                </a>
                <a href="#"
                    class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
                    <img src="img/icons-footer/5.svg" alt="">
                </a>
            </div>
            <!-- Добавьте другие элементы списка здесь -->
        </marquee>
    </div>
</section>
