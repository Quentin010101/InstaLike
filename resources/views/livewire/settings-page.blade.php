<div>
    <div class="p-2  lg:p-4 shadow-md dark:shadow-lg rounded-xl">
        <h3 class="font-semibold text-red-400 text-lg py-3">Theme</h3>
        <form action="/theme" method="POST">
            @csrf
            <div class="flex gap-x-5 pb-2">
                <div class="font-semibold text-gray-600  dark:text-gray-200">
                    <label class="cursor-pointer" for="light">Light</label>
                    <input type="radio" name="theme" id="light" value="light" @auth {{Auth::user()->settings->theme == 'light' ? 'checked' : ''}} @endauth>
                </div>
                <div class="font-semibold text-gray-600 dark:text-gray-200">
                    <label class="cursor-pointer" for="dark">Dark</label>
                    <input type="radio" name="theme" id="dark" value="dark" @auth {{Auth::user()->settings->theme == 'dark' ? 'checked' : ''}} @endauth>
                </div>
            </div>
            <div class="text-green-600 flex gap-x-2 h-6">
                @if (session()->has('message_theme'))
                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </span>
                    {{ session('message_theme') }}
                @endif
            </div>
            <div>
                <x-buttons.validation>
                    <p>Validate Theme</p>
                </x-buttons.validation>
            </div>
        </form>
    </div>
    <div class="p-2  lg:p-4 shadow-md dark:shadow-lg rounded-xl">
        <h3 class="font-semibold text-red-400 text-lg pt-3">Privacy</h3>
        <h4 class="p-1 text-gray-400">Change your account visibility</h4>
        <form wire:submit.prevent="submit">
            @csrf
            <div class="flex gap-x-5 pb-2">
                <div class="font-semibold text-gray-600  dark:text-gray-200">
                    <label class="cursor-pointer" for="private">Private</label>
                    <input type="radio" name="privacy" id="private" value="private" @auth {{ $privacy == 'private' ? 'checked' : ''}} @endauth wire:model="privacy">
                </div>
                <div class="font-semibold text-gray-600 dark:text-gray-200">
                    <label class="cursor-pointer" for="public">Public</label>
                    <input type="radio" name="privacy" id="public" value="public" @auth {{ $privacy == 'public' ? 'checked' : ''}} @endauth wire:model="privacy">
                </div>
            </div>
            <div class="text-green-600 flex gap-x-2 h-6">
                @if (session()->has('message_privacy'))
                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </span>
                    {{ session('message_privacy') }}
                @endif
            </div>
            <div>
                <x-buttons.validation>
                    <p>Validate privacy settings</p>
                </x-buttons.validation>
            </div>
        </form>
    </div>
</div>
