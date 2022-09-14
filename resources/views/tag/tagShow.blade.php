<x-layout>
    <x-navigation></x-navigation>
    <main class="pt-16 flex flex-wrap">
        @foreach ($images as $image)
        <div class="border border-blue-200 p-4 m-2">
            <div class="h-10 w-10 overflow-hidden">
                <img src="{{ asset('/storage/' . $image->path) }}" alt="">
            </div>
            @foreach ($image->tags as $tag)
                <span 
                @if ($tag->id == $id)
                    class="bg-red-400"                   
                @endif
                >{{$tag->tag}}</span>
            @endforeach
        </div>
        @endforeach
    </main>
</x-layout>
