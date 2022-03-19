@props(['page'=>null])
@switch($page)
    @case('vendor')
    <div class="grid gap-2 md:grid-cols-1 lg:grid-cols-2">

        <div class="order-last py-10 mb-5 text-base text-justify lg:order-first">
            {{$text}}
        </div>
        <div class="relative ltr:pr-8 rtl:pl-8 md:ltr:pr-12 md:rtl:pl-12 xl:ltr:pr-20 xl:rtl:pl-20 lg:ltr:pr-16 lg:rtl:pl-16 lg:h-80 xl:h-96 before:absolute before:bg-secondary-500 before:z-10">
            <div class="overflow-hidden z-30 w-full h-full">
                {{$photo}}
            </div>
        </div>
    </div>
    @break
    @default
    <div class="grid gap-10 md:grid-cols-1 lg:grid-cols-2">

        <div class="order-last py-10 mb-5 text-base text-justify lg:order-first">
            {{$text}}
        </div>
        <div class="relative ltr:pr-8 rtl:pl-8 md:ltr:pr-12 md:rtl:pl-12 xl:ltr:pr-20 xl:rtl:pl-20 lg:ltr:pr-16 lg:rtl:pl-16 lg:h-80 xl:h-96 before:absolute before:bg-secondary-500 before:z-10">
            <div class="overflow-hidden z-30 w-full h-full">
                {{$photo}}
            </div>
        </div>
    </div>
@endswitch

