@if (session()->has('message'))
    <div id="alert"
        class="bg-[#dcf06b41] fixed  right-[8rem] top-[6rem] border-b border-[#DCF06B] text-green-800 text-sm p-4 flex justify-between rounded-lg w-96">
        <div class="flex items-center">

            <p class="ml-1">{{ session('message') }}</p>
        </div>
        <button id="closeBtn" type="button" class="text-gray-600 hover:text-gray-800 focus:outline-none">
            <span aria-hidden="true"> <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg></span>
        </button>
    </div>
@endif
