<div class="py-[7.5rem] max-w-[80rem]  flex items-start gap-[5rem] m-auto">

    <div class="flex flex-col gap-[1.5rem] items-start">
        <div class="flex items-center
  {{ Route::is('two') ? 'w-[12rem] h-[13.35rem]' : 'w-[37.25rem] h-[35.125rem]' }} rounded-3xl bg-cover bg-center bg-no-repeat"
            style="background-image: url('/{{ $nft->img }}')">
        </div>
        @if (Route::is('detail'))
            <p class="text-[#66707A]">{{ $nft->description }}</p>
            <div class="flex items-center gap-[3rem]">
                <div class="flex items-center gap-[0.75rem]">
                    <img src="/img/post/like.svg" alt="">
                    <p class="text-[#66707A] text-[0.875rem]">2,8k</p>
                </div>
                <div class="flex items-center gap-[0.75rem]">
                    <img src="/img/post/share.svg" alt="">
                    <p class="text-[#66707A] text-[0.875rem]">Share</p>
                </div>

            </div>
        @endif
    </div>
    <div class="flex flex-col items-start gap-[3rem]">
        <div class="flex flex-col items-start gap-[1.5rem]">
            <div class="flex items-center gap-[0.75rem]">
                <img src="/img/icons/bol.svg" alt="" />
                <h2 class="text-[1.125rem] text-[#151517] font-bold">No Listed</h2>
            </div>
            <div class="flex flex-col items-start gap-[1rem]">
                <div class="flex flex-col">
                    <a href="{{ route('colect.show', $nft->collection->id) }}"
                        class="text-[#78828A] text-[0.875rem] ">{{ $nft->collection->name }}
                        Collection</a>
                    <h2 class="text-[2.5rem] text-[#171717] font-bold">
                        {{ $nft->name }}
                    </h2>
                </div>

                <div class="flex items-start gap-[3rem]">

                    <div class="flex gap-[0.5rem] flex-col items-start">
                        <p class="text-[#78828A] text-[0.75rem]">Collection</p>
                        <div class="flex items-center p-[0.5rem] gap-[0.5rem] border border-[#F0F0F0] rounded-3xl">
                            <img class="" src="/img/icons/ava.svg" alt="" />
                            <h2 class="text-[0.875rem] text-[#171717] font-semibold">
                                {{ $nft->collection->user->name }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center  gap-[0.75rem]">
            <img src="/img/icons/check.svg" alt="" />
            <h2 class="text-[0.875rem] text-[#171717] font-semibold">
                I Agree to AllBlocks. Term & Service
            </h2>
        </div>
        <div class="flex items-center gap-[2rem]">
            <a href="{{ route('detail', $nft->id) }}"
                class="py-[1.5rem] px-[3rem] bg-[#DCF06B] text-[#171717] font-medium rounded-[2rem]">Purchase
                now
            </a>
            <a href="#"
                class="py-[1.5rem] px-[4rem] bg-transparent border border-[#DCF06B] text-[#171717] font-medium rounded-[2rem]">Plcae
                a bid
            </a>
        </div>
    </div>
</div>
