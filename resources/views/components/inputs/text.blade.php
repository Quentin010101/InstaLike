<div class="p-2">
    <div class=" py-2">
        <label class="text-gray-400 font-semibold" for="">{{ $label }}</label>
    </div>
    <div class="animate-pulse">
        {{-- <input {{ $attributes }}class="px-4 py-2 rounded-lg bg-gray-100"
               type="{{$type}}" name="{{$name}}" placeholder="{{$placeholder ? $placeholder : ''}}" value="{{$value}}" > --}}
        <input {{ $attributes }}class="border-b border-gray-300 focus:border-transparent focus:outline-none focus:bg-gray-100 p-2"
               type="{{$type}}" name="{{$name}}" placeholder="{{$placeholder ? $placeholder : ''}}" value="{{$value}}" >
    </div>
    @error( $name )
        <x-errors.form_error :message="$message" />
    @enderror
</div>