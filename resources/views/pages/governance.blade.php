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
                            @if(app()->isLocale('en'))
                                Governance
                            @endif
                            @if(app()->isLocale('fa'))
                                حاکمیت
                            @endif
                            @if(app()->isLocale('ru'))
                                Управление
                            @endif
                        </h2>

                        <div class="text-primary-500 sector-content text-justify ss02">
                            @if(app()->isLocale('en'))
                                <p class="mb-5">
                                    We have built a strong system of corporate governance to ensure that Tunnel Sadd Ariana is a company that is worthy of the trust of society at large. We think that increasing management transparency and soundness are important. We are also working to enhance corporate governance by enabling transparent, fair, swift, and firm decision-making based on the various principles of international’s Corporate Governance, in order to achieve sustainable growth and increase the corporate value of Tunnel Sadd Ariana over the medium and long-term. </p>
                            @endif
                            @if(app()->isLocale('fa'))
                                <p class="mb-5">
                                    ما یک شرکت قدرتمند با حاکمیت شرکتی ایجاد کردیم تا اطمینان حاصل کنیم شرکت تونل سد آریانا شایسته اعتماد در سطح والای جامعه باشد. ما باور داریم که افزایش شفافیت و سلامت در مدیریت مهم است. ما همچنین به منظور دستیابی به افزایش حاکمیت شرکتی از طریق شفاف سازی، سرعت، و تصمیم گیری قاطعانه بر پایه عوامل مختلف و مهم چارچوب های شرکت بین المللی، به منظور دستیابی به رشد پایدار و افزایش ارزش حاکمیتی شرکتی تونل سد آریانا در میان مدت و بلند مدت کار می کنیم. </p>
                            @endif
                            @if(app()->isLocale('ru'))
                                <p class="mb-5">
                                    Мы создали сильную систему корпоративного управления, чтобы сделать компанию “Туннель Садд Ариана” достойной доверия общества в целом. Мы считаем важным повышение прозрачности и эффективности управления. Мы также работаем над улучшением корпоративного управления, обеспечением прозрачности, быстрого и твердого принятия решений на основе различных принципов международного корпоративного управления, в целях достижения устойчивого роста и повышения корпоративной стоимости Туннель Садд Ариана в среднесрочной и долгосрочной перспективе. </p>
                            @endif
                        </div>
                    </div>

                    <div class="h-72 md:h-80 lg:h-96 z-40 relative
                                2xl:ltr:pr-20 2xl:rtl:pl-20
                                xl:ltr:pr-16 xl:rtl:pl-16
                                lg:ltr:pr-16 lg:rtl:pl-16
                                md:ltr:pr-10 md:rtl:pl-10
                                ltr:pr-8 rtl:pl-8
                               ">
                        <img class="object-cover w-full h-full" src="{{ asset('images/who/photo-1454165804606-c3d57bc86b40.jpg') }}" alt="">
                    </div>
                </div>
                <div class="px-5 md:px-10">
                    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-10 items-center mb-10 mt-10 ">
                        <div class="w-full h-auto p-5 triangle {{ app()->isLocale('fa') ? 'triangle-bottom-left' : 'triangle-bottom-right' }}
                            border border-primary-500 rounded-lg
                            ">
                            <div class="grid grid-cols-3 gap-5 items-center">
                                <div class="">
                                    <x-lang l="en"><img src="{{asset('images/who/governance/CodeOfConduct-en.jpg')}}" alt=""></x-lang>
                                    <x-lang l="fa"><img src="{{asset('images/who/governance/CodeOfConduct-fa.jpg')}}" alt=""></x-lang>
                                    <x-lang l="ru"><img src="{{asset('images/who/governance/CodeOfConduct-ru.jpg')}}" alt=""></x-lang>
                                </div>
                                <div class="col-span-2 ">
                                    <p class="mb-5 text-primary-500 text-xl">
                                        <x-lang l="en">Code of Conduct</x-lang>
                                        <x-lang l="fa">اصول اخلاقی</x-lang>
                                        <x-lang l="ru">Нормы поведения</x-lang>

                                    </p>
                                    <p class="ss02 mb-5 text-primary-500">
                                        <x-lang l="en">Publishing Date: April 2019</x-lang>
                                        <x-lang l="fa">تاریخ انتشار: بهمن ۹۸</x-lang>
                                        <x-lang l="ru">Дата публикации: апреля 2019</x-lang>
                                    </p>
                                    <x-lang l="en">
                                        <a href="{{asset('images/who/governance/CodeOfConduct-en.pdf')}}" target="_blank" class="text-primary hover:underline text-primary-500 hover:text-secondary-500 flex items-center space-x-3 rtl:space-x-reverse"><i class="icon-downlaod"></i> <span>Download File</span></a>
                                    </x-lang>
                                    <x-lang l="fa">
                                        <a href="{{asset('images/who/governance/CodeOfConduct-fa.pdf')}}" target="_blank" class="text-primary hover:underline text-primary-500 hover:text-secondary-500 flex items-center space-x-3 rtl:space-x-reverse"><i class="icon-downlaod"></i> <span>دانلود فایل</span> </a>
                                    </x-lang>
                                    <x-lang l="ru">
                                        <a href="{{asset('images/who/governance/CodeOfConduct-ru.pdf')}}" target="_blank" class="text-primary hover:underline text-primary-500 hover:text-secondary-500 flex items-center space-x-3 rtl:space-x-reverse"><i class="icon-downlaod"></i> <span>загрузить файл</span> </a>
                                    </x-lang>
                                </div>
                            </div>
                        </div>

                        <div class="w-full h-auto p-5 triangle {{ app()->isLocale('fa') ? 'triangle-bottom-left' : 'triangle-bottom-right' }}
                            border border-primary-500 rounded-lg
                            ">
                            <div class="grid grid-cols-3 gap-5 items-center">
                                <div class="">
                                    <x-lang l="en"><img src="{{asset('images/who/governance/CorporateEnvironmetPolicy-en.jpg')}}" alt=""></x-lang>
                                    <x-lang l="fa"><img src="{{asset('images/who/governance/CorporateEnvironmetPolicy-fa.jpg')}}" alt=""></x-lang>
                                    <x-lang l="ru"><img src="{{asset('images/who/governance/CorporateEnvironmetPolicy-ru.jpg')}}" alt=""></x-lang>
                                </div>
                                <div class="col-span-2 ">
                                    <p class="mb-5 text-primary-500 text-xl">
                                        <x-lang l="en">Corporate environment policy</x-lang>
                                        <x-lang l="fa">خط مشی زیست محیطی شرکت</x-lang>
                                        <x-lang l="ru">Корпоративная экологическая политика</x-lang>

                                    </p>
                                    <p class="ss02 mb-5 text-primary-500">
                                        <x-lang l="en">Publishing Date: April 2019</x-lang>
                                        <x-lang l="fa">تاریخ انتشار: بهمن ۹۸</x-lang>
                                        <x-lang l="ru">Дата публикации: апреля 2019</x-lang>
                                    </p>
                                    <x-lang l="en">
                                        <a href="{{asset('images/who/governance/CorporateEnvironmetPolicy-en.pdf')}}" target="_blank" class="text-primary hover:underline text-primary-500 hover:text-secondary-500 flex items-center space-x-3 rtl:space-x-reverse"><i class="icon-downlaod"></i> <span>Download File</span></a>
                                    </x-lang>
                                    <x-lang l="fa">
                                        <a href="{{asset('images/who/governance/CorporateEnvironmetPolicy-fa.pdf')}}" target="_blank" class="text-primary hover:underline text-primary-500 hover:text-secondary-500 flex items-center space-x-3 rtl:space-x-reverse"><i class="icon-downlaod"></i> <span>دانلود فایل</span> </a>
                                    </x-lang>
                                    <x-lang l="ru">
                                        <a href="{{asset('images/who/governance/CorporateEnvironmetPolicy-ru.pdf')}}" target="_blank" class="text-primary hover:underline text-primary-500 hover:text-secondary-500 flex items-center space-x-3 rtl:space-x-reverse"><i class="icon-downlaod"></i> <span>загрузить файл</span> </a>
                                    </x-lang>
                                </div>
                            </div>
                        </div>

                        <div class="w-full h-auto p-5 triangle {{ app()->isLocale('fa') ? 'triangle-bottom-left' : 'triangle-bottom-right' }}
                            border border-primary-500 rounded-lg
                            ">
                            <div class="grid grid-cols-3 gap-5 items-center">
                                <div class="">
                                    <x-lang l="en"><img src="{{asset('images/who/governance/CorporateQualityPolicy-en.jpg')}}" alt=""></x-lang>
                                    <x-lang l="fa"><img src="{{asset('images/who/governance/CorporateQualityPolicy-fa.jpg')}}" alt=""></x-lang>
                                    <x-lang l="ru"><img src="{{asset('images/who/governance/CorporateQualityPolicy-ru.jpg')}}" alt=""></x-lang>
                                </div>
                                <div class="col-span-2 ">
                                    <p class="mb-5 text-primary-500 text-xl">
                                        <x-lang l="en">Corporate quality policy</x-lang>
                                        <x-lang l="fa">خط مشی کیفیت شرکت</x-lang>
                                        <x-lang l="ru">Корпоративная экологическая политика</x-lang>

                                    </p>
                                    <p class="ss02 mb-5 text-primary-500">
                                        <x-lang l="en">Publishing Date: February 2019</x-lang>
                                        <x-lang l="fa">تاریخ انتشار: بهمن ۹۸</x-lang>
                                        <x-lang l="ru">Дата публикации: февраль 2019</x-lang>
                                    </p>
                                    <x-lang l="en">
                                        <a href="{{asset('images/who/governance/CorporateQualityPolicy-en.pdf')}}" target="_blank" class="text-primary hover:underline text-primary-500 hover:text-secondary-500 flex items-center space-x-3 rtl:space-x-reverse"><i class="icon-downlaod"></i> <span>Download File</span></a>
                                    </x-lang>
                                    <x-lang l="fa">
                                        <a href="{{asset('images/who/governance/CorporateQualityPolicy-fa.pdf')}}" target="_blank" class="text-primary hover:underline text-primary-500 hover:text-secondary-500 flex items-center space-x-3 rtl:space-x-reverse"><i class="icon-downlaod"></i> <span>دانلود فایل</span> </a>
                                    </x-lang>
                                    <x-lang l="ru">
                                        <a href="{{asset('images/who/governance/CorporateQualityPolicy-ru.pdf')}}" target="_blank" class="text-primary hover:underline text-primary-500 hover:text-secondary-500 flex items-center space-x-3 rtl:space-x-reverse"><i class="icon-downlaod"></i> <span>загрузить файл</span> </a>
                                    </x-lang>
                                </div>
                            </div>
                        </div>

                        <div class="w-full h-auto p-5 triangle {{ app()->isLocale('fa') ? 'triangle-bottom-left' : 'triangle-bottom-right' }}
                            border border-primary-500 rounded-lg
                            ">
                            <div class="grid grid-cols-3 gap-5 items-center">
                                <div class="">
                                    <x-lang l="en"><img src="{{asset('images/who/governance/CorporateHealthSafetyPolicy-en.jpg')}}" alt=""></x-lang>
                                    <x-lang l="fa"><img src="{{asset('images/who/governance/CorporateHealthSafetyPolicy-fa.jpg')}}" alt=""></x-lang>
                                    <x-lang l="ru"><img src="{{asset('images/who/governance/CorporateHealthSafetyPolicy-ru.jpg')}}" alt=""></x-lang>
                                </div>
                                <div class="col-span-2 ">
                                    <p class="mb-5 text-primary-500 text-xl">
                                        <x-lang l="en">Corporate health safety policy</x-lang>
                                        <x-lang l="fa">خط مشی بهداست وایمنی شرکت</x-lang>
                                        <x-lang l="ru">Корпоративная политика безопасности здоровья</x-lang>

                                    </p>
                                    <p class="ss02 mb-5 text-primary-500">
                                        <x-lang l="en">Publishing Date: February 2019</x-lang>
                                        <x-lang l="fa">تاریخ انتشار: بهمن ۹۸</x-lang>
                                        <x-lang l="ru">Дата публикации: февраль 2019</x-lang>
                                    </p>
                                    <x-lang l="en">
                                        <a href="{{asset('images/who/governance/CorporateHealthSafetyPolicy-en.pdf')}}" target="_blank" class="text-primary hover:underline text-primary-500 hover:text-secondary-500 flex items-center space-x-3 rtl:space-x-reverse"><i class="icon-downlaod"></i> <span>Download File</span></a>
                                    </x-lang>
                                    <x-lang l="fa">
                                        <a href="{{asset('images/who/governance/CorporateHealthSafetyPolicy-fa.pdf')}}" target="_blank" class="text-primary hover:underline text-primary-500 hover:text-secondary-500 flex items-center space-x-3 rtl:space-x-reverse"><i class="icon-downlaod"></i> <span>دانلود فایل</span> </a>
                                    </x-lang>
                                    <x-lang l="ru">
                                        <a href="{{asset('images/who/governance/CorporateHealthSafetyPolicy-ru.pdf')}}" target="_blank" class="text-primary hover:underline text-primary-500 hover:text-secondary-500 flex items-center space-x-3 rtl:space-x-reverse"><i class="icon-downlaod"></i> <span>загрузить файл</span> </a>
                                    </x-lang>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
