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
                                Company at a glance
                            @endif
                            @if(app()->isLocale('fa'))
                                شرکت در یک نگاه
                            @endif
                            @if(app()->isLocale('ru'))
                                Краткий обзор компании
                            @endif
                        </h2>

                        <div class="text-primary-500 sector-content text-justify ss02">
                            @if(app()->isLocale('en'))
                                <p class="mb-5">
                                    The “<span class="text-secondary-500">Tunnel Sadd Ariana</span>” is a multidisciplinary general Contractor and provides a wide range of engineering services to the international and internal markets. Tunnel Sadd Ariana offers a full range of project services based on customer’s requirements, from the design process to the supply and provision of equipment and materials, construction, commissioning, and operators’ training.
                                </p>
                                <p class="mb-5">
                                    The company is active in the projects such as transportation infrastructure, civil and energy management, urban development, water, environment, and pollution management. Our main clients include governments, ministries, municipalities, international project developers, construction and industrial companies.
                                </p>
                                <p class="mb-5">
                                    <span class="text-secondary-500">Tunnel Sadd Ariana </span>Company has more than 2,000 human capital working directly and indirectly. We operate in more than five countries, and our physical resources consist of more than 1,800 machines and equipment.
                                </p>
                            @endif
                            @if(app()->isLocale('fa'))
                                <p class="mb-5">
                                    <span class="text-secondary-500">تونل سد آریانا</span> یک شرکت پیمانکار عمومی چند رشته ای است و خدمات گسترده ای از مهندسی را به مشتریان در بازارهای بین المللی و داخلی ارائه می دهد. تونل سد آریانا طیف کاملی از خدمات پروژه متناسب با نیاز مشتری از فرآیند طراحی تا تأمین و تدارکات تجهیزات و مصالح ، ساخت، راه اندازی و آموزش اپراتورها را ارائه می دهد.
                                </p>
                                <p class="mb-5">
                                    این شرکت در پروژه هایی همچون بازارهای زیر ساختهای حمل و نقل، سیویل و مدیریت انرژی، توسعه شهری، آب ، محیط زیست و مدیریت آلودگی فعالیت می نماید. مشتریان اصلی ما شامل دولت ها ، وزارتخانه ها ، شهرداری ها ، توسعه دهندگان پروژه های بین المللی ، شرکت های عمرانی و شرکتهای صنعتی هستند.
                                </p>
                                <p class="mb-5">
                                    در <span class="text-secondary-500">شرکت تونل سد آریانا</span> بیش از 2000 سرمایه انسانی بصورت مستقیم و غیرمستقیم در حال کار می باشد. ما در بیش از 5 کشور فعالیت می کنیم و منابع فیزیکی ما از بیش از 1800 ماشین آلات و تجهیزات تشکیل شده است.
                                </p>
                            @endif
                            @if(app()->isLocale('ru'))
                                <p class="mb-5">
                                    Компания “<span class="text-secondary-500">Туннель Садд Ариана</span>” является многопрофильным генеральным подрядчиком и предоставляет широкий спектр инженерных услуг на международном и внутреннем рынках. Туннель Садд Ариана предлагает полный спектр проектных услуг, основанных на требованиях заказчика, от процесса проектирования до поставки и предоставления оборудования и материалов, строительства, ввода в эксплуатацию и обучения операторов.
                                </p>
                                <p class="mb-5">
                                    Компания активно участвует в таких проектах, как транспортная инфраструктура, гражданское и энергетическое управление, городское развитие, водоснабжение, окружающая среда и борьба с загрязнением окружающей среды. Нашими основными клиентами являются правительства, министерства, муниципалитеты, международные разработчики проектов, строительные и промышленные компании.
                                </p>
                                <p>
                                    Компания “<span class="text-secondary-500">Туннель Садд Ариана</span>”  имеет более 2000 сотрудников, работающих прямо и косвенно. Мы работаем более чем в пяти странах, и наши физические ресурсы состоят из более чем 1800 спецтехник и оборудования.
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
                <div class="m-10">
                    @if(app()->isLocale('en'))
                        <p class="text-primary-500 mb-5"><span class="text-secondary-500">Tunnel Sadd Ariana</span> Company strives to achieve its highest performance criteria, namely: </p>
                        <ul class="space-y-5">
                            <li class="flex items-center">
                                <i class="icon-flag text-3xl text-primary-300 ltr:mr-5 rtl:ml-5"></i>
                                <p class="text-primary-500">Using its time, skills, and expertise to achieve project goals.</p>
                            </li>
                            <li class="flex items-center">
                                <i class="icon-wrench text-3xl text-primary-300 ltr:mr-5 rtl:ml-5"></i>
                                <p class="text-primary-500">Constantly acquires new knowledge and skills and uses them effectively.</p>
                            </li>
                            <li class="flex items-center">
                                <i class="icon-hat text-3xl text-primary-300 ltr:mr-5 rtl:ml-5"></i>
                                <p class="text-primary-500">Recognize the need for technical training and seek to obtain it.</p>
                            </li>
                            <li class="flex items-center">
                                <i class="icon-lamp text-3xl text-primary-300 ltr:mr-5 rtl:ml-5"></i>
                                <p class="text-primary-500">Recognizes and encourages creativity and initiative among the human resources under its control during the performance of its duties.</p>
                            </li>
                        </ul>
                    @endif
                    @if(app()->isLocale('fa'))
                        <p class="text-primary-500 mb-5">شرکت <span class="text-secondary-500">تونل سد آریانا</span> سعی می کند تا به بالاترین معیارهای عملکرد خود دستیابد، یعنی: </p>
                        <ul class="space-y-5">
                            <li class="flex items-center">
                                <i class="icon-flag text-3xl text-primary-300 ltr:mr-5 rtl:ml-5"></i>
                                <p class="text-primary-500">با استفاده از زمان، مهارت¬ها و تخصص خود به اهداف پروژه دست پیدا می کند.</p>
                            </li>
                            <li class="flex items-center">
                                <i class="icon-wrench text-3xl text-primary-300 ltr:mr-5 rtl:ml-5"></i>
                                <p class="text-primary-500">بطور پیوسته دانش و مهارت¬های جدید را کسب و از آنها به صورت مؤثر استفاده می کند. </p>
                            </li>
                            <li class="flex items-center">
                                <i class="icon-hat text-3xl text-primary-300 ltr:mr-5 rtl:ml-5"></i>
                                <p class="text-primary-500">نیاز به آموزش‌های فنی را تشخیص داده و سعی در کسب آنها می نماید. </p>
                            </li>
                            <li class="flex items-center">
                                <i class="icon-lamp text-3xl text-primary-300 ltr:mr-5 rtl:ml-5"></i>
                                <p class="text-primary-500">
                                    اقدام به تشویق و تشخیص خلاقیت و ابتکار عمل در بین نیروهای انسانی تحت نظر خود در طول عملکرد وظایف خود می کند. </p>
                            </li>
                        </ul>
                    @endif
                        @if(app()->isLocale('ru'))
                            <p class="text-primary-500 mb-5">Компания “<span class="text-secondary-500">Туннель Садд Ариана</span>” стремится достичь своих самых высоких критериев эффективности, а именно:  </p>
                            <ul class="space-y-5">
                                <li class="flex items-center">
                                    <i class="icon-flag text-3xl text-primary-300 ltr:mr-5 rtl:ml-5"></i>
                                    <p class="text-primary-500">Использовать свое время, навыки и опыт для достижения проектных показателей.</p>
                                </li>
                                <li class="flex items-center">
                                    <i class="icon-wrench text-3xl text-primary-300 ltr:mr-5 rtl:ml-5"></i>
                                    <p class="text-primary-500">Постоянно приобретает новые знания и навыки и эффективно их использует.</p>
                                </li>
                                <li class="flex items-center">
                                    <i class="icon-hat text-3xl text-primary-300 ltr:mr-5 rtl:ml-5"></i>
                                    <p class="text-primary-500">Осознать необходимость технической подготовки и стремиться ее достичь. </p>
                                </li>
                                <li class="flex items-center">
                                    <i class="icon-lamp text-3xl text-primary-300 ltr:mr-5 rtl:ml-5"></i>
                                    <p class="text-primary-500">Осознает и поощряет творческий подход и инициативу сотрудников, находящихся под его контролем, в ходе выполнения своих обязанностей.</p>
                                </li>
                            </ul>
                        @endif
                </div>
            </div>
        </div>
    </div>
@endsection
