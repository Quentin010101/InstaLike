<x-layout>
    <x-navigation></x-navigation>
    <main class="pt-16">
        <div x-data>
            <div id="container" @resize.window="resize()" class="flex">
                <div id="colone1">
                    @foreach ($images as $image)
                        <div id="{{ $loop->iteration }}">
                            <x-card.card-tag :image="$image" :id="$id"></x-card.card-tag>
                        </div>
                    @endforeach
                </div>
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
                status.xl = true
                status.sm = false
            }else{
                status.xl = false
                status.sm = true
            }

            function resize()
            {
                let width = window.innerWidth;
                if(width > 1000 && !status.xl){

                    const newDiv = document.createElement('div')
                    newDiv.setAttribute('id', 'colone2')
                    container.appendChild(newDiv)

                    let children = colone1.children
                    let array = Array.from(children)
                    let length = array.length

                    for(let index = 0; index < length; index = index + 2){
                        colone1.removeChild(array[index])
                        newDiv.appendChild(array[index])
                    }

                    status.xl = true
                    status.sm = false
                }
                if(width < 1000 && !status.sm){

                    if (document.contains(document.getElementById("colone2"))) {
                        document.getElementById('colone2').remove()
                    }

                    status.xl = false
                    status.sm = true
                }
            }

        </script>
    </main>
</x-layout>
