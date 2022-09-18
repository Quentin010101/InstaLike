<div class="absolute top-5 right-5 group-hover:opacity-100 opacity-0 duration-500 group-hover:delay-100 delay-1000">
    @if ($exist)
        <div>
                <div @class(['rounded' , 'bg-red-400' => $follow , 'bg-green-400' => !$follow]) wire:loading.class="hidden">
                    <button class="cursor-pointer px-3 py-2 font-semibold text-slate-600" wire:click="follow">{{ $follow ? 'Unfollow' : 'Follow' }}</button>
                </div>
                <x-loader.loader target="follow"></x-loader.loader>
        </div>
    @endif
</div>
