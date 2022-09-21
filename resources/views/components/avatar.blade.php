<div {{ $attributes->merge(['class' => 'rounded-full border-red-400 bg-white overflow-hidden']) }}>
    <img src="{{ asset('storage/' .  $slot ) }}" alt="avatar">
 </div>