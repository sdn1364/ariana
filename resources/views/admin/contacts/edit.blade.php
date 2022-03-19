@extends('layouts.admin')

@section('admin-title', 'ویرایش دفتر')
@section('admin-page-title', 'ویرایش دفتر')

@section('content')

    <form action="{{ route('admin.contacts.update', $contact->id) }}" method="post">
        @csrf
        @method('put')
        <div class="card card-flush card-shadow">
            <div class="card-header">
                <h3 class="card-title">ویرایش {{$contact->title}}</h3>
            </div>
            <div class="card-body">
                <x-admin.tabs :languages="$languages">
                    @foreach( $languages as $lang)
                        <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                            <x-admin.input :editing="$contact" :lang="$lang" type="text" name="title" label="نام دفتر"></x-admin.input>
                            <x-admin.input :editing="$contact" :lang="$lang" type="text" name="address" label="آدرس"></x-admin.input>
                            <x-admin.input :editing="$contact" :lang="$lang" type="text" name="working_time" label="ساعات کاری"></x-admin.input>
                        </div>
                    @endforeach
                </x-admin.tabs>
                <div class="row">
                    <div class="col">
                        <x-admin.input :editing="$contact" type="text" name="phone" label="تلفن"></x-admin.input>
                    </div>
                    <div class="col">
                        <x-admin.input  :editing="$contact" type="text" name="fax" label="فکس"></x-admin.input>
                    </div>
                </div>
                <x-admin.input  :editing="$contact" type="text" name="zip" label="کد پستی"></x-admin.input>
                <div class="mapMain">
                    <div id="mapid" style="width:100%; height:100%; display: block"></div>
                </div>
                <div class="mb-5 mt-5">
                    <div class="row">
                        <div class="col">
                            <input type="text" id="lat" placeholder="Latitude" class=" form-control form-control-sold form-control-sm @error('lat') is-invalid @enderror" name="lat" value="{{ old('lat') ? old('lat') : $contact->lat}}">
                        </div>
                        <div class="col">
                            <input type="text" id="long" placeholder="Longitude" class=" form-control form-control-sold form-control-sm @error('long') is-invalid @enderror" name="long" value="{{ old('long') ? old('long') : $contact->long}}">
                        </div>
                    </div>
                    @error('lat')
                    <span class="invalid-feedback" role="alert">
                    <strong>محل دفتر را روی نقشه مشخص کنید</strong>
                </span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-sm btn-success" name="action" type="submit">ذخیره</button>
            </div>
        </div>
    </form>
@endsection
@push('styles')
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
@endpush
@push('scripts')
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
    <script>
        $(document).ready(function () {

            var myMap = L.map('mapid').setView([35.753692, 51.399953], 5);
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


            if (document.querySelector('#lat').value || document.querySelector('#long').value) {
                L.marker(
                    [document.querySelector('#lat').value, document.querySelector('#long').value],
                    {icon: icon, draggable: true, autoPan: true}).addTo(myMap).on('move', function (e) {
                    document.querySelector('#lat').value = e.latlng['lat'];
                    document.querySelector('#long').value = e.latlng['lng'];
                });
            }
            var marker;

            myMap.on('click', function (e) {
                if (marker) { // check
                    map.removeLayer(marker); // remove
                }
                marker = L.marker(e.latlng, {icon: icon, draggable: true, autoPan: true}).addTo(myMap).on('move', function (e) {
                    document.querySelector('#lat').value = e.latlng['lat'];
                    document.querySelector('#long').value = e.latlng['lng'];
                });
                document.querySelector('#lat').value = e.latlng['lat'];
                document.querySelector('#long').value = e.latlng['lng'];
            });
        });

    </script>
@endpush

@push('styles')
    <style>
        :root {
            --ck-font-face: dana !important;
        }
    </style>
@endpush
