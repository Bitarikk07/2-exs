<section class="flex flex-col items-center pt-6  py-10 mt-6">
    <div class="w-full backdrop-blur-[15px]  rounded-lg shadow r  md:mt-0 sm:max-w-md xl:p-0 ">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8 ">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">Create
                an
                account
            </h1>
            <form action="{{ route('auth.reg') }}" class="space-y-4 md:space-y-6" method="POST">
                @csrf
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Your full
                        name</label>
                    <input type="text" name="name" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5  "
                        placeholder="John Doe" required="">
                    @error('name')
                        <small class="fs-6 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 "
                        placeholder="johndoe@user.com" required="">
                    @error('email')
                        <small class="fs-6 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <div class="relative">
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                            required>
                        <button type="button" id="togglePassword"
                            class="absolute inset-y-0 right-0 flex items-center pr-2">
                            <img src="/img/icon/eye.svg" alt="" id="passwordEyeIcon">
                        </button>
                    </div>
                    @error('password')
                        <small class="fs-6 text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 ">Confirm
                        password</label>
                    <div class="relative">
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                            required>
                        <button type="button" id="toggleConfirmPassword"
                            class="absolute inset-y-0 right-0 flex items-center pr-2">
                            <img src="/img/icon/eye.svg" alt="" id="confirmEyeIcon">
                        </button>
                    </div>

                    @error('password_confirmation')
                        <small class="fs-6 text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full text-[#171717] hover:text-[#47474765] transition-all bg-[#DCF06B] hover:bg-[#d4e85e] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Create
                    an account</button>
                <p class="text-sm font-light text-gray-500 ">Already have an account? <a
                        class="font-medium text-[#DCF06B] hover:underline " href="{{ route('login') }}">Sign in
                        here</a>
                </p>
            </form>
        </div>
    </div>
</section>
