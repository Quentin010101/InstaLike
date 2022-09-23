<div class="w-fit">
    <button wire:loading.class="hidden" @class(['px-3', 'py-2', 'bg-green-400' => !$text , 'bg-red-400' => $text, 'rounded-full', 
        'hover:bg-green-500' => !$text, 'hover:bg-red-500' => $text, 'duration-300', 'text-semibold', 'text-white']) 
         wire:click="add({{ $user->id }})">{{ $text ? 'Unfriend -' : 'Friend +' }}</button>
    <x-loader.loader target="add"></x-loader.loader>     
</div>
