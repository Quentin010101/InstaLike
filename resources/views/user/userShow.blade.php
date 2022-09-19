<x-layout>
    <x-navigation></x-navigation>
    <main class="pt-24 bg-slate-100 dark:bg-slate-700 min-h-screen">
        <div class=" mx-3 lg:mx-12 xl:mx-24 flex flex-col items-center">
            <div class="bg-white dark:bg-slate-600 flex flex-col gap-y-10 justify-center items-center p-3 lg:p-6 xl:p-12 max-w-[800px] rounded-xl shadow">
                <div class="h-28 w-28 rounded-full border-4 border-red-400 bg-white overflow-hidden">
                   <img src="{{ asset('storage/' . $user->settings->avatar) }}" alt="">
                </div>
                <div>
                    <div class="flex items-center gap-3">
                        <div class="text-slate-600 font-bold text-lg">
                           {{ $user->settings->pseudo }}
                        </div>
                        <livewire:friend-user :user="$user">
                    </div>
                   <div class="text-slate-600 font-semibold">
                       Has <span class="text-slate-400">{{ $follower->count() }}</span> followers
                   </div>
                </div>
                <div class="bg-slate-100 p-6 rounded-lg text-slate-600">
                   {{ $user->settings->description }}
                </div>
            </div>
        </div>
    </main>
</x-layout>