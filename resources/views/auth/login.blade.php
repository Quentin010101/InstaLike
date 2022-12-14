<x-layout>
    <x-container_100vh>
        <div>
            <x-links.back_to_home_page />
        </div>
        <div class="flex justify-center my-auto">
            <div class="flex xl:max-w-screen-lg lg:max-w-screen-md md:max-w-screen-sm rounded-xl overflow-hidden bg-white shadow-lg">
                <div class="w-7/12 hidden md:block">
                    <img class="object-cover h-full blur-xs" src="{{ asset('asset/image/login_image.jpg') }}" alt="">
                </div>
                <div class="p-10">
                    <h2 class="text-xl font-semibold text-red-400" >Sign into your account</h2>
                    <form class="p-5 h-5/6 flex flex-col justify-center gap-y-5" action="/login" method="post">
                        @csrf
                        <x-inputs.email id="email" name="email" label="Email"/>
                        <x-inputs.password id="password" name="password" label="Password" placeholder="Enter your password" />
                        <x-inputs.submit value="Login" class="justify-center" />
                    </form>
                    <div>
                        <a href="{{ url('/forgot-password') }}">Forgot your password?</a>
                    </div>
                    <div class="mt-1 p-1 group cursor-pointer">
                        <a class="text-sm text-gray-400 group-hover:text-gray-600 duration-200" href="{{ url('/register') }}">Dont have an account? Register here.</a>
                    </div>
                </div>
            </div>
        </div>
    </x-container_100vh>
</x-layout>
