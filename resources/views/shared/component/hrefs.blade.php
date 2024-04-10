<div class="flex items-center gap-[0.25rem] bg-[#F9F9F9] rounded-[1rem] p-[0.38rem]">
    {{-- {{ dd($user) }} --}}
    <a href="{{ route('users.show', $user->id) }}"
        class="p-[0.62rem] {{ Route::is('users.show') ? 'bg-[#DCF06B]' : '' }} rounded-[0.5rem] "><img
            src="/img/post/two.svg" alt=""></a>
    <a href="{{ route('two', $user->id) }}"
        class="p-[0.62rem] {{ Route::is('two') ? 'bg-[#DCF06B]' : '' }} rounded-[0.5rem] b"><img src="/img/post/four.svg"
            alt=""></a>
    <a href="{{ route('all', $user->id) }}"
        class="p-[0.62rem] {{ Route::is('all') ? 'bg-[#DCF06B]' : '' }} rounded-[0.5rem]"><img src="/img/post/all.svg"
            alt=""></a>
</div>
