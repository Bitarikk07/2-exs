<form id="mainForm" action="/createi" method="post" enctype="multipart/form-data">
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
                            <input type="file" name="img" id="nft" accept="image/*" class="hidden">
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
                                <input type="file" name="other" id="other-files" accept="image/*" class="hidden">
                                <div id="other-view"
                                    class="flex w-full h-full justify-center rounded-[1.5rem] items-center text-center bg-cover bg-no-repeat  bg-center flex-col">
                                    <img src="img/Button.svg" class="w-[150px] " alt="">
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
                <div class="flex flex-col items-start gap-[1rem]">
                    <label class="text-[#090909] text-[1rem] font-semibold" for="grid-textarea">Choose
                        Collection
                    </label>
                    <div class="flex items-center gap-4">
                        <div class="flex items-center gap-4">

                            <a onclick="return confirm('При переходе на другую страницу, то что было написано до этого не сохранится, вы согланы?')"
                                href="{{ route('create.colect') }}"
                                class="p-[2rem] rounded-2xl border border-[#E9EBED] ">
                                <img src="img/catagory/add.svg" alt=""></a>


                        </div>
                        @foreach ($colect as $col)
                            <?php
                            $col_id = $col->id;
                            ?>

                            <input type="radio" hidden value="{{ $col->id }}" id="colect-<?php echo $col_id; ?>"
                                name="collection_id" required>
                            <label class="" for="colect-<?php echo $col_id; ?>">
                                <div id="colectDiv{{ $col->id }}"
                                    class="colectDiv active:border-[#5ea0e1] w-[5.5rem] h-[5.5rem] rounded-2xl border text-center flex justify-center items-center border-[#E9EBED] relative">
                                    <div class="flex w-full h-full rounded-2xl items-center text-center bg-cover bg-no-repeat bg-bottom bg-center flex-col"
                                        style="background-image: url('/{{ $col->img }}')"></div>
                                    <div
                                        class="py-[0.12rem] transition-all px-[0.38rem] bottom-[10px] bg-[#FFFFFF29] left-[5px] rounded-[0.375rem] backdrop-blur-[15px] absolute">
                                        <p class="text-[0.75rem] text-[#FEFEFE]">{{ $col->name }}</p>
                                    </div>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>
                <div class="flex  items-center justify-between">
                    <div class="flex flex-col gap-[0.5rem]">
                        <label class="text-[#090909] text-[1rem] font-semibold" for="grid-textarea">Put on
                            marketplace
                        </label>
                        <p class="text-[#9CA4AB] text-[0.875rem]">Put your new NFT on Rarible's marketplace</p>
                    </div>

                    <div class="flex items-start flex-col gap-4 ">

                        <select id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="show" id="" required="">
                            <option id="check-box1" value="0">
                                no</option>
                            <option id="check-box2" value="1">
                                yes</option>
                        </select>
                    </div>
                </div>


                <div class="flex items-start flex-col gap-[1.5rem] w-full">
                    {{-- @error('other')
                        {{ $message }}
                    @enderror
                    @error('name')
                        {{ $message }}
                    @enderror
                    @error('description')
                        {{ $message }}
                    @enderror
                    @error('show')
                        {{ $message }}
                    @enderror
                    @error('img')
                        {{ $message }}
                    @enderror --}}
                    <button
                        class="bg-[#F9F9F9] text-[1rem]  text-[#9CA4AB] font-semibold py-[1.5rem] px-[3rem] rounded-[2rem]"
                        type="submit" id="craete-nft" disabled>
                        Create item
                    </button>
                </div>
            </div>

        </div>
    </div>

    </div>
</form>
<script>
    const field3 = document.getElementById('grid-textarea');
    const field4 = document.getElementById('nft-name');
    const field5 = document.getElementById('nft');
    const field6 = document.getElementById('other-files');
    const submitButton = document.getElementById('craete-nft');

    function checkForm() {
        if (field5.files.length > 0 && field6.files.length > 0 && field3
            .value.trim() !== '' && field4
            .value.trim() !== '') {
            submitButton.disabled = false;
            submitButton.style.backgroundColor = '#DCF06B';
            submitButton.style.color = '#090909';
        } else {
            submitButton.disabled = true;
            submitButton.style.backgroundColor = '#F9F9F9';
        }
    }
    field3.addEventListener('input', checkForm);
    field4.addEventListener('input', checkForm);
    field6.addEventListener('change', checkForm);
    field5.addEventListener('change', checkForm);
</script>
