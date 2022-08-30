<div class="relative bg-gray-100 px-2 sm:px-4 md:px-6 lg:px-12 xl:px-32 flex flex-col items-center gap-y-5 h-full">
    @forelse ($images as $image)
        <div>
            <x-card :image="$image"></x-card>
        </div>
    @empty
        <div class="flex flex-col justify-center items-center text-gray-600 text-lg font-semibold h-full">
            <p>
                It's all empty!
            </p>
            <p>
                You need to post or follow some account to fill your page.
            </p>
        </div>
    @endforelse
    <div id="next-cursor" class="hidden">{{ $nextCursor }}</div>
    <div id="new-images"></div>
    <div id="loading-component" class="absolute bottom-6 left-1/2 flex gap-x-4 hidden">
        <div class="h-5 w-5 bg-gray-400 rounded-full animate-bounce"></div>
        <div class="h-5 w-5 bg-gray-500 rounded-full animate-bounce"></div>
        <div class="h-5 w-5 bg-gray-600 rounded-full animate-bounce"></div>
    </div>
</div>
