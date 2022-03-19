@extends('layouts.admin')
@section('admin-title', 'دفتر '.$contact->title)
@section('admin-page-title', 'پروژه '.$contact->title)

@section('content')

    <div class="card card-flush">
        <div class="card-header">
            <h3 class="card-title"> پروژه {{$contact->title}}</h3>
            <div class="card-toolbar">
                <a href="{{route('admin.contacts.edit', $contact->id)}}" class="btn btn-sm btn-active-light-primary">ویرایش</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mt-5">
                <div class="col">
                    <p><strong class="text-muted">  تلفن:</strong>{{ $contact->title }}</p>
                </div>
                <div class="col">
                    <p class="ss02"><strong class="text-muted">  فکس:</strong>{{ $contact->fax }}</p>
                </div>
                <div class="col">
                    <p class="ss02"><strong class="text-muted">  کد پستی:</strong>{{ $contact->zip }}</p>
                </div>
            </div>
            <x-admin.tabs>
                @foreach($languages as $lang)
                    <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                        <p><strong class="text-muted">عنوان دفتر: </strong>{{  $contact->translate(getLocale($lang))->title}}</p>
                        <p><strong class="text-muted">آدرس : </strong>{{  $contact->translate(getLocale($lang))->address}}</p>
                        <p><strong class="text-muted">ساعات کاری : </strong>{{  $contact->translate(getLocale($lang))->working_time}}</p>
                        <p><strong class="text-muted">واحد : </strong>{{  $contact->translate(getLocale($lang))->section}}</p>
                    </div>
                @endforeach
            </x-admin.tabs>
            <div class="mapMain mt-5">
                <div id="mapid" style="width:100%; height:100%; display: block"></div>
            </div>
        </div>
    </div>

@endsection

@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <style>
        .mapMain {
            width: 100%;
            height: 400px;
            display: block;
            overflow: hidden;
            border-radius: 0.475rem;
            border: 1px solid #E4E6EF;
        }
    </style>
@endsection
@section('scripts')
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
    <script>

        $(document).ready(function () {
            var myMap = L.map('mapid').setView([{{$contact->lat}}, {{$contact->long}}], 5);
            L.tileLayer('https://api.mapbox.com/styles/v1/sdn1364/ckoq48b632c2d18m04ahea1hn/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoic2RuMTM2NCIsImEiOiJja29xMnI2ZTAwa2h4Mm5vamZiZXVpMWYxIn0._h0cJu3kq1dfsy4FOl6_Fg', {
                maxZoom: 18,
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                accessToken: 'pk.eyJ1Ijoic2RuMTM2NCIsImEiOiJja29xMnI2ZTAwa2h4Mm5vamZiZXVpMWYxIn0._h0cJu3kq1dfsy4FOl6_Fg'
            }).addTo(myMap);

            var icon = L.icon({
                iconUrl: '{{asset('images/pin.svg')}}',
                iconSize: [30, 40],
                iconAnchor: [15, 40] // half of width + height
            });
            L.marker([{{$contact->lat}}, {{$contact->long}}],{icon: icon}).addTo(myMap);
        });
    </script>
@endsection

@section('styles')
    <style>
        :root {
            --ck-font-face: dana !important;
        }
    </style>
@endsection


