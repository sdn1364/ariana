<div>
    @section('title', __('contact'))

    <x-frontend.header-component :title="__('contact')" :small="true"
                        :image="asset('images/headers/contact-header.png')"
    ></x-frontend.header-component>
    <div class="container py-10 ">
        <div class="overflow-hidden w-full rounded-lg border border-primary-500 h-[400px] z-0 relative mb-10">
            <div id="mapid" class="w-full block" style="height: inherit;"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            @foreach($contacts as $contact)
                <div class="flex flex-col gap-5 w-full h-fit border border-primary-500 rounded-lg p-2 md:p-5 triangle {{ app()->isLocale('fa') ? 'triangle-bottom-left': 'triangle-bottom-right'}}">
                    <h3 class="font-bold text-primary-500 text-xl ">{{$contact->title}}</h3>
                    <div>
                        <p class="text-primary-500 flex items-center ss02"><i class="ltr:mr-3 rtl:ml-3 text-2xl icon-location"></i>{{$contact->address}}</p>
                        <p class="text-primary-500 flex items-center ss02"><i class="ltr:mr-3 rtl:ml-3 text-2xl icon-phone"></i>{{$contact->phone}}</p>
                        <p class="text-primary-500 flex items-center ss02"><i class="ltr:mr-2 rtl:ml-2 text-2xl icon-fax"></i>{{$contact->fax}}</p>
                    </div>

                    <div>
                        <p class="text-primary-500 ss02"><strong>{{ __('zip_code') }}:</strong> {{$contact->zip}}</p>
                        <p class="text-primary-500 ss02"><strong>{{ __('working_time') }}:</strong> {{$contact->working_time}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @section('scripts')
        <script src="{{asset('vendor/slick/slick.min.js')}}"></script>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                crossorigin=""></script>
        <script>
            $(document).ready(function () {

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
                @foreach($contacts as $contact)
                L.marker([{{$contact->lat}}, {{$contact->long}}], {icon: icon}).addTo(mymap).on('click', function () {
                    $('.infos').slick('slickGoTo', 0)
                });
                @endforeach
                var bounds = [
                        @foreach($contacts as $contact)
                    [{{$contact->lat}}, {{$contact->long}}],
                    @endforeach
                ]
                mymap.fitBounds(bounds);
            })
        </script>
    @endsection

    @section('styles')
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
              integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
              crossorigin=""/>

        <link rel="stylesheet" href="{{ asset('vendor/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/slick/slick-theme.css') }}">

    @endsection

</div>
