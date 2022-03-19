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
                                People
                            </x-lang>
                            <x-lang l="fa">
                                مردم
                            </x-lang>
                            <x-lang l="ru">
                                Люди
                            </x-lang>
                        </h2>
                        <div class="text-primary-500 sector-content">
                            <x-lang l="en">
                                <p>
                                    Tunnel Sadd Ariana places great emphasis on the safety of all persons either employed on the works of the contracts or travelling in the vicinity of them. This is because people are at the core of our business and our purpose is to improve lives and shape cities and communities around the world. We consider on-site safety to be of paramount and fundamental importance and will take steps to make sure that all the personnel of the projects are fully apprised of their responsibilities in this regard.                                </p>
                            </x-lang>
                            <x-lang l="fa">
                                <p>
                                    تونل سد آریانا بر ایمنی همه افرادی که در حوزه فعالیتی شرکت یا در مجاورت آنها کار می کنند تأکید زیادی دارد. این بدان دلیل است که افراد در هسته اصلی کار ما هستند و هدف ما بهبود زندگی و شکل دادن به شهرها و جوامع در سراسر جهان هستیم. ما ایمنی در محل را دارای اهمیت فوق العاده و اساسی می دانیم و گامهایی را برمی داریم تا اطمینان حاصل کنیم که کلیه افراد پروژه ها و شرکت از مسئولیتهای خود در این زمینه کاملاً آگاه هستند.                                </p>
                            </x-lang>
                            <x-lang l="ru">
                                <p>
                                    Tunnel Sadd Ariana places great emphasis on the safety of all persons either employed on the works of the contracts or travelling in the vicinity of them. This is because people are at the core of our business and our purpose is to improve lives and shape cities and communities around the world. We consider on-site safety to be of paramount and fundamental importance and will take steps to make sure that all the personnel of the projects are fully apprised of their responsibilities in this regard.                                </p>
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
                        <img class="object-cover w-full h-full" src="{{ asset('images/who/people.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
