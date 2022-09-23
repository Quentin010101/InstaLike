<div class="p-4 shadow shadow-xl rounded-xl mx-3 my-6 relative group bg-white dark:bg-slate-600">
    <div class="overflow-hidden max-h-[700px] max-w-[600px]">
        <img class="" src="{{ asset('/storage/' . $image->path) }}" alt="">
    </div>
    @auth
    <livewire:follow :image="$image" :wire:key='$image->id'>       
    @endauth
    <a href="/user/{{ $image->user->id }}">
        <div class="absolute inset-x-10 bottom-10 ">
            <div class="absolute right-0 bottom-0 flex gap-x-3 pl-3 h-16 w-16 group-hover:w-full group-hover:delay-100 delay-1000 duration-200 bg-red-400/75 rounded-full shadow-black/50 shadow-lg hover:bg-red-400/100">
                <div class="h-14 w-14 rounded-full bg-white overflow-hidden absolute left-1 top-1">
                    <img src="{{ asset('storage/' . $image->user->settings->avatar) }}" alt="image" loading="lazy">
                </div>
                <div class="overflow-hidden pl-14 opacity-0 group-hover:opacity-100 duration-300 group-hover:delay-200 delay-500 flex flex-col justify-center items-center w-full">
                    <span class="text-lg font-semibold text-gray-800">{{$image->user->settings->pseudo}}</span>
                    <div>
                        <span class="text-sm text-slate-300">{{ $image->created_at->format('d/m/Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>