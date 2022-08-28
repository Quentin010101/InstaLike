<div>
    <div class="flex gap-x-2 items-center" wire:click="like">
        <x-heroicon-o-heart @class(['h-5', 'w-5', 'fill-gray-500' => $isLiked])  />
        <h4>{{ $count }} Like</h4>
    </div>
</div>
