<div>
    <div class="px-3 py-6 flex justify-between w-full font-semibold">
        <div class="flex items-center gap-2 text-gray-700 cursor-pointer">
            <livewire:like-livewire :image="$image" />
        </div>
        <div class="flex items-center gap-2 text-gray-700 font-semibold">
            <x-bi-chat class="stroke-1 stroke-gray-800"/>
            <h4>{{ $comments->count() }} Comments</h4> 
        </div>
    </div>
    <div class="py-3 bg-gray-100 rounded-lg">
        <p class="p-3 text-gray-600 font-semibold text-md">{{ $image->description }}</p>
    </div>
    <div x-data="{ open: false }" class="min-h-full pt-4">
        <div x-show="open" @click.outside="open = false" x-transition.duration.300ms class="shadow-inner shadow-gray-200 p-2 rounded-lg">
                @foreach ($comments as $comment)
                    <div class="py-3">
                        <div class="flex items-center gap-x-3">
                            <div class="h-7 w-7 overflow-hidden rounded-full border-2 border-red-400">
                                <img src="{{ '/storage/' . $comment->user->settings->avatar }}"
                                    alt="avatar">
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-gray-400">
                                    {{ $comment->user->name }}</h4>
                                <h4 class="text-xs text-gray-300">{{ $comment->created_at->format('d/m/y') }} at
                                    {{ $comment->created_at->format('H:i') }}</h4>
                            </div>
                        </div>
                        <p class="text-md text-gray-600 px-4">{{ $comment->comment }}</p>
                    </div>
                @endforeach
                <form wire:submit.prevent="submit" class="pt-4">
                    @csrf
                    <div class="flex items-center gap-x-5">
                        <div class="hidden xl:block rounded-full h-12 w-12 border-4 border-red-400 overflow-hidden opacity-50">
                            <img src="{{ asset('storage/' . Auth()->user()->settings->avatar) }}" alt="user-avatar">
                        </div>
                        <div class="flex items-center flex-col xl:flex-row gap-x-2 gap-y-2 justify-center w-full xl:w-auto">
                            <div>
                                <input class="p-3 bg-gray-100 rounded-full w-96" type="text" name="comment" id="comment" placeholder="Write your comment..." wire:model="comment">
                            </div>
                            <div>
                                <button class="py-1 px-2 border border-green-400 text-green-400 hover:bg-green-400 bg-white duration-200 rounded-xl hover:text-white" type="submit">Save Comment</button>
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
            <div class="flex items-center text-gray-400 hover:text-white duration-300 bg:white hover:bg-gray-400 rounded-xl border border-gray-400">
                <button x-text="open ? 'see less..' : 'see more..'"
                    class="w-24 px-2 py-1 font-semibold text-sm" @click="open = ! open"></button>
            </div>
        </div>
    </div>
</div>
