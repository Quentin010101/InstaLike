<div class="p-4 flex flex-col items-center ">
    <div
        class="mt-3 bg-gradient-to-r from-red-400 to-purple-500 rounded-full w-[6.6rem] h-[6.6rem] flex justify-center items-center">
        <div class="my-3 rounded-full overflow-hidden w-24 h-24 bg-white dark:bg-slate-600">
            <img src="{{ asset('storage/' . $settings->avatar) }}" alt="avatar">
        </div>
    </div>
    <div class="py-3 w-full flex items-center flex-col ">
        <h2 class="text-base font-bold text-gray-700 dark:text-gray-100">{{ $user->name }}
            @isset($user->lastname)
                {{ $user->lastname }}
            @endisset
        </h2>
        <h3 class="text-base font-semibold text-gray-500 dark:text-gray-300">{{ $settings->pseudo }}</h3>
    </div>
    <div class="py-3 w-full flex flex-col gap-y-3">
        <div class=" flex justify-around">
            <div class="flex flex-col items-center">
                <h3 class="font-bold text-gray-300 dark:text-gray-800 text-base">{{ $images_count }}</h3>
                <h3 class="font-bold text-sm text-gray-700 dark:text-gray-400">Post</h3>
            </div>
            <div class="flex flex-col items-center">
                <h3 class="font-bold text-gray-300 dark:text-gray-800 text-base">{{ $friends_count }}</h3>
                <h3 class="font-bold text-sm text-gray-700 dark:text-gray-400">Friends</h3>
            </div>
            <div class="flex flex-col items-center">
                <h3 class="font-bold text-gray-300 dark:text-gray-800 text-base">{{ $followings_count }}</h3>
                <h3 class="font-bold text-sm text-gray-700 dark:text-gray-400">Following</h3>
            </div>
        </div>
        <div class="md:pl-6">
            <h3 class="text-gray-500 dark:text-gray-800 text-base">You have <span class="font-bold text-sm text-gray-700 dark:text-gray-400" >{{ $followers_count }}</span> followers</h3>
        </div>
    </div>
</div>
