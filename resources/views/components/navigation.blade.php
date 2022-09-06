<div class="w-full fixed top-0 left-0 z-10">
    <header class="flex items-center p-4 bg-white dark:bg-gray-600 h-16 shadow-md shadow-grey-800">
        <div>
            <h1 class="w-min font-['Comic_Sans_MS'] text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-red-400 to-violet-500">InstaLike</h1>
        </div>
        <nav class="mr-0 ml-auto">
            <ul class="flex justify-end gap-x-3">
                @auth
                    <li>
                        <form action="{{ url('/logout') }}" method="POST">
                            @csrf
                            <div>
                                <div class="md:hidden">
                                </div>
                                <input class="dark:text-gray-400 dark:hover:text-gray-200 duration-300 cursor-pointer" type="submit" value="Logout">
                            </div>
                        </form>
                    </li>
                    <li>
                        <a class="dark:text-gray-400 dark:hover:text-gray-200 duration-300" href="{{ url('/dashbord') }}">Dashbord</a>
                    </li>
                @endauth

                @guest
                    <li>
                        <a class="dark:text-gray-400 dark:hover:text-gray-200 duration-300" href="{{ url('/login') }}">login</a>
                    </li>
                    <li>
                        <a class="dark:text-gray-400 dark:hover:text-gray-200 duration-300" href="{{ url('/register') }}">register</a>
                    </li>
                @endguest
            </ul>
        </nav>
    </header>
</div>
