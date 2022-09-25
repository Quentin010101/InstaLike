<div>
    <div id="container" class="flex flex-row gap-2">
        <div id="colone1" class="flex flex-col gap-y-2 items-center justify-center max-w-[250px]">
            @foreach ($imagesFavorite as $image)
                @if ($loop->iteration <= 4)
                    <livewire:img :image="$image" :wire:key="$loop->iteration" />
                @endif
            @endforeach
        </div>
        <div id="colone2" class="flex flex-col gap-y-2 items-center justify-center max-w-[250px]">
            @foreach ($imagesFavorite as $image)
                @if ($loop->iteration > 4 && $loop->iteration < 8)
                    <livewire:img :image="$image" :wire:key="$loop->iteration" />
                @endif
            @endforeach
        </div>
        <div id="colone3" class="flex flex-col gap-y-2 items-center justify-center max-w-[250px]">
            @foreach ($imagesFavorite as $image)
                @if ($loop->iteration > 8 && $loop->iteration < 13)
                    <livewire:img :image="$image" :wire:key="$loop->iteration" />
                @endif
            @endforeach
        </div>
        <div id="colone4" class="flex flex-col gap-y-2 items-center justify-center max-w-[250px]">
            @foreach ($imagesFavorite as $image)
                @if ($loop->iteration > 13 && $loop->iteration < 17)
                    <livewire:img :image="$image" :wire:key="$loop->iteration" />
                @endif
            @endforeach
        </div>
        <div id="colone5" class="flex flex-col gap-y-2 items-center justify-center max-w-[250px]">
            @foreach ($imagesFavorite as $image)
                @if ($loop->iteration > 17 && $loop->iteration < 22)
                    <livewire:img :image="$image" :wire:key="$loop->iteration" />
                @endif
            @endforeach
        </div>
        <div id="colone6" class="flex flex-col gap-y-2 items-center justify-center max-w-[250px]">
            @foreach ($imagesFavorite as $image)
                @if ($loop->iteration > 22 && $loop->iteration < 26)
                    <livewire:img :image="$image" :wire:key="$loop->iteration" />
                @endif
            @endforeach
        </div>
    </div>
</div>
