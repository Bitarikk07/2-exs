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
                            <a href="./collection" class="p-[0.62rem] rounded-[0.5rem] bg-[#DCF06B]"><img
                                    src="img/post/four.svg" alt=""></a>
                            <a href="./colect-two" class="p-[0.62rem] rounded-[0.5rem]"><img src="img/post/six.svg"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="flex items-start gap-[3.5rem]">
                    <div class="flex flex-col items-start gap-[0.75rem]">
                        <h2 class="text-[#151517] font-bold">Categories</h2>
                        <div class="flex flex-col items-start w-[15.6rem] gap-[0.75rem]">
                            <div class="flex items-center w-full justify-between">
                                <h2 class="text-[#151517] font-semibold"> Top </h2>
                                <div class="checkbox-wrapper-44">
                                    <label class="toggleButton">
                                        <input type="checkbox">
                                        <div>
                                            <svg viewBox="0 0 44 44" fill="#fffff">
                                                <path transform="translate(-2.000000, -2.000000)"
                                                    d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758">
                                                </path>
                                            </svg>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="flex items-center w-full justify-between">
                                <h2 class="text-[#151517] font-semibold"> Art </h2>
                                <div class="checkbox-wrapper-44">
                                    <label class="toggleButton">
                                        <input type="checkbox">
                                        <div>
                                            <svg viewBox="0 0 44 44" fill="#fffff">
                                                <path transform="translate(-2.000000, -2.000000)"
                                                    d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758">
                                                </path>
                                            </svg>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="flex items-center w-full justify-between">
                                <h2 class="text-[#151517] font-semibold"> Collectibles </h2>
                                <div class="checkbox-wrapper-44">
                                    <label class="toggleButton">
                                        <input type="checkbox">
                                        <div>
                                            <svg viewBox="0 0 44 44" fill="#fffff">
                                                <path transform="translate(-2.000000, -2.000000)"
                                                    d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758">
                                                </path>
                                            </svg>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="flex items-center w-full justify-between">
                                <h2 class="text-[#151517] font-semibold"> Domain Names </h2>
                                <div class="checkbox-wrapper-44">
                                    <label class="toggleButton">
                                        <input type="checkbox">
                                        <div>
                                            <svg viewBox="0 0 44 44" fill="#fffff">
                                                <path transform="translate(-2.000000, -2.000000)"
                                                    d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758">
                                                </path>
                                            </svg>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="flex items-center w-full justify-between">
                                <h2 class="text-[#151517] font-semibold"> Music </h2>
                                <div class="checkbox-wrapper-44">
                                    <label class="toggleButton">
                                        <input type="checkbox">
                                        <div>
                                            <svg viewBox="0 0 44 44" fill="#fffff">
                                                <path transform="translate(-2.000000, -2.000000)"
                                                    d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758">
                                                </path>
                                            </svg>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="flex items-center w-full justify-between">
                                <h2 class="text-[#151517] font-semibold"> Photography </h2>
                                <div class="checkbox-wrapper-44">
                                    <label class="toggleButton">
                                        <input type="checkbox">
                                        <div>
                                            <svg viewBox="0 0 44 44" fill="#fffff">
                                                <path transform="translate(-2.000000, -2.000000)"
                                                    d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758">
                                                </path>
                                            </svg>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="flex items-center w-full justify-between">
                                <h2 class="text-[#151517] font-semibold"> Collectibles </h2>
                                <div class="checkbox-wrapper-44">
                                    <label class="toggleButton">
                                        <input type="checkbox">
                                        <div>
                                            <svg viewBox="0 0 44 44" fill="#fffff">
                                                <path transform="translate(-2.000000, -2.000000)"
                                                    d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758">
                                                </path>
                                            </svg>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="flex items-center w-full justify-between">
                                <h2 class="text-[#151517] font-semibold"> Sports </h2>
                                <div class="checkbox-wrapper-44">
                                    <label class="toggleButton">
                                        <input type="checkbox">
                                        <div>
                                            <svg viewBox="0 0 44 44" fill="#fffff">
                                                <path transform="translate(-2.000000, -2.000000)"
                                                    d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758">
                                                </path>
                                            </svg>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-[55.9rem] flex flex-col gap-[2.5rem] items-center">
                        <div class="grid grid-profile">

                            @include('altyn.include.cards-colect')
                        </div>
                        {{-- <div
                            class="flex items-center gap-[0.5rem] bg-[#F9F9F9] border border-[#E9EBED] rounded-[0.75rem] px-[1rem] py-[0.75rem]">
                            <img src="img/load.svg" alt="">
                            <h2>Loading</h2>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        @include('altyn.include.footer-hrefs')

    </section>

    @include('include.footer')
@endsection
