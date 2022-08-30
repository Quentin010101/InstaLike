<div class="p-2">
    <div>
        <label class="font-semibold text-base text-blue-800" for="{{ $id }}">{{ $label }}</label>
    </div>
    <div class="my-1">
        <input class="focus:outline-none focus:border-blue-800 focus:border-2 border-2 border-white p-3 rounded-lg bg-gray-100" type="text" name="{{ $name }}" id="{{ $id }}" placeholder="Enter your name">
    </div>
    @error('name')
        <x-errors.form_error :message="$message" />
    @enderror
</div>