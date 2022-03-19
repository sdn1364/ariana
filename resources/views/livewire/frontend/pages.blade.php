<div>
    @section('title', __('who_we_are'))

    <x-frontend.header-component :title="__('who_we_are')" :small="!$content->hasMedia()"
                                 :image="asset('images/headers/whoWeAre-header.png')"
    ></x-frontend.header-component>

    <div class="container relative
    {{ $content->hasMedia() ?'
        before:absolute before:block before:bg-secondary-500 before:top-0 before:rounded-b-xl before:z-30
        2xl:before:w-40 2xl:ltr:before:right-0 2xl:rtl:before:left-0
        xl:before:w-40 xl:ltr:before:right-16 xl:rtl:before:left-16
        lg:before:w-32 lg:before:h-60 lg:ltr:before:right-16 lg:rtl:before:left-16
        md:before:w-28 md:before:h-68 md:ltr:before:right-16 md:rtl:before:left-16
        before:w-24 before:h-48 ltr:before:right-4 rtl:before:left-4'
        :'' }}
"
    >
        <div class="grid grid-cols-1 xl:grid-cols-6">
            <!-- menu-->
            <div class=" border-primary-100 relative hidden xl:flex
                        rtl:border-l-2
                        ltr:border-r-2
                        "
            >
                <div class="top-16 transition-all">
                    <ul x-data="{child: 0}">
                        @foreach($allPages as $pg)
                            <li class="flex flex-col mb-5"
                                x-init="$nextTick(()=>{ {{$content->id}} === '{{$pg->id}}' ? child= {{$pg->id}} : 0 })">
                                <span class="flex flex-row items-center">
                                    <span :class="child === {{$pg->id}} ? 'text-secondary-500':'text-primary-500'"
                                          @click="child = {{$pg->id}}" class="cursor-pointer text-primary-500 2xl:ltr:mr-1 2xl:rtl:mr-1 flex items-center justify-center">
                                        @if($pg->getChildPages ->count() > 0)
                                            {!! app()->islocale('fa') ? '<i class="ri-arrow-left-s-line ri-lg"></i>':'<i class="ri-arrow-right-s-line ri-lg"></i>' !!}
                                        @endif
                                    </span>
                                    <a :class="child === {{$pg->id}} ? 'text-secondary-500':'text-primary-500'" class="flex items-center xl:text-sm 2xl:text-lg w-100 hover:text-secondary-500" href="{{route('page',$pg->id)}}">{{$pg->title}}</a>
                                </span>
                                <ul class="ltr:pl-6 rtl:pr-6 mb-5 mt-3" x-show="child === {{$pg->id}}" @click.away="child = 0">
                                    @foreach($pg->getChildPages as $child)
                                        <li class="mb-2">
                                            <a :class="child === {{$child->id}} ? 'text-secondary-500':'text-primary-500'"
                                               class="flex items-center xl:text-xs 2xl:text-sm w-100 hover:text-secondary-500 text-primary-500"
                                               href="{{route('page',$child->id)}}">{{$child->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- content-->
            <div class="relative xl:col-span-5 mb-5">
                <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-10 xl:ltr:pl-10 xl:rtl:pr-10 relative mb-10 py-10">
                    <div class="mb-5 text-base text-justify order-last lg:order-first">
                        <h2 class="mb-10 text-xl font-bold text-primary-500">{{ $content->title }}</h2>
                        <div class="text-primary-500 sector-content">
                            {!! $content->content !!}
                        </div>
                    </div>

                    @if($content->hasMedia())

                        <div class="h-72 md:h-80 lg:h-96 z-40 relative
                                2xl:ltr:pr-20 2xl:rtl:pl-20
                                xl:ltr:pr-16 xl:rtl:pl-16
                                lg:ltr:pr-16 lg:rtl:pl-16
                                md:ltr:pr-10 md:rtl:pl-10
                                ltr:pr-8 rtl:pl-8

                               ">
                            <img class="object-cover w-full h-full" src="{{ asset($content->getFirstMediaUrl()) }}" alt="">
                        </div>
                    @endif
                </div>
                <div>
                    @foreach($content->pmRows as $row)
                        <div class="mb-5">
                            @switch($row->size)
                                @case('1')
                                <div class="grid grid-cols-1">
                                    <div class=" w-full h-fit">
                                        @foreach($row->getElements as $element)
                                            @if($element->part == 1)
                                                @if($element->type == 'text')
                                                    <div class="text-primary-500 py-2 px-5">
                                                        {!! $element->content !!}
                                                    </div>
                                                @endif
                                                @if($element->type == 'title')
                                                    <h2 class="text-primary-500 py-2 px-5 font-bold text-lg">
                                                        {!! $element->content !!}
                                                    </h2>
                                                @endif
                                                @if($element->type == 'photo')
                                                    <div class="w-full h-">
                                                        <img class="w-full h-full object-cover" src="{{asset($element->file)}}" alt="">
                                                    </div>
                                                @endif
                                                @if($element->type == 'timeline')
                                                    <div class="flex flex-col items-center space-y-5">
                                                        <div class="slick-slider history h-96 bg-yellow-100 w-2/3 rounded-lg overflow-hidden">
                                                            @foreach($years as $year)
                                                                <div>
                                                                    <div class="slick-slider years flex rounded-lg bg-primary-500 triangle {{ app()->isLocale('fa') ? 'triangle-bottom-left':'triangle-bottom-right'}} ">

                                                                        @foreach($history as $his)
                                                                            @if($his->year == $year->year)
                                                                                <div>
                                                                                    <div class="flex flex-row h-96 p-0">
                                                                                        <div class="w-1/2 h-full">
                                                                                            <img class="object-cover w-full h-full" src="{{asset($year->getFirstMediaUrl())}}" alt="">
                                                                                        </div>
                                                                                        <div class="w-1/2 p-10">
                                                                                            <p class="mb-5 text-secondary-500">{{$year->year}}</p>
                                                                                            <div class="text-white">{!! $year->content !!}</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <div class="slick-slider navForHistory h-20 before:h-px before:border-primary-500 before:w-full before:border-dashed before:border-b before:absolute before:top-1/2 before:left-0">
                                                            @foreach($years as $year)
                                                                <div class="cursor-pointer">
                                                                    <div class="h-20 flex flex-col items-center justify-center w-20">
                                                                        <div class="relative w-5 h-5 flex items-center justify-center border border-primary-500 bg-white rounded-full
                                                                                                    before:absolute before:h-10 before:w-px before:bg-primary-500 before:z-10
                                                                                                    {{$loop->odd ? 'before:top-0 before:mt-1':'before:bottom-0 before:mb-1'}}
                                                                            ">
                                                                            <div class="w-3 h-3 bg-primary-500 rounded-full"></div>
                                                                        </div>
                                                                        <p class="absolute text-primary-500 text-sm ltr:ml-10 rtl:mr-10
                                                                                                        {{$loop->odd ? 'bottom-0':'top-0'}}
                                                                            ">{{$year->year}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="cursor-pointer">
                                                                    <div class="h-20 flex flex-col items-center justify-center w-20">
                                                                        <div class="relative w-5 h-5 flex items-center justify-center border border-primary-500 bg-white rounded-full
                                                                                                    before:absolute before:h-10 before:w-px before:bg-primary-500 before:z-10
                                                                                                    {{$loop->odd ? 'before:top-0 before:mt-1':'before:bottom-0 before:mb-1'}}
                                                                            ">
                                                                            <div class="w-3 h-3 bg-primary-500 rounded-full"></div>
                                                                        </div>
                                                                        <p class="absolute text-primary-500 text-sm ltr:ml-10 rtl:mr-10
                                                                                                        {{$loop->odd ? 'bottom-0':'top-0'}}
                                                                            ">{{$year->year}}</p>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                @break;
                                @case('3')
                                <div class="grid grid-cols-3 gap-5">
                                    <div class="bg-secondary-500 w-full h-20"></div>
                                    <div class="bg-secondary-500 w-full h-20"></div>
                                    <div class="bg-secondary-500 w-full h-20"></div>
                                </div>
                                @break;
                                @case('4')
                                <div class="grid grid-cols-4 gap-5">
                                    <div class="bg-secondary-500 w-full h-20"></div>
                                    <div class="bg-secondary-500 w-full h-20"></div>
                                    <div class="bg-secondary-500 w-full h-20"></div>
                                    <div class="bg-secondary-500 w-full h-20"></div>
                                </div>
                                @break;
                                @case('2_2')
                                <div class="grid grid-cols-2 gap-5">
                                    <div>
                                        <div class="grid grid-cols-1">
                                            <div class="w-full h-fit">
                                                @foreach($row->getElements as $element)
                                                    @if($element->part == 1)
                                                        @if($element->type == 'text')
                                                            <div class="text-primary-500 py-2 px-5">
                                                                {!! $element->content !!}
                                                            </div>
                                                        @endif
                                                        @if($element->type == 'title')
                                                            <h2 class="text-primary-500 py-2 px-5 font-bold text-lg">
                                                                {!! $element->content !!}
                                                            </h2>
                                                        @endif
                                                        @if($element->type == 'photo')
                                                            <div class="w-full h-">
                                                                <img class="w-full h-full object-cover" src="{{asset($element->file)}}" alt="">

                                                            </div>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="grid grid-cols-1">
                                            <div>
                                                @foreach($row->getElements as $element)
                                                    @if($element->part == 2)
                                                        @if($element->type == 'text')
                                                            <div class="text-primary-500 py-2 px-5">
                                                                {!! $element->content !!}
                                                            </div>
                                                        @endif
                                                        @if($element->type == 'title')
                                                            <h2 class="text-primary-500 py-2 px-5 font-bold text-lg">
                                                                {!! $element->content !!}
                                                            </h2>
                                                        @endif
                                                        @if($element->type == 'photo')
                                                            <div class="w-full h-">
                                                                <img class="w-full h-full object-cover" src="{{asset($element->file)}}" alt="">

                                                            </div>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @break;
                                @case('1_2')
                                <div class="grid grid-cols-3 gap-5">
                                    <div class="bg-secondary-500 w-full h-20"></div>
                                    <div class="bg-secondary-500 w-full h-20 col-span-2"></div>
                                </div>
                                @break;
                                @case('2_1')
                                <div class="grid grid-cols-3 gap-5">
                                    <div class="bg-secondary-500 w-full h-20 col-span-2"></div>
                                    <div class="bg-secondary-500 w-full h-20"></div>
                                </div>
                                @break;
                                @case('1_3')
                                <div class="grid grid-cols-4 gap-5">
                                    <div class="bg-secondary-500 w-full h-20"></div>
                                    <div class="bg-secondary-500 w-full h-20 col-span-3"></div>
                                </div>
                                @break;
                                @case('3_1')
                                <div class="grid grid-cols-4 gap-5">
                                    <div class="bg-secondary-500 w-full h-20 col-span-3"></div>
                                    <div class="bg-secondary-500 w-full h-20"></div>
                                </div>
                                @break;
                                @case('1_2_1')
                                <div class="grid grid-cols-4 gap-5">
                                    <div class="bg-secondary-500 w-full h-20"></div>
                                    <div class="bg-secondary-500 w-full h-20 col-span-2"></div>
                                    <div class="bg-secondary-500 w-full h-20"></div>
                                </div>
                                @break;
                                @case('1_1_2')
                                <div class="grid grid-cols-4 gap-5">
                                    <div class="bg-secondary-500 w-full h-20"></div>
                                    <div class="bg-secondary-500 w-full h-20"></div>
                                    <div class="bg-secondary-500 w-full h-20 col-span-2"></div>
                                </div>
                                @break;
                                @case('2_1_1')
                                <div class="grid grid-cols-4 gap-5">
                                    <div class="bg-secondary-500 w-full h-20 col-span-2"></div>
                                    <div class="bg-secondary-500 w-full h-20"></div>
                                    <div class="bg-secondary-500 w-full h-20"></div>
                                </div>
                                @break;
                            @endswitch
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    @section('styles')
        <link rel="stylesheet" href="{{ asset('vendor/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/slick/slick-theme.css') }}">
    @endsection
    @section('scripts')
        <script src="{{asset('vendor/slick/slick.min.js')}}"></script>
        <script>

            $(document).ready(function () {

                $(".history").slick({
                    dots: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    centerPadding: '0',
                    //asNavFor: '.navForHistory',
                    prevArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 right-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 left-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                    nextArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 left-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 right-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
                    rtl: {{app()->isLocale('fa') ? 'true' : 'false'}},

                });

                /*
                                $(".navForHistory").slick({
                                    dots: false,
                                    slidesToShow: {{$years->count()}},
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 -right-8 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer absolute top-1/2 -mt-4 -left-8 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                    nextArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 -left-8 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer absolute top-1/2 -mt-4 -right-8 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
                    asNavFor: '.history',
                    focusOnSelect: true,
                    centerMode: true,
                    rtl: {{app()->isLocale('fa') ? 'true' : 'false'}},
                    responsive: [
                        {
                            breakpoint: 640,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 1024
                        },
                        {
                            breakpoint: 1280
                        },
                        {
                            breakpoint: 1536
                        },
                    ]
                });
*/


                $(".years").slick({
                    dots: false,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 -right-6 text-white bg-primary-500 w-8 h-8 flex items-center justify-center rounded-full"><i class="ri-arrow-right-s-line ri-lg"></i></div>':
                                                            '<div class="rounded-full cursor-pointer absolute top-1/2 -mt-4 -left-6  text-white bg-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                    nextArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 -left-6  text-white bg-primary-500 w-8 h-8 flex items-center justify-center rounded-full"><i class="ri-arrow-left-s-line ri-lg"></i></div>':
                                                            '<div class="rounded-full cursor-pointer absolute top-1/2 -mt-4 -right-6 text-white bg-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
                    centerMode: true,
                    focusOnSelect: true,
                    rtl: {{app()->isLocale('fa') ? 'true' : 'false'}},

                });
            })

        </script>
    @endsection
</div>
