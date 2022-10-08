<x-layout>
    <x-navigation2></x-navigation2>
    <main class="bg-slate-100 dark:bg-slate-700 min-h-[800px] h-screen relative overflow-hidden">
        <section>
            <div class="opacity-25 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2">
                <x-carousel :imagesFavorite="$imagesFavorite" />           
            </div>
        </section>
        <div class=" absolute top-1/3 left-1/2 -translate-x-1/2 w-full flex flex-col items-center gap-4">
            <div>
                <h1 class="w-min font-['Comic_Sans_MS'] text-5xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-red-400 to-violet-500">InstaLike</h1>
            </div>
            <div>
                <h2 class="text-2xl text-slate-700 font-semibold">The <span class="underline text-3xl text-red-400 decoration-red-400 decoration-4">Best</span>  
                                        <span class="underline text-3xl text-pink-400 decoration-pink-400 decoration-4">Place</span>  to 
                                        <span class="underline text-3xl text-purple-400 decoration-purple-400 decoration-4">Share</span>  your 
                                        <span class="underline text-3xl text-blue-400 decoration-blue-400 decoration-4">Photos</span> </h2>
            </div>
            <div class="h-16">
                <livewire:search-bar></livewire:search-bar>
            </div>
        </div>
    </main>
</x-layout>