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
                                History
                            @endif
                            @if(app()->isLocale('fa'))
                                تاریخچه
                            @endif
                            @if(app()->isLocale('ru'))
                                Туннель Садд Ариана
                            @endif

                        </h2>
                        <div class="text-primary-500 sector-content text-justify">
                            @if(app()->isLocale('en'))
                                <p>
                                    <span class="text-secondary-500">Tunnel Sadd Ariana</span> company was established in 2007 with the cooperation of some accomplished, like-minded managers based on their valuable experience acquired in multiple large-scale construction projects. This company obtained the highest rankings of Construction and Consultation Services as well as Design and Build of roads from the Planning and Budget Organization of Iran in a short period of time in continuing its rapid progress throughout the years after establishment. this company became a successful and pioneer contractor with various branches. This achievement is due to the focus on providing outstanding services and professional commitment, unrelenting endeavor, continuous quality enhancement, customer-oriented policies, reducing costs and construction time, applying modern methods and technologies, as well as employing experienced personnel and developed equipment and modern machinery. Due to these
                                    factors, this company was awarded as an exemplary national exporter of engineering and technical services for five consecutive years from 2017 to 2021. Ariana group consists of several subsidiaries such as Behan Sadd Consulting engineers company (which provides engineering and consulting services for dam and power plant projects), Tajikkan consulting engineers companies (which specialize in providing design, consultation, and engineering services), and Sokhtmoni Tunnel company (which offers services in urban projects in the Republic of Tajikistan). While operating independently, these companies have an integrated management system. In order to efficiently supervise all foreign and domestic projects as well as the subsidiaries, Ariana group's headquarters is located in Tehran, Iran.
                                </p>
                            @endif
                            @if(app()->isLocale('fa'))
                                <p class="mb-5 ss02">
                                    <span class="text-secondary-500">شرکت تونل سد آریانا</span> در سال 1386 به همت تعدادی از مدیران با تجربه، هم‌فکر و با تکیه بر تجارب موفق به دست آمده در مدیریت چندین پروژه بزرگ عمرانی تاسیس گردید. این شرکت، در مدت زمان کوتاهی بالاترین رتبه‌های صلاحیت پیمانکاری، خدمات مشاوره در رشته راه‌سازی و خدمات طرح و ساخت در این زمینه را از سازمان برنامه و بودجه کشور اخذ نمود. این شرکت در ادامه پیشرفت شتابان خود در طول چند سال پس از تاسیس، توانست به یک شرکت موفق و پیشرو پیمانکاری با چندین شرکت وابسته تبدیل شود. این امر مرهون تمرکز بر ارائه خدمات با کیفیت و تعهد کاری، تلاش بی‌وقفه، ارتقاء مستمر سطح کیفی، مشتری مداری، کاهش هزینه‌ها و زمان اجرای پروژه‌ها، استفاده از روش‌های نوین، متخصصان مجرب و امکانات کارآمد می‌باشد. در عمل، برگزیده شدن این شرکت به عنوان صادر کننده نمونه خدمات فنی و مهندسی برای پنج سال پیاپی از سال 1396 تا 1400 موید این امر می‌باشد. شرکت‌های بهان سد (خدمات مهندسی و مشاوره در زمینه‌ی سد و نیروگاه)، مهندسین مشاور تاجیکان (در زمینه طراحی، مشاوره و
                                    خدمات مهندسی) و ساختمان تونل (ارائه دهنده خدمات پروژه‌های درون شهری در کشور تاجیکستان) شرکت‌های زیرمجموعه گروه آریانا می‌باشند. شرکت‌های مذکور در عین حال که به صورت مستقل عمل می‌نمایند، دارای مدیریت یکپارچه و منسجم هستند.
                                </p>

                            @endif
                            @if(app()->isLocale('ru'))
                                <p class="mb-5">
                                    Компания “<span class="text-secondary-500">Туннель Садд Ариана</span>” была основана в 2007 году в результате сотрудничества опытных единомышленных директоров, опираясь на успешный опыт управления несколькими крупными строительными проектами.
                                </p>
                                <p class="mb-5">
                                    Компания успела за короткий период времени получить высшие уровни профессиональной квалификации в сфере дорожного строительства и проектно-строительных услуг от организации планирования и бюджетирования Ирана. Она оказывает консалтинговые и проектно-строительные услуги по строительству дорог и имеет лицензию 2 категории в этой области.
                                </p>
                                <p>

                                </p>
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
                <div class="xl:ltr:pl-10 xl:rtl:pr-10">
                    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                        @if(app()->isLocale('en'))
                            <div>
                                <img class="object-cover w-full h-full" src="{{ asset('images/who/photo-1454165804606-c3d57bc86b40.jpg') }}" alt="">
                            </div>
                            <div>
                                <p class="text-primary-500 text-justify">
                                    <span class="text-secondary-500">Tunnel Sadd Ariana</span> company has obtained valuable and extensive experiences in executing enormous civil projects including the construction of roads, railways, bridges, tunnels, irrigation canals and drainage networks, And automation systems, Water transfer and sewage collecting systems, structural retrofitting, various types of dams and hydro power plants, Power transmission and distribution, residential complexes, landfills, and many more projects. Ariana's activities cover various types of civil projects in the central Asia region such as participation in the construction of the world's tallest embankment dam with a clay core in Tajikistan along with reconstruction of irrigation and drainage networks in Kazakhstan, Armenia, and Uzbekistan as the main contractor and the construction of the border crossing bridge between Armenia and Georgia as a design and Build (DB) project. By implementing long-term strategic
                                    plan and by the grace of the almighty God, we are determined to enhance our position and that of our dear country in exporting engineering and technical services through our valuable experiences and the diligence of our personnel.
                                </p>
                            </div>
                        @endif
                        @if(app()->isLocale('fa'))
                            <div>
                                <img class="object-cover w-full h-full" src="{{ asset('images/who/photo-1454165804606-c3d57bc86b40.jpg') }}" alt="">
                            </div>
                            <div>
                                <p class="text-primary-500 text-justify">
                                    دفتر مرکزی گروه آریانا با هدف مدیریت عالیه بر پروژه‌های داخلی و خارجی و نیز شرکت‌های تابعه در تهران واقع شده است. هم اکنون گروه آریانا دارای تجربیات ارزنده و وسیعی در زمینه اجرای پروژه‌های بزرگ عمرانی در داخل و خارج از کشور از قبیل احداث راه، راه‌آهن، پل، تونل، شبکه‌های آبیاری و زهکشی و سیستم‌های اتوماسیون، سیستم انتقال آب و فاضلاب، مقاوم سازی ابنیه، انواع سد و نیروگاه برق‌آبی، انتقال و توزیع نیرو، ساختمان و احداث لندفیل و دیگر پروژه‌ها می‌باشد. گروه آریانا انواع متنوعی از پروژه‌ها و طرح‌های عمرانی درمنطقه آسیای میانه از جمله مشارکت در احداث بزرگترین سد خاکی جهان با هسته رسی در تاجیکستان تا بازسازی و ساخت شبکه‌های آبیاری و زهکشی در کشورهای قزاقستان، ارمنستان و ازبکستان و احداث پل در مرز بین دو کشور گرجستان و ارمنستان بصورت طرح و ساخت را در دست اقدام دارد. اراده بر این است تا با عمل به برنامه راهبردی بلندمدت و با عنایت به الطاف ایزد منان، تجارب ارزشمند گذشته و تلاش کلیه پرسنل، جایگاه خود و کشور عزیزمان را در حوزه صادرات خدمات فنی و مهندسی بیش از پیش
                                    ارتقا بخشیم.
                                </p>
                            </div>
                        @endif
                        @if(app()->isLocale('ru'))
                            <p class="mb-5">
                                <span class="text-secondary-500">Туннель Садд Ариана</span> продолжала свой быстрый рост и в течение нескольких лет после основания и стала успешным и ведущим подрядчиком с несколькими филиалами. Этот успех был достигнут благодаря предоставлению качественных услуг и приверженности к работе, неустанным усилиям, постоянному повышению качества, ориентации на клиента, сокращению затрат и времени выполнения проекта, использованию новых методов, опытным профессионалам и эффективному оборудованию.
                            </p>
                            <p>
                                На практике, выбор нашей компании в качестве лучшего экспортера технических и инженерных услуг в течение 5 лет подряд с 2017 по 2021 подтверждает это. Компания Бехан Садд (Инженерные и консультационные услуги в области плотины и электростанции) и инженерно-консалтинговые компании Саманян и Таджикан (в области проектирования, консалтинга и инженерных услуг) и Сахтеман Туннель  (Услугодатель  по городским проектам в Таджикистане) являются дочерними предприятиями компании “Тунелль Садд Ариана”  и работая независимо, подлежат интегрированному управлению.
                            </p>
                            <p>
                                Штаб-квартира Группы Арианы с целью управления отечественными, зарубежными проектами и дочерними компаниями находится в Тегеране. В настоящее время Группа Ариана имеет ценный и обширный опыт в области крупномасштабных строительных проектов внутри и за пределами страны, таких как: строительство дорог, железных дорог, мостов, туннелей, ирригационных и дренажных сетей, систем водоснабжения, систем автоматизации и канализаций,  армирование конструкций, строительство плотин и ГЭС, систем электроснабжения, полигонов и т.п.
                            </p>
                            <p>
                                Широкий спектр проектов в Центральной Азии, включая строительство крупнейшей в мире земляной плотины с глиняным сердечником в Таджикистане до реконструкции и строительства ирригационных и дренажных сетей в Казахстане, Армении и Узбекистане,  также строительство пограничного моста между Грузией и Арменией на условиях “разработка – строительство” выполняется Группой Арианы. Намерение  заключается в том, чтобы следованием долгосрочному стратегическому плану, верой в Бога, используя ценный опыт прошлых лет и усилиями персонала, повысить уровень компании и нашей страны в области экспорта технических и инженерных услуг.
                            </p>
                        @endif
                    </div>
                    <div class="flex flex-col items-center space-y-5 mt-10">
                        <div class="slick-slider history lg:h-80 w-full lg:w-2/3 rounded-lg overflow-hidden">
                            @foreach($years as $year)
                                <div>
                                    <div class="slick-slider years flex rounded-lg bg-primary-500 triangle {{ app()->isLocale('fa') ? 'triangle-bottom-left':'triangle-bottom-right'}} ">

                                        @foreach($history as $his)
                                            @if($his->year == $year->year)
                                                <div class="">
                                                    <div class="flex flex-col lg:flex-row lg:h-80 p-0">
                                                        <div class="lg:w-1/2 h-full">
                                                            <img class="object-cover w-full h-full" src="{{asset($his->getFirstMediaUrl())}}" alt="">
                                                        </div>
                                                        <div class="lg:w-1/2 p-10">
                                                            <p class="mb-5 text-secondary-500">{{$his->year}}</p>
                                                            <div class="text-white">{!! $his->content !!}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="w-full px-5 lg:px-0 lg:w-2/3 relative h-20 before:h-px before:border-primary-500 before:w-full before:border-dashed before:border-b before:absolute before:top-1/2 before:left-0">
                            <div class="slick-slider navForHistory h-20 ">
                            @foreach($years as $year)
                                <div class="cursor-pointer">
                                    <div class="h-20 flex flex-col items-center justify-center w-20">
                                        <div class="relative w-5 h-5 flex items-center justify-center border border-primary-500 bg-white rounded-full
                                                                                                    before:absolute before:h-10 before:w-px before:bg-primary-500 before:z-10
                                                                                                    {{$loop->odd ? 'before:top-0 before:mt-1':'before:bottom-0 before:mb-1'}}
                                            ">
                                            <div class="w-3 h-3 bg-primary-500 rounded-full"></div>
                                        </div>
                                        <p class="absolute text-primary-500 text-sm ltr:ml-10 rtl:mr-10
                                                                                                        {{$loop->odd ? 'bottom-0':'top-0'}}
                                            ">{{$year->year}}</p>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>

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

            $(".history").slick({
                dots: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                prevArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 right-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 left-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                nextArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 left-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 right-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
                rtl: {{app()->isLocale('fa') ? 'true' : 'false'}},
                draggable: false

            });

          
            $(".navForHistory").slick({
                                dots: false,
                                slidesToShow: {{$years->count()}},
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 -right-8 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer absolute top-1/2 -mt-4 -left-8 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                    nextArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 -left-8 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer absolute top-1/2 -mt-4 -right-8 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
                    asNavFor: '.history',
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
                                slidesToShow: 3,
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



            $(".years").slick({
                dots: false,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 right-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 left-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                nextArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 left-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer rounded-full shadow bg-white absolute z-40 top-1/2 -mt-4 right-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
                rtl: {{app()->isLocale('fa') ? 'true' : 'false'}},

            });
        })

    </script>
@endsection
