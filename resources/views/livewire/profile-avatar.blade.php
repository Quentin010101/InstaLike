<div class="p-2 w-full  shadow-md dark:shadow-lg rounded-xl">
    <h2 class="font-semibold text-lg py-3 text-red-400">Change your avatar</h2>
    <form wire:submit.prevent="avatar_upload">
        <div class="relative flex justify-center">
            <div class="bg-gradient-to-r from-red-400 to-purple-500 rounded-full w-56 h-56 flex justify-center items-center">
                <div class="relative rounded-full h-52 w-52 overflow-hidden bg-white dark:bg-slate-600">
                    @if ($avatar)
                        <img class="object-fill h-52 w-52" src="{{ $avatar->temporaryUrl() }}">
                    @else
                    <div class="absolute top-0 left-0 rounded-full h-52 w-52 overflow-hidden">
                        <label
                            class="block h-full w-full cursor-pointer flex justify-center items-center text-lg font-semibold text-gray-500 dark:text-gray-200 dark:hover:text-gray-400 hover:text-gray-700 duration-200"
                            for="avatar_input">Click here</label>
                        <input class=" hidden" id="avatar_input" type="file" wire:model="avatar">
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="w-full">
            @error('avatar')
                <x-errors.form_error :message="$message" />
            @enderror
        </div>
        <div class="my-5 w-full flex justify-center">
            @if ($avatar)
            <div wire:loading.remove>
                <x-buttons.validation>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    <p>Click to upload</p>
                </x-buttons.validation>
            </div>
            @endif
            <x-loader.loader target="avatar_upload"></x-loader.loader>
            <x-loader.loader target="avatar"></x-loader.loader>
        </div>
    </form>
</div>
