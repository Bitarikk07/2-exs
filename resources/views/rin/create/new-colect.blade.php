@extends('layout.app')

@section('title', 'Create New Item')

@section('content')
    <div class="max-w-[1280px] m-auto">
        @include('include.header')
        <div class="flex py-[3rem]  justify-center items-center">
            <h1 class="text-red-800"></h1>
            <form action="{{ route('colect.create') }}" method="post" class="w-full flex  justify-center"
                enctype="multipart/form-data">
                @csrf
                <div class="flex gap-5 flex-col items-center ">
                    <div class="flex gap-6 items-center">
                        <label for="colect" id="colect-area"
                            class="flex items-center justify-center w-[10.5rem] h-[10.5rem]   text-center flex-col rounded-[1.5rem] items-center  bg-[#F9F9F9] ">
                            <input name="img" type="file" id="colect" accept="image/*" hidden>

                            <div id="colect-img"
                                class="flex w-full h-full rounded-[1.5rem]  border border-[#E9EBED] relative items-center text-center bg-cover bg-no-repeat bg-bottom bg-center flex-col">
                                <div
                                    class="py-[0.12rem] px-[0.38rem] bottom-[10px] bg-[#FFFFFF29] left-[5px] rounded-[0.375rem] backdrop-blur-[10px] absolute">
                                    <input
                                        class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                        type="text" name="name" placeholder="Name Collection">

                                </div>
                            </div>
                        </label>--
                        <div class="bg-[#DCF06B] w-[10rem] py-2 px-3   rounded-[0.375rem]">

                            <p class="py-[0.12rem] px-[0.38rem]  bg-[#FFFFFF29]  rounded-[0.375rem] backdrop-blur-[10px] ">
                                Click on the empty field to upload an image</p>
                        </div>
                    </div>
                    <button type="submit" class="py-[0.7rem] bg-[#DCF06B] rounded-3xl px-[3rem]">Save</button>
                </div>
            </form>
        </div>
        @include('include.footer')
    </div>
    <script src="{{ asset('js/new-drop.js') }}"></script>
@endsection
