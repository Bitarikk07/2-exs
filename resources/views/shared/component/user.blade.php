<div class="flex flex-col items-start gap-[2.5rem]">
    <h1 class="text-[2rem] text-[#090909] font-bold">The Best Collectors for NFTs</h1>
    <div class="flex {{ Route::is('all') ? 'items-end' : 'items-center' }}  gap-4">
        <div class="flex items-start"><img src="img/ava.svg" alt=""></div>
        <div class="flex flex-col gap-[0.5rem]">
            <div class="flex flex-col items-start">
                <h2 class="text-[1.25rem] text-[#21204A] font-bold">{{ $user->name }}</h2>
                <p class="text-[0.75rem] text-[#9D9BB9]">{{ $user->email }}</p>
            </div>
            <div class="flex flex-col items-start gap-4">
                <div class="flex items-center gap-4">
                    <div class="flex flex-col items-start">
                        <p class="text-[#999999] text-[0.75rem]">Collections</p>
                        <h2> {{ $user->collections->count() }}</h2>
                    </div>
                    <div class="flex flex-col items-start">
                        <p class="text-[#999999] text-[0.75rem]">Followers</p>
                        <h2>67{{ $user->nfts->count() }} </h2>
                    </div>
                </div>
                @if (Route::is('all'))
                @else
                    <button class="px-[1.5rem] py-[0.5rem] text-[#171717] font-semibold bg-[#DCF06B] rounded-[2rem]">
                        Follow
                    </button>
                @endif
            </div>

        </div>
        @if (Route::is('all'))
            <button class="px-[1.5rem] py-[0.5rem] text-[#171717] font-semibold bg-[#DCF06B] rounded-[2rem]">
                Follow
            </button>
        @else
        @endif
    </div>
</div>
