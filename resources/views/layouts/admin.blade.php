<!DOCTYPE html>

<html lang=fa" direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->
<head>
    <base href="">
    <title>کنترل پنل وبسایت تونل سد آریانا | @yield('admin-title')</title>
    <meta charset="utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{asset('favicon.ico')}}"/>
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/remixicon.css')}}">
    <link href="{{asset('assets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
    @stack('styles')

    @livewireStyles
</head>
<body id="kt_body" class="page-loading-enabled page-loading header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
<div class="page-loader">
    <div class=" d-flex flex-column align-items-center justify-content-center">
        <span class="spinner-border text-primary" role="status">
				<span class="visually-hidden">Loading...</span>
		</span>
        <span>لطفا کمی صبر کنید...</span>
    </div>
</div>
<div class="d-flex flex-column flex-root">
    <div class="flex-row page d-flex flex-column-fluid">
        @livewire('backend.admin-menu')
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            @include('components.backend.header')
            @include('components.backend.content')
            @include('components.backend.footer')
        </div>
    </div>
</div>

<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <span class="svg-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black"/>
            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black"/>
        </svg>
    </span>
</div>

<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
<script src="{{asset('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>

<script>
    toastr.options = {
        'rtl': true,
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toastr-top-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    window.addEventListener('toaster:info', event => {
        toastr.info(event.detail.message);
    });
    window.addEventListener('toaster:error', event => {
        toastr.error(event.detail.message);
    });
    window.addEventListener('toaster:warning', event => {
        toastr.warning(event.detail.message);
    });
    window.addEventListener('toaster:success', event => {
        toastr.success(event.detail.message);
    });
</script>

@stack('scripts')

@livewireScripts


</body>

</html>
