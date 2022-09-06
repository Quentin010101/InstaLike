<div class="p-2 w-full shadow-md dark:shadow-lg rounded-xl">
    <div>
        <h2 class="font-semibold text-lg py-3 text-red-400">Update your information</h2>
        <form wire:submit.prevent="submit">
            <div class="lg:px-10">
                <div>
                    <x-inputs.text type="text" label="Name" name="name" value="{{ $name }}"
                        placeholder="Enter your name" wire:model="name">
                        </x-inputs>
                </div>
                <div>
                    <x-inputs.text type="text" label="Lastname" name="lastname" value="{{ $lastname }}"
                        placeholder="Enter your lastname" wire:model="lastname">
                        </x-inputs>
                </div>
                <div>
                    <x-inputs.text type="text" label="Pseudo" name="pseudo" value="{{ $pseudo }}"
                        placeholder="Choose a new pseudo" wire:model="pseudo">
                        </x-inputs>
                </div>
            </div>
            <div class="text-green-600 flex gap-x-2 lg:px-10 h-10 lg:h-6 ">
                @if (session()->has('message_update'))
                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </span>
                    {{ session('message_update') }}
                @endif
            </div>
            <div class="my-5 w-full flex justify-center">
                <x-buttons.validation wire:dirty>
                    <p>Update Information</p>
                </x-buttons.validation>
            </div>
        </form>
    </div>
</div>
