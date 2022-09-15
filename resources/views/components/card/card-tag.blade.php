<div class="border border-blue-200 p-4 m-2">
    <div class="overflow-hidden max-h-[600px] max-w-[600px]">
        <img class="" src="{{ asset('/storage/' . $image->path) }}" alt="">
    </div>
    @foreach ($image->tags as $tag)
        <span 
        @if ($tag->id == $id)
            class="bg-red-400"                   
        @endif
        >{{$tag->tag}}</span>
    @endforeach
</div>