<section>
    <div class="flex flex-col max-w-[80rem] m-auto pt-[3.5rem] pb-[7.5rem] gap-[3.5rem] ">
        <div class="flex flex-col items-start gap-[3.5rem]">
            @include('shared.component.user')


        </div>
        <div class="flex flex-col items-start gap-[3rem]">

            <div class="w-full flex flex-col items-start gap-[2.5rem]">
                <div class="flex flex-col items-start w-full">
                    <div class="flex items-center w-full justify-between">
                        <form action="" class="flex items-center gap-[0.75rem] w-[74.4%]">
                            <label for="text"
                                class="flex items-center gap-[0.5rem] w-full bg-[#F9F9F9] py-[0.75rem] pl-[1rem] rounded-[1rem] border border-[#E9EBED] pr-[1rem]">
                                <button> <img src="img/post/search.svg" alt=""></button>

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
                                    SWEAR</option>
                                <option id="check-box2" value="1">
                                    ART</option>
                            </select>
                        </div>

                        @include('shared.component.hrefs')
                    </div>
                </div>
                <div class="flex w-full items-start gap-[3.5rem]">

                    <div class="w-full flex flex-col gap-[2.5rem] items-center">
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
                            <img src="./assets/img/load.svg" alt="">
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
