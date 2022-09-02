<div class="p-1">
    <div>
        <label class="font-semibold text-base text-blue-800" for="{{ $id }}">{{ $label }}</label>
    </div>
    <div class="my-1">
        <input class="w-full focus:outline-none focus:border-blue-800 focus:border-2 border-2 border-white py-2 px-4 rounded-lg bg-gray-100" type="text" name="{{ $name }}" id="{{ $id }}" placeholder="{{ $placeholder}}">
    </div>
    @error( $name )
        <x-errors.form_error :message="$message" />
    @enderror
</div>