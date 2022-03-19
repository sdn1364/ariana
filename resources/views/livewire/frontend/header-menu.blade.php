<div class="fixed top-0 z-50 w-full" x-data="{res_menu: false}">
    <div class="h-16 bg-primary-500 hidden xl:flex" x-data="{megaMenuWhat: false, megaMenuWho:false}">
        <div class="container flex flex-row justify-between items-center
                    sm:px-10
                    2xl:px-0
                    ">
            <a href="{{ route('home') }}" class="flex items-center justify-center h-20 w-20 relative ml-8
                                before:w-8 before:h-14 before:rounded-b-lg before:bg-secondary-500 before:absolute before:top-0 before:right-full
                                rtl:mr-10 rtl:ml-auto rtl:before:right-auto rtl:before:left-full
                                ">
                <img class="object-contain w-12 h-12" src="{{ asset('images/logo.svg') }}" alt="tunnel sad ariana">
            </a>

            <div class="flex flex-row space-x-10 rtl:space-x-reverse">

                <x-frontend.header-menu.master-link x-on:click.prevent="megaMenuWho = true" dropdown="true" to="#">{{ __('who_we_are') }}</x-frontend.header-menu.master-link>
                <x-frontend.header-menu.master-link x-on:click.prevent="megaMenuWhat = true" dropdown="true" to="#">{{ __('what_we_do') }}</x-frontend.header-menu.master-link>

                <x-frontend.header-menu.master-link to="{{route('press')}}">{{ __('press') }}</x-frontend.header-menu.master-link>
                <x-frontend.header-menu.master-link to="{{route('vendor')}}">{{ __('vendor') }}</x-frontend.header-menu.master-link>
                <x-frontend.header-menu.master-link to="{{route('career')}}">{{ __('career') }}</x-frontend.header-menu.master-link>
                <x-frontend.header-menu.master-link to="{{route('contacts')}}">{{ __('contact') }}</x-frontend.header-menu.master-link>

                <div x-data="{ open:false }" @click="open = true" class="flex relative justify-center items-center h-16 text-lg font-medium text-white cursor-pointer group">
                    <button type="button" class="flex gap-2 justify-center items-center">{{ __('language') }}<i class="ri-arrow-down-s-fill"></i></button>
                    <i class="absolute -bottom-2 opacity-0 transition-all ri-arrow-up-s-fill ri-2x text-secondary-500 group-hover:opacity-100" :class="{'opacity-100': open}"></i>
                    <div x-cloak class="flex overflow-hidden absolute top-16 z-40 flex-col w-48 rounded-b-xl bg-primary-600" x-show="open" @click.away="open = false" x-transition>
                        @foreach( $languages as $lang)
                            @php
                                $currentSegment = request()->segments()[0];
                                $currentUrl= request()->url();
                            @endphp
                            <a class="flex items-center justify-start text-white px-5 h-10 border-secondary-500
                                      hover:transition-all hover:bg-primary-700 hover:border-r-4  hover:text-secondary-500 text-sm"
                               style="font-family: {{getLocale($lang) == 'fa'? 'dana':'Roboto'}}"
                               hreflang="{{ $lang[0] }}" href="{{ Str::replaceFirst ($currentSegment,getLocale($lang),$currentUrl) }}">
                                <span class="fi fi-{{getLocale($lang)}} fas {{app()->isLocale('fa') ? 'ml-2': 'mr-2'}}"></span>
                                {{ getLanguageName($lang)}}
                            </a>
                        @endforeach
                    </div>
                </div>
                @auth('web')
                    <x-frontend.header-menu.master-link to="{{route('profile')}}">{{ __('profile') }}</x-frontend.header-menu.master-link>
                @endauth
                @guest('web')
                    <x-frontend.header-menu.master-link to="{{route('login')}}">{{ __('login') }}</x-frontend.header-menu.master-link>
                @endguest
            </div>
        </div>

        {{--
                ====================================================================================
                                                                                                    mega menu what
                ====================================================================================
        --}}

        <x-frontend.header-menu.mega-menu></x-frontend.header-menu.mega-menu>

        <div x-show="megaMenuWhat" class="flex fixed top-16 w-full h-fit" @click.away="megaMenuWhat = false" x-transition >
            <div class="container h-max" x-data="{ sector: false, subSector: 0 }">
                <div class="h-12 bg-primary-600 flex flex-row items-start justify-center rounded-b-lg z-30 relative shadow">
                    <a class="flex relative justify-end items-center px-10 h-12 text-sm text-white border-secondary-500
                            hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{ route('services') }}">{{ __('services') }}</a>
                    <div class="flex flex-col" @mouseover.away="sector = false">
                        <a href="{{route('allSector')}}" class="flex flex-row justify-center items-center px-10 h-12 text-sm border-secondary-500 hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500 grow-0"
                                :class="sector ? 'bg-white text-primary-500 border-t-4':'text-white'" @mouseover="sector = true">
                            {{ __('sectors') }}
                            <i class="ri-arrow-down-s-fill"></i>
                        </a>
                        <div class="w-full absolute top-full left-0 z-0">
                            <div class="container">
                                <div class="flex flex-row items-center justify-center rounded-b-lg w-full mx-auto bg-white h-fit relative shadow" x-show="sector">
                                    @foreach($sectors  as $sector)
                                        <div class="flex flex-col">
                                            <a class="flex justify-center items-center px-5 h-12 text-sm text-primary-500 border-secondary-500
                                              hover:bg-gray-100 hover:border-t-4 hover:transition-all" :class="subSector === {{ $sector->id }} ? 'bg-gray-100 border-t-4':''"
                                              href="{{route('sector', $sector->id)}}" @mouseover="subSector = {{ $sector->id }}">
                                                {{$sector->title}}
                                                <i class="ri-arrow-down-s-fill"></i>
                                            </a>
                                            <div class="w-full absolute top-full left-0 z-0">
                                                <div class="flex flex-row items-center justify-center w-full bg-gray-100 h-12 rounded-b-lg relative z-10" x-show="subSector === {{ $sector->id }}" >
                                                    @foreach( $sector->getChildSectors as $child )
                                                        <a class="flex justify-start items-center px-5 h-10 text-sm text-primary-500 relative border-secondary-500
                                                                  hover:bg-gray-100 hover:border-t-4 hover:transition-all" href="{{route('sector',$child->id)}}">
                                                            {{ $child->title }}
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="flex relative justify-end items-center px-10 h-12 text-sm text-white border-secondary-500
                            hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{route('project')}}">{{ __('projects') }}
                    </a>
                    <a class="flex relative justify-end items-center px-10 h-12 text-sm text-white border-secondary-500
                            hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{ route('innovation') }}">{{ __('innovation') }}
                    </a>
                </div>
            </div>
        </div>

        {{--        <div x-show="megaMenuWhat" x-cloak class="flex fixed top-16 w-full h-fit" @click.away="megaMenuWhat = false" x-transition>
                    <div class="container overflow-hidden h-fit">
                        <div class="h-12 bg-primary-600 flex flex-row items-center justify-center rounded-b-lg z-30 relative shadow  ">
                            <a class="flex relative justify-end items-center px-10 h-12 text-sm text-white border-secondary-500
                            hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{ route('services') }}">{{ __('services') }}</a>
                            <button class="flex relative justify-end items-center px-10 h-12 text-sm border-secondary-500
                            hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" :class="sector ? 'bg-white text-primary-500 border-t-4':'text-white'" @click="sector = true">{{ __('sectors') }}
                                <i class="ri-arrow-down-s-fill"></i>
                            </button>
                            <a class="flex relative justify-end items-center px-10 h-12 text-sm text-white border-secondary-500
                            hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{route('project')}}">{{ __('projects') }}
                            </a>
                            <a class="flex relative justify-end items-center px-10 h-12 text-sm text-white border-secondary-500
                            hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{ route('innovation') }}">{{ __('innovation') }}
                            </a>
                        </div>
                        <div class="flex flex-row items-center justify-center rounded-b-lg w-full mx-auto bg-white h-fit pt-2 -top-2 relative z-20 shadow" x-show="sector" @click.away="sector = false">
                            @foreach($sectors  as $sector)
                                @if($sector->parent_id == 0)
                                    <a class="flex justify-start items-center px-5 h-10 text-sm text-primary-500 relative border-secondary-500
                                            hover:bg-gray-100 hover:border-t-4 hover:transition-all" :class="subSector === {{$sector->id}} ? 'bg-gray-100 border-t-4':''"
                                       href="{{route('sector', $sector->id)}}" @mouseover.prevent="subSector = {{ $sector->id }}">
                                        {{$sector->title}}
                                        <i class="ri-arrow-down-s-fill"></i>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                        @foreach($sectors as $sector)

                            @if($sector->parent_id === 0)
                                <div class="flex flex-row items-center justify-center w-full bg-gray-100 h-fit pt-2  rounded-b-lg relative -top-4 z-10" x-show="subSector === {{ $sector->id }}" @mouseover.away="subSector = 0">

                                    @foreach( $sector->getChildSectors as $child )
                                        <a class="flex justify-start items-center px-5 h-10 text-sm text-primary-500 relative border-secondary-500
                                              hover:bg-gray-100 hover:border-t-4 hover:transition-all" href="{{route('sector',$child->id)}}">
                                            {{ $child->title }}
                                        </a>
                                    @endforeach

                                </div>
                            @endif

                        @endforeach
                    </div>
                </div>--}}


        {{--
                ====================================================================================
                                                                                                    mega menu who
                ====================================================================================
        --}}
        <div x-show="megaMenuWho" x-cloak class="flex fixed top-16 w-full h-fit" @click.away="megaMenuWho = false" x-transition>
            <div class="container h-max" x-data="{ csr:false }">
                <div class="h-12 bg-primary-600 flex flex-row items-start justify-center rounded-b-lg z-30 relative shadow">
                    <div class="h-12 bg-primary-600 flex flex-row items-center justify-center">
                        <a class="flex relative justify-end items-center px-10 h-12 text-sm text-white border-secondary-500
                            hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{ route('glance') }}">{{ __('whoweare')['glance'] }}</a>
                        <a class="flex relative justify-end items-center px-10 h-12 text-sm text-white border-secondary-500
                            hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{ route('history') }}">{{ __('whoweare')['history'] }}</a>
                        <a class="flex relative justify-end items-center px-10 h-12 text-sm text-white border-secondary-500
                            hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{ route('leadership') }}">{{ __('whoweare')['leadership'] }}</a>
                        <a class="flex relative justify-end items-center px-10 h-12 text-sm text-white border-secondary-500
                            hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{ route('governance') }}">{{ __('whoweare')['governance'] }}</a>

                        <div class="flex flex-col" @mouseover.away="csr = false">
                            <a href="{{route('csr')}}" class="flex flex-row justify-center items-center px-10 h-12 text-sm border-secondary-500 hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500 grow-0"
                               :class="csr ? 'bg-white text-primary-500 border-t-4':'text-white'" @mouseover="csr = true">
                                {{ __('whoweare')['csr'] }}
                                <i class="ri-arrow-down-s-fill"></i>
                            </a>
                            <div class="w-full absolute top-full left-0">
                                <div class="container">
                                    <div class="flex flex-row items-center justify-center rounded-b-lg w-full mx-auto bg-white h-fit relative shadow z-40" x-show="csr">
                                        <a class="flex justify-center items-center px-5 h-12 text-sm text-primary-500 border-secondary-500
                                              hover:bg-gray-100 hover:border-t-4 hover:transition-all"
                                           href="{{route('people')}}" >
                                            {{__('whoweare')['people']}}
                                        </a>
                                        <a class="flex justify-center items-center px-5 h-12 text-sm text-primary-500 border-secondary-500
                                              hover:bg-gray-100 hover:border-t-4 hover:transition-all"
                                           href="{{route('community')}}" >
                                            {{__('whoweare')['community']}}
                                        </a>
                                        <a class="flex justify-center items-center px-5 h-12 text-sm text-primary-500 border-secondary-500
                                              hover:bg-gray-100 hover:border-t-4 hover:transition-all"
                                           href="{{route('sustainability')}}" >
                                            {{__('whoweare')['sustain']}}
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <a class="flex relative justify-end items-center px-10 h-12 text-sm text-white border-secondary-500
                            hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{ route('awards') }}">{{ __('whoweare')['certificate'] }}</a>
{{--                        @foreach($pages as $page)
                            <a class="flex relative justify-end items-center px-10 h-12 text-sm text-white border-secondary-500
                                    hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500"
                               href="{{ route('page', $page->id) }}">{{ $page->title }}</a>
                        @endforeach--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--============================================================================================================================================== responsive menu--}}
    <div class="h-16 bg-primary-500 flex xl:hidden">
        <div class="container flex flex-row justify-between items-center px-5">
            <a href="{{route('home')}}" class="flex items-center justify-center h-20 w-14 relative ml-7
                            rtl:mr-10 rtl:ml-auto rtl:before:right-auto rtl:before:left-full
                                                            before:w-8 before:h-14 before:rounded-b-lg before:bg-secondary-500 before:absolute before:top-0 before:right-full
                                rtl:mr-10 rtl:ml-auto rtl:before:right-auto rtl:before:left-full
                            ">
                <img class="object-contain w-10 h-10" src="{{asset('images/logo.svg')}}" alt="tunnel sad ariana">
            </a>
            <a href="#" class="text-white" @click.prevent="res_menu = true">
                <i class="ri-menu-line ri-2x"></i>
            </a>
        </div>
    </div>
    <div class=" xl:hidden w-full h-screen bg-gray-900 bg-opacity-20 fixed top-0 left-0" x-show="res_menu" x-transition>
        <div class="w-72 md:w-80 h-full bg-primary-500 flex flex-col shadow-lg relative overflow-x-hidden" @click.away="res_menu = false">
            <div class=" flex flex-row items-center justify-between p-2 mb-5 shrink-0">
                <a href="{{ route('home') }}" class="flex items-center justify-center h-12 w-12"><img class="object-contain w-12 h-12" src="{{ asset('images/logo.svg') }}" alt="tunnel sad ariana"></a>
                <a href="#" class="ltr:right-5 rtl:left-5 text-white w-12 h-12 flex items-center justify-center" @click.prevent="res_menu = false"><i class="ri ri-lg ri-close-line"></i></a>
            </div>
            {{--====================================--}}
            <div x-data="{ open:false,csr:false }" @click="open = true" class="flex flex-col w-full shrink-0">
                <a href="#" class="flex space-x-2 rtl:space-x-reverse items-center px-5 h-12 text-white text-lg">
                    {{ __('who_we_are') }}
                    <i :class="open ? 'ri-arrow-down-s-fill':'{{app()->isLocale('fa')? 'ri-arrow-left-s-fill':'ri-arrow-right-s-fill'}}'"></i>
                </a>
                <div x-cloak class="flex flex-col overflow-hidden w-full bg-primary-600 py-2" x-show="open" @click.away="open = false" x-transition>
                    <a class="flex relative items-center px-5 h-12 text-sm text-white border-secondary-500
                    hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{ route('glance') }}">{{ __('whoweare')['glance'] }}</a>
                    <a class="flex relative items-center px-5 h-12 text-sm text-white border-secondary-500
                    hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{ route('history') }}">{{ __('whoweare')['history'] }}</a>
                    <a class="flex relative items-center px-5 h-12 text-sm text-white border-secondary-500
                    hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{ route('leadership') }}">{{ __('whoweare')['leadership'] }}</a>
                    <a class="flex relative items-center px-5 h-12 text-sm text-white border-secondary-500
                    hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{ route('governance') }}">{{ __('whoweare')['governance'] }}</a>
                    <a href="#" class="flex relative items-center px-5 py-2 h-fit text-sm text-white border-secondary-500
                    hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" @click.prevent="csr = !csr">{{ __('whoweare')['csr'] }}
                        <i class="ri-arrow-down-s-fill"></i>
                        <div class="flex flex-col" x-show="csr">
                            <div class="flex flex-col w-full">
                                <a  class="flex items-center justify-start text-white px-10 h-10 border-secondary-500 py-2
                                                                                  hover:transition-all hover:bg-primary-700 hover:border-r-4  hover:text-secondary-500 text-sm"
                                    href="{{route('people')}}" >
                                    {{__('whoweare')['people']}}
                                </a>
                                <a  class="flex items-center justify-start text-white px-10 h-10 border-secondary-500 py-2
                                                                                  hover:transition-all hover:bg-primary-700 hover:border-r-4  hover:text-secondary-500 text-sm"
                                    href="{{route('community')}}" >
                                    {{__('whoweare')['community']}}
                                </a>
                                <a  class="flex items-center justify-start text-white px-10 h-10 border-secondary-500 py-2
                                                                                  hover:transition-all hover:bg-primary-700 hover:border-r-4  hover:text-secondary-500 text-sm"
                                    href="{{route('sustainability')}}" >
                                    {{__('whoweare')['sustain']}}
                                </a>
                            </div>
                        </div>
                    </a>
                    <a class="flex relative items-center px-5 h-12 text-sm text-white border-secondary-500
                    hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{ route('awards') }}">{{ __('whoweare')['certificate'] }}</a>
                </div>
            </div>


            {{-- ============================== --}}
            <div x-data="{ open:false,resSector:false }" class="flex flex-col w-full shrink-0">
                <a href="#" class="flex space-x-2 rtl:space-x-reverse items-center px-5 py-2 text-white text-lg" @click.prevent="open = !open">
                    {{ __('what_we_do') }}
                    <i :class="open ? 'ri-arrow-down-s-fill':'{{app()->isLocale('fa')? 'ri-arrow-left-s-fill':'ri-arrow-right-s-fill'}}'"></i>
                </a>
                <div x-cloak class="flex flex-col overflow-hidden w-full bg-primary-600 py-2" x-show="open" @click.away="open = false" x-transition>
                    <a class="flex relative items-center px-5 h-12 text-sm text-white border-secondary-500
                    hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{ route('services') }}">{{ __('services') }}</a>
                    <a href="#" class="flex relative items-center px-5 py-2 h-fit text-sm text-white border-secondary-500
                    hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" @click.prevent="resSector = !resSector">{{ __('sectors') }}
                        <i class="ri-arrow-down-s-fill"></i>
                        <div class="flex flex-col" x-show="resSector">
                            @foreach( $sectors as $sec)
                                <div x-data="{ subOpen:false }" class="flex flex-col w-full">
                                    <a @click.prevent="subOpen = true" class="flex items-center justify-start text-white px-10 h-10 border-secondary-500 py-2
                                                                                  hover:transition-all hover:bg-primary-700 hover:border-r-4  hover:text-secondary-500 text-sm"
                                       href="{{ route('sector', $sec->id) }}">
                                        {{ $sec->title}}
                                        <div x-cloak class="flex flex-col overflow-hidden w-full bg-primary-700 py-2 px-5" x-show="subOpen" @click.away="subOpen = false" x-transition>
                                            @foreach($sec->getChildSectors as $childSector)
                                                <a class="flex items-center justify-start text-gray-50 px-7 py-2 border-secondary-500 h-12
                                                                                              hover:transition-all hover:bg-primary-700 hover:border-r-4  hover:text-secondary-500 text-sm"
                                                   href="{{ route('sector', $childSector->id) }}">
                                                    {{ $childSector->title}}
                                                </a>
                                            @endforeach
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </a>
                    <a class="flex relative items-center px-5 py-2 text-sm text-white border-secondary-500
                    hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{route('project')}}">{{ __('projects') }}
                    </a>
                    <a class="flex relative items-center px-5 py-2 text-sm text-white border-secondary-500
                    hover:transition-all hover:bg-primary-700 hover:border-t-4 hover:text-secondary-500" href="{{ route('innovation') }}">{{ __('innovation') }}
                    </a>

                </div>
            </div>
            <a class="flex items-center shrink-0 space-x-2 rtl:space-x-reverse items-center px-5 h-12 text-white text-lg" href="{{route('press')}}">{{ __('press') }}</a>
            <a class="flex items-center shrink-0 space-x-2 rtl:space-x-reverse items-center px-5 h-12 text-white text-lg" href="{{route('vendor')}}">{{ __('vendor') }}</a>
            <a class="flex items-center shrink-0 space-x-2 rtl:space-x-reverse items-center px-5 h-12 text-white text-lg" href="{{route('career')}}">{{ __('career') }}</a>
            <a class="flex items-center shrink-0 space-x-2 rtl:space-x-reverse items-center px-5 h-12 text-white text-lg" href="{{route('contacts')}}">{{ __('contact') }}</a>

            <div x-data="{ open:false }" class="flex flex-col w-full shrink-0">
                <a href="#" @click.prevent="open = true" class="flex px-5 h-12 text-lg font-medium cursor-pointer text-white items-center">{{ __('language') }}
                    <i :class="open ? 'ri-arrow-down-s-fill':'{{app()->isLocale('fa')? 'ri-arrow-left-s-fill':'ri-arrow-right-s-fill'}}'"></i>
                </a>
                <div x-cloak class="flex flex-col overflow-hidden w-full bg-primary-600 py-2" x-show="open" @click.away="open = false" x-transition>
                    @foreach( $languages as $lang)
                        @php
                            $currentSegment = request()->segments()[0];
                            $currentUrl= request()->url();
                        @endphp
                        <a class="flex items-center justify-start text-white px-5 h-10 border-secondary-500 h-12
                                  hover:transition-all hover:bg-primary-700 hover:border-r-4  hover:text-secondary-500 text-sm"
                           style="font-family: {{getLocale($lang) == 'fa'? 'dana':'Roboto'}}"
                           hreflang="{{ $lang[0] }}" href="{{ Str::replaceFirst ($currentSegment,getLocale($lang),$currentUrl) }}">
                            <span class="fi fi-{{getLocale($lang)}} fas {{app()->isLocale('fa') ? 'ml-2': 'mr-2'}}"></span>
                            {{ getLanguageName($lang)}}
                        </a>
                    @endforeach
                </div>
            </div>
            <a class="flex space-x-2 rtl:space-x-reverse items-center px-5 h-12 text-white text-lg shrink-0" href="{{route('login')}}">{{ __('login') }}</a>
        </div>
    </div>
</div>
