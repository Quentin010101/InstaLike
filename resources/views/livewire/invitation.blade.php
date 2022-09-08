<div>
    <div class="p-2  lg:p-4 shadow-md dark:shadow-lg rounded-xl">
        @foreach($invitations as $invitation)
            <div>
                {{ $invitation->user->name }}
            </div>
        @endforeach
    </div>
</div>