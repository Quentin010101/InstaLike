<div {{ $attributes->merge(['class'=> 'p-1']) }}>
    <div>
        <label class="font-semibold text-base text-blue-800" for="{{ $id }}">{{ $label }}</label>
    </div>
    <div class="my-1 ">
        <input class="w-full focus:outline-none focus:border-blue-800 focus:border-2 border-2 border-white py-2 px-4 rounded-lg bg-slate-100" type="email" name="{{ $name }}" id="{{ $id }}" placeholder="Enter your email address">
    </div>
    @error('email')
        <x-errors.form_error :message="$message" />
    @enderror
</div>