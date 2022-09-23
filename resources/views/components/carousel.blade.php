<div>
    @foreach ($imagesFavorite as $image)
        <div>
            <img src="{{ asset('storage/' . $image->path)}}" alt="image favorite">           
        </div>
    @endforeach
</div>