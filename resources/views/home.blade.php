<x-layout>
    <x-navigation2></x-navigation2>
    <main class="bg-slate-100 dark:bg-slate-700 min-h-[800px] h-screen relative overflow-hidden">
        <section>
            <div class="opacity-75 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2">
                 <x-carousel :imagesFavorite="$imagesFavorite" />           
            </div>
        </section>
        <div class="h-16 absolute top-1/3 left-1/2 -translate-x-1/2">
            <livewire:search-bar></livewire:search-bar>
        </div>
    </main>
</x-layout>