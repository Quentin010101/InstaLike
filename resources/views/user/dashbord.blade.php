<x-layout>
    <x-navigation></x-navigation>
    <div class="flex relative min-h-screen">
        <x-aside_user :isActiveFeed="$isActiveFeed" :isActiveProfile="$isActiveProfile" :isActiveSettings="$isActiveSettings"></x-aside_user>
        <main class="md:ml-64 lg:ml-80 w-full pt-16">
            @if(session('status'))
                <div>
                    {{ session('status') }}
                </div>
            @endif
            @if($isActiveFeed)
                <div class="relative bg-gray-100 px-2 sm:px-4 md:px-6 lg:px-12 xl:px-32 flex flex-col items-center gap-y-5 h-full">
                    <livewire:card-container >
                </div>
            @endif
            @if($isActiveProfile)
                <livewire:profile>
            @endif
            @if($isActiveSettings)

            @endif
        </main>
    </div>
</x-layout>
