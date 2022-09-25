<div>
    <div x-data="{ time: Math.floor(Math.random() * 100000) }">
        <div class="relative h-[300px] w-[250px]" x-init="setTimeout(() => { $wire.update() }, time)">
            <div class="h-[300px] w-[250px] absolute inset-0 animate-appear blur-sm" wire:loading.remove="animate-appear">
                <img class="h-[300px] w-[250px] object-fill rounded-xl" src="{{ asset('storage/' . $image->path) }}"
                    alt="image favorite">
            </div>
        </div>
    </div>
</div>
