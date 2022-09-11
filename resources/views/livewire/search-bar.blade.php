<div>
    <div>
        <input type="text" name="search" id="search" wire:model="search">
        <ul>
            @foreach ($users as $user)
                <li>{{ $user->pseudo }}</li>
            @endforeach
        </ul>
    </div>
</div>
