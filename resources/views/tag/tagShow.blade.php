<x-layout>
    <x-navigation></x-navigation>
    <main class="pt-16">
        <div class="grid grid-cols-2 mx-auto">
            <div>
                @foreach ($images as $image)
                @if($loop->even)
                    <x-card.card-tag :image="$image" :id="$id"></x-card.card-tag>
                    @endif
                @endforeach
            </div>
            <div>
                @foreach ($images as $image)
                @if($loop->odd)
                <x-card.card-tag :image="$image" :id="$id"></x-card.card-tag>
                @endif
                @endforeach
            </div>
        </div>
    </main>
</x-layout>
