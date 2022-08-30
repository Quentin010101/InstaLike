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
                <x-dashbord.feed_main :images="$images" :nextCursor="$nextCursor" />
            @endif
            @if($isActiveProfile)

            @endif
            @if($isActiveSettings)

            @endif
        </main>
    </div>
</x-layout>
