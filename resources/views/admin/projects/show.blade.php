@extends('layouts.admin')
@section('admin-title', 'پروژه '.$project->title)
@section('admin-page-title', 'پروژه '.$project->title)

@section('content')

    <div class="card card-flush">
        <div class="card-header">
            <h3 class="card-title"> پروژه {{$project->title}}</h3>
            <div class="card-toolbar">
                <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-sm btn-active-light-primary">ویرایش</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mt-5">
                <div class="col">
                    <p><strong class="text-muted">  مربوط به بخش:</strong>{{ $project->sector->getParentSectors->title }} - {{ $project->sector->title }}</p>
                </div>
                <div class="col">
                    <p class="ss02"><strong class="text-muted">  تاریخ شروع:</strong>{{ $project->start_date_fa() }}</p>
                    <p class="ss02"><strong class="text-muted">  تاریخ پایان:</strong>{{ $project->due_date_fa() }}</p>
                </div>
                <div class="col">
                    <p class="ss02"><strong class="text-muted"> وضعیت: </strong>{!! $project->progress == 'in_progress'? '<span class="text-success fw-bold">در حال انجام</span>':'<span class="text-danger fw-bold">تمام شده</span>' !!}</p>
                </div>
                <div class="col">
                    <p><strong class="text-muted ml-2">مربوط به خدمت:</strong>{{ $project->service->title }}</p>
                </div>
            </div>

            <x-backend.tabs :languages="$languages">
                @foreach($languages as $lang)
                    <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                        <p><strong class="text-muted">عنوان پروژه: </strong>{{$project->translate(getLocale($lang))->title}}</p>
                        <p><strong class="text-muted">تاریخچه پروژه: </strong></p>
                        <div dir="{{ app()->getLocale() != 'fa'? 'ltr': 'rtl' }}" class="mb-5">
                            {!! $project->translate(getLocale($lang))->background !!}
                        </div>
                        <p><strong class="text-muted">نقش ما: </strong></p>
                        <div dir="{{ app()->getLocale() != 'fa'? 'ltr': 'rtl' }}" class="mb-5">
                            {!! $project->translate(getLocale($lang))->background !!}
                        </div>
                        <p><strong class="text-muted">محل انجام پروژه: </strong>{{ $project->translate(getLocale($lang))->location }}</p>
                        <p><strong class="text-muted">مشتری: </strong>{{ $project->translate(getLocale($lang))->client }}</p>
                    </div>
                @endforeach
            </x-backend.tabs>
            <div class="mapMain mt-5 mb-5">
                <div id="mapid" style="width:100%; height:100%; display: block"></div>
            </div>
            <div class="row">
                @foreach($project->getMedia() as $media)
                    <div class="col-2">
                        <img class="img-fluid rounded" src="{{asset($media->getUrl())}}" alt="">
                    </div>
                @endforeach
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
            var myMap = L.map('mapid').setView([{{$project->lat}}, {{$project->long}}], 5);
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
            L.marker([{{$project->lat}}, {{$project->long}}],{icon: icon}).addTo(myMap);
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


