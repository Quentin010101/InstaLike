<div x-data="{open : true}" x-init="setTimeout(() => open = false, 4500)">
    <div x-show="open" @click.outside="open = false">
        <div class="md:pl-64 lg:pl-80 fixed top-20 w-full flex justify-center animate-disapear">
            <p class="xl:p-6 lg:p-4 md:p-3 p-2 md:mx-0 mx-4 bg-green-100 rounded-xl w-fit text-gray-600">
                {{ $message }} <span class="text-gray-800 font-semibold"> {{$slot}}</span> 
            </p>
        </div>
    </div>
</div>