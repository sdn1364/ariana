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
                                CSR
                            </x-lang>
                            <x-lang l="fa">
                                مسئولیت اجتماعی
                            </x-lang>
                            <x-lang l="ru">
                                Корпоративная социальная ответственность (КСО)
                            </x-lang>
                        </h2>
                        <div class="text-primary-500 sector-content">
                            <x-lang l="en">
                                <p>
                                    The third decade of the 20th century is upon us and the corporate world is immersed in an unprecedented transformation process. Disruptive technology, people’s changing lifestyle habits, demographic and urbanization trends and the needs that define sustainable development agendas demand a response from economic, social and institutional actors. All these changes have a direct impact on company business models, which are derived from new regulatory frameworks and consumer and investor selection criteria. More and more often, companies try to align their commercial strategies with corporate social and sustainable responsibility. Here at Tunnel Sadd Ariana, we are aware of the role we play in society and incorporated a series of social commitments decades ago. In addition to these initial actions, we have continued to add new commitments, which currently make up our Corporate Responsibility Strategic Plan. What was originally conceived as a resource to improve our reputation and create value is now an end goal in itself. We have even taken this a step further and are attempting to implement it into our entire value chain.
                                </p>
                            </x-lang>
                            <x-lang l="fa">
                                <p>
                                    دهه سوم قرن بیستم پیش روی ماست و دنیای شرکت ها در یک روند تحول بی سابقه غوطه ور شده اند. فناوری برهم زننده، تغییر عادات سبک زندگی مردم، روند جمعیت شناختی و شهرنشینی و نیازهایی که برنامه های توسعه پایدار را تعریف می کنند، پاسخ بازیگران اقتصادی، اجتماعی و نهادی را می طلبد. همه این تغییرات تأثیر مستقیمی بر مدل های تجاری شرکت دارند که از چارچوب های نظارتی جدید و معیارهای انتخاب مصرف کننده و سرمایه گذار ناشی می شود. بیشتر و بیشتر ، شرکت ها سعی می کنند استراتژی های تجاری خود را با مسئولیت اجتماعی و شرکتی سازگار هماهنگ کنند. در تونل سد آریانا ما از نقشی که در جامعه بازی می کنیم، آگاه هستیم و مجموعه ای از تعهدات اجتماعی را از دهه های پیش در خود گنجانده ایم. علاوه بر این اقدامات اولیه، ما به افزودن تعهدات جدید ادامه داده ایم، كه در حال حاضر برنامه استراتژیك مسئولیت شرکتی ما را تشکیل می دهد. آنچه در ابتدا به عنوان منبعی برای ارتقا شهرت و ارزش آفرینی ما تصور می شد، اکنون خود هدف نهایی ما است. ما حتی از این یک گام را جلوتر برداشته ایم و سعی داریم آن را در کل زنجیره ارزش خود پیاده کنیم.
                                </p>
                            </x-lang>
                            <x-lang l="ru">
                                <p>
                                    Приближается третье десятилетие 20-го века, и корпоративный мир погружен в беспрецедентный процесс трансформации. Предовые технологии, изменение образа жизни людей, демографические и урбанизационные тенденции, потребности, которые определяют программы устойчивого развития требуют ответа от экономических, социальных и институциональных субъектов. Все эти изменения оказывают непосредственное влияние на бизнес-модели компаний в результате появления новой нормативно-правовой базы и критериев отбора потребителей и инвесторов. Все чаще и чаще компании пытаются согласовать свои коммерческие стратегии с корпоративной социальной и устойчивой ответственностью. В компании Туннель Садд Ариана, мы осознаем ту роль, которую мы играем в обществе, и включили ряд социальных обязательств десятилетия назад. В дополнение к этим первоначальным действиям мы продолжали добавлять новые обязательства, которые в настоящее время составляют наш Стратегический план корпоративной ответственности. То, что изначально считалась источником для улучшения нашей репутации и создания ценности, теперь само по себе является нашей конечной целью. Мы даже сделали еще один шаг вперед и пытаемся внедрить его во всю нашу цепочку создания ценности.
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
                        <img class="object-cover w-full h-full" src="{{ asset('images/who/close-up-hand-holding-safety-helmet.jpg') }}" alt="">
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-3 ">
                            <a href="{{route('people')}}"
                               class="group text-white bg-center bg-cover flex justify-center items-center font-bold relative overflow-hidden
                                      lg:h-80 h-60 lg:text-xl
                                      md:text-lg
                                      before:absolute before:bg-gray-900 before:bg-opacity-50 before:w-full before:h-full before:z-0
                                      hover:before:bg-opacity-30
                                      " style="background-image: url('{{asset('images/who/people.jpg')}}')">
                                <span class="relative z-20 group-hover:text-2xl group-hover:text-secondary-500 transition-all">
                                    {{__('whoweare')['people']}}
                                </span>
                            </a>
                        <a href="{{route('community')}}"
                           class="group text-white bg-center bg-cover flex justify-center items-center font-bold relative overflow-hidden
                                      lg:h-80 h-60 lg:text-xl
                                      md:text-lg
                                      before:absolute before:bg-gray-900 before:bg-opacity-50 before:w-full before:h-full before:z-0
                                      hover:before:bg-opacity-30
                                      " style="background-image: url('{{asset('images/who/closeup-support-hands.png')}}')">
                                <span class="relative z-20 group-hover:text-2xl group-hover:text-secondary-500 transition-all">
                                    {{__('whoweare')['community']}}
                                </span>
                        </a>
                        <a href="{{route('community')}}"
                           class="group text-white bg-center bg-cover flex justify-center items-center font-bold relative overflow-hidden
                                      lg:h-80 h-60 lg:text-xl
                                      md:text-lg
                                      before:absolute before:bg-gray-900 before:bg-opacity-50 before:w-full before:h-full before:z-0
                                      hover:before:bg-opacity-30
                                      " style="background-image: url('{{asset('images/who/Sustainability.JPG')}}')">
                                <span class="relative z-20 group-hover:text-2xl group-hover:text-secondary-500 transition-all">
                                    {{__('whoweare')['sustain']}}
                                </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
