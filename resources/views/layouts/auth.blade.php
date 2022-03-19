
<!DOCTYPE html>

<html direction="rtl" dir="rtl" style="direction: rtl" >
<!--begin::Head-->
<head>

    <meta charset="utf-8"/>
    <title>کنترل‌پنل تونل سد آریانا | ورود به سیستم</title>
    <meta name="description" content="Login page example"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->


    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ asset('assets/css/pages/login/classic/login-1.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css"/>
    <!--end::Page Custom Styles-->

    <!--begin::Global تم Styles(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style.bundle.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css"/>
    <!--end::Global تم Styles-->

    <!--begin::Layout تمs(used by all pages)-->

    <link href="{{ asset('assets/css/themes/layout/header/base/light.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/themes/layout/header/menu/light.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/themes/layout/brand/light.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/themes/layout/aside/light.rtl.css')}}?v=7.0.6" rel="stylesheet" type="text/css"/>        <!--end::Layout تمs-->

    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}"/>

</head>
<!--end::Head-->

<!--begin::Body-->
<body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >

@yield('content')


<!--begin::Global تم Bundle(used by all pages)-->
<script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}?v=7.0.6"></script>
<script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js')}}?v=7.0.6"></script>
<script src="{{ asset('assets/js/scripts.bundle.js')}}?v=7.0.6"></script>
<!--end::Global تم Bundle-->


<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('assets/js/pages/custom/login/login-general.js')}}?v=7.0.6"></script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
