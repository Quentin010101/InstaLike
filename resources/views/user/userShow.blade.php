<x-layout>
    <x-navigation></x-navigation>
    <main class="pt-24 bg-slate-100 dark:bg-slate-700 min-h-screen">
        <div class=" mx-3 lg:mx-12 xl:mx-24 flex flex-col items-center">
            <div
                class="bg-white dark:bg-slate-600 flex flex-col gap-y-10 justify-center items-center p-3 lg:p-6 xl:p-12 max-w-[800px] rounded-xl shadow">
                <div class="flex flex-col md:flex-row justify-center items-center gap-5">
                    <x-avatar class="h-40 w-40 border-4">
                        {{ $user->settings->avatar }}
                    </x-avatar>
                    <div class="flex flex-col md:flex-row items-center gap-5">
                        <div>
                            <div class="text-slate-600 dark:text-slate-200 font-bold text-lg">
                                {{ $user->settings->pseudo }}
                            </div>
                            @if ($user->settings->privacy == 'public')
                                <div class="text-slate-600 dark:text-slate-200 font-semibold">
                                    Has <span class="text-slate-400 dark:text-slate-800">{{ $follower->count() }}</span> followers
                                </div> 
                                <div class="text-slate-400 dark:text-slate-800 font-semibold text-sm">
                                    <span>This account is public.</span>
                                </div>   
                            @else
                                <div class="text-slate-600 dark:text-slate-200 font-semibold">
                                    <span>This account is private.</span>
                                </div>                                                               
                            @endif
                        </div>
                        @auth
                            <livewire:friend-user :user="$user">
                            @endauth
                    </div>
                </div>
                <div class="bg-slate-100 dark:bg-slate-300 p-6 rounded-lg text-slate-600">
                    {{ $user->settings->description }}
                </div>
                @auth
                    @if ($user->settings->privacy == 'public')
                        <livewire:follow-user :user="$user">
                    @endif
                @endauth
            </div>
            @if ($user->settings->privacy == 'public')
                <div>
                    <div class="flex flex-col gap-y-5 md:mx-12 mx-3 bg-transparent">
                        <div>
                            @foreach ($images as $image)
                                <div id="{{ $loop->iteration }}">
                                    <div
                                        class="p-5 shadow shadow-xl rounded-xl mx-3 my-6 relative group bg-white dark:bg-slate-600 xl:max-w-[1000px] lg:max-w-[800px] md:max-w-[600px] max-w-[400px]">
                                        <div class="p-3 mb-4 font-semibold text-slate-400 text-sm">
                                            <h3>Posted <span
                                                    class="text-slate-600 dark:text-slate-200">{{ $image->created_at->format('d/m/Y') }}</span>
                                            </h3>
                                        </div>
                                        <div
                                            class="overflow-hidden max-h-[700px] xl:max-w-[1000px] lg:max-w-[800px] md:max-w-[600px] max-w-[400px] rounded-xl">
                                            <img class="object-fit max-h-[700px] xl:max-w-[1000px] lg:max-w-[800px] md:max-w-[600px] max-w-[400px]  rounded-xl mx-auto"
                                                src="{{ asset('/storage/' . $image->path) }}" alt="image">
                                        </div>
                                        <div class="flex gap-2 p-3 pb-0 justify-end">
                                            @foreach ($image->tags as $tag)
                                                <a href="/tag/{{ $tag->id }}">
                                                    <x-card.tag>
                                                        {{ $tag->tag }}
                                                    </x-card.tag>
                                                </a>
                                                @if ($loop->iteration > 5)
                                                @break
                                            @endif
                                        @endforeach
                                    </div>
                                    <livewire:comment-form :image="$image" :wire:key="$image->id">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
</main>
</x-layout>
