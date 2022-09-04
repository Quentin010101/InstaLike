<div class="p-3">
    <div class=" py-1">
        <label class="text-gray-400 font-semibold" for="">{{ $label }}</label>
    </div>
    <div class="">
        {{-- <input {{ $attributes }}class="px-4 py-2 rounded-lg bg-gray-100"
               type="{{$type}}" name="{{$name}}" placeholder="{{$placeholder ? $placeholder : ''}}" value="{{$value}}" > --}}
        <input {{ $attributes }}class="w-full text-gray-800 border-b border-gray-300 focus:border-transparent focus:outline-none transition-[border] p-1"
               type="{{$type}}" name="{{$name}}" placeholder="{{$placeholder ? $placeholder : ''}}" value="{{$value}}" >
    </div>
    @error( $name )
        <x-errors.form_error :message="$message" />
    @enderror
</div>