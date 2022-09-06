<div>
    <div class="px-3 py-6 flex justify-between w-full font-semibold">
        <div class="flex items-center gap-2 text-gray-700 dark:text-gray-100 cursor-pointer">
            <div class="flex gap-x-2 items-center" wire:click="like">
                <x-heroicon-o-heart @class([
                    'h-5',
                    'w-5',
                    'fill-red-500' => $isLiked,
                    'stroke-red-500' => $isLiked,
                    'animate-heart' => $isLiked,
                ]) />
                <h4>{{ $count }} Like</h4>
            </div>
        </div>
        <div class="flex items-center gap-2 text-gray-700 dark:text-gray-100 font-semibold">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
            </svg>              
            <h4 @class(['animate-heart' => $isCommented,])>{{ $comments->count() }}</h4>
            <h4>Comments</h4>
        </div>
    </div>
    <div class="py-3 bg-gray-100 dark:bg-gray-400 rounded-lg">
        <p class="p-3 text-gray-600 dark:text-gray-100 font-semibold text-md">{{ $image->description }}</p>
    </div>
    <div x-data="{ open: false }" class="min-h-full pt-4">
        <div x-show="open" @click.outside="open = false" x-transition.duration.300ms>
            <div class="flex py-3">
                <div class="border-l border-gray-200 mx-5"></div>
                <div>
                    @foreach ($comments as $comment)
                        <div class="py-3">
                            <div class="flex items-center gap-x-3">
                                <div class="h-7 w-7 overflow-hidden rounded-full border-2 border-red-400">
                                    <img src="{{ '/storage/' . $comment->user->settings->avatar }}" alt="avatar">
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-400">
                                        {{ $comment->user->settings->pseudo }}</h4>
                                    <h4 class="text-xs text-gray-300">{{ $comment->created_at->format('d/m/y') }} at
                                        {{ $comment->created_at->format('H:i') }}</h4>
                                </div>
                            </div>
                            <p class="text-md text-gray-600 dark:text-gray-100 px-4">{{ $comment->comment }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <form wire:submit.prevent="submit" class="py-4">
                @csrf
                <div class="flex items-center gap-x-2">
                    <div
                        class="hidden xl:flex bg-gradient-to-r from-red-400 to-purple-500 rounded-full w-[3.5rem] h-[3.5rem] justify-center items-center">
                        <div class="bg-white dark:bg-gray-600 rounded-full h-12 w-12 overflow-hidden opacity-80">
                            <img src="{{ asset('storage/' . Auth()->user()->settings->avatar) }}" alt="user-avatar">
                        </div>
                    </div>
                    <div class="flex items-center flex-col xl:flex-row gap-x-2 gap-y-2 justify-center w-full xl:w-auto">
                        <div>
                            <input
                                class="focus:outline-none border-2 border-transparent focus:border-gray-200 p-3 bg-gray-100 rounded-full w-96"
                                type="text" name="comment" id="comment" placeholder="Write your comment..."
                                wire:model="comment">
                        </div>
                        <div>
                            <button
                                class="font-mono py-3 px-3 bg-green-100 border border-green-100 text-green-400 hover:border-green-300 hover:bg-green-300 bg-white duration-200 rounded-xl hover:text-white"
                                type="submit">Add Comment</button>
                        </div>
                    </div>
                </div>
                @error('comment')
                    <div class="p-2">
                        <x-errors.form_error :message="$message" />
                    </div>
                @enderror
            </form>
        </div>
        <div class="flex justify-end pb-2 mt-3">
            <div
                class="flex items-center text-gray-600 dark:text-gray-300 dark:hover:text-gray-100 hover:text-gray-500 duration-300">
                <button x-text="open ? 'see less..' : 'see more..'"
                    class="font-mono w-24 px-2 py-1 font-semibold text-sm" @click="open = ! open"></button>
            </div>
        </div>
    </div>
</div>
