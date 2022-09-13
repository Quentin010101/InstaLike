<aside
    class="w-64 lg:w-80 border-r fixed top-16 left-0 hidden md:block md:h-screen bg-white dark:bg-slate-600 dark:border-gray-800">
    <livewire:aside></livewire:aside>
    <div class="border-t dark:border-gray-800 py-8">
        <div class="flex justify-center mb-10">
            <a  href="/image">
                <div
                    class="bg-200 bg-left hover:bg-right duration-300 bg-gradient-to-r from-red-400 via-purple-500 to-red-400 w-[7.5rem] h-12 flex justify-center items-center rounded-xl">
                    <div class="bg-white dark:bg-slate-600 max-w-fit rounded-lg">
                        <div
                            class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500 w-28 h-10 flex justify-center items-center ">
                            New Post <span class="text-lg">+</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <nav>
            <ul>
                <div class="text-lg py-1">
                    <x-links.nav name="Feed" url="/dashbord/feed" :isActive="$isActiveFeed">
                        <x-heroicon-o-home @class([
                            'h-6 w-6',
                            'stroke-red-400' => $isActiveFeed,
                            'stroke-gray-600' => !$isActiveFeed,
                            'dark:stroke-gray-100' => !$isActiveFeed,
                        ]) stroke-width="{{ $isActiveFeed ? 2 : 1 }}" />
                    </x-links.nav>
                </div>
                <div class="text-lg py-1">
                    <x-links.nav name="Profile" url="/dashbord/profile" :isActive="$isActiveProfile">
                        <x-heroicon-o-user @class([
                            'h-6 w-6',
                            'stroke-red-400' => $isActiveProfile,
                            'stroke-gray-600' => !$isActiveProfile,
                            'dark:stroke-gray-100' => !$isActiveProfile,
                        ]) stroke-width="{{ $isActiveProfile ? 2 : 1 }}" />
                    </x-links.nav>
                </div>
                <div class="text-lg py-1 relative">
                    <x-links.nav name="Invitation" url="/dashbord/invitation" :isActive="$isActiveInvitation">
                        <livewire:invitation-notification ></livewire:invitation-notification>
                        <svg xmlns="http://www.w3.org/2000/svg" @class([
                            'h-6 w-6 fill-transparent',
                            'stroke-red-400' => $isActiveInvitation,
                            'stroke-gray-600' => !$isActiveInvitation,
                            'dark:stroke-gray-100' => !$isActiveInvitation,
                        ])
                            stroke-width="{{ $isActiveInvitation ? 2 : 1 }}" fill="white" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </x-links.nav>
                </div>
                <div class="text-lg py-1">
                    <x-links.nav name="Settings" url="/dashbord/settings" :isActive="$isActiveSettings">
                        <svg xmlns="http://www.w3.org/2000/svg" @class([
                            'h-6 w-6 fill-transparent',
                            'stroke-red-400' => $isActiveSettings,
                            'stroke-gray-600' => !$isActiveSettings,
                            'dark:stroke-gray-100' => !$isActiveSettings,
                        ])
                            stroke-width="{{ $isActiveSettings ? 2 : 1 }}" fill="white" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </x-links.nav>
                </div>
            </ul>
        </nav>
    </div>
</aside>
