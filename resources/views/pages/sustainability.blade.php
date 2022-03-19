@extends('layouts.app')

@section('title', __('who_we_are'))

@section('content')
    <x-frontend.header-component :title="__('who_we_are')" :small="false"
                                 :image="asset('images/headers/whoWeAre-header.png')"
    ></x-frontend.header-component>
    <div class="container relative
        before:absolute before:block before:bg-secondary-500 before:top-0 before:rounded-b-xl before:z-30
        2xl:before:w-40 2xl:ltr:before:right-0 2xl:rtl:before:left-0
        xl:before:w-40 xl:ltr:before:right-16 xl:rtl:before:left-16
        lg:before:w-32 lg:before:h-60 lg:ltr:before:right-16 lg:rtl:before:left-16
        md:before:w-28 md:before:h-68 md:ltr:before:right-16 md:rtl:before:left-16
        before:w-24 before:h-48 ltr:before:right-4 rtl:before:left-4
    "
    >
        <div class="grid grid-cols-1 xl:grid-cols-6">
            <!-- menu-->
            @include('pages.side_menu')
            <div class="relative xl:col-span-5 mb-5">
                <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-10 xl:ltr:pl-10 xl:rtl:pr-10 relative mb-10 py-10">
                    <div class="mb-5 text-base text-justify order-last lg:order-first">
                        <h2 class="mb-10 text-xl font-bold text-primary-500">

                            <x-lang l="en">
                                Sustainability and Environment
                            </x-lang>
                            <x-lang l="fa">
                                توسعه پایدار و محیط زیست
                            </x-lang>
                            <x-lang l="ru">
                                Устойчивость и Окружающая среда
                            </x-lang>
                        </h2>
                        <div class="text-primary-500 sector-content text-justify">
                            <x-lang l="en">
                                <p class="mb-5">
                                    <span class="text-secondary-500">Tunnel Sadd Ariana</span> understands the importance of Environmental Monitoring of all construction operations and this will constitute an important element of our supervisory operations.
                                </p>
                                <p class="mb-5">
                                    We strive to undertake all project and office activities in an environmentally responsible manner and to identify, manage and mitigate any risks that may impact negatively on the environment.
                                </p>
                                <p>
                                    We strive to undertake all project and office activities in an environmentally responsible manner and to identify, manage and mitigate any risks that may impact negatively on the environment.
                                </p>
                            </x-lang>
                            <x-lang l="fa">
                                <p class="mb-5">
                                    <span class="text-secondary-500">تونل سد آریانا</span> اهمیت نظارت بر محیط زیست بر کلیه عملیات ساخت و ساز را درک می کند و این عنصر مهمی از عملیات نظارتی ما را تشکیل می دهد
                                </p>
                                <p class="mb-5">
                                    ما تلاش می کنیم تمام فعالیت های پروژه و دفتر را به روشی مسئولانه از نظر زیست محیطی انجام دهیم و خطراتی را که ممکن است بر محیط تأثیر منفی بگذارد شناسایی ، مدیریت و کاهش دهیم.
                                </p>
                                <p>
                                    نظارت" مستلزم پایش منظم بر پارامترهای خاص نظیر توجه ویژه به ایجاد صوت ، کیفیت هوا ، ایمنی ، آسیب فیزیکی به زیستگاه های گیاهان و جانوران است. در این زمینه ، متخصصان محیط زیست تونل سد آریانا با ارزیابی زیست محیطی مطابق با برنامه ها و سیاست های نظارت بر محیط زیست که به عنوان بخشی از این ارزیابی و قوانین تدوین شده است، با تمام فعالیت های پروژه و سازمان پایش و کنترل می نمایند.
                                </p>
                            </x-lang>
                            <x-lang l="ru">
                                <p class="mb-5">
                                    Компания «<span class="text-secondary-500">Туннель Садд Ариана</span>» принимает во внимание важность экологического мониторинга всех строительных операций, и это будет важным элементом нашей деятельности по надзору.
                                </p>
                                <p class="mb-5">
                                    Мы стремимся выполнять все проектные и офисные деятельности экологически ответственным образом, а также выявлять, управлять и снижать любые риски, которые могут негативно повлиять на окружающую среду.
                                </p>
                                <p>
                                    «Мониторинг» включает в себя регулярное наблюдение за определенными параметрами, особенно в отношении шума, качества воздуха, безопасности, физического ущерба местам обитания от флоры и фауны. В этом контексте Специалист по окружающей среде должен убедиться, что Подрядчики, которые работают в проекте  осведомлены и соблюдают экологические требования, любого плана экологического мониторинга, разработанного в рамках этой оценки, и законов.
                                </p>
                            </x-lang>

                        </div>
                    </div>

                    <div class="h-72 md:h-80 lg:h-96 z-40 relative
                                                2xl:ltr:pr-20 2xl:rtl:pl-20
                                                xl:ltr:pr-16 xl:rtl:pl-16
                                                lg:ltr:pr-16 lg:rtl:pl-16
                                                md:ltr:pr-10 md:rtl:pl-10
                                                ltr:pr-8 rtl:pl-8
                                               ">
                        <img class="object-cover w-full h-full" src="{{ asset('images/who/Sustainability.JPG') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
