@extends('layout.app')


@section('title', 'Collection')

@section('content')
    @include('include.header')

    <section>
        <div class="flex max-w-[80rem] m-auto pt-[3.5rem] pb-[7.5rem] flex-col items-start gap-[3rem]">
            <h1 class="text-[3rem] text-[#090909] font-bold">Get Popular Collection</h1>
            <div class="w-full flex flex-col items-start gap-[2.5rem]">
                <div class="flex flex-col items-start w-full">
                    <div class="flex items-center w-full justify-between">
                        <form action="" class="flex items-center gap-[0.75rem] w-[57.4%]">
                            <label for="text"
                                class="flex items-center gap-[0.5rem] w-full bg-[#F9F9F9] py-[0.75rem] pl-[1rem] rounded-[1rem] border border-[#E9EBED] pr-[1rem]">
                                <button> <img src="img/icons/search.svg" alt=""></button>

                                <input type="text" name="text" id="text"
                                    class="placeholder:text-[#8E8E8E] outline-none bg-transparent"
                                    placeholder="Search collections">
                            </label>
                        </form>
                        <div class="flex items-center">
                            <select
                                class="py-[0.75rem] bg-[#F9F9F9] border border-[#E9EBED] rounded-[1rem] px-[1rem] outline-none"
                                id="blockchains" name="blockchains" required="">
                                <option id="check-box1" value="0">
                                    All blockchains</option>
                                <option id="check-box1" value="0">
                                    NOTCOIN</option>
                                <option id="check-box1" value="0">
                                    SWEAR</option>
                                <option id="check-box2" value="1">
                                    ART</option>
                            </select>
                        </div>
                        <div
                            class="py-[0.75rem] flex items-center gap-[0.5rem] px-[1rem] bg-[#F9F9F9] border border-[#E9EBED] rounded-[1rem]">
                            <h2>Sort by</h2>
                            <img src="img/post/sort.svg" alt="">
                        </div>
                        <div class="flex items-center gap-[0.25rem] bg-[#F9F9F9] rounded-[1rem] p-[0.38rem]">
                            <a href="./collection" class="p-[0.62rem] rounded-[0.5rem] "><img src="img/post/four.svg"
                                    alt=""></a>
                            <a href="./colect-two" class="p-[0.62rem] rounded-[0.5rem] bg-[#DCF06B]"><img
                                    src="img/post/six.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="flex w-full items-start gap-[3.5rem]">
                    <div class="w-full flex flex-col gap-[2.5rem] items-center">
                        <div class="grid w-full grid-profile">

                            @include('altyn.include.cards-colect')

                        </div>

                    </div>
                </div>
            </div>
        </div>

        @include('altyn.include.footer-hrefs')
    </section>
    @include('include.footer')
@endsection
