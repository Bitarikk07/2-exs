<section>
    <div class="flex max-w-[80rem] m-auto pt-[3.5rem] pb-[7.5rem] gap-[3.5rem] ">
        <div class="flex flex-col items-start gap-[3.5rem]">
            @include('shared.component.user')
            <div class="flex flex-col items-start ">
                <h2 class="text-[#151517] font-bold">Categories</h2>
                <div class="flex flex-col items-start w-[15.6rem] gap-[0.75rem]">
                    <div class="flex flex-col items-start gap-[1.5rem] w-[100%]">

                        <div class="accordion w-full gap-[1rem] flex flex-col items-start">
                            <div class="group flex flex-col gap-2 w-full rounded-lg bg-transparent py-[0.75rem]"
                                tabindex="1">
                                <div class="flex cursor-pointer items-center justify-between">
                                    <span class="text-[#151517] text-[1rem] font-bold">
                                        Status
                                    </span>
                                    <img src="/img/creator/arrow-down.svg"
                                        class="transition-all duration-500 group-focus:-rotate-180" />
                                </div>
                                <div
                                    class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000 flex flex-col items-start gap-[0.75rem]">
                                    <div class="flex items-center w-full justify-between">
                                        <h2 class="text-[#151517] font-semibold"> Buy Now </h2>
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
                                        <h2 class="text-[#151517] font-semibold"> On Auction </h2>
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
                                        <h2 class="text-[#151517] font-semibold"> Buy With Card </h2>
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

                            <div class="flex flex-col items-start gap-[0.75rem]">
                                <div class="flex ">
                                    <h2 class="text-[#151517] text-[1rem] font-bold">Price</h2>
                                </div>
                                <div class=" flex items-center gap-[0.75rem]">
                                    <select
                                        class="py-[0.75rem] bg-[#F9F9F9] border border-[#E9EBED] rounded-[1rem] w-[3.5rem] outline-none"
                                        id="blockchains" name="blockchains" required="">
                                        <option id="check-box1" value="0">
                                            USD</option>
                                        <option id="check-box1" value="0">
                                            NOTCOIN</option>
                                        <option id="check-box1" value="0">
                                            SWEAR</option>
                                        <option id="check-box2" value="1">
                                            ART</option>
                                    </select>
                                    <label
                                        class="px-[0.5rem] py-[0.75rem] bg-[#F9F9F9] border border-[#E9EBED] rounded-2xl w-[3.8rem]">
                                        <input type="number"
                                            class="text-black placeholder:text-[#8E8E8E] outline-none bg-transparent w-full"
                                            placeholder="Min">
                                    </label>
                                    <p class="text-[#8E8E8E] text-[0.875rem]"> To</p>
                                    <label
                                        class="px-[0.5rem] py-[0.75rem] bg-[#F9F9F9] border border-[#E9EBED] rounded-2xl w-[4rem]">
                                        <input type="number"
                                            class="text-black placeholder:text-[#8E8E8E] outline-none bg-transparent w-full"
                                            placeholder="Max">
                                    </label>
                                </div>
                            </div>
                            <div class="group flex flex-col gap-2 w-full rounded-lg bg-transparent py-[0.75rem]"
                                tabindex="1">
                                <div class="flex cursor-pointer items-center justify-between">
                                    <span class="text-[#151517] text-[1rem] font-bold">
                                        Quantity
                                    </span>
                                    <img src="/img/creator/arrow-down.svg"
                                        class="transition-all duration-500 group-focus:-rotate-180" />
                                </div>
                                <div
                                    class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000 flex flex-col items-start gap-[0.75rem]">
                                    <div class="flex items-center w-full justify-between">
                                        <h2 class="text-[#151517] font-semibold"> All Items </h2>
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
                                        <h2 class="text-[#151517] font-semibold"> Single Items </h2>
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
                                        <h2 class="text-[#151517] font-semibold"> Bundles </h2>
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
                            <div class="group flex flex-col gap-2 w-full rounded-lg bg-transparent py-[0.75rem]"
                                tabindex="1">
                                <div class="flex cursor-pointer items-center justify-between">
                                    <span class="text-[#151517] text-[1rem] font-bold">
                                        Currency
                                    </span>
                                    <img src="/img/creator/arrow-down.svg"
                                        class="transition-all duration-500 group-focus:-rotate-180" />
                                </div>
                                <div
                                    class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000 flex flex-col items-start gap-[0.75rem]">
                                    <div class="flex items-center w-full justify-between">
                                        <h2 class="text-[#151517] font-semibold"> ETH </h2>
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
                                        <h2 class="text-[#151517] font-semibold"> WETH </h2>
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

                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="flex flex-col items-start gap-[3rem]">

            <div class="w-full flex flex-col items-start gap-[2.5rem]">
                <div class="flex flex-col items-start w-full">
                    <div class="flex items-center w-full justify-between">
                        <form action="" class="flex items-center gap-[0.75rem] w-[57.4%]">
                            <label for="text"
                                class="flex items-center gap-[0.5rem] w-full bg-[#F9F9F9] py-[0.75rem] pl-[1rem] rounded-[1rem] border border-[#E9EBED] pr-[1rem]">
                                <button> <img src="/img/post/search.svg" alt=""></button>

                                <input type="text" name="text" id="text"
                                    class="placeholder:text-[#8E8E8E] outline-none bg-transparent"
                                    placeholder="Search NFT">
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
                                    <a href="/">SWEAR</a>
                                </option>
                                <option id="check-box2" value="1">
                                    ART</option>
                            </select>
                        </div>

                        @include('shared.component.hrefs')
                    </div>
                </div>
                <div class="flex items-start gap-[3.5rem]">

                    <div class="w-[55.9rem] flex flex-col gap-[2.5rem] items-center">
                        <div class="grid grid-cards">
                            @foreach ($nfts as $nft)
                                @if ($list = $nft->listing_nft)
                                    @include('shared.component.grid')
                                @else
                                    @include('shared.component.nft')
                                @endif
                            @endforeach
                        </div>
                        <div
                            class="flex items-center gap-[0.5rem] bg-[#F9F9F9] border border-[#E9EBED] rounded-[0.75rem] px-[1rem] py-[0.75rem]">
                            <img src="./assets//img/load.svg" alt="">
                            <h2>Loading</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('shared.component.top')
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const items = document.querySelectorAll('.accordion-item');

        items.forEach(item => {
            const header = item.querySelector('.accordion-header');
            const content = item.querySelector('.accordion-content');

            header.addEventListener('click', function() {
                const isOpen = item.classList.contains('open');

                items.forEach(item => {
                    item.classList.remove('open');
                    item.querySelector('.accordion-content').style.display = 'none';
                });

                if (!isOpen) {
                    item.classList.add('open');
                    content.style.display = 'block';
                }
            });
        });
    });
</script>
