<x-layout>
    <div class="block z-10 relative">
        <nav class="h-12 flex items-center justify-end p-3 bg-white dark:bg-gray-600">
            <ul class="flex gap-x-2">
                @auth
                    <li>
                        <form action="{{ url('/logout') }}" method="POST">
                            @csrf
                            <div >                             
                                <input class="text-gray-800 hover:text-gray-600 dark:text-gray-400 dark:hover:text-gray-200 duration-300 cursor-pointer"
                                    type="submit" value="Logout">
                            </div>
                        </form>
                    </li>
                    <li>
                        <a class="text-gray-800 hover:text-gray-600 dark:text-gray-400 dark:hover:text-gray-200 duration-300"
                            href="{{ url('/dashbord') }}">Dashbord</a>
                    </li>
                @endauth
            </ul>
        </nav>
    </div>
    <main class="flex justify-center bg-gray-100 dark:bg-gray-700 absolute pt-12 min-h-screen top-0 left-0 w-full">
        <livewire:image></livewire:image>
    </main>
</x-layout>
