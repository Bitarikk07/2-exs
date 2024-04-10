<div class="w-full flex py-[5rem] justify-center flex-col text-center items-center gap-[3rem]">
    <h2 class="text-[3rem] text-[#090909] font-bold">Our Top Collectors</h2>
    <marquee scrollamount="20">
        <div class="flex gap-[2rem]">
            @foreach ($users as $user)
                <a href="{{ route('users.show', $user->id) }}"
                    class="py-[1rem] pl-[1.56rem] pr-[1.56rem] rounded-[2rem] flex items-center gap-[0.75rem] border border-[#F0F0F0]">
                    <h2 class="text-[1.125rem] font-bold w-[1.625rem]">{{ $user->id }}.</h2>
                    <img src="/img/icons/avas.svg" alt="" />
                    <div class="flex flex-col items-start">
                        <h2 class="text-[1.125rem] font-bold text-[#151517]">
                            {{ $user->name }}
                        </h2>
                        <div class="flex">
                            <img src="/img/icons/eth.svg" alt="" />
                            <p class="text-[#6E84AB]">2,7{{ $user->id }}8</p>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
        <!-- Добавьте другие элементы списка здесь -->
    </marquee>
</div>
