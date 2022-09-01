<div class="mt-8">
    <form wire:submit.prevent="submit">
        @csrf
        <div>
            <x-inputs.text name="$name" value="{{ $user->name }}" placeholder="Enter your name"></x-inputs> 
        </div>
        <div>
            <x-inputs.text name="$name" value="{{ $user->name }}" placeholder="Enter your name"></x-inputs> 
        </div>
        <div>
            <x-inputs.text name="$pseudo" value="{{ $user->settings->pseudo }}" placeholder="Choose a new pseudo"></x-inputs> 
        </div>
    </form>
</div>
