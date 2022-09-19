<x-layout>
    <x-navigation></x-navigation>
    <main class="pt-16 bg-slate-100 dark:bg-slate-700">
        <div x-data class="bg-transparent ">
            <div class="w-fit mx-auto mt-5 mb-10 px-20 relative">
                <h2 class="text-xl font-semibold text-red-400 relative z-10">{{ ucfirst($tagName) }}</h2>
                <?xml version="1.0" encoding="iso-8859-1"?>
                <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg class="w-full absolute -bottom-14 left-0 " version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 381.322 381.322"
                     xml:space="preserve">
                <g>
                    <path class="fill-white dark:fill-slate-600" d="M296.582,6.053v369.21c0,2.376-1.383,4.516-3.534,5.503c-0.804,0.372-1.667,0.55-2.518,0.55
                        c-1.419,0-2.838-0.503-3.961-1.472l-95.907-82.84l-95.912,82.84c-1.797,1.554-4.327,1.921-6.475,0.922
                        c-2.148-0.987-3.535-3.127-3.535-5.503V6.053C84.741,2.704,87.445,0,90.793,0H290.53C293.875,0,296.582,2.704,296.582,6.053z"/>
                </g>
                </svg>
            </div>
            <div id="container" @resize.window="resize()" class="flex justify-center md:mx-12 mx-3 bg-transparent">
                <div id="colone1">
                    @foreach ($images as $image)
                        <div id="{{ $loop->iteration }}">
                            <x-card.card-tag :image="$image" :id="$id"></x-card.card-tag>
                        </div>
                    @endforeach
                </div>
                <div id="colone2"></div>
            </div>
        </div>
        <script>
            const container = document.getElementById('container')
            const colone1 = document.getElementById('colone1')
            const colone2 = document.getElementById('colone2')

            let status = {
                'xl': '',
                'sm': ''
            }


            if(window.innerWidth > 1000){
                enlarge()

                status.xl = true
                status.sm = false
            }else{
                status.xl = false
                status.sm = true
            }

            function enlarge () {

                let children = colone1.children
                let array = Array.from(children)
                let length = array.length

                for(let index = 1; index < length; index = index + 2){
                        colone1.removeChild(array[index])
                        colone2.appendChild(array[index])
                    }
            }

            function diminish () {

                let children1 = colone1.children
                let children2 = colone2.children

                let array1 = Array.from(children1)
                let array2 = Array.from(children2)

                let length = array2.length

                for(let index = 0; index < length; index ++){
                        colone2.removeChild(array2[index])
                        colone1.insertBefore(array2[index], array1[index].nextSibling)
                    }

            }

            function resize()
            {
                let width = window.innerWidth;
                if(width > 1000 && !status.xl){

                    enlarge()

                    status.xl = true
                    status.sm = false
                }
                if(width < 1000 && !status.sm){

                    diminish()

                    status.xl = false
                    status.sm = true
                }
            }

        </script>
    </main>
</x-layout>
