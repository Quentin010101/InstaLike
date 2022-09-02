<div class="mt-8">
    <form wire:submit.prevent="submit">
        @csrf
        <div>
            <x-inputs.text type="text" label="Name" name="name" value="{{ $user->name }}" placeholder="Enter your name"></x-inputs> 
        </div>
        <div>
            <x-inputs.text type="text" label="Lastname" name="lastname" value="{{ $user->lastname }}" placeholder="Enter your lastname"></x-inputs> 
        </div>
        <div>
            <x-inputs.text type="text" label="Pseudo" name="pseudo" value="{{ $user->settings->pseudo }}" placeholder="Choose a new pseudo"></x-inputs> 
        </div>
    </form>
</div>
