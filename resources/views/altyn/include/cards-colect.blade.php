@foreach ($collection as $colect)
    @if ($colect->user->id === $colect->user->id)
        <div class="p-[0.75rem] w-full h-[17rem]  flex flex-col items-start gap-[1rem] bg-grid-card">
            <div class="flex flex-col w-full items-start gap-[0.5rem]">

                <a href="{{ route('colect.show', $colect->id) }}" class="text-[#21204A] font-bold">{{ $colect->name }}
                    Collection</a>
                <a href="{{ route('users.show', $colect->user->id) }}"
                    class="text-[#9D9BB9] font-normal">{{ '@' . $colect->user->name }}</a>
                </a>
                <div class="flex w-full justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                        <div class="flex flex-col items-start gap-[0.25rem]">
                            <p class="text-[#999999] text-[0.75rem]">Nfts</p>
                            <h2 class="text-[0.875rem] text-[#101010] font-semibold">
                                {{ $colect->nfts->count() }}
                            </h2>
                        </div>
                        <div class="flex flex-col items-start gap-[0.25rem]">
                            <p class="text-[#999999] text-[0.75rem]">Followers</p>
                            <h2 class="text-[0.875rem] text-[#101010] font-semibold">0</h2>
                        </div>
                    </div>
                    {{-- <button class="py-[0.5rem] px-[1.5rem] bg-[#DCF06B] rounded-[2rem]">
                    Follow
                </button> --}}
                </div>
            </div>
            {{-- {{ dd($colect->user->nfts) }} --}}
            <!-- Проверяем, есть ли связанный объект NFT у пользователя -->
            <div class="parent">

                @foreach ($colect->nfts as $nft)
                    <div class="div1 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]"
                        style="background-image: url('/{{ $colect->img }}');">
                    </div>
                    <div class="div2 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]"
                        style="background-image: url('/{{ $nft->img }}');"> </div>
                    <div class="div3 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]"
                        style="background-image: url('/{{ $nft->other }}');"> </div>
                    <div class="div4 bg-no-repeat bg-cover bg-bottom bg-center   flex justify-center items-center w-full rounded-[0.5rem]"
                        style="background-image: url('/{{ $nft->other }}');">
                        <h2 class="text-[1.25rem] text-[#FFFFFF] font-semibold">+12</h2>
                    </div>
                @endforeach


            </div>


        </div>
    @endif
@endforeach
