<div class="mt-8">
    <form wire:submit.prevent="submit">
        <div>
            <div>
                <x-inputs.text type="text" label="Name" name="name" value="{{ $name }}" placeholder="Enter your name" wire:model="name"></x-inputs> 
            </div>
            <div>
                <x-inputs.text type="text" label="Lastname" name="lastname" value="{{ $lastname }}" placeholder="Enter your lastname" wire:model="lastname"></x-inputs> 
            </div>
            <div>
                <x-inputs.text type="text" label="Pseudo" name="pseudo" value="{{ $pseudo }}" placeholder="Choose a new pseudo" wire:model="pseudo"></x-inputs> 
            </div> 
        </div>
            @isset($message_update)
                <div class="">
                    {{ $message_update }}
                </div>
            @endisset
        <div>
            <input type="submit" value="Update information">
        </div>
    </form>
</div>
