<div class="bg-white pt-12 px-3 md:px-6 xl:px-12 pb-6 rounded-xl my-5 2xl:w-[900px] xl:w-[700px] lg:w-[500px] shadow-md shadow-gray-300">
    <div class="flex gap-x-3 pb-4">
        @if ($image->user->id == Auth()->user()->id)
            <div class="bg-gradient-to-r from-red-400 to-purple-500 rounded-full w-[4.5rem] h-[4.5rem] flex justify-center items-center">
                <div class="rounded-full h-16 w-16 bg-white overflow-hidden shadow-md shadow-gray-300">
                    <img src="{{ asset('storage/' . $image->user->settings->avatar) }}" alt="avatar">
                </div>
            </div>
        @else
            <div class="rounded-full h-16 w-16 border-4 border-red-400 overflow-hidden shadow-md shadow-gray-300">
                <img src="{{ asset('storage/' . $image->user->settings->avatar) }}" alt="avatar">
            </div>
        @endif
        <div class="flex flex-col justify-center">
            <h3 class="text-base font-semibold text-gray-600">{{ $image->user->name }}</h3>
            <div class="flex gap-x-2 text-sm font-semibold text-gray-400">
                @if ($image->user->settings->country)
                    <h3>{{ $image->user->settings->country }}</h3>
                @endif
                @if ($image->user->settings->country && $image->user->settings->city)
                    <span>,</span>
                @endif
                @if ($image->user->settings->city)
                    <h3>{{ $image->user->settings->city }}</h3>
                @endif
            </div>
        </div> 
        <div class="text-gray-400 mr-0 ml-auto text-xs">
            <h3>{{ $image->created_at->format('d/m/Y') }}</h3>
            <h3>at {{ $image->created_at->format('H:i') }}</h3>
        </div>
    </div>
    <div class="rounded-xl overflow-hidden max-h-[50vh] w-fit mx-auto">
        <img class="img" class="object-scale-down max-h-[50vh] w-full rounded-xl " src="{{ asset('storage/' . $image->path) }}"
            alt="image">
    </div>
    
    <div>
        <livewire:comment-form :image="$image" :wire:key="$image->id" > 
    </div>
</div>
