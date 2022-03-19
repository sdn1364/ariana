<!DOCTYPE html>
<html lang="fa" dir="rtl" style="direction: rtl">

<head>
    <title>کنترل پنل وبسایت تونل سد آریانا | ورود به سیستم</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="canonical" href="https://preview.keenthemes.com/metronic8"/>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}"/>

    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">


    <link href="{{asset('assets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>

</head>


<body id="kt_body" class="bg-body">


<div class="d-flex flex-column flex-root">

    <div class="d-flex flex-column flex-lg-row flex-column-fluid">


        <div class="d-flex flex-column flex-lg-row-fluid py-10">

            <div class="d-flex flex-center flex-column flex-column-fluid">

                <div class="w-lg-400px p-10 p-lg-15 mx-auto">

                    <form class="form w-100" action="{{ route('admin.login.submit') }}" method="post">
                        @method('POST')
                        @csrf

                        <div class="text-center mb-10">
                            <img src="{{asset('images/logo_color.svg')}}" height="70" alt="">
                            <h1 class="text-dark mb-3 mt-3">تونل سد آریانا</h1>
                            <p>کنترل پنل وبسایت</p>
                            @if ($errors->any())
                                <div class="bg-light-danger rounded text-danger p-3">

                                    @foreach($errors->all() as $err)
                                        <p class="mb-0">{{ $err }}</p>
                                    @endforeach
                                </div>

                            @endif
                        </div>


                        <div class="fv-row mb-10">

                            <label class="form-label text-dark">پست الکترونیک</label>


                            <input class="form-control form-control-sm" type="text" name="email" autocomplete="off"/>

                        </div>


                        <div class="fv-row mb-10">

                            <div class="d-flex flex-stack mb-2">

                                <label class="form-label text-dark mb-0">کلمه عبور</label>


                            </div>


                            <input class="form-control form-control-sm" type="password" name="password" autocomplete="off"/>

                        </div>


                        <div class="text-center">

                            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary w-100 mb-5">
                                <span class="indicator-label">ادامه</span>
                                <span class="indicator-progress">لطفا صبر کنید...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


<script>var hostUrl = "assets/";</script>

<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>


</body>

</html>
