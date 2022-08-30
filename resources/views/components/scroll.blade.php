@foreach ($images as $image)
<div class="test{{ $image->id }}">
    <x-card :image="$image"></x-card>
</div>
@endforeach