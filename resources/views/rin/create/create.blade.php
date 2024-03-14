@extends('layout.app')

@section('title', 'Create New Item (Normal)')

@section('content')
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            /* display: none; <- Crashes Chrome on hover */
            -webkit-appearance: none;
            margin: 0;
            /* <-- Apparently some margin are still there even though it's hidden */
        }

        input[type=number] {
            -moz-appearance: textfield;
            /* Firefox */
        }

        .custom-file-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }

        input[type="file"] {
            display: none;
        }
    </style>
    <div class=" m-auto">
        @include('include.header')


        <div class="max-w-[70rem] py-[5rem] m-auto flex-col flex gap-[3.5rem]">
            <h1 class="text-[#090909] text-[3rem] font-bold">Create New Item</h1>

            <form class="flex items-center gap-[5rem]" action="{{ route('store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-[1rem]">
                    <h2 class="text-[#090909] text-[1rem] font-semibold">Preview</h2>
                    <label>
                        <div class="bg-[#F9F9F9] pt-[9.37rem] pb-[8.87rem] px-[3.80rem] rounded-[1.5rem]">
                            <input type="file" type="file" id="image" name="file" required="" />
                            <div class="flex items-center flex-col w-[13.4375rem] text-center gap-[0.75rem]">
                                <img src="img/gallery.svg" alt="">
                                <p class="text-[#8E8E8E] text-[0.875rem] font-normal">Upload file to preview
                                    your brand new
                                    NFT
                                </p>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="flex flex-col gap-[1rem]">
                    <div class="block w-full text-grey-darkest mb-5 text-3xl">
                        <h3>File Upload Form</h3>
                    </div>
                    <div class="block w-full text-grey-darkest mb-5 text-1xl text-center">
                        @if ($message = Session::get('success'))
                            <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md"
                                role="alert">
                                <div class="flex">
                                    <div class="py-1"><svg class="fill-current h-6 w-6 text-green-500 mr-4"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                                        </svg></div>
                                    <div>
                                        <p class="font-bold">Success!</p>
                                        <p class="text-sm">{{ $message }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (count($errors) > 0)
                            <div role="alert">
                                <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                                    Errors
                                </div>
                                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-2 py-3 text-red-700">
                                    <ul class="list-disc">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name">
                                Name
                            </label>
                            <input name="name"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white form-control @error('name') border-red-500 @enderror"
                                id="grid-video-name" type="text" placeholder="Video Name" required>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-description">
                                Description
                            </label>
                            <textarea name="description" rows="3"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control @error('description') border-red-500 @enderror"
                                id="grid-textarea" placeholder="Video Description" required></textarea>
                            <p class="text-gray-600 text-xs italic">Make it as long and as crazy as youd like</p>
                        </div>
                    </div>

                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button
                                class="shadow bg-green-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                type="submit">
                                Upload
                            </button>
                        </div>
                    </div>

                </div>
            </form>

        </div>


        @include('include.footer')
    </div>
@endsection
