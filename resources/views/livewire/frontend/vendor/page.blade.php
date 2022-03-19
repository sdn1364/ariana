<div>
    @section('title', __('vendor'))

    <x-frontend.header-component :title="__('vendor')" :small="false"
                                 :image="asset('images/headers/vendor-header.png')"
                                 :breadcrumb="[
                            __('vendor'),
                            $tender->title
                        ]"
    ></x-frontend.header-component>
    <div class="container py-10">
        <x-frontend.page-description page="vendor">
            <x-slot name="text">
                <x-frontend.page-title>{{$tender->title}} <span class="text-secondary-500">({{__($tender->type)}})</span></x-frontend.page-title>
                <p class="text-secondary-500 font-bold">{{__('tender_code')}}: </p>
                <p class="text-primary-500 mb-5 ss02">{{$tender->code}}</p>
                <p class="text-secondary-500 font-bold">{{__('deadline')}}:</p>
                <p class="text-primary-500 mb-5 ss02">
                    {{app()->isLocale('fa') ? $tender->deadline->format('d-%B-Y') : $tender->deadline->format('d F Y')}}
                </p>
                <p class="text-secondary-500 font-bold">{{__('status')}}:</p>
                <p class="mb-5 {{$tender->progress == 'current' ? 'text-green-400':'text-red-400'}}">{{__($tender->progress)}}</p>
            </x-slot>
            <x-slot name="photo">
                <img class="object-cover w-full h-full" src="{{ asset($tender->getFirstMediaUrl()) }}" alt="">
            </x-slot>
        </x-frontend.page-description>

        <p class="text-secondary-500 font-bold">{{__('brief')}}:</p>
        <div class="text-primary-500 mb-10 sector-content">
            {!! $tender->brief !!}
        </div>
        <p class="text-secondary-500 font-bold">{{__('your_role')}}:</p>
        <div class="text-primary-500 mb-5 sector-content">
            <p class="mb-5">{{__('roles_text')}}</p>
            {!! $tender->roles !!}
        </div>
        <a href="" class="text-primary-500 hover:underline decoration-secondary-500 flex flex-row items-center"><i class="icon-downlaod ltr:mr-2 rtl:ml-4 text-lg"></i> {{ __('download_brochure') }}</a>

{{--        @if($tender->tenderAapplications->user_id != auth()->user()->id)

        @endif--}}

        <div class="flex flex-row items-center justify-center my-10">
            <a href="{{route('tender-step-one', $tender->id)}}" class="py-3 px-12 bg-secondary-500 text-xl text-white font-bold rounded-lg">{{ __('apply') }}</a>
        </div>

        <div class="w-full mt-20">
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
                    asNavFor: '.slideshow',
                    focusOnSelect: true,
                    rtl: {{app()->isLocale('fa') ? 'true' : 'false'}},
                    responsive: [
                        {
                            breakpoint: 640,
                            settings: {
                                slidesToShow: 1,
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
            })

            function slickNav(type) {
                $('.slideshow').slick(type)
            }

        </script>
    @endsection

</div>
