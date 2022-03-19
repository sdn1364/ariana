@props(['breadcrumb'=> null, 'image', 'small'=> false, 'title'])


<div class="md:h-60 h-40 bg-cover bg-no-repeat bg-center flex items-center" style="background-image:url('{{$image}}')">
    <div class="container flex items-center">
        <h1 class="font-black 2xl:text-7xl xl:text-6xl lg:text-5xl md:text-4xl text-3xl  text-white text-opacity-80 ">{{ $title }}</h1>
    </div>
</div>
<div class="h-28 md:h-40 container mb-10">
    <div class=" flex items-end h-28 md:h-40 {{ $small ? 'before:w-14 md:before:w-16 before:h-full':'before:w-24 md:before:w-28 lg:before:w-32 xl:before:w-40 before:h-60 md:before:h-96' }}
                 relative before:absolute before:block before:bg-secondary-500 before:right-0 before:top-0 before:rounded-b-xl before:z-0
                 rtl:before:left-0 rtl:before:right-auto
                 ">
        <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-6 w-full gap-1">

            <div class="lg:col-span-1 2xl:col-span-1 md:col-span-1 xl:col-span-1 col-span-4">
                <h2 class="font-extrabold text-primary-500 md:text-3xl text-xl triangle rectangle py-2 w-40 ltr:pr-10 rtl:pl-10 md:w-full md:ltr:pr-0 md:rtl:pl-0
                {{app()->isLocale('fa') ? 'triangle-left rectangle-left':'triangle-right rectangle-right'}}
                    ">{{ $title }}</h2>
            </div>

            <div class="2xl:col-span-5 lg:col-span-4 hidden xl:flex flex-row items-center gap-2 ltr:pl-5 rtl:pr-5 ">
                @if($breadcrumb)
                    @foreach($breadcrumb as $adrs)
                        @if(!$loop->last)
                            <a href="" class="text-primary-500 hover:text-secondary-500">{{$adrs}}</a>
                            {!! app()->isLocale('fa') ? '<i class="ri-arrow-left-s-line text-primary-500"></i>':'<i class="ri-arrow-right-s-line text-primary-500"></i>' !!}
                        @else
                            <p class="text-primary-500">{{$adrs}}</p>
                        @endif
                    @endforeach
                @endif
            </div>

        </div>
    </div>
</div>
