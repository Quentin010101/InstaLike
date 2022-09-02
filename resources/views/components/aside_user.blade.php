<aside class="w-64 lg:w-80 border-r fixed top-16 left-0 hidden md:block md:h-screen shadow shadow-gray-400">
    <div class="p-4 flex flex-col items-center ">
        <div class="mt-3 bg-gradient-to-r from-red-400 to-purple-500 rounded-full w-[6.6rem] h-[6.6rem] flex justify-center items-center">
            <div class="my-3 rounded-full overflow-hidden w-24 h-24 bg-white">
                <img src="{{ asset('storage/' . Auth()->user()->settings->avatar) }}" alt="avatar">
            </div>
        </div>
        <div class="py-3 w-full flex items-center flex-col ">
            <h2 class="text-base font-bold text-gray-700">{{ Auth()->user()->name }}
                 @isset(Auth()->user()->lastname)
                        {{ Auth()->user()->lastname }}
                 @endisset
                </h2>
            <h3 class="text-base font-semibold text-gray-500">{{ Auth()->user()->settings->pseudo }}</h3>
        </div>
        <div class="py-3 w-full flex justify-around">
            <div class="flex flex-col items-center">
                <h3 class="font-bold text-gray-300 text-base">{{ Auth()->user()->images->count()  }}</h3>
                <h3 class="font-bold text-sm text-gray-700">Post</h3>
            </div>
            <div class="flex flex-col items-center">
                <h3 class="font-bold text-gray-300 text-base">{{  Auth()->user()->followers->count()  }}</h3>
                <h3 class="font-bold text-sm text-gray-700">Followers</h3>
            </div>
            <div class="flex flex-col items-center">
                <h3 class="font-bold text-gray-300 text-base">{{ Auth()->user()->followings->count()  }}</h3>
                <h3 class="font-bold text-sm text-gray-700">Following</h3>
            </div>
        </div>
    </div>
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
