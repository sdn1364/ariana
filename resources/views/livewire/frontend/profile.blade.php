<div>
    @section('title', __('profile'))

    <x-frontend.header-component :title="__('profile')" :small="true"
                        :image="asset('images/headers/login-header.png')"
    ></x-frontend.header-component>
    <div class="container">
        <div class="bg-gray-100 rounded-xl w-full p-5 flex flex-col space-y-5 lg:flex-row lg:space-x-10 rtl:space-x-reverse relative">
            <div>
                <label class="flex items-center justify-center w-40 h-40 rounded-xl border border-primary-500 text-primary-500 rounded-lg cursor-pointer">
                    <span class="text-7xl"><i class="icon-user"></i></span>
                    <input type='file' class="hidden"/>
                </label>
            </div>
            <div class="space-y-5">
                <p class="text-primary-500"><span class="font-bold">{{__('full_name')}}:</span> {{$user->name}}</p>
                <p class="text-primary-500"><span class="font-bold">{{__('email')}}:</span> {{$user->email}}</p>
                <p class="text-primary-500"><span class="font-bold">{{__('company')}}:</span> {{$user->company}}</p>
            </div>
            <a class="absolute top-2 ltr:right-5 rtl:left-5 text-primary-500 hover:underline" href="{{route('logout')}}">{{__('logout')}}</a>
        </div>
        <div class="w-full mt-5" >
            <x-frontend.page-title class="text-center">{{ __('related_tender') }}</x-frontend.page-title>
            <div class="w-5/6 mx-auto">
                <div class="related-tender slick-slider">
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
        <x-frontend.page-title class="text-center mt-10">{{ __('attended_tenders') }}</x-frontend.page-title>

        <div class="flex flex-col gap-5 mb-10">
            <div class="grid grid-cols-2 bg-primary-500 h-16 py-2 divide-x rtl:divide-x-reverse divide-primary-300 rounded-lg ltr:border-r-8 rtl:border-l-8 border-secondary-500">
                <div class="h-12 flex items-center"><p class="text-white ltr:pl-5 rtl:pr-5 ">{{__('subject')}}</p></div>
                <div class="grid grid-cols-4 divide-x rtl:divide-x-reverse divide-primary-300">
                    <div class="h-12 items-center justify-center hidden xl:flex"><p class="text-white">{{__('tender_code')}}</p></div>
                    <div class="h-12 items-center justify-center hidden xl:flex"><p class="text-white">{{__('tender_deadline')}}</p></div>
                    <div class="h-12 items-center justify-center hidden xl:flex"><p class="text-white">{{__('status')}}</p></div>
                    <div class="h-12 items-center justify-center hidden xl:flex"><p class="text-white">{{__('result')}}</p></div>
                </div>
            </div>
            @foreach($tenders as $tender)
                <x-frontend.vendor.tender-list-block :tender="$tender"></x-frontend.vendor.tender-list-block>
            @endforeach
        </div>
        <x-frontend.page-title class="text-center mt-10">{{ __('innovation_application') }}</x-frontend.page-title>

        <div class="flex flex-col gap-5 mb-10">
            <div class="grid grid-cols-2 lg:grid-cols-6 bg-primary-500 h-16 py-2 divide-x rtl:divide-x-reverse divide-primary-300 rounded-lg ltr:border-r-8 rtl:border-l-8 border-secondary-500">
                <div class="h-12 flex items-center col-span-1 lg:col-span-5"><p class="text-white ltr:pl-5 rtl:pr-5 ">{{__('title')}}</p></div>
                <div class="h-12 flex items-center"></div>
            </div>
            @foreach($innovations as $innovation)
                <div class="grid grid-cols-2 lg:grid-cols-6 content- bg-gray-200 h-fit py-3 divide-x rtl:divide-x-reverse divide-primary-300 rounded-lg ltr:border-r-8 rtl:border-l-8 border-secondary-500">
                    <div class="h-fit flex items-center col-span-1 lg:col-span-5"><p class="text-primary-500 ltr:pl-5 rtl:pr-5 "> {{$innovation->title}}</p></div>
                    <div class="flex items-center justify-center">
                        <a href="{{route('progress', $innovation->id)}}" class="w-fit transition-all px-5 flex items-center gap-2 text-secondary-500 hover:text-secondary-600">{{__('show_progress')}}</a>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
    @section('scripts')
        <script src="{{asset('vendor/slick/slick.min.js')}}"></script>
        <script>
            $(document).ready(function () {
                $(".related-tender").slick({
                    dots: false,
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 -right-6 text-white bg-primary-500 w-8 h-8 flex items-center justify-center rounded-full"><i class="ri-arrow-right-s-line ri-lg"></i></div>':'<div class="rounded-full cursor-pointer absolute top-1/2 -mt-4 -left-6  text-white bg-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                    nextArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 -left-6  text-white bg-primary-500 w-8 h-8 flex items-center justify-center rounded-full"><i class="ri-arrow-left-s-line ri-lg"></i></div>': '<div class="rounded-full cursor-pointer absolute top-1/2 -mt-4 -right-6 text-white bg-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
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
    @endsection
</div>
