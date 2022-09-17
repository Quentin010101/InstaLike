<x-layout>
    <x-navigation></x-navigation>
    <main class="pt-16 bg-slate-100">
        <div x-data class="bg-transparent">
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
