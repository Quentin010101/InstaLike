<div class="relative">
    @forelse ($images as $image)
        <div>
            <x-card.card :image="$image" :friendList="$friendList" :wire:key="$image->id"></x-card.card>
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
    @if ($hasMorePages)
        <div x-data="{
            init() {
                let status = true
                let observer = new IntersectionObserver(function(entries){
                    entries.forEach(function(entry){
                        if (entry.isIntersecting && status) {
                            status = false
                            @this.call('loadImages')
                        } else {}
                    })
                }, {
                    root: null
                });
                observer.observe(this.$el);
            }
        }">
            <div class="w-full h-3 flex justify-center gap-x-5 py-5">
                <div class="h-3 w-3 rounded-full bg-gray-600 dark:bg-gray-300 animate-bounce"></div>
                <div class="h-3 w-3 rounded-full bg-gray-600 dark:bg-gray-300 animate-bounce"></div>
                <div class="h-3 w-3 rounded-full bg-gray-600 dark:bg-gray-300 animate-bounce"></div>
            </div>
        </div>
    @endif
</div>
