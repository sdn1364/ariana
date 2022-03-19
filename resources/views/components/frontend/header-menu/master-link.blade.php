@props(['dropdown'=>false, 'to'=>null])

<div class="flex flex-row rtl:space-x-reverse" {{$attributes}}>
    <div class="flex relative justify-center items-center h-16 text-lg font-medium text-white group mega-menu">
        <a href="{{$to}}" type="button" class="flex gap-2 items-center">
            {{ $slot }}
            @if($dropdown)
                <i class="ri-arrow-down-s-fill"></i>
            @endif
        </a>
        <i class="absolute -bottom-2 opacity-0 transition-all ri-arrow-up-s-fill ri-2x text-secondary-500 group-hover:opacity-100"></i>
    </div>
</div>
