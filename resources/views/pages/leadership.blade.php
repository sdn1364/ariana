@extends('layouts.app')

@section('title', __('who_we_are'))

@section('content')
    <x-frontend.header-component :title="__('who_we_are')" :small="true"
                                 :image="asset('images/headers/whoWeAre-header.png')"
    ></x-frontend.header-component>
    <div class="container relative">
        <div class="grid grid-cols-1 xl:grid-cols-6">
            <!-- menu-->
            @include('pages.side_menu')
            <div class="relative xl:col-span-5 mb-5">
                <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-10 xl:ltr:pl-10 xl:rtl:pr-10 relative mb-10 py-10">
                    <div class="mb-5 text-base text-justify order-last lg:order-first col-span-2">
                        <h2 class="mb-10 text-xl font-bold text-primary-500">
                            <x-lang l="en">
                                Our Leadership
                            </x-lang>
                            <x-lang l="fa">
                                مدیریت
                            </x-lang>

                        </h2>
                        <div class="text-primary-500 sector-content text-justify">
                            <x-lang l="en">
                                <h3 class="text-lg text-primary-500 font-bold mb-5">
                                    Board of Directors
                                </h3>
                                <p>
                                    Except in matters reserved for the Shareholders’ Meeting, the Board of Directors is Tunnel Sadd Ariana’s primary decision-making body. With the management team, it manages the Company with a view to maximizing shareholder value sustainably over the long term. Tunnel Sadd Ariana is guided by a talented group of individuals with experience in all facets of construction. For clients and employees alike, their knowledge and understanding of the construction is inspiring and reassuring.
                                </p>
                            </x-lang>
                            <x-lang l="fa">
                                <h3 class="text-lg text-primary-500 font-bold mb-5">
                                    هیئت مدیره
                                </h3>
                                <p>
                                    به جز موارد اختصاص یافته به جلسه سهامداران، هیات مدیره تونل سد آریانا نهاد اصلی تصمیم گیری است. با تیم مدیریتی، شرکت را با هدف به حداکثر رساندن ارزش سهامداران در بلندمدت مدیریت می کند. تونل سد آریانا توسط یک گروه با استعداد از افراد با تجربه در تمام جنبه های ساخت و ساز هدایت می شود. برای مشتریان و کارمندان، دانش و درک آنها از ساخت و ساز الهام بخش و اطمینان بخش است.                                 </p>
                            </x-lang>
                            <x-lang l="ru">
                                <h3 class="text-lg text-primary-500 font-bold mb-5">
                                    Совет директоров
                                </h3>
                                <p>
                                    За исключением вопросов, отнесенных к собранию акционеров, Совет директоров является основным руководящим органом. Вместе с 	руководящей группой этот совет управляет Компанией с целью устойчивого увеличения акционерной стоимости в долгосрочной перспективе. Туннель Садд Ариана руководствуется талантливой группой людей, имеющих опыт во всех аспектах строительства. Как для заказчиков, так и сотрудников, их знания и понимание в строительстве вдохновляет и обнадеживает.                                </p>
                            </x-lang>
                        </div>
                    </div>
                </div>
                <div class="xl:ltr:pl-10 xl:rtl:pr-10">
                    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-10 items-center mb-10">
                        @foreach($staffs as $staff)
                            @if($staff->type == 'manager')
                                <div class="border-t border-primary-200 triangle {{ app()->isLocale('fa') ? 'triangle-left' : 'triangle-right' }} triangle-sm" :class="open && 'border'" x-data="{open:false}">
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-5 items-center" @click="open = !open">
                                        <div class="p-5">
                                            <img class="border border-primary-500 rounded-lg" src="{{asset($staff->getFirstMediaUrl())}}" alt="">
                                        </div>
                                        <div class="md:col-span-2">
                                            <h3 class="font-bold text-xl text-primary-500 mb-5">{{$staff->name}}</h3>
                                            <p class="text-secondary-500 font-bold">{{$staff->position}}</p>
                                        </div>
                                    </div>
                                    <div class="text-primary-500 p-10" x-show="open" @click="open = false">
                                        {!!  $staff->description  !!}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="text-primary-500 sector-content text-justify">
                        <x-lang l="en">
                            <h3 class="text-lg text-primary-500 font-bold mb-5">
                                Executive Committee
                            </h3>
                            <p>
                                “Project leadership” is one of the cornerstones of our company structure. By empowering teams and leaders at the project level to make important decisions, we are able to avoid delays, anticipate needs, and run each project efficiently. Executive-level leaders on the ground are involved with each project on a day-to-day basis, and are well positioned to make the important decisions that keep projects running on time and on budget. All Tunnel Sadd Ariana’s employees undergo extensive training, both on the job and in the classroom, to provide them with the knowledge and the confidence to make critical decisions as they arise.
                            </p>
                        </x-lang>
                        <x-lang l="fa">
                            <h3 class="text-lg text-primary-500 font-bold mb-5">
                                کمیته اجرایی
                            </h3>
                            <p>
                                به جز موارد اختصاص یافته به جلسه سهامداران، هیات مدیره تونل سد آریانا نهاد اصلی تصمیم گیری است. با تیم مدیریتی، شرکت را با هدف به حداکثر رساندن ارزش سهامداران در بلندمدت مدیریت می کند. تونل سد آریانا توسط یک گروه با استعداد از افراد با تجربه در تمام جنبه های ساخت و ساز هدایت می شود. برای مشتریان و کارمندان، دانش و درک آنها از ساخت و ساز الهام بخش و اطمینان بخش است.                             </p>
                        </x-lang>
                        <x-lang l="ru">
                            <h3 class="text-lg text-primary-500 font-bold mb-5">
                                Исполнительный комитет
                            </h3>
                            <p>
                                “Управление проектом” является одним из ключевых элементов структуры нашей компании. Предоставляя командам и руководителям на проектных уровнях возможность принимать ключевые решения, мы можем избежать задержек, предвидеть потребности и выполнять каждый проект эффективным образом. руководители высшего звена управления на под проектных зонах ежедневно участвуют в каждом проекте и имеют хорошие возможности для принятия важных решений, которые позволяют проектам выполняться вовремя и в соответствии с бюджетом. Все сотрудники Туннель Садд Ариана проходят обширное обучение, как в ходе работе, так и в классе, чтобы предоставить им знания и уверенность для принятия важных решений по мере их возникновения.                            </p>
                        </x-lang>

                    </div>
                    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-10 items-center mb-10 mt-10">
                        @foreach($staffs as $staff)
                            @if($staff->type != 'manager')
                                <div class="border-t border-primary-200 triangle {{ app()->isLocale('fa') ? 'triangle-left' : 'triangle-right' }} triangle-sm">
                                    <div class="grid grid-cols-2 md:grid-cols-3">
                                        <div class="p-5">
                                            <img class="border border-primary-500 rounded-lg" src="{{asset($staff->getFirstMediaUrl())}}" alt="">
                                        </div>
                                        <div class="md:col-span-2 p-5">
                                            <h3 class="font-bold text-xl text-primary-500 mb-5">{{$staff->name}}</h3>
                                            <x-lang l="en">
                                                <p class="text-secondary-500 font-bold mb-5">{{$staff->position == 'manager' ? 'Chairman': $staff->position }}</p>
                                            </x-lang>
                                            <x-lang l="fa">
                                                <p class="text-secondary-500 font-bold mb-5">{{$staff->position == 'manager' ? 'مدیر': $staff->position }}</p>
                                            </x-lang>
                                            <a href="{{$staff->link}}" class="text-primary-500 underline">
                                                <x-lang l="en">Linkedin</x-lang>
                                                <x-lang l="fa">لینکدین</x-lang>
                                                <x-lang l="ru">Линкедин</x-lang>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
