<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{app()->isLocale('fa')? 'rtl': 'ltr'}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{__('site_name')}} | @yield('title')</title>

    <!-- Fonts -->
    @if(app()->isLocale('fa'))
        <link rel="stylesheet" href="{{ asset('css/fonts.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    @else
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/singleFont.css')}}">
    @endif
<!-- Styles -->


    @yield('styles')
    <link rel="stylesheet" href="{{ asset('css/flag-icons.css')}}">

    <link rel="stylesheet" href="{{ asset('css/remixicon.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/tsa/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick/slick-theme.css') }}">

    @livewireStyles

</head>
<body class="overflow-x-hidden" style="font-family: {{app()->getLocale() === 'fa'? 'dana': 'Roboto'}}">
<div id="loading"
     class="w-screen h-screen top-0 left-0 fixed z-[100] flex flex-col items-center justify-center bg-gradient-to-bl from-primary-500 to-primary-600">
    <img class="w-20 h-20 object-contain my-10" src="{{asset('images/logo.svg')}}" alt="">
    <h1 class="text-white font-black text-3xl">{{__('site_name')}}</h1>
    <p class="text-gray-100">{{__('loading')}}</p>
</div>
@livewire('frontend.notification')
@livewire('frontend.header-menu')
<!-- Page Content -->
<main class="pt-16">
    @yield('content')
</main>

<footer class="w-full bg-primary-500 lg:h-80 bg-no-repeat
               rtl:bg-left ltr:bg-right flex justify-center items-center
               " style="background-image: url('{{asset('images/logo-opaque.svg')}}')">

    <div class="container lg:py-0 py-10">
        <div class="grid grid-cols-1 md:gird-cols-2 lg:grid-cols-4 xl:grid-cols-5 xl:gap-10 gap-y-5">
            <div class="lg:col-span-1">
                <h4 class="font-bold text-white text-3xl w-full mb-10 triangle  rectangle  py-2 w-fit rtl:pl-5 ltr:pr-5
                     {{app()->isLocale('fa') ? 'triangle-left rectangle-left':' triangle-right rectangle-right'}} triangle-md
                    ">{{__('contact_us')}}</h4>
                <ul>
                    <li><a href="#" class="text-white flex items-center"><span class="text-3xl ltr:pr-5 rtl:pl-5 icon icon-envelope"></span>info@ariana-co.com</a></li>
                    <li><a href="{{__('linkedin_link')}}" target="_blank"  class="text-white flex items-center"><span class="text-3xl ltr:pr-5 rtl:pl-5 icon icon-linked-in"></span>{{__('linkedin')}}</a></li>
                    <li><a href="{{__('aparat_link')}}" target="_blank" class="text-white flex items-center"><span class="text-3xl ltr:pr-5 rtl:pl-5 icon icon-aparat"></span>{{__('aparat')}}</a></li>
                </ul>
            </div>
            <div class="lg:col-span-3 xl:col-span-3 xl:rtl:pr-32 xl:ltr:pl-32 lg:rtl:pr-14 lg:ltr:pl-14">

                <h4 class="font-bold text-white text-3xl w-full mb-10 triangle  rectangle py-2 w-fit rtl:pl-5 ltr:pr-5
                    {{app()->isLocale('fa') ? 'triangle-left rectangle-left':' triangle-right rectangle-right'}} triangle-md
                    ">{{__('hq')}}</h4>
                <ul>
                    <li><a href="#" class="text-white flex items-center"><span class="text-3xl ltr:pr-5 rtl:pl-5 icon icon-location"></span>{{__('hq_address')}}</a></li>
                    <li><a href="#" class="text-white flex items-center ss02"><span class="text-3xl ltr:pr-5 rtl:pl-5 icon icon-phone"></span><span dir="ltr">021 88 61 6800</span></a></li>
                    <li><a href="#" class="text-white flex items-center ss02"><span class="text-3xl ltr:pr-5 rtl:pl-5 icon icon-fax"></span><span dir="ltr">021 40 88 39 22</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

@livewireScripts

<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

{{--<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.3.2.js')}}"></script>--}}

<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>

<script src="{{asset('js/app.js')}}"></script>
@if(request()->routeIs('vendor') || request()->routeIs('press'))
    <script src="{{ asset('vendor/datepicker/persian-date.min.js') }}"></script>
    <script src="{{ asset('vendor/datepicker/persian-datepicker.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.inline-date').persianDatepicker({
                inline: true,
                altField: '#inlineExampleAlt',
                altFormat: 'LLLL',
                calendarType: '{{ app()->isLocale('fa')? 'persian':'gregorian' }}',
                initialValue: true,
                navigator: {
                    scroll: {
                        enabled: false
                    },
                    text: {
                        "btnNextText": "{{ app()->isLocale('fa') ? 'ri-arrow-right-s-fill': 'ri-arrow-left-s-fill'}}",
                        "btnPrevText": "{{ app()->isLocale('fa') ? 'ri-arrow-left-s-fill': 'ri-arrow-right-s-fill'}}",
                    }
                },

            });
        })
    </script>
@endif

@yield('scripts')

</body>
</html>
