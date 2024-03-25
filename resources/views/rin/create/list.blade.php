@extends('layout.app')

@section('title', 'Our Clans')

@section('content')

    <div class="absolute fill-[#0909091F] backdrop-blur-[10px] inset-y-[10rem] flex items-center justify-center w-full h-full"
        role="alert">
        <div class="p-[3rem] bg-white rounded-[1.25rem] flex flex-col gap-12 items-center">
            <div class="flex flex-col items-center gap-[0.62rem]">
                <h2 class="text-[#090909] text-[2rem] font-bold">Your NFT is Listed!</h2>
                <h2 class="text-[#8E8E8E] font-normal text-[1rem]">Awesome! You’ve listed<span
                        class="text-[#090909] font-semibold"> {{ $list->nft->name }}
                    </span></h2>
            </div>
            <div class="flex items-start gap-4">
                <div class="w-[7.1875rem] h-[7.5rem]">
                    <div style="background-image: url('/{{ $list->nft->img }}')"
                        class="flex w-full h-full rounded-[0.75rem] items-center
                        text-center bg-cover bg-no-repeat bg-bottom bg-center flex-col">
                    </div>
                </div>
                <div class="flex flex-col items-start w-[13rem]">
                    <h2 class="text-[#151517] text-[1.25rem] font-semibold">{{ $list->nft->name }}</h2>
                    <div class="flex items-start justify-between w-full">
                        <div class="flex flex-col items-start ">
                            <h2 class="text-[#8E8E8E] text-[0.875rem] font-normal">Price:</h2>
                            <h2 class="text-[1.25rem] text-[#151517] font-bold">
                                {{ $list->price . ' ' . $list->currency }}
                            </h2>
                        </div>
                        <div>
                            <div>
                                <h2 class="text-[0.5rem]">Start:</h2>
                                <div class="text-[0.75rem] text-[#151517] bg-[#DCF06B] rounded-lg py-[0.25rem] px-[0.5rem]">
                                    {{ $list->start }}
                                </div>
                            </div>
                            <div>
                                <h2 class="text-[0.5rem]">End:</h2>
                                <div class="text-[0.75rem] text-[#151517] bg-[#DCF06B] rounded-lg py-[0.25rem] px-[0.5rem]">
                                    {{ $list->end }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex items-center gap-[0.75rem]">
                <a href="#"><img src="/img/dicord.svg" alt=""></a>
                <a href="#"><img src="/img/x.svg" alt=""></a>
                <a href="#"><img src="/img/facebook.svg" alt=""></a>
            </div>
            <a href="/" class="py-3 bg-[#DCF06B] px-3 rounded-lg">На главную</a>
        </div>
    </div>

    <div class="">
        <div class=" m-auto">
            @include('include.header')
            <div class="max-w-[70rem] py-[5rem] m-auto flex-col flex gap-[3.5rem]">
                <h1 class="text-[#090909] text-[3rem] font-bold">List Item for Sale</h1>
                <div class="flex  items-center gap-[5rem]">
                    <div class="flex flex-col items-start gap-4">
                        <h2 class="text-[#090909] text-[14px] font-semibold">Preview</h2>
                        <h2 class="text-[#151517] text-[1.5rem] font-semibold"> Human Leaf #0121</h2>
                        <div
                            class=" flex justify-center w-[21rem]  h-[25.5rem]  text-center flex-col rounded-[1.5rem] items-center   bg-[#F9F9F9] ">
                            <div id="img-view" style="background-image: url('/{{ $list->nft->img }}')"
                                class="flex w-full h-full rounded-[1.5rem] items-center text-center bg-cover bg-no-repeat bg-bottom bg-center flex-col">
                                <img src="" class="" alt="">
                            </div>
                        </div>
                    </div>
                    <form class="w-full flex flex-col  gap-4">
                        @csrf
                        <h2 class="text-[#090909] text-[14px] font-semibold">Price</h2>
                        <div class="flex items-center gap-4">
                            <select id="countries"
                                class="bg-[#F9F9F9] border border-[#E9EBED] text-gray-900 text-sm rounded-[1.5rem] focus:ring-blue-500 focus:border-blue-500 block  p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="currency" id="" required="">
                                <option id="check-box1" value="USD">
                                    USD $
                                </option>
                                <option id="check-box2" value="CNY">
                                    CNY ¥</option>
                                <option id="check-box2" value="RUB">
                                    RUB ₽ </option>
                                <option id="check-box2" value="EUR">
                                    EUR €</option>
                                <option id="check-box2" value="JPY">
                                    JPY ¥</option>
                            </select>
                            <input
                                class="bg-[#F9F9F9] border border-[#E9EBED] text-gray-900 text-sm rounded-[1.5rem] focus:ring-blue-500 focus:border-blue-500 block  w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                type="number" id="price" name="price">
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="flex flex-col items-start gap-4">
                                <h2 class="text-[#090909] text-[16px] font-semibold">Starting</h2>
                                <input class="p-[1rem] border border-[#E9EBED] rounded-[1.5rem]" type="date"
                                    name="start" id="start">
                            </div>
                            <div class="flex flex-col items-start gap-4">
                                <h2 class="text-[#090909] text-[16px] font-semibold">Ending</h2>
                                <input class="p-[1rem] border border-[#E9EBED] rounded-[1.5rem]" type="date"
                                    name="end" id="end">
                            </div>
                        </div>
                        <button
                            class="bg-[#F9F9F9] text-[1rem]  text-[#9CA4AB] font-semibold py-[1.5rem] px-[3rem] rounded-[2rem]"
                            type="submit" id="listing" disabled>
                            Complete Listing
                        </button>
                    </form>
                </div>

            </div>
            {{-- @include('include.footer') --}}
        </div>
    </div>
