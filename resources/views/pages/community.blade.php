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
                                Community
                            </x-lang>
                            <x-lang l="fa">
                                جامعه
                            </x-lang>
                            <x-lang l="ru">
                                Сообщество
                            </x-lang>
                        </h2>
                        <div class="text-primary-500 sector-content">
                            <x-lang l="en">
                                <p>
                                    Tunnel Sadd Ariana places great emphasis on the safety of all persons either employed on the works of the contracts or travelling in the vicinity of them. This is because people are at the core of our business and our purpose is to improve lives and shape cities and communities around the world. We consider on-site safety to be of paramount and fundamental importance and will take steps to make sure that all the personnel of the projects are fully apprised of their responsibilities in this regard.
                                </p>
                            </x-lang>
                            <x-lang l="fa">
                                <p class="mb-5">
                                    شرکت تونل سد آریانا کمکِ مالیِ فرد به فرد را دور از شأن کمک گیرنده می‌داند، این شرکت بیشتر علاقمند به اقدامات عام المنفعه می‌باشد ، با این همه گهگاه از کمک به افراد نیازمند بدون مواجهه با آنان دریغ نکرده است.
                                </p>
                                <p class="mb-5">
                                    در شرایط کنونیِ جامعۀ بشری ، بهترین راه برای عبور از شرایط دشوار تشویق و ترویجِ رفتارهای بشر دوستانه و خیرخواهانه و کمک به قشر ضعیف جامعه است.
                                </p>

                            </x-lang>
                            <x-lang l="ru">
                                <p>
                                    Tunnel Sadd Ariana places great emphasis on the safety of all persons either employed on the works of the contracts or travelling in the vicinity of them. This is because people are at the core of our business and our purpose is to improve lives and shape cities and communities around the world. We consider on-site safety to be of paramount and fundamental importance and will take steps to make sure that all the personnel of the projects are fully apprised of their responsibilities in this regard.
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
                        <img class="object-cover w-full h-full" src="{{ asset('images/who/closeup-support-hands.png') }}" alt="">
                    </div>
                </div>
                <div class="p-0 md:p-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-16">
                        <div class="m-5 md:m-10 relative flex items-center
                        before:w-8 before:h-28 before:bg-secondary-500 ltr:before:rounded-r-lg rtl:before:rounded-l-lg ltr:before:left-full rtl:before:right-full before:absolute  ">
                            <img class="w-full h-full object-cover" src="{{asset('images/who/photo-1454165804606-c3d57bc86b40.jpg')}}" alt="">
                        </div>
                        <div class="sector-content text-primary-500 text-justify">
                            <x-lang l="en">
                                <p class="mb-5">
                                    For this purpose, within the framework of social and financial support, Tunnel Sadd Ariana considers aiding underprivileged individuals or groups of the society as its responsibility. Furthermore, it believes that in the lexicon of social and economic responsibility, help and support should substitute legal rights payment towards those in need in the society since the impoverished and the destitute are the fruit of communities. </p>
                                <p class="mb-5">
                                    Accordingly, some financial aid have been paid to the following charity institutes and organizations:
                                </p>
                                <ul>
                                    <li>Mehrvarzan Moein charity institute</li>
                                    <li>Bachehaye Aseman institute (for the disabled children)</li>
                                    <li>Sobhe Ruyesh school (for the working children)</li>
                                    <li>Abshar Atefeha charity NGO</li>
                                    <li>Mah Monir Bani Hashem charity organization</li>
                                    <li>Imam Khomeini Relief Foundation, Sistan and Baluchistan branch</li>
                                    <li>Financial aid for the release of prisoners</li>

                                </ul>
                            </x-lang>
                            <x-lang l="fa">
                                <p class="mb-5">
                                    برای این منظور در چارچوب مشارکت اجتماعی و اقتصادیِ شرکت تونل سد آریانا ، کمک و یاری به اشخاص یا گروه‌های بی بضاعت جامعه را وظیفه خود می داند و معتقد است کلمه کمک و یاری باید در فرهنگ مشارکت اقتصادی و اجتماعی با پرداخت حقوقِ قانونی به افراد نیازمند جامعه جایگزین کرد زیرا که گروه های بی بضاعت و واماندگان محصولِ جامعه‌اند .
                                </p>
                                <p class="mb-5">
                                    بر این اساس به شرح ذیل برخی از پرداخت ها مطابق تعریف فوق به موسسات و بنیادهای خیریه انجام شده است:
                                </p>
                                <ul>
                                    <li>موسسه خیریه مهرورزان معین</li>
                                    <li>موسسه خیریه معلولین بچه های آسمان</li>
                                    <li>مدرسه صبح رویش کودکان کار</li>
                                    <li>آبشار عاطفه ها</li>
                                    <li>موسسه خیریه ماه منیر قمر بنی هاشم</li>
                                    <li>کمیته امداد امام خمینی (ره) شعبه سیستان و بلوچستان</li>
                                    <li>کمک به آزادسازی زندانی ها</li>
                                </ul>
                            </x-lang>
                            <x-lang l="ru">
                                <p class="mb-5">
                                    С этой целью, в рамках социально-экономического участия, компания Туннель Садд Ариана считает что помощь бедным людям или нуждающимся группам в обществе является долгом и верит, что слово «помощь» надо заменить оплатой законных прав в культуре экономического и социального участия так как нуждающиеся группы и бедные люди являются продуктом общества. </p>
                                <p class="mb-5">
                                    Соответственно, часть выплат благотворительным организациям и фондам была произведена следующим образом:
                                </p>
                                <ul>
                                    <li>Благотворительной организации Мехрварзан Моин</li>
                                    <li>Благотворительной организации инвалидов Бачехайе Асман</li>
                                    <li>Школе работающих детей Собхе Ройеш</li>
                                    <li>Организации Абшар Атефеха</li>
                                    <li>Благотворительной организации Мах Мунир Камар Бани Хашем</li>
                                    <li>Комитету помощи имама Хомейни, Систан и Белуджистанский филиал</li>
                                    <li>На помощь в освобождении заключенных</li>
                                </ul>
                            </x-lang>
                        </div>
                    </div>
                </div>
                <div class="p-0 md:p-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10">
                        <div class="text-primary-500 text-justify order-last md:order-first">
                            <x-lang l="en">
                                <p class="font-medium text-lg mb-5">
                                    Assisting and aiding at the project sites due to force majeure conditions
                                </p>
                                <p class="mb-5">
                                    Based on its organizational values and policies, Tunnel Sadd Ariana feels obligated to help local population within the vicinity of its projects during times of emergency. </p>
                                <p class="ss02">
                                    Following the dam failure and the subsequent partial structural collapse of the reservoir dam in Uzbekistan and adjacent to the border with Kazakhstan, a great amount of the approximate one billion cubic meters of water flowed in Kazakhstan through natural flood conduits. Since many villages were located inside the course of the flood, the governorate of the region held an emergency meeting with the presence of the representatives of the employer, Committee of water resources, and Tunnel Sadd Ariana. By the order of company management to the project managers, all ongoing project activities were suspended so that the machinery and equipment of the Makhtaaral project could be dispatched to the effort of avoiding the flood from entering the villages and residential areas. This endeavor proved to be highly efficient and received commendation from relevant authorities. </p>
                            </x-lang>
                            <x-lang l="fa">
                                <p class="font-medium text-lg mb-5">
                                    کمک و یاری رسانی به وضعیت قهری اتفاق افتاده در محل اجرای پروژه ها
                                </p>
                                <p class="mb-5">
                                    شرکت تونل سد آریانا براساس سیاست ها و ارزشهای سازمانی، خود را ملزم می داند در زمان اضطرار به اهالی ساکن در محدوده های پروژه های خود یاری رسانی نماید.
                                </p>
                                <p class="ss02">
                                    در تاریخ 02/05/2020 درپی شکست و رانش بخشی از دیواره سد ذخیره آب کشور ازبکستان در مجاورت مرز کشور قزاقستان و جاری شدن در حدود یک میلیارد متر مکعب آب و ورود بخش زیادی از آن به داخل مرزهای کشور قزاقستان از طریق مسیل ها و تحت تاثیر قرار گرفتن روستا های در مسیر جریان سیل، نشست فوری در محل فرمانداری با حضور نمایندگان کارفرما ، کمیته منابع آب و شرکت تونل سد آریانا برگزار گردید که طی آن از طرف مدیریت شرکت به مدیران پروژه دستور داده شد ضمن تعطیلی فعالیت های جاری در پروژه ماختارال کلیه ماشین آلات برای پیشگری از ورود سیلاب به روستاها و منطق مسکونی اعزام شوند و این اقدام نیز بسیار موثر بوده و مورد تقدیر مقامات مربوطه قرار گرفت.
                                </p>
                            </x-lang>
                            <x-lang l="ru">
                                <p class="font-medium text-lg mb-5">
                                    Оказание помощи на подпроектных зонах в связи с форс-мажорными обстоятельствами
                                </p>
                                <p class="mb-5">
                                    Опыраясь на своих организационных ценностях и политике, компания «Туннель Садд Ариана» считает своим долгом помогать местному населению, которые непосредственно близки к нашим проектам во время чрезвычайных ситуаций.
                                </p>
                                <p>
                                    После прорыва плотины и последующего частичного обрушения конструкции водохранилища плотины в Узбекистане и прилегающей к границе с Казахстаном, большой объем воды, составляющий около одного миллиарда кубометров, в связи с чем произошло наводнение в Казахстане. Поскольку многие сельские округа оказались в зоне наводнения, в Акимате региона было проведено экстренное совещание с участием представителей заказчика, Комитета водных ресурсов и компании Туннель Садд Ариана. По распоряжению Директора компании руководителям проекта, все производственные работы по проекту были приостановлены, чтобы спецтехники и оборудование проекта в Махтааральском районе могли быть отправлены для предотвращения попадания наводнения в деревни и жилые районы. Эта работа оказалась высокоэффективной и заслужила благодарность соответствующих органов. </p>
                            </x-lang>
                        </div>
                        <div class="order-first md:order-last">
                            <div class="relative before:bg-secondary-500 before:absolute before:h-28">
                                <div class="community-slider slick-slider mb-10">
                                    <div>
                                        <img src="{{asset('images/who/csr/Picture1.png')}}" alt="">
                                    </div>
                                    <div>
                                        <img src="{{asset('images/who/csr/Picture3.png')}}" alt="">
                                    </div>
                                    <div>
                                        <img src="{{asset('images/who/csr/Picture5.png')}}" alt="">
                                    </div>
                                    <div>
                                        <img src="{{asset('images/who/csr/Picture7.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="w-[90%] mx-auto">
                                <div class="community-nav-slider slick-slider">
                                    <div>
                                        <div class="mx-1">
                                            <img src="{{asset('images/who/csr/Picture1.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mx-1">
                                            <img src="{{asset('images/who/csr/Picture3.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mx-1">
                                            <img src="{{asset('images/who/csr/Picture5.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mx-1">
                                            <img src="{{asset('images/who/csr/Picture7.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-5">
                        <div>
                            <img src="{{asset('images/who/csr/taghdirname-CSR3Community.png')}}" alt="">
                        </div>
                        <div>
                            <img src="{{asset('images/who/csr/taghdirname-ghazaghi.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick/slick-theme.css') }}">
@endsection
@section('scripts')
    <script src="{{asset('vendor/slick/slick.min.js')}}"></script>
    <script>

        $(document).ready(function () {

            $(".community-slider").slick({
                dots: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                centerPadding: '0',
                asNavFor: '.community-nav-slider',
                prevArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 right-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 left-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                nextArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 left-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 right-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
                rtl: {{app()->isLocale('fa') ? 'true' : 'false'}},

            });


            $(".community-nav-slider").slick({
                dots: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 -right-8 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer absolute top-1/2 -mt-4 -left-8 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                nextArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 -left-8 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer absolute top-1/2 -mt-4 -right-8 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
                asNavFor: '.community-slider',
                focusOnSelect: true,
                centerMode: true,
                rtl: {{app()->isLocale('fa') ? 'true' : 'false'}},
                responsive: [
                    {
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 3,
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

    </script>
@endsection
