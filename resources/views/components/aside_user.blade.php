<aside class="w-64 lg:w-80 border-r fixed top-16 left-0 hidden md:block md:h-screen bg-white dark:bg-gray-600 dark:border-gray-800">
    <livewire:aside></livewire:aside>
    <div class="border-t dark:border-gray-800 py-8">
        <nav>
            <ul>
                <div class="text-lg py-1">
                    <x-links.nav name="Feed" url="/dashbord/feed" :isActive="$isActiveFeed" >
                        <x-heroicon-o-home @class(['h-6 w-6', 'stroke-red-400' => $isActiveFeed, 'stroke-gray-600' => !$isActiveFeed, 'dark:stroke-gray-100' => !$isActiveFeed]) stroke-width="{{ $isActiveFeed ? 2 : 1 }}"/>                                 
                    </x-links.nav>
                </div>
                <div class="text-lg py-1">
                    <x-links.nav name="Profile" url="/dashbord/profile" :isActive="$isActiveProfile" >
                        <x-heroicon-o-user @class(['h-6 w-6', 'stroke-red-400' => $isActiveProfile, 'stroke-gray-600' => !$isActiveProfile, 'dark:stroke-gray-100' => !$isActiveProfile])  stroke-width="{{ $isActiveProfile ? 2 : 1 }}" />  
                    </x-links.nav>
                </div>
                <div class="text-lg py-1">
                    <x-links.nav name="Settings" url="/dashbord/settings" :isActive="$isActiveSettings" >
                        <x-heroicon-s-cog  @class(['h-6 w-6 fill-transparent', 'stroke-red-400' => $isActiveSettings, 'stroke-gray-600' => !$isActiveSettings, 'dark:stroke-gray-100' => !$isActiveSettings]) stroke-width="{{ $isActiveSettings ? 2 : 1 }}" fill="white"  />                
                    </x-links.nav>
                </div> 
                <div class="text-lg py-1">
                    <x-links.nav name="Settings" url="/dashbord/invitation" :isActive="$isActiveInvitation" >
                            <svg xmlns="http://www.w3.org/2000/svg" @class(['h-6 w-6 fill-transparent', 'stroke-red-400' => $isActiveInvitation, 'stroke-gray-600' => !$isActiveInvitation, 'dark:stroke-gray-100' => !$isActiveInvitation]) stroke-width="{{ $isActiveInvitation ? 2 : 1 }}" fill="white" viewBox="0 0 24 24"  >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                              
                        </x-links.nav>
                </div> 
            </ul>
        </nav>
    </div>
</aside>
