<x-layout>
    <x-container_center>
        <div class="self-start">
            <x-links.back_to_home_page />
        </div>
        <div class="mx-auto">
            @if (session('status') == 'verification-link-sent')
                <div class="font-semibold text-lg text-green-600">
                    <p>A new email verification link has been emailed to you!</p> 
                </div>
            @else
                <div class="flex flex-col items-center gap-y-2">
                    <p class="text-xl font-semibold text-gray-700">An email has been sent to you.</p>
                    <p class="text-xl font-semibold text-gray-700">You need to verify your email address to access your account.</p>
                    <form action="{{ url('/email/verification-notification') }}" method="POST">
                        @csrf
                        <div class="my-2">
                            <input class="hover:px-3 duration-200 cursor-pointer px-2 py-1 bg-green-400 text-white text-lg font-semibold rounded-lg" type="submit" value="Send again !">
                        </div>
                    </form>
                </div>
            @endif
        </div>
    </x-container_center>
</x-layout>
