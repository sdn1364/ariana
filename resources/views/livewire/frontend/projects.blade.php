<div>
    @section('title', __('project'))

    <x-.frontend.header-component :title="__('projects')" :small="true"
                                  :image="asset('images/headers/projects-header.png')"
    ></x-.frontend.header-component>

    <div class="container py-10" x-data="{grid:true, listView:false, timeline:false}">

        <div class="w-full h-max xl:h-10 flex flex-col justify-start mb-10
                    lg:h-fit lg:flex-row lg:items-center lg:justify-between
        ">
            <div class="flex flex-col items-start md:items-center md:flex-row w-full md:w-max">
                <p class="w-max shrink-0 text-primary-500 text-sm ltr:mr-5 rtl:ml-5">{{ __('filter-by') }}:</p>

                <div class="w-full h-10 divide-x rtl:divide-x-reverse flex items-center justify-between lg:justify-start w-full">
                    <div class="flex items-center relative ltr:pr-4 rtl:pl-4" x-data="{loc : false}">
                        <button location="button" class="text-primary-500 text-sm h-10" @click="loc = true">{{ __('location') }}: <span class="font-bold">
                                    {{ $location == 'all' ? (app()->isLocale('fa') ? 'همه' :'All') : $location  }}
                                </span></button>

                        <div x-show="loc"
                             @click.away="loc = false"
                             class="fixed top-0 left-0 bg-gray-900 bg-opacity-80 z-10 w-full h-full lg:hidden z-50"></div>

                        <div x-show="loc"
                             @click.away="loc = false"
                             class="fixed bottom-0 py-8 w-full ltr:left-0 rtl:right-0 bg-white border border-primary-500 shadow  rounded-t-lg overflow-hidden z-40
                                    lg:absolute lg:min-w-max lg:top-full lg:bottom-auto lg:z-40 lg:py-0 lg:rounded-lg
                                    ">
                            <a wire:click.prevent="setLocation('all')"
                               @click="loc = false"
                               class="flex items-center hover:bg-gray-100 h-10 w-full px-5 text-primary-500 border-secondary-500 ltr:hover:border-r-4 rtl:hover:border-l-4" href=""> {{ __('all') }} </a>
                            @foreach($locations as $loc)
                                <a wire:click.prevent="setLocation('{{ $loc }}')"
                                   @click="loc = false"
                                   class="flex items-center hover:bg-gray-100 h-10 w-full px-5 text-primary-500 border-secondary-500 ltr:hover:border-r-4 rtl:hover:border-l-4" href=""> {{ $loc }} </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex items-center relative px-4" x-data="{service : false}">
                        <button type="button" class="text-primary-500 text-sm h-10" @click="service = true">{{ __('services') }}: <span class="font-bold">
                                    @if($service == 0)
                                    {{ __('all') }}
                                @else
                                    @foreach($services as $ser)
                                        @if($ser->id == $service)
                                            {{$ser->title}}
                                        @endif
                                    @endforeach
                                @endif
                                </span>
                        </button>
                        <div x-show="service"
                             @click.away="service = false"
                             class="fixed top-0 left-0 bg-gray-900 bg-opacity-80 z-10 w-full h-full lg:hidden z-50"></div>
                        <div x-show="service"
                             @click.away="service = false"
                             class="fixed bottom-0 py-8 w-full ltr:left-0 rtl:right-0 bg-white border border-primary-500 shadow  rounded-t-lg overflow-hidden z-40
                                    lg:absolute lg:w-48 lg:top-full lg:bottom-auto lg:z-40 lg:rounded-lg
                                    ">
                            <a wire:click.prevent="setService(0)" @click="service = false" class="flex items-center hover:bg-gray-100 h-10 w-full px-5 text-primary-500 border-secondary-500 ltr:hover:border-r-4 rtl:hover:border-l-4" href=""> {{ __('all') }} </a>
                            @foreach($services as $ser)
                                <a wire:click.prevent="setService({{$ser->id}},'{{$ser->title}}')" @click="service = false" class="flex items-center hover:bg-gray-100 h-10 w-full px-5 text-primary-500 border-secondary-500 break-normal ltr:hover:border-r-4 rtl:hover:border-l-4" href=""> {{ $ser->title }} </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex items-center relative px-4" x-data="{sector : false}">
                        <button type="button" class="text-primary-500 text-sm h-10" @click="sector = true">{{ __('sector') }}: <span class="font-bold">
                                    @if($sector == 0)
                                    {{ __('all') }}
                                @else
                                    @foreach($sectors as $sec)
                                        @if($sec->id == $sector)
                                            {{$sec->title}}
                                        @endif
                                    @endforeach
                                @endif
                                </span>
                        </button>
                        <div x-show="sector"
                             @click.away="sector = false"
                             class="fixed top-0 left-0 bg-gray-900 bg-opacity-80 z-10 w-full h-full lg:hidden z-50"></div>
                        <div x-show="sector"
                             @click.away="sector = false"
                             class="fixed bottom-0 py-8 w-full ltr:left-0 rtl:right-0 bg-white border border-primary-500 shadow  rounded-t-lg overflow-hidden z-40
                                    lg:absolute lg:w-max lg:top-full lg:bottom-auto lg:z-40 lg:rounded-lg lg:py
