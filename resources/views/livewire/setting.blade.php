<div>
    <form action="/theme" method="POST">
        @csrf
        <div>
            <label for="light">Light</label>
            <input type="radio" name="theme" id="light" value="light">
        </div>
        <div>
            <label for="dark">Dark</label>
            <input type="radio" name="theme" id="dark" value="dark">
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
