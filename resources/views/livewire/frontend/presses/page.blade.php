<div>
    @section('title', __('press'))

    <x-frontend.header-component :title="__('press')" :small="true"
                                 :image="asset('images/headers/press-header.png')"
                                 :breadcrumb="[__('press'), $press->title]"
    ></x-frontend.header-component>

    <div class="container py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-20 mb-20 h-auto">
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg h-48 md:h-[250px] lg:h-[300px] xl:h-[400px] 2xl:h-[500px]">
                    @if(count($press->getMedia()) > 1)
                        <div class="slick-slider slideshow overflow-hidden rounded-xl">
                            @foreach($press->getMedia() as $media)
                                @if($media->mime_type === 'video/mp4')
                                    <div class="w-full h-full">
                                        <video controls>
                                            <source class="object-cover w-full h-full" src="{{asset($media->getUrl())}}" type="video/mp4">
                                        </video>
                                    </div>
                                @else
                                    <div class="w-full h-full">
                                        <img class="object-cover w-full h-full" src="{{asset($media->getUrl())}}" alt="">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @else
                        @if($press->getMedia()[0]->mime_type === 'video/mp4')
                            <div class="h-full">
                                <video class="object-cover w-full h-full" controls>
                                    <source src="{{asset($press->getFirstMediaUrl())}}" type="video/mp4">

                                </video>
                            </div>
                        @else
                            <div>
                                <img class="object-cover w-full h-full" src="{{asset($press->getFirstMediaUrl())}}" alt="">
                            </div>
                        @endif
                    @endif
                </div>
                @if(count($press->getMedia()) > 1)
                    <div class="flex items-center justify-center">
                        <div class="slick-slider navForSlideshow {{$press->getMedia()->count() > 2 ? 'w-full md:w-3/5' : 'w-[90%] md:w-3/5 xl:3/5 2xl:w-2/5'}}">
                            @foreach($press->getMedia() as $media)
                                <div class="p-5 h-36 md:h-40">
                                    <img class="rounded-xl" src="{{asset($media->getUrl())}}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>

            <div class="mb-5 text-base text-justify py-10 ">
                <div class="flex flex-row items-start justify-between mb-10 space-x-5 rtl:space-x-reverse">
                    <x-frontend.page-title>{{$press->title}}</x-frontend.page-title>

                    <p class="text-primary-500 text-sm w-fit shrink-0 grow-0">{{$press->created_at_human()}}</p>
                </div>
                <div class="text-primary-500 ss02">
                    {!! $press->content !!}
                </div>
            </div>
        </div>

        <div class="w-full mt-20">
            <x-frontend.page-title class="text-center">{{ __('related_press') }}</x-frontend.page-title>
            <div class="w-5/6 mx-auto">
                <div class="related-project slick-slider">
                    @foreach ($related as $item)
                        <div>
                            <div class="px-6 h-48 overflow-hidden mb-2">
                                <img class="rounded-xl mb-2 h-full w-full object-cover" src="{{ $item->getFirstMediaUrl() }}" alt="">
                            </div>
                            <p class="text-primary-500 font-bold text-center">{{ $item->title }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
        <script src="{{asset('vendor/slick/slick.min.js')}}"></script>
        <script>

            $(document).ready(function () {
                $(".slideshow").slick({
                    dots: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    asNavFor: '.navForSlideshow',
                    prevArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 right-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 left-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                    nextArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 left-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 right-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
                    rtl: {{app()->isLocale('fa') ? 'true' : 'false'}},
                });

                $(".navForSlideshow").slick({
                    dots: false,
                    slidesToShow: {{$press->getMedia()->count() > 2 ? 2 : 1}},
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 -right-8 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer absolute top-1/2 -mt-4 -left-8 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                    nextArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 -left-8 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer absolute top-1/2 -mt-4 -right-8 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
                    asNavFor: '.slideshow',
                    focusOnSelect: true,
                    centerMode: true,
                    rtl: {{app()->isLocale('fa') ? 'true' : 'false'}},
                });
                $(".related-project").slick({
                    dots: false,
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 -right-6 text-white bg-primary-500 w-8 h-8 flex items-center justify-center rounded-full"><i class="ri-arrow-right-s-line ri-lg"></i></div>':'<div class="rounded-full cursor-pointer absolute top-1/2 -mt-4 -left-6  text-white bg-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                    nextArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 -left-6  text-white bg-primary-500 w-8 h-8 flex items-center justify-center rounded-full"><i class="ri-arrow-left-s-line ri-lg"></i></div>': '<div class="rounded-full cursor-pointer absolute top-1/2 -mt-4 -right-6 text-white bg-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
                    asNavFor: '.slideshow',
                    focusOnSelect: true,
                    rtl: {{app()->isLocale('fa') ? 'true' : 'false'}},
                    responsive:[
                        {
                            breakpoint: 640,
                            settings:{
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 768,
                            settings:{
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
            })

            function slickNav(type) {
                $('.slideshow').slick(type)
            }

        </script>
    @endsection</div>
