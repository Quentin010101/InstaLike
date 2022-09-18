<div class="w-full fixed top-0 left-0 z-30">
    <header class="flex items-center p-4 bg-white dark:bg-slate-600 h-16 shadow-md shadow-grey-800">
        <div>
            <h1 class="w-min font-['Comic_Sans_MS'] text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-red-400 to-violet-500">InstaLike</h1>
        </div>
        <div class="ml-[100px]">
            <livewire:search-bar></livewire:search-bar>
        </div>
        <nav class="mr-0 ml-auto">
            <ul class="flex justify-end gap-x-5">
                @auth
                    <li>
                        <form action="{{ url('/logout') }}" method="POST">
                            @csrf
                            <div>
                                <div class="md:hidden">
                                </div>
                                <input class="text-red-400 hover:text-red-300 duration-300 cursor-pointer font-semibold" type="submit" value="Logout">
                            </div>
                        </form>
                    </li>
                    <li>
                        <a class="text-red-400 dark:bg-slate-500 bg-slate-100 p-2 border border-red-400 hover:text-red-300 hover:border-red-300 rounded-lg font-semibold duration-300" href="{{ url('/dashbord') }}">Dashbord</a>
                    </li>
                @endauth

                @guest
                    <li>
                        <a class="text-red-400 hover:text-red-300 duration-300 cursor-pointer font-semibold" href="{{ url('/login') }}">login</a>
                    </li>
                    <li>
                        <a class="text-red-400 bg-slate-100 p-2 border border-red-400 hover:text-red-300 hover:border-red-300 rounded-lg font-semibold duration-300" href="{{ url('/register') }}">register</a>
                    </li>
                @endguest
            </ul>
        </nav>
    </header>
</div>
