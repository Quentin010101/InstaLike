<x-layout>
    <x-navigation></x-navigation>
    <main class="pt-24 bg-slate-100 dark:bg-slate-700 min-h-screen">
        <div class=" mx-3 lg:mx-12 xl:mx-24 flex flex-col items-center">
            <div
                class="bg-white dark:bg-slate-600 flex flex-col gap-y-10 justify-center items-center p-3 lg:p-6 xl:p-12 max-w-[800px] rounded-xl shadow">
                <div class="flex flex-col md:flex-row justify-center items-center gap-5">
                    <x-avatar class="h-40 w-40 border-4">
                        {{ $user->settings->avatar }}
                    </x-avatar>
                    <div class="flex flex-col md:flex-row items-center gap-5">
                        <div>
                            <div class="text-slate-600 font-bold text-lg">
                                {{ $user->settings->pseudo }}
                            </div>
                            <div class="text-slate-600 font-semibold">
                                Has <span class="text-slate-400">{{ $follower->count() }}</span> followers
                            </div>
                        </div>
                        <livewire:friend-user :user="$user">
                    </div>
                </div>
                <div class="bg-slate-100 p-6 rounded-lg text-slate-600">
                    {{ $user->settings->description }}
                </div>
            </div>
            <div x-data>
                <div id="container" @resize.window="resize()" class="flex justify-center md:mx-12 mx-3 bg-transparent">
                    <div id="colone1">
                        @foreach ($user->images as $image)
                            <div id="{{ $loop->iteration }}">
                                <div
                                    class="p-4 shadow shadow-xl rounded-xl mx-3 my-6 relative group bg-white dark:bg-slate-600 max-w-[600px]">
                                    <div class="overflow-hidden max-h-[700px] max-w-[600px]">
                                        <img class="" src="{{ asset('/storage/' . $image->path) }}"
                                            alt="image">
                                    </div>
                                    <livewire:comment-form :image="$image" :wire:key="$image->id">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div id="colone2"></div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
<script>
    const container = document.getElementById('container')
    const colone1 = document.getElementById('colone1')
    const colone2 = document.getElementById('colone2')

    let status = {
        'xl': '',
        'sm': ''
    }


    if (window.innerWidth > 1000) {
        enlarge()

        status.xl = true
        status.sm = false
    } else {
        status.xl = false
        status.sm = true
    }

    function enlarge() {

        let children = colone1.children
        let array = Array.from(children)
        let length = array.length

        for (let index = 1; index < length; index = index + 2) {
            colone1.removeChild(array[index])
            colone2.appendChild(array[index])
        }
    }

    function diminish() {

        let children1 = colone1.children
        let children2 = colone2.children

        let array1 = Array.from(children1)
        let array2 = Array.from(children2)

        let length = array2.length

        for (let index = 0; index < length; index++) {
            colone2.removeChild(array2[index])
            colone1.insertBefore(array2[index], array1[index].nextSibling)
        }

    }

    function resize() {
        let width = window.innerWidth;
        if (width > 1000 && !status.xl) {

            enlarge()

            status.xl = true
            status.sm = false
        }
        if (width < 1000 && !status.sm) {

            diminish()

            status.xl = false
            status.sm = true
        }
    }
</script>
