<div class="py-20">
    <section class="h-fit">
        @if( $projects->isNotEmpty() )
            <div class="container">
                <div class="flex flex-col space-y-5 md:space-y-0 items-center justify-between mb-5
                            xl:flex-row
                            ">
                    <h2 class="px-20 py-3 text-3xl font-black text-primary text-primary-500 triangle rectangle {{ app()->isLocale('fa') ? 'triangle-left rectangle-left':'triangle-right rectangle-right'}}">{{__('project_title')}}</h2>
                    <ul class="flex flex-col items-start md:flex-row sm:items-center md:space-x-8 rtl:space-x-reverse">
                        <li class="flex flex-row items-center">
                            <i class="ltr:mr-2 rtl:ml-2 text-3xl icon-frame text-primary-200"></i><span class="ltr:mr-2 rtl:ml-2 text-primary-500">{{__('all_projects')}}:</span> <span class="text-3xl font-black text-primary-500 ss02">{{$allProjectsCount}}</span>
                        </li>
                        <li class="flex flex-row items-center">
                            <i class="ltr:mr-2 rtl:ml-2 text-3xl icon-statistic text-primary-200"></i><span class="ltr:mr-2 rtl:ml-2 text-primary-500">{{__('projects_in_progress')}}:</span> <span class="text-3xl font-black text-primary-500 ss02">{{$inProgressCount}}</span>
                        </li>
                        <li class="flex flex-row items-center">
                            <i class="ltr:mr-2 rtl:ml-2 text-3xl icon-user text-primary-200"></i><span class="ltr:mr-2 rtl:ml-2 text-primary-500">{{ __('human_resources') }}:</span> <span class="text-3xl font-black text-primary-500 ss02">{{ $content->title }}</span>
                        </li>
                    </ul>
                </div>
                <div class="grid grid-cols-1 xl:grid-cols-2 xl:gap-5 2xl:grid-cols-3 2xl:gap-10">
                    <div class="rounded-lg border border-primary-500 relative">
                        <div class="slick-slider project-carousel">

                            @foreach($projects as $project)
                                <div>
                                    <div class="flex flex-col">
                                        <p class="py-10 text-primary-500 h-36 text-xl font-bold text-center px-20 flex items-center justify-center">{{$project->location}}</p>
                                        <div class="h-64 overflow-hidden">
                                            <img class="object-cover w-full h-full" src="{{asset($project->getFirstMediaUrl())}}" alt="">
                                        </div>
                                        <div class="px-7 py-3 font-bold">
                                            <p class="text-center text-primary-500">{{$project->title}}</p>
                                        </div>
                                        <div class="flex flex-row items-center justify-between px-10 py-5">
                                            <p class="text-primary-500">{{__('start_date')}}: {{app()->isLocale('fa') ? verta($project->start_date)->format('%B %d، %Y') : $project->start_date->format('d-m-Y')}}
                                            </p>
                                            <p class="text-primary-500">{{__('due_date')}}: {{app()->isLocale('fa') ? verta($project->due_date)->format('%B %d، %Y') : $project->due_date->format('d-m-Y')}}
                                            </p>
                                        </div>
                                        <a href="{{ route('project-page', $project->id) }}" class="bg-secondary-500 font-bold text-lg text-white text-center mx-auto my-5 hover:bg-secondary-600
                                         xl:rounded-lg rounded-lg py-2 px-10">{{ __('read_more') }}</a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="xl:colspan-1 2xl:col-span-2 h-96 lg:h-auto mt-5 lg:mt-0">
                        <div class="overflow-hidden w-full rounded-lg border border-primary-500 h-full z-0 " >
                            <div id="mapid" class="w-full z-0" style="height: inherit;"></div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <x-frontend.empty-container></x-frontend.empty-container>
        @endif
    </section>

    @section('scripts')
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                crossorigin=""></script>
        <script src="{{asset('vendor/slick/slick.min.js')}}"></script>

        <script>
            $(document).ready(function () {
                $(".main-carousel").slick({
                    dots: true,
                    infinite: true,
                    speed: 500,
                    slidesToShow: 1,
                    arrows: true,
                    cssEase: 'cubic-bezier(1.000, 0.005, 0.620, 0.735)',
                    prevArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 right-10 text-white bg-primary-500 rounded-full w-8 h-8 flex items-center justify-center hover:shadow-lg hover:text-secondary-500 z-30"><i class="ri-arrow-right-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer absolute top-1/2 -mt-4 left-10 hover:shadow-lg hover:text-secondary-500 text-white bg-primary-500 rounded-full w-8 h-8 flex items-center justify-center z-30"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',
                    nextArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-1/2 -mt-4 left-10 text-white bg-primary-500 rounded-full w-8 h-8 flex items-center justify-center hover:shadow-lg hover:text-secondary-500 z-30"><i class="ri-arrow-left-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer absolute top-1/2 -mt-4 right-10 hover:shadow-lg hover:text-secondary-500 text-white bg-primary-500 rounded-full w-8 h-8 flex items-center justify-center z-30"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',
                    rtl: {{ app()->isLocale('fa') ? 'true' : 'false' }},
                    appendDots: '.custom-dots',
                });

                $(".project-carousel").slick({
                    dots: false,
                    infinite: true,
                    slidesToShow: 1,
                    arrows: true,
                    prevArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-14 right-5 text-white bg-primary-500 rounded-full w-8 h-8 flex items-center justify-center hover:shadow-lg hover:text-secondary-500 z-30"><i class="ri-arrow-right-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer absolute top-14 left-5 hover:shadow-lg hover:text-secondary-500 text-white bg-primary-500 rounded-full w-8 h-8 flex items-center justify-center z-30"><i class="ri-arrow-left-s-line ri-lg"></i></div>' !!}',

                    nextArrow: '{!! app()->isLocale('fa') ? '<div class="cursor-pointer absolute top-14 left-5 text-white bg-primary-500 rounded-full w-8 h-8 flex items-center justify-center hover:shadow-lg hover:text-secondary-500 z-30"><i class="ri-arrow-left-s-line ri-lg"></i></div>':
                                                            '<div class="cursor-pointer absolute top-14 right-5 hover:shadow-lg hover:text-secondary-500 text-white bg-primary-500 rounded-full w-8 h-8 flex items-center justify-center z-30"><i class="ri-arrow-right-s-line ri-lg"></i></div>' !!}',

                    rtl: {{app()->isLocale('fa') ? 'true' : 'false'}},
                }).on('afterChange', function (event, slick, currentSlide, nextSlide) {

                });
                @if( $projects->isNotEmpty() )
                    var mymap = L.map('mapid').setView([35.753692, 51.399953], 5);
                    L.tileLayer('https://api.mapbox.com/styles/v1/sdn1364/ckoq48b632c2d18m04ahea1hn/tiles/256/{z}/{x}/{y}@2x?access_token=pk.eyJ1Ijoic2RuMTM2NCIsImEiOiJja29xMnI2ZTAwa2h4Mm5vamZiZXVpMWYxIn0._h0cJu3kq1dfsy4FOl6_Fg', {
                        maxZoom: 18,
                        id: 'mapbox/streets-v11',
                        tileSize: 512,
                        zoomOffset: -1,
                        accessToken: 'pk.eyJ1Ijoic2RuMTM2NCIsImEiOiJja29xMnI2ZTAwa2h4Mm5vamZiZXVpMWYxIn0._h0cJu3kq1dfsy4FOl6_Fg'
                    }).addTo(mymap);

                    var icon = L.icon({
                        iconUrl: '{{asset('images/pin.svg')}}',
                        iconSize: [30, 40],
                        iconAnchor: [15, 40] // half of width + height
                    });
                    var iconSecond = L.icon({
                        iconUrl: '{{asset('images/pin-secondary.svg')}}',
                        iconSize: [30, 40],
                        iconAnchor: [15, 40] // half of width + height
                    });

                    @foreach($projects as $project)

                        L.marker([{{$project->lat}}, {{$project->long}}], {icon: icon}).addTo(mymap).on('click', function (e) {

                            mymap.setView(e.latlng, 5);
                            mymap.eachLayer(function(layer){
                                if(layer instanceof L.Marker){
                                    layer.setIcon(icon);
                                }
                            })
                            e.target.setIcon(iconSecond);
                            $('.project-carousel').slick('slickGoTo', {{$loop->index}});

                        });

                    @endforeach

                    var bounds = [
                        @foreach($projects as $project)
                            [{{$project->lat}}, {{$project->long}}],
                        @endforeach
                    ]

                    mymap.fitBounds(bounds);

                @endif
            })
        </script>
    @endsection

    @section('styles')
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
              integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
              crossorigin=""/>

    @endsection

</div>
