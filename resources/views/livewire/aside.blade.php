<div class="p-4 flex flex-col items-center ">
    <div
        class="mt-3 bg-gradient-to-r from-red-400 to-purple-500 rounded-full w-[6.6rem] h-[6.6rem] flex justify-center items-center">
        <div class="my-3 rounded-full overflow-hidden w-24 h-24 bg-white">
            <img src="{{ asset('storage/' . $settings->avatar) }}" alt="avatar">
        </div>
    </div>
    <div class="py-3 w-full flex items-center flex-col ">
        <h2 class="text-base font-bold text-gray-700">{{ $user->name }}
            @isset($user->lastname)
                {{ $user->lastname }}
            @endisset
        </h2>
        <h3 class="text-base font-semibold text-gray-500">{{ $settings->pseudo }}</h3>
    </div>
    <div class="py-3 w-full flex justify-around">
        <div class="flex flex-col items-center">
            <h3 class="font-bold text-gray-300 text-base">{{ $images_count }}</h3>
            <h3 class="font-bold text-sm text-gray-700">Post</h3>
        </div>
        <div class="flex flex-col items-center">
            <h3 class="font-bold text-gray-300 text-base">{{ $followers_count }}</h3>
            <h3 class="font-bold text-sm text-gray-700">Followers</h3>
        </div>
        <div class="flex flex-col items-center">
            <h3 class="font-bold text-gray-300 text-base">{{ $followings_count }}</h3>
            <h3 class="font-bold text-sm text-gray-700">Following</h3>
        </div>
    </div>
</div>
