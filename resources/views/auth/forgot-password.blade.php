<x-layout>
    <x-container_center>
        <div class="self-start">
            <x-links.back_to_home_page />
        </div>
        <div class="mx-auto">
            @if (session('status'))
                <div class="font-semibold text-lg text-green-600">
                    {{ session('status') }}
                </div>
            @else
            <div>
                <form action="{{ url('/forgot-password') }}" method="post" class="flex flex-col">
                    @csrf
                    <div>
                        <x-inputs.email id="email" name="email" label="Enter your Email to reset your password." class="flex flex-col justify-center"/>
                    </div>
                    <div>
                        <x-inputs.submit value="Reset your password" />
                    </div>
                </form>
            </div>
            @endif
        </div>
    </x-container_center>
</x-layout>
