<a href="{{ route('detail', ['id' => $nft->id]) }}" class="p-[0.5rem] flex flex-col items-start gap-4 bg-grid-cards">
    <h2 class="text-[1.25rem] text-[#151517] font-semibold">{{ $nft->name }}</h2>
    <div class="flex items-center
    {{ Route::is('two') ? 'w-[12rem] h-[13.35rem]' : 'w-[16.625rem] h-[17.25rem]' }} rounded-3xl bg-cover bg-center bg-no-repeat"
        style="background-image: url('/{{ $nft->img }}')"></div>
    <div class="flex flex-col w-full items-start gap-[0.5rem]">

        <div class="flex w-full justify-between items-center p-[0.5rem] bg-[#F8F8F8] rounded-xl">
            <div class="flex items-center gap-[1rem]">
                <div class="flex flex-col items-start gap-[0.25rem]">

                    <h2 class="  {{ Route::is('two') ? 'text-[0.8rem]' : 'text-[1.25rem]' }} text-[#101010] font-bold">
                        NO LISTED
                    </h2>
                </div>

            </div>

        </div>
    </div>

</a>
