<div class="p-2">
    <div class=" py-2">
        <label class="text-gray-600" for="">{{ $label }}</label>
    </div>
    <div>
        <input {{ $attributes }}class="px-4 py-2 rounded-lg bg-gray-100"
               type="{{$type}}" name="{{$name}}" placeholder="{{$placeholder ? $placeholder : ''}}" value="{{$value}}" >
    </div>
    @error( $name )
        <x-errors.form_error :message="$message" />
    @enderror
</div>