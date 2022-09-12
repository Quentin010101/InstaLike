<!DOCTYPE html>
<html lang="en" @auth  class="{{ Auth::user()->settings->theme }}" @endauth>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InstaLikeg</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <div class="min-h-screen">
        {{ $slot }}
    </div>
    @if (session()->has('message_flash'))
        <x-message>
            <x-slot:message>
                You have stoped following
            </x-slot:message>
            {{session('message_flash')}}
        </x-message>
    @endif
</body>
    @livewireScripts
</html>
