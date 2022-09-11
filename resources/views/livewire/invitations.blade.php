    <div class="w-full p-2  lg:p-4 shadow-md dark:shadow-lg rounded-xl">
        <h3 class="text-red-400 text-lg font-semibold pb-3">You recieved some invitation</h3>
        <ul>
            @forelse ($invitations_recieved as $invitation)
            <li >
                <div class="p-2">
                    <div class="flex items-center dark:bg-gray-400 bg-gray-100 p-2 rounded-lg gap-x-4">
                        <div class="h-7 w-7 overflow-hidden rounded-full border-2 border-red-400">
                            <img src="{{ '/storage/' . $invitation->settings->avatar }}" alt="avatar">
                        </div>
                        <div class="font-semibold text-gray-600">
                            {{ $invitation->settings->pseudo }}
                        </div>
                        <div class="flex gap-x-2 mr-0 ml-auto">
                            <form wire:submit.prevent="valid({{ $invitation->id }})">
                                <div>
                                    <x-buttons.valide />
                                </div>
                            </form>
                            <form wire:submit.prevent="invalid({{ $invitation->id }})">
                                <div>
                                    <x-buttons.invalide />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            @empty
                <li class="text-gray-400">This is empty.</li>
            @endforelse
        </ul>
    </div>