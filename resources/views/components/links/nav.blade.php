<li class="w-full h-16 flex gap-x-5 items-center">
    <div  @class(['h-full w-2 ', 'bg-red-400' => $isActive  ]) class=""></div>
    <a class="flex items-center gap-2"  href="{{ $url }}">
        {{ $slot }}
        <div @class(['text-lg' => $isActive, 'font-bold' => $isActive, 'text-gray-600' => !$isActive, 'dark:text-gray-200' => !$isActive, 'text-red-400' => $isActive])>
            {{ $name }}
        </div>
    </a>
</li>