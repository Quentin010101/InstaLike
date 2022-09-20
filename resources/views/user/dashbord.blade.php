<x-layout>
    <x-navigation></x-navigation>
    <div class="flex relative min-h-screen">
        <x-aside_user :isActiveFeed="$isActiveFeed" :isActiveProfile="$isActiveProfile" :isActiveSettings="$isActiveSettings" :isActiveInvitation="$isActiveInvitation"></x-aside_user>
        <main class="md:ml-64 lg:ml-80 w-full pt-16 bg-slate-200 dark:bg-slate-700">
            @if (session('status'))
                <div>
                    {{ session('status') }}
                </div>
            @endif
            @if ($isActiveFeed)
                <div
                    class="relative px-2 sm:px-4 md:px-6 lg:px-12 xl:px-32 flex flex-col items-center gap-y-5 h-full">
                    <livewire:card-container>
                </div>
            @endif
            @if ($isActiveProfile)
                <div class="mt-8 flex">
                    <div class="bg-white dark:bg-slate-600 mx-3 lg:mx-6 xl:mx-12 rounded-xl p-5 lg:p-10 w-full flex flex-col gap-10">
                        <div class="flex flex-col lg:flex-row gap-10">
                            <livewire:profile-avatar>
                            <livewire:profile-name>
                        </div>
                        <div>
                            <livewire:profile-setting>
                        </div>
                    </div>
                </div>
            @endif
            @if ($isActiveSettings)
            <div class="mt-8 flex">
                <div class="bg-white dark:bg-slate-600 mx-3 lg:mx-6 xl:mx-12 rounded-xl p-5 lg:p-10 w-full">
                    <livewire:settings-page>
                </div>
            </div>
            @endif
            @if ($isActiveInvitation)
            <div class="mt-8 flex">
                <div class="bg-white dark:bg-slate-600 mx-3 lg:mx-6 xl:mx-12 rounded-xl p-5 lg:p-10 w-full">
                    <div class="flex flex-col lg:flex-row gap-x-5">
                    <livewire:invitations>
                    <livewire:friends>
                    </div>
                </div>
            </div>
            @endif
        </main>
    </div>
</x-layout>
