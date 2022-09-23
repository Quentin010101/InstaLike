<div class="p-2 w-full lg:p-4 shadow-md dark:shadow-lg rounded-xl">
    <h3 class="text-red-400 text-lg font-semibold pb-3">Friends list</h3>
    <ul>
        @forelse ($friends as $friend)
            <li class="p-2">
                <div class="flex items-center dark:bg-slate-400 bg-slate-100 p-2 rounded-lg gap-x-4">
                    <x-avatar class="h-7 w-7 border-2">
                        {{ $friend->settings->avatar  }}
                    </x-avatar>
                    <div class="font-semibold text-gray-600">
                        {{ $friend->settings->pseudo }}
                    </div>
                    <div class="mr-0 ml-auto">
                        <div  wire:loading.class="hidden" wire:target="invalid({{ $friend->id }})">
                            <form wire:submit.prevent="invalid({{ $friend->id }})" class="mr-0 ml-auto">
                                @csrf
                                <x-buttons.invalide/>
                            </form>
                        </div>
                        <div>
                            <x-loader.loader target="invalid({{ $friend->id }})"></x-loader.loader>
                        </div>
                    </div>
                </div>
            </li>
        @empty
            <li class="text-gray-400">This is empty.</li>
        @endforelse
    </ul>
</div>
