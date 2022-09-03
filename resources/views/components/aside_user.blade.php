<aside class="w-64 lg:w-80 border-r fixed top-16 left-0 hidden md:block md:h-screen shadow shadow-gray-400">
    <livewire:aside></livewire:aside>
    <div class="border-t py-8">
        <nav>
            <ul>
                <div class="text-lg py-1">
                    <x-links.nav name="Feed" url="/dashbord/feed" :isActive="$isActiveFeed" >
                        <x-heroicon-o-home @class(['h-6 w-6', 'stroke-red-400' => $isActiveFeed, 'stroke-gray-600' => !$isActiveFeed]) stroke-width="{{ $isActiveFeed ? 2 : 1 }}"/>                                 
                    </x-links.nav>
                </div>
                <div class="text-lg py-1">
                    <x-links.nav name="Profile" url="/dashbord/profile" :isActive="$isActiveProfile" >
                        <x-heroicon-o-user @class(['h-6 w-6', 'stroke-red-400' => $isActiveProfile, 'stroke-gray-600' => !$isActiveProfile])  stroke-width="{{ $isActiveProfile ? 2 : 1 }}" />  
                    </x-links.nav>
                </div>
                <div class="text-lg py-1">
                    <x-links.nav name="Settings" url="/dashbord/settings" :isActive="$isActiveSettings" >
                        <x-heroicon-s-cog  @class(['h-6 w-6', 'stroke-red-400' => $isActiveSettings, 'stroke-gray-600' => !$isActiveSettings]) stroke-width="{{ $isActiveSettings ? 2 : 1 }}" fill="white"  />                
                    </x-links.nav>
                </div> 
            </ul>
        </nav>
    </div>
</aside>
