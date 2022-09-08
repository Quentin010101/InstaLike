<div class="flex gap-x-5">
    <div class="w-full p-2  lg:p-4 shadow-md dark:shadow-lg rounded-xl">
        <h3 class="text-red-400 text-lg font-semibold pb-3">You recieved some invitation</h3>
        <ul>
            @forelse ($invitations_recieved as $invitation)
                <li class="p-3">
                    <div class="flex items-center bg-gray-100 p-2 rounded-lg gap-x-4">
                        <div class="h-7 w-7 overflow-hidden rounded-full border-2 border-red-400">
                            <img src="{{ '/storage/' . $invitation->settings->avatar }}" alt="avatar">
                        </div>
                        <div class="font-semibold text-gray-600">
                            {{ $invitation->name }}
                        </div>
                        <div class="flex gap-x-2 mr-0 ml-auto" >
                            <form wire:submit.prevent="valid">
                                @csrf
                                <input type="hidden" name="invitation" value="{{$invitation->id}}" wire:model="invitation">
                                <div >
                                    <x-buttons.valide />
                                </div>
                            </form>
                            <form wire:submit.prevent="invalid">
                                <input type="hidden" name="invitation" value="{{$invitation->id}}" wire:model="invitation">
                                <div >
                                    <x-buttons.invalide />
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            @empty
                <li class="text-gray-400">This is empty.</li>
            @endforelse
        </ul>
    </div>
    <div class="p-2 w-full lg:p-4 shadow-md dark:shadow-lg rounded-xl">
        <h3 class="text-red-400 text-lg font-semibold pb-3">Friends list</h3>
        <ul>
            @forelse ($friends as $friend)
                <li class="p-3">
                    <div class="flex items-center bg-gray-100 p-2 rounded-lg gap-x-4">
                        <div class="h-7 w-7 overflow-hidden rounded-full border-2 border-red-400">
                            <img src="{{ '/storage/' . $friend->settings->avatar }}" alt="avatar">
                        </div>
                        <div class="font-semibold text-gray-600">
                            {{ $friend->name }}
                        </div>
                        <form wire:submit.prevent="submit" class="flex gap-x-2">
                            @csrf
                            <x-buttons.invalide wire:click="invalidate" />
                        </form>
                    </div>
                </li>
            @empty
                <li class="text-gray-400">This is empty.</li>
            @endforelse
        </ul>
    </div>
</div>
