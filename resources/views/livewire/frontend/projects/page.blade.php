<div>
    @section('title', __('projects'))

    <x-frontend.header-component :title="__('projects')" :small="true"
                        :image="asset('images/headers/projects-header.png')"
                        :breadcrumb="[__('projects'), $project->title]"
    ></x-frontend.header-component>
    <div class="container py-20">
        <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-20 mb-20 ">
            <div class="col-span-2 flex flex-col">
                <div class="overflow-hidden rounded-lg h-48 md:h-[250px] lg:h-[300px] xl:h-[400px] 2xl:h-[500px]">
                    @if($project->getMedia()->count() > 1)
                        <div class="slick-slider slideshow">
                            @foreach($project->getMedia() as $media)
                                @if($media->mime_type === 'video/mp4')
                                    <div class="w-full h-full">
                                        <video  controls>
                                            <source src="{{asset($media->getUrl())}}" type="video/mp4">
                                        </video>
                                    </div>
                                @else
                                    <div>
                                        <div class="w-full h-48 md:h-[250px] lg:h-[300px] xl:h-[400px] 2xl:h-[500px]">
                                            
                                                <img class="h-48 md:h-[250px] lg:h-[300px] xl:h-[400px] 2xl:h-[500px] w-auto mx-auto" src="{{asset($media->getUrl())}}" alt="">
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @else
                        @if($project->getMedia()[0]->mime_type === 'video/mp4')
                            <div class="h-full w-full">
                                <video class="object-cover w-full h-full" controls>
                                    <source src="{{ asset($project->getFirstMediaUrl()) }}" type="video/mp4">
                                </video>
                            </div>
                        @else
                            <div class="w-full h-full">
                                <img class="h-48 md:h-[250px] lg:h-[300px] xl:h-[400px] 2xl:h-[500px] w-auto mx-auto" src="{{asset($project->getFirstMediaUrl())}}" alt="">
                            </div>
                        @endif
                    @endif
                </div>
                @if($project->getMedia()->count() > 1)
                    <div class="flex items-center justify-center">
                        <div class="slick-slider navForSlideshow {{$project->getMedia()->count() > 2 ? 'w-full md:w-3/5' : 'w-[90%] md:w-3/5 xl:3/5 2xl:w-2/5'}}">
                            @foreach($project->getMedia() as $media)
                                <div>
                                    <div class="p-5 h-36 md:h-40 w-full">
                                        <img class="object-cover rounded-lg w-full h-full" src="{{asset($media->getUrl())}}" alt="">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            <div class="mb-5 text-base text-justify py-10">
                <x-frontend.page-title>{{$project->title}}</x-frontend.page-title>
                <p class="text-secondary-500 font-bold">{{__('start_date')}}:</p>
                <p class="text-primary-500 mb-5 ss02">
                    {{app()->isLocale('fa') ? verta($project->start_date)->format('%B %d، %Y') : $project->start_date->format('d-F-Y')}}
                </p>
                <p class="text-secondary-500 font-bold">{{__('due_date')}}:</p>
                <p class="text-primary-500 mb-5 ss02">
                    {{app()->isLocale('fa') ? verta($project->due_date)->format('%B %d، %Y') : $project->due_date->format('d-F-Y')}}
                </p>
                <p class="text-secondary-500 font-bold">{{__('status')}}:</p>
                <p class="text-primary-500 mb-5 ss02">
                    {{__($project->progress)}}
                </p>
                <p class="text-secondary-500 font-bold">{{__('technical_area')}}:</p>
                <p class="text-primary-500 mb-5 ss02">
                    {{ $project->sector->getParentSectors->title.' - '.$project->sector->title }}
                </p>
                <p class="text-secondary-500 font-bold">{{__('client')}}:</p>
                <p class="text-primary-500 mb-5 ss02">
                    {{ $project->client}}
                </p>
            </div>
        </div>
        <div class="bg-gray-100 p-5 rounded-xl mb-5">
            <h3 class="text-secondary-500 text-lg font-bold mb-3">{{ __('background') }}:</h3>
            <div class="text-primary-500">
                {!! $project->background !!}
            </div>
        </div>
        <div class="bg-gray-100 p-5 rounded-xl mb-5">
            <h3 class="text-secondary-500 text-lg font-bold mb-3">{{ __('roles') }}:</h3>
            <div class="text-primary-500 marker:text-secondary-500 marker:text-2xl">
                {!! $project->roles !!}
            </div>
        </div>
        <a href="" class="text-primary-500 hover:underline decoration-secondary-500 flex flex-row items-center"><i class="icon-downlaod ltr:mr-2 rtl:ml-4 text-lg"></i> {{ __('download_brochure') }}</a>
        <div class="w-full mt-20">
            <x-frontend.page-title class="text-center">{{ __('related_project') }}</x-frontend.page-title>
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

    @section('styles')
        <link rel="stylesheet" href="{{ asset('vendor/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/slick/slick-theme.css') }}">
    @endsection
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
                    slidesToShow: {{$project->getMedia()->count() >= 2 ? ($project->getMedia()->count() > 3 ? 3 : 2) : 1}},
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


                $(".related-project").slick({
                    dots: false,
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 -right-6 text-white bg-primary-500 w-8 h-8 flex items-center justify-center rounded-full"><i class="ri-arrow-right-s-line ri-lg"></i></div>':
                                                            '<div class="rounded-full cursor-pointer absolute top-1/2 -mt-4 -left-6  text-white bg-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                    nextArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 -left-6  text-white bg-primary-500 w-8 h-8 flex items-center justify-center rounded-full"><i class="ri-arrow-left-s-line ri-lg"></i></div>':
                                                            '<div class="rounded-full cursor-pointer absolute top-1/2 -mt-4 -right-6 text-white bg-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
                    centerMode: true,
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

        </script>
    @endsection
</div>
