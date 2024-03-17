{{-- <form id="mainForm" action="{{ route('form.create') }}" method="post" enctype="multipart/form-data"> --}}
@csrf
<div class="max-w-[70rem] py-[5rem] m-auto flex-col flex gap-[3.5rem]">
    <h1 class="text-[#090909] text-[3rem] font-bold">Create New Item</h1>
    <div class="flex items-start gap-[5rem]">
        <div class="flex flex-col gap-[1rem]">
            <h2 class="text-[#090909] text-[1rem] font-semibold">Preview</h2>

            <div class="row">
                <div class="col-md-12">
                    <label for="nft" id="drop-area"
                        class=" flex justify-center w-[21rem]  h-[25.5rem]  text-center flex-col rounded-[1.5rem] items-center   bg-[#F9F9F9] ">

                        <input name="nft-image" type="file" id="nft" accept="img/*" hidden>
                        <div id="img-view"
                            class="flex w-full h-full rounded-[1.5rem]  items-center text-center bg-cover bg-no-repeat bg-bottom bg-center flex-col">
                            <img src="img/gallery.svg" class="w-[100px] mt-[25px]" alt="">
                            <span class="text-[#8E8E8E] text-[0.875rem] font-normal">
                                Upload file to preview <br>
                                your brand new
                                NFT
                            </span>
                        </div>
                    </label>

                </div>
            </div>
        </div>
        <div class="flex flex-col gap-[1rem]">
            <div class="flex flex-col gap-[1.5rem]">
                <h2 class="text-[#090909] text-[1rem] font-semibold" for="image-upload">Upload file</h2>
                <div class="row">
                    <div class="col-md-12">
                        <label for="other-files" id="other-area"
                            class="flex items-center justify-center  w-[36.25rem]  h-[10rem] rounded-[1.5rem] border border-dashed border-[#DCF06B]">
                            <input name="other-image" type="file" id="other-files" accept="img/*" hidden>
                            <div id="other-view"
                                class="flex w-full h-full rounded-[1.5rem] items-center text-center bg-cover bg-no-repeat  bg-center flex-col">
                                <img src="img/Button.svg" class="w-[100px] mt-[25px]" alt="">
                                <span class="text-[#8E8E8E] text-[0.875rem] font-normal">
                                    PNG, GIF, WEBP, MP4 or MP3. Max 100mb.
                                </span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-[1rem]">
                <label class="text-[#090909] text-[1rem] font-semibold" for="nft-name">Name of NFTs</label>
                <input name="name"
                    class="appearance-none block w-full bg-[#F9F9F9] rounded-3xl text-gray-700 border py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white form-control @error('name') border-red-500 @enderror"
                    id="nft-name" type="text" placeholder="Type here..." required>
            </div>
            <div class="flex flex-col gap-[1rem]">
                <label class="text-[#090909] text-[1rem] font-semibold" for="grid-textarea">Description</label>
                <textarea name="description" rows="3"
                    class="appearance-none block w-full bg-[#F9F9F9] text-gray-700 border border-gray-200 rounded-[0.5rem] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
                              form-control @error('description') border-red-500 @enderror"
                    id="grid-textarea" placeholder="Type here..." required></textarea>
            </div>
            <div class="flex  items-start gap-[1rem]">
                <div>
                    <label class="text-[#090909] text-[1rem] font-semibold" for="grid-textarea">Add new Collection
                    </label>
                    <div class="flex items-center gap-4">
                        @if ($newCol ?? false)
                            hoe
                        @else
                            <a href="{{ route('form.colect') }}" class="p-[2rem] rounded-2xl border border-[#E9EBED] ">
                                <img src="img/catagory/add.svg" alt=""></a>
                        @endif
                        {{-- <div class=" rounded-2xl border border-[#E9EBED] relative"><img src="img/catagory/nft.svg"
                                alt="">
                            <div
                                class="py-[0.12rem] px-[0.38rem] bottom-[10px] bg-[#FFFFFF29] left-[5px] rounded-[0.375rem] backdrop-blur-[10px] absolute">
                                <p class="text-[0.75rem] text-[#FEFEFE]">Human Leaf</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div>
                    <label class="text-[#090909] text-[1rem] font-semibold" for="grid-textarea">Choose
                        Collection
                    </label>

                    <select
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        name="catagory" id="" required="">
                        <option value="" hidden></option>
                        {{-- {{-- @foreach ($catagory as $catagory) --}}
                        <option value=""></option>
                        {{-- @endforeach --}}

                    </select>
                </div>
            </div>
            <div class="flex  items-center justify-between">
                <div class="flex flex-col gap-[0.5rem]">
                    <label class="text-[#090909] text-[1rem] font-semibold" for="grid-textarea">Put on
                        marketplace
                    </label>
                    <p class="text-[#9CA4AB] text-[0.875rem]">Put your new NFT on Rarible's marketplace</p>
                </div>

                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div
                        class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-[#E9EBED]
                          peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#52B4C1]">
                    </div>
                </label>

            </div>
            <div class="flex  items-center justify-between">
                <div class="flex flex-col gap-[0.5rem]">
                    <label class="text-[#090909] text-[1rem] font-semibold" for="grid-textarea">Put on
                        marketplace
                    </label>
                    <p class="text-[#9CA4AB] text-[0.875rem]">Put your new NFT on Rarible's marketplace</p>
                </div>

                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div
                        class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-[#E9EBED]
                          peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#52B4C1]">
                    </div>
                </label>

            </div>
            <div class="flex  items-center justify-between">
                <div class="flex flex-col gap-[0.5rem]">
                    <label class="text-[#090909] text-[1rem] font-semibold" for="grid-textarea">Put on
                        marketplace
                    </label>
                    <p class="text-[#9CA4AB] text-[0.875rem]">Put your new NFT on Rarible's marketplace</p>
                </div>

                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div
                        class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-[#E9EBED]
                          peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#52B4C1]">
                    </div>
                </label>

            </div>
            <div class="flex items-start flex-col gap-[1.5rem] w-full">
                <button
                    class="bg-[#F9F9F9] text-[1rem]  text-[#9CA4AB] font-semibold py-[1.5rem] px-[3rem] rounded-[2rem]"
                    type="submit">
                    Create item
                </button>
            </div>
        </div>

    </div>
</div>

</div>
</form>
