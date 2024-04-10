<header class="flex items-center py-[1.5rem] justify-between max-w-[80rem] m-auto">
    <a href="/" class="text-[#52B4C1] text-[2rem] font-bold">NFTs Art</a>
    <nav class="flex items-center gap-[3.5rem]">

        <a href="/collection"
            class="text-[#171717] {{ Route::is('colection' ?? 'colection-two') ? 'pointer-events-none cursor-not-allowed font-normal' : 'font-semibold' }} text-[1rem]">Collection</a>

        <a href="{{ route('road.map') }}"
            class="text-[#171717] {{ Route::is('road.map') ? 'pointer-events-none cursor-not-allowed font-normal' : 'font-semibold' }} text-[1rem]">Road
            Map</a>
        <a href="{{ route('our.clans') }}"
            class="text-[#171717] {{ Route::is('our.clans') ? 'pointer-events-none cursor-not-allowed font-normal' : 'font-semibold' }} text-[1rem]">Our
            Clans</a>
        <a href="#" class="text-[#171717] font-semibold text-[1rem]">FAQ</a>
    </nav>
    <div class="flex items-center gap-[2rem]">
        {{-- <form action="#"> --}}
        {{-- </form> --}}
        @guest
            <a href="{{ route('auth.register') }}"><img src="/img/Avatar.svg" alt=""></a>
        @endguest

        @auth
            <a href="{{ route('post.create') }}"
                class="py-[1rem] px-[2.5rem] bg-[#DCF06B] rounded-[2rem] text-[#171717] font-semibold">Create</a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-danger btn-sm" type="submit">Logout</button>
            </form>

        @endauth
    </div>
</header>
