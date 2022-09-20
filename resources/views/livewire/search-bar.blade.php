<div class="relative md:focus-within:w-[400px] lg:focus-within:w-[600px] transition-width duration-400 delay-200 md:w-[250px] lg:w-[300px] xl:w-[400px]">
    <div x-data="{input: '', open: true}" class="bg-slate-100 dark:bg-slate-500 dark:focus-within:bg-transparent transition rounded-full border border-red-400 focus-within:bg-transparent ">
        <div  class=" relative">
            <input @click.outside="if(open){input='' ; $wire.clear(); open=false;}" @click="open = true" x-model="input" placeholder="Search for anyone"
                class="placeholder:italic dark:placeholder:text-slate-200 pl-12 py-2 bg-transparent rounded-full focus:outline-none w-full" type="text"
                wire:model="search">
            <div class="px-3 absolute left-0 inset-y-0 h-full flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    class="w-6 h-6 stroke-red-400">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
        </div>
        <div x-show="open" class="bg-transparent absolute top-11 w-full rounded-xl">
            <ul class="bg-transparent">
                @foreach ($users as $user)
                    <li class="odd:bg-slate-200 even:bg-slate-100 dark:odd:bg-slate-500 dark:even:bg-slate-400  mt-1 rounded-lg dark:hover:bg-slate-200 hover:bg-slate-400 duration-500  shadow-xl">
                        <a class="w-full h-full block px-4 py-3" href="/user/{{ $user->user_id }}">
                            <div class="flex gap-x-2 ">
                                <div class="overflow-hidden h-7 w-7 rounded-full border-2 border-red-400">
                                    <img src="{{ asset('storage/' . $user->avatar) }}" alt="avatar">
                                </div>
                                <span class="text-slate-700">{{ $user->pseudo }}</span>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
