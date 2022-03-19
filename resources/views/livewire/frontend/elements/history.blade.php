<div class="flex flex-col items-center space-y-5">
    <div class="overflow-hidden w-2/3 h-96 bg-yellow-100 rounded-lg slick-slider history">
        @foreach($years as $year)
            <div>
                <div class="slick-slider years flex rounded-lg bg-primary-500 triangle {{ app()->isLocale('fa') ? 'triangle-bottom-left':'triangle-bottom-right'}} ">

                    @foreach($history as $his)
                        @if($his->year == $year->year)
                            <div>
                                <div class="flex flex-row p-0 h-96">
                                    <div class="w-1/2 h-full">
                                        <img class="object-cover w-full h-full" src="{{asset($his->getFirstMediaUrl())}}" alt="">
                                    </div>
                                    <div class="p-10 w-1/2">
                                        <p class="mb-5 text-secondary-500">{{$his->year}}</p>
                                        <div class="text-white">{!! $his->content !!}</div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <div class="w-2/3 ">
        <div class="h-20 slick-slider navForHistory before:h-px before:border-primary-500 before:w-full before:border-dashed before:border-b before:absolute before:top-1/2 before:left-0">
            @foreach($years as $year)
                <div class="cursor-pointer">
                    <div class="flex flex-col justify-center items-center w-20 h-20">
                        <div class="relative w-5 h-5 flex items-center justify-center border border-primary-500 bg-white rounded-full
                                before:absolute before:h-10 before:w-px before:bg-primary-500 before:z-10
                                {{$loop->odd ? 'before:top-0 before:mt-1':'before:bottom-0 before:mb-1'}}
                            ">
                            <div class="w-3 h-3 rounded-full bg-primary-500"></div>
                        </div>
                        <p class="absolute text-primary-500 text-sm ltr:ml-10 rtl:mr-10
                             {{$loop->odd ? 'bottom-0':'top-0'}}
                            ">{{$year->year}}</p>
                    </div>
                </div>
                <div class="cursor-pointer">
                    <div class="flex flex-col justify-center items-center w-20 h-20">
                        <div class="relative w-5 h-5 flex items-center justify-center border border-primary-500 bg-white rounded-full
                                before:absolute before:h-10 before:w-px before:bg-primary-500 before:z-10
                                {{$loop->odd ? 'before:top-0 before:mt-1':'before:bottom-0 before:mb-1'}}
                            ">
                            <div class="w-3 h-3 rounded-full bg-primary-500"></div>
                        </div>
                        <p class="absolute text-primary-500 text-sm ltr:ml-10 rtl:mr-10
                              {{$loop->odd ? 'bottom-0':'top-0'}}
                            ">{{$year->year}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
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
                    asNavFor: '.navForHistory',
                    prevArrow: '{!! app()->isLocale('fa') ? '<div class="flex absolute right-6 top-1/2 z-40 justify-center items-center -mt-4 w-8 h-8 bg-white rounded-full shadow cursor-pointer text-primary-500"><i class="ri-arrow-right-s-line ri-lg"></i></div>':
                                                                '<div class="flex absolute left-6 top-1/2 z-40 justify-center items-center -mt-4 w-8 h-8 bg-white rounded-full shadow cursor-pointer text-primary-500"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                    nextArrow: '{!! app()->isLocale('fa') ? '<div class="flex absolute left-6 top-1/2 z-40 justify-center items-center -mt-4 w-8 h-8 bg-white rounded-full shadow cursor-pointer text-primary-500"><i class="ri-arrow-left-s-line ri-lg"></i></div>':
                                                                '<div class="flex absolute right-6 top-1/2 z-40 justify-center items-center -mt-4 w-8 h-8 bg-white rounded-full shadow cursor-pointer text-primary-500"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
                    rtl: {{app()->isLocale('fa') ? 'true' : 'false'}},

                });


                $(".navForHistory").slick({
                    dots: false,
                    slidesToShow: {{$years->count()}},
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: '{!! app()->isLocale('fa') ? '<div class="flex absolute -right-8 top-1/2 justify-center items-center -mt-4 w-8 h-8 cursor-pointer text-primary-500"><i class="ri-arrow-right-s-line ri-lg"></i></div>':
                                                                '<div class="flex absolute -left-8 top-1/2 justify-center items-center -mt-4 w-8 h-8 cursor-pointer text-primary-500"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                    nextArrow: '{!! app()->isLocale('fa') ? '<div class="flex absolute -left-8 top-1/2 justify-center items-center -mt-4 w-8 h-8 cursor-pointer text-primary-500"><i class="ri-arrow-left-s-line ri-lg"></i></div>':
                                                                '<div class="flex absolute -right-8 top-1/2 justify-center items-center -mt-4 w-8 h-8 cursor-pointer text-primary-500"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
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


                $(".years").slick({
                    dots: false,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: '{!! app()->isLocale('fa') ? '<div class="flex absolute -right-6 top-1/2 justify-center items-center -mt-4 w-8 h-8 text-white rounded-full cursor-pointer bg-primary-500"><i class="ri-arrow-right-s-line ri-lg"></i></div>':
                                                                '<div class="flex absolute -left-6 top-1/2 justify-center items-center -mt-4 w-8 h-8 text-white rounded-full cursor-pointer bg-primary-500"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                    nextArrow: '{!! app()->isLocale('fa') ? '<div class="flex absolute -left-6 top-1/2 justify-center items-center -mt-4 w-8 h-8 text-white rounded-full cursor-pointer bg-primary-500"><i class="ri-arrow-left-s-line ri-lg"></i></div>':
                                                                '<div class="flex absolute -right-6 top-1/2 justify-center items-center -mt-4 w-8 h-8 text-white rounded-full cursor-pointer bg-primary-500"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
                    centerMode: true,
                    focusOnSelect: true,
                    rtl: {{app()->isLocale('fa') ? 'true' : 'false'}},

                });
            })

        </script>
    @endsection
</div>
