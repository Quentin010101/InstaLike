<x-layout>
    <x-container_100vh>
        <div>
            <x-links.back_to_home_page />
        </div>
        <div class="flex justify-center my-auto ">
            <div class="flex xl:max-w-screen-lg lg:max-w-screen-md md:max-w-screen-sm rounded-xl overflow-hidden bg-white shadow-lg">
                <div class="w-7/12 hidden md:block">
                    <img class="object-cover h-full blur-xs" src="{{ asset('asset/image/login_image.jpg') }}" alt="">
                </div>
                <div class="py-10 px-5 lg:px-10">
                    <h2 class="text-xl font-semibold" >Create a new account</h2>
                    <form class="py-10 px-2 lg:px-5 h-5/6 flex flex-col justify-center" action="/register" method="post">
                        @csrf
                        <div class="flex flex-col xl:flex-row">
                            <x-inputs.name id="name" name="name" label="Name" placeholder="Enter your name" />
                            <x-inputs.name id="pseudo" name="pseudo" label="Pseudo" placeholder="Choose your pseudo" />
                        </div>
                        <x-inputs.email id="email" name="email" label="Email"/>
                        <x-inputs.password id="password" name="password" label="Password" placeholder="Enter your password" />
                        <x-inputs.password id="password_confirmation" name="password_confirmation" label="Password confirmation" placeholder="Confirm your password" />
                        <x-inputs.submit value="Register" class="justify-center"/>
                    </form>
                    <div class="mt-1 p-1 group cursor-pointer">
                        <a class="text-sm text-gray-400 group-hover:text-gray-600 duration-200" href="{{ url('/login') }}">Already have an account? Sign in here.</a>
                    </div>
                </div>
            </div>
        </div>
    </x-container_100vh>  
</x-layout>