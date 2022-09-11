<div class="mt-12 p-10 bg-white dark:bg-gray-600 rounded-xl shadow h-fit md:w-[600px] lg:w-[800px] xl:w-[1000px]">
    <form wire:submit.prevent="upload">
        @csrf
        <div class="border-2 rounded-xl border-gray-300 relative">
            <div class="rounded-xl overflow-hidden min-h-[300px] max-h-[50vh] w-fit mx-auto">
                @if ($image)
                    <img  class="object-scale-down  min-h-[300px] max-h-[50vh] w-full rounded-xl " src="{{ $image->temporaryUrl() }}">
                @endif
            </div>
            <label class=" absolute top-0 left-0 bottom-0 right-0 cursor-pointer" for="image"></label>
            <input class="hidden" type="file" name="image" id="image" wire:model="image">
        </div>
        <div>
            <x-inputs.text name="description" type="text" label="Enter an image description" placeholder="Enter a description" value="" wire:model="description"/>
        </div>
        <div>
            <x-buttons.validation>
                <p>Upload Image</p>
            </x-buttons.validation>
        </div>
    </form>
</div>
