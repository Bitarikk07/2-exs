<div class="py-[7.5rem] max-w-[80rem] flex items-start flex-col gap-[3rem] m-auto">
    <div class="flex w-full justify-between items-center text-[#090909]">
        <h2 class="text-[3rem] font-bold">Get Popular Collection</h2>
        <a href="/collection" class="font-semibold underline text-[1rem]">See all</a>
    </div>
    <div class="w-full grid grid-cards">
        @foreach ($randomNFTs as $nft)
            @if ($list = $nft->listing_nft)
                @include('shared.component.grid')
            @else
                @include('shared.component.nft')
            @endif
        @endforeach
    </div>

</div>
