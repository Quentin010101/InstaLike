<div>
    <div>
        <div @class([
            'rounded',
            'bg-red-400' => $followed,
            'bg-green-400' => !$followed,
        ]) wire:loading.class="hidden">
            <button class="cursor-pointer px-3 py-2 font-semibold text-slate-600"
                wire:click="follow">{{ $followed ? 'Unfollow' : 'Follow' }}</button>
        </div>
        <x-loader.loader target="follow"></x-loader.loader>
    </div>
</div>
