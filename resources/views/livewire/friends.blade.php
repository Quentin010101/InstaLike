<div class="p-2 w-full lg:p-4 shadow-md dark:shadow-lg rounded-xl">
    <h3 class="text-red-400 text-lg font-semibold pb-3">Friends list</h3>
    <ul>
        @forelse ($friends as $friend)
            <li class="p-2">
                <div class="flex items-center dark:bg-gray-400 bg-gray-100 p-2 rounded-lg gap-x-4">
                    <div class="h-7 w-7 overflow-hidden rounded-full border-2 border-red-400">
                        <img src="{{ '/storage/' . $friend->settings->avatar }}" alt="avatar">
                    </div>
                    <div class="font-semibold text-gray-600">
                        {{ $friend->settings->pseudo }}
                    </div>
                    <form wire:submit.prevent="invalid({{ $friend->id }})" class="mr-0 ml-auto">
                        @csrf
                        <x-buttons.invalide/>
                    </form>
                </div>
            </li>
        @empty
            <li class="text-gray-400">This is empty.</li>
        @endforelse
    </ul>
</div>
