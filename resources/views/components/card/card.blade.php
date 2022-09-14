<div
    class="bg-white dark:bg-slate-600 pt-12 px-3 md:px-6 xl:px-12 pb-6 rounded-xl my-5 2xl:w-[900px] xl:w-[700px] lg:w-[600px] shadow-md dark:shadow-gray-600 shadow-gray-300">
    <div class="flex  pb-4">
        <div class="flex flex-col lg:items-center lg:flex-row gap-x-5 gap-y-3">
            <div class="flex gap-x-3">
                @if ($image->user->id == Auth()->user()->id)
                    <div
                        class="bg-gradient-to-r from-red-400 to-purple-500 rounded-full w-[4.5rem] h-[4.5rem] flex justify-center items-center">
                        <div
                            class="rounded-full h-16 w-16 bg-white dark:bg-slate-600 overflow-hidden shadow-md shadow-gray-300 dark:shadow-gray-800">
                            <img src="{{ asset('storage/' . $image->user->settings->avatar) }}" alt="avatar">
                        </div>
                    </div>
                @else
                    <div
                        class="rounded-full h-16 w-16 border-4 border-red-400 overflow-hidden shadow-md shadow-gray-300 dark:shadow-gray-800">
                        <img src="{{ asset('storage/' . $image->user->settings->avatar) }}" alt="avatar">
                    </div>
                @endif
                <div class="flex flex-col justify-center">
                    <div class="flex gap-x-4">
                        <h3 class="text-base font-semibold text-gray-600 dark:text-gray-100">
                            {{ $image->user->settings->pseudo }}</h3>
                        @if (in_array($image->user->id, $friendList))
                            <h4 class="text-base font-semibold text-red-400">Friend</h4>
                        @endif
                    </div>
                    <div class="flex gap-x-2 text-sm font-semibold text-gray-400 dark:text-gray-300">
                        @if ($image->user->settings->country)
                            <h3>{{ $image->user->settings->country }}</h3>
                        @endif
                        @if ($image->user->settings->country && $image->user->settings->city)
                            <span>,</span>
                        @endif
                        @if ($image->user->settings->city)
                            <h3>{{ $image->user->settings->city }}</h3>
                        @endif
                    </div>
                </div>
            </div>
            @if (!in_array($image->user->id, $friendList) && $image->user->id != Auth()->user()->id)
                <a class="group" href="/follower/unfollow/{{ $image->user->id }}">
                    <div
                        class="bg-red-400 group-hover:bg-red-600 duration-300 py-2 px-3 rounded-full text-sm font-semibold text-white w-fit h-fit">
                        <p>Unfollow -</p>
                    </div>
                </a>
            @endif
        </div>

        <div class="text-gray-400 dark:text-gray-300 mr-0 ml-auto text-xs flex lg:items-center">
            <div>
                <h3>{{ $image->created_at->format('d/m/Y') }}</h3>
                <h3>at {{ $image->created_at->format('H:i') }}</h3>
            </div>
        </div>
    </div>
    <div class="rounded-xl overflow-hidden min-h-[300px] max-h-[50vh] w-fit mx-auto">
        <img class="object-scale-down  min-h-[300px] max-h-[50vh] w-full rounded-xl "
            src="{{ asset('storage/' . $image->path) }}" alt="image">
    </div>
    <div class="flex gap-2 p-3 pb-0 justify-end">
        @foreach ($image->tags as $tag)
            <a href="/tag/{{ $tag->id }}">
                <x-card.tag>
                    {{ $tag->tag }}
                </x-card.tag>
            </a>
            @if($loop->iteration > 5)
                @break
            @endif
        @endforeach
    </div>
    <div>
        <livewire:comment-form :image="$image" :wire:key="$image->id">
    </div>
</div>
