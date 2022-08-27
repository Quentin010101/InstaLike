<x-layout>  
    <x-container_center>
        <div class="self-start">
            <x-links.back_to_home_page />
        </div>
        <div class="mx-auto">
            <div>
                <form action="{{ url('/reset-password') }}" method="post" class="flex flex-col">
                    @csrf
                        <x-inputs.email id="email" name="email" label="Enter your Email to reset your password." class="flex flex-col justify-center"/>
                        <x-inputs.password id="password" name="password" label="New password" placeholder="Enter your new password"/>
                        <x-inputs.password id="password_confirmation" name="password_confirmation" label="New password confirmation" placeholder="Confirm your new password"/>
                        <input type="hidden" name="token" value="{{ request()->route('token') }}">
                        <x-inputs.submit value="Reset your password" />
                </form>
            </div>
        </div>
    </x-container_center>
</x-layout>    