">
                            <a wire:click.prevent="setSector(0)" @click="sector = false" class="flex items-center hover:bg-gray-100 h-10 w-full px-5 text-primary-500 border-secondary-500 ltr:hover:border-r-4 rtl:hover:border-l-4" href="">
                                {{ __('all') }}
                            </a>
                            @foreach($sectors as $sec)
                                <a wire:click.prevent="setSector({{$sec->id}})" @click="sector = false" class="flex shrink-0 items-center hover:bg-gray-100 h-10 w-full px-5 text-primary-500 border-secondary-500 ltr:hover:border-r-4 rtl:hover:border-l-4" href="#"> {{ $sec->title }} </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-row items-center justify-start h-10" x-data>
                <p class="text-primary-500 text-sm ">{{ __('view') }}:</p>
                <button type="button" class=" text-sm h-10 ltr:pl-5 rtl:pr-5 hover:text-secondary-500 flex items-center " :class="grid ? 'text-secondary-500': 'text-primary-500'"     @click=" grid = true; listView = false; timeline = false"><span class="icon icon-grid text-lg rtl:ml-2 ltr:mr-2"></span>{{ __('grid') }}</button>
                <button type="button" class=" text-sm h-10 ltr:pl-5 rtl:pr-5 hover:text-secondary-500 flex items-center " :class="listView ? 'text-secondary-500': 'text-primary-500'" @click=" grid = false; listView = true; timeline = false"><span class="icon icon-list text-lg rtl:ml-2 ltr:mr-2"></span> {{ __('list') }}</button>
                <button type="button" class=" text-sm h-10 ltr:pl-5 rtl:pr-5 hover:text-secondary-500 flex items-center " :class="timeline ? 'text-secondary-500': 'text-primary-500'" @click=" grid = false; listView = false; timeline = true; $dispatch('initTimeline')"><span class="icon icon-timeline text-lg rtl:ml-2 ltr:mr-2"></span> {{ __('timeline') }}</button>
            </div>
        </div>

        <div x-show="grid" class="flex flex-col space-y-5 mt-20 md:mt-0">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20">
                @forelse($projects as $project)
                    <x-frontend.projects.project-grid-block :project="$project"></x-frontend.projects.project-grid-block>
                @empty
                    <div class="col-span-3">
                        <x-frontend.empty-container></x-frontend.empty-container>
                    </div>
                @endforelse
            </div>
        </div>

        <div x-show="listView" class="flex flex-col space-y-5">
            <div class="grid grid-cols-2 lg:grid-cols-3 bg-primary-500 h-16 py-2 divide-x rtl:divide-x-reverse divide-primary-300 rounded-lg ltr:border-r-8 rtl:border-l-8 border-secondary-500">
                <div class="h-12 flex items-center"><p class="text-white ltr:pl-5 rtl:pr-5 ">{{__('project_name')}}</p></div>
                <div class="col-span-2 grid grid-cols-5 divide-x rtl:divide-x-reverse divide-primary-300">
                    <div class="h-12 items-center justify-center hidden xl:flex"><p class="text-white">{{__('location')}}</p></div>
                    <div class="h-12 items-center justify-center hidden xl:flex"><p class="text-white">{{__('sector')}}</p></div>
                    <div class="h-12 items-center justify-center hidden xl:flex"><p class="text-white">{{__('client')}}</p></div>
                    <div class="h-12 items-center justify-center hidden xl:flex"><p class="text-white">{{__('status')}}</p></div>
                    <div></div>
                </div>
            </div>
            @forelse($projects as $project)
                <x-frontend.projects.project-list-block :project="$project"></x-frontend.projects.project-list-block>
            @empty
                <div class="col-span-3">
                    <x-frontend.empty-container></x-frontend.empty-container>
                </div>
            @endforelse
        </div>

        <div class="flex flex-row items-center justify-between mt-5" x-show="grid || listView">
            <div class="text-sm text-primary-500 ss02">{{__('page').': '.$projects->currentPage().' '.__('of').' '.$projects->lastPage()}}</div>
            <div>{{$projects->onEachSide(0)->links('vendor.pagination.tailwind')}}</div>
        </div>

        <div class="overflow-hidden" :class="timeline?'h-auto':'h-0'">

            @forelse($projectsTimeline as $index => $project)
                <div x-ignore class="h-auto py-24 border-primary-500 border-dashed relative flex flex-row items-center justify-center after:z-0 before:z-0
                                     before:border-dashed before:border-primary-500 ltr:before:left-0 rtl:before:right-0
                                     before:w-1/2 before:h-full rtl:before:border-l ltr:before:border-r before:absolute
                                     lg:before:w-full lg:rtl:before:border-0 lg:ltr:before:border-0
                                     lg:before:absolute lg:before:h-1/2 lg:after:border-dashed
                                     lg:after:absolute  lg:after:h-1/2  lg:after:bottom-0 lg:after:border-primary-500 lg:after:border-t

                {{ !$loop->last && !$loop->first ? 'rtl:before:border-l ltr:before:border-r lg:ltr:before:border-r lg:rtl:before:border-l lg:ltr:before:right-0
                                                    lg:rtl:before:left-0 lg:before:bottom-0
                                                    lg:ltr:after:border-l  lg:rtl:after:border-r  lg:ltr:after:left-0   lg:rtl:after:right-0 lg:after:top-0' : ''}}
                {{$loop->first? 'lg:ltr:before:right-0 lg:rtl:before:left-0  lg:before:bottom-0 lg:ltr:before:border-r lg:rtl:before:border-l before:w-full' : ''}}

                {{$loop->last?  'lg:ltr:before:left-0 lg:rtl:before:right-0 lg:before:top-0 lg:ltr:before:border-l
                                 lg:rtl:before:border-r ' : 'lg:border-b'}}">

                    <p class="m-0 py-1 rounded-lg bg-primary-500 text-white font-bold absolute px-3 z-10
                              top-10 lg:top-auto
                              lg:ltr:left-10 lg:rtl:right-10
                              ss02">{{ $index }}</p>
                    @if($loop->first)
                        <div class="w-5 h-5 rounded-full bg-primary-500 absolute lg:ltr:left-0 lg:rtl:right-0 lg:top-auto top-0 z-40 "></div>
                    @endif
                    @if($loop->last)
                        <div class="w-5 h-5 rounded-full bg-primary-500 absolute lg:rtl:left-0 lg:ltr:right-0 lg:bottom-auto bottom-0 block"></div>
                    @endif
                    <div class="w-full h-1/2 lg:border-b border-primary-500 border-dashed top-0 absolute z-0"></div>
                    <div class="lg:ltr:pl-10 lg:ltr:-pr-10 w-full lg:w-4/5 xl:w-2/3  mx-auto">
                        <div class="slick-slider  projectPage-Carousel project-carousel-{{$loop->index}} rounded-lg overflow-hidden">
                            @foreach($project as $subProject)
                                <x-frontend.projects.project-timeline-block :project="$subProject"></x-frontend.projects.project-timeline-block>
                            @endforeach
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3">
                    <x-frontend.empty-container></x-frontend.empty-container>
                </div>
            @endforelse
        </div>


        @section('scripts')
            <script src="{{asset('vendor/slick/slick.min.js')}}"></script>
            <script>

                $(document).ready(function () {
                    $(".projectPage-Carousel").slick({
                        dots: false,
                        infinite: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        prevArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer rounded-full shadow bg-white absolute z-30 top-1/2 -mt-4 lg:right-2 xl:right-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>':
                                                                '<div class="cursor-pointer rounded-full shadow bg-white absolute z-30 top-1/2 -mt-4 lg:left-2  xl:left-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                        nextArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer rounded-full shadow bg-white absolute z-30 top-1/2 -mt-4 lg:left-2  xl:left-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-left-s-line ri-lg"></i></div>':
                                                                '<div class="cursor-pointer rounded-full shadow bg-white absolute z-30 top-1/2 -mt-4 lg:right-2 xl:right-6 text-primary-500 w-8 h-8 flex items-center justify-center"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
                        rtl: {{app()->isLocale('fa') ? 'true' : 'false'}},
                    });

                })

                document.addEventListener('initTimeline', () => {
                    $(".projectPage-Carousel").slick('setPosition');
                })

                function slickNav(type, id) {
                    $('.project-carousel-' + id).slick(type)
                }

            </script>
        @endsection
    </div>
</div>
