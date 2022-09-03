<div class="mt-8 flex bg-gray-100">
    <div class="bg-white mx-3 lg:mx-6 xl:mx-12 rounded-xl p-5 flex flex-col lg:flex-row w-full">
        <div class="p-2">
            <form wire:submit.prevent="avatar_upload">
                <div class="relative">
                    <div
                        class="rounded-full h-56 w-56 border-4 border-red-400 overflow-hidden shadow-md shadow-gray-300">
                        @if ($avatar)
                            <img src="{{ $avatar->temporaryUrl() }}">
                        @endif
                    </div>
                    <div class="absolute top-0 left-0 rounded-full h-56 w-56 overflow-hidden">
                        <label
                            class="block h-full w-full cursor-pointer flex justify-center items-center text-lg font-semibold text-gray-500 hover:text-gray-700 duration-200"
                            for="avatar_input">Clik here</label>
                        <input class=" hidden" id="avatar_input" type="file" wire:model="avatar">
                    </div>
                </div>
                @error('avatar')
                    <x-errors.form_error :message="$message" />
                @enderror
                @if ($avatar)
                    <x-buttons.validation>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <p>Click to upload</p>
                    </x-buttons.validation>
                @endif
            </form>
        </div>
        <div class="p-2">
            <div>
                <form wire:submit.prevent="submit">
                    <div>
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
                    @isset($message_update)
                        <div class="">
                            {{ $message_update }}
                        </div>
                    @endisset
                        <x-buttons.validation>
                            <p>Update Information</p>
                        </x-buttons.validation>
                </form>
            </div>
        </div>
    </div>
</div>
