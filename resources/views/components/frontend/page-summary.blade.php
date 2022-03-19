@if($photo)
<div class="grid grid-cols-5 gap-10">
    <div class="mb-5 text-base col-span-3 text-justify text-primary-500">
        {{ $slot }}
    </div>
    <div class="overflow-hidden col-span-2 relative pr-20 h-96">
        <img class="object-cover w-auto h-full" src="{{ asset($photo) }}" alt="">
    </div>
</div>
@else
    <div class="grid grid-cols-1 gap-10">
        <div class="mb-5 text-base col-span-3 text-justify text-primary-500">
            {{ $slot }}
        </div>
    </div>
@endif
