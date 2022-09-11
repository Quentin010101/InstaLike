<div class="p-3">
    <div class=" py-1">
        <label class="text-gray-400 dark:text-gray-800 font-semibold" for="">{{ $label }}</label>
    </div>
    <div class="">
        <input {{ $attributes }}class="bg-transparent w-full text-gray-800 dark:text-gray-300 border-b border-gray-300 dark:border-gray-800 dark:focus:border-transparent focus:border-transparent focus:outline-none dark:transition-[border] transition-[border] p-1"
               type="{{$type}}" name="{{$name}}" placeholder="{{$placeholder ? $placeholder : ''}}" value="{{$value}}" >
    </div>
    @error( $name )
        <x-errors.form_error :message="$message" />
    @enderror
</div>