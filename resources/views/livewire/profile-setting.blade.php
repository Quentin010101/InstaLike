<div class="p-2  shadow-md dark:shadow-lg rounded-xl">
    <div>
        <h2 class="font-semibold text-lg py-3 text-red-400">About yourself</h2>
        <form wire:submit.prevent="submit">
            <div>
                <div class="flex flex-col lg:flex-row w-full">
                    <div class="w-full lg:px-10">
                        <x-inputs.text type="text" label="Country" name="country" value="{{ $country }}"
                            placeholder="Enter your country" wire:model="country">
                            </x-inputs>
                    </div>
                    <div class="w-full lg:px-10">
                        <x-inputs.text type="text" label="City" name="city" value="{{ $city }}"
                            placeholder="Enter your city" wire:model="city">
                            </x-inputs>
                    </div>
                </div>
                <div class="lg:px-10">
                    <x-inputs.text type="text" label="Short description about yourself" name="description"
                        value="{{ $description }}" placeholder="Choose a new description" wire:model="description">
                        </x-inputs>
                </div>
            </div>
            <div class="text-green-600 flex gap-x-2 lg:px-10 h-6">
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
                <div wire:loading.class="hidden">
                    <x-buttons.validation>
                        <p>Update Information</p>
                    </x-buttons.validation>
                </div>
                <x-loader.loader></x-loader.loader>    
            </div>
        </form>
    </div>
</div>
