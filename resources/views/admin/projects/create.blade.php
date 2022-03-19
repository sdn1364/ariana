@extends('layouts.admin')
@section('admin-title', 'پروژه جدید')
@section('admin-page-title', 'پروژه جدید')
@section('admin-page-description', 'در این صفحه می‌توانید پروژه جدید ایجاد کنید.')
@section('content')
    <form action="{{route('admin.projects.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="card card-flush">
            <div class="card-header">
                <h3 class="card-title">پروژه جدید</h3>
            </div>
            <div class="card-body">
                <x-backend.tabs names="question, answer" :languages="$languages">
                    @foreach( $languages as $lang )
                        <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">

                            <x-backend.input.group :lang="$lang" label="عنوان پروژه" :error="$errors->first('title')">
                                <x-backend.input.text name="title"></x-backend.input.text>
                            </x-backend.input.group>

                            <x-backend.input.group :lang="$lang" label="تاریخچه" :error="$errors->first('background')">
                                <x-backend.input.textarea name="background" id="project_content"></x-backend.input.textarea>
                            </x-backend.input.group>

                            <x-backend.input.group :lang="$lang" label="نقش" :error="$errors->first('roles')">
                                <x-backend.input.textarea name="roles" id="project_roles"></x-backend.input.textarea>
                            </x-backend.input.group>

                            <x-backend.input.group :lang="$lang" label="مکان" :error="$errors->first('location')">
                                <x-backend.input.text name="location" id="project_roles"></x-backend.input.text>
                            </x-backend.input.group>

                            <x-backend.input.group :lang="$lang" label="مشتری" :error="$errors->first('client')">
                                <x-backend.input.text name="client"></x-backend.input.text>
                            </x-backend.input.group>
                        </div>
                    @endforeach
                </x-backend.tabs>
                <div class="row mt-5">
                    <div class="col">
                        <x-backend.input.group label="تاریخ شروع" :error="$errors->first('start_date')">
                            <x-backend.input.datepicker id="project_date_start" name="start_date"></x-backend.input.datepicker>
                        </x-backend.input.group>
                    </div>
                    <div class="col">
                        <x-backend.input.group label="تاریخ پایان" :error="$errors->first('due_date')">
                            <x-backend.input.datepicker id="project_date_end" name="due_date"></x-backend.input.datepicker>
                        </x-backend.input.group>
                    </div>
                </div>
                <div class="mapMain">
                    <div id="mapid" style="width:100%; height:100%; display: block"></div>
                </div>
                <div class="mb-5 mt-5">
                    <div class="row">
                        <div class="col">
                            <input type="text" id="lat"  placeholder="latitude" class="form-control form-control-sold form-control-sm @error('lat') is-invalid @enderror" name="lat" value="{{old('lat')}}">
                        </div>
                        <div class="col">
                            <input type="text" id="long" placeholder="longitude" class="form-control form-control-sold form-control-sm @error('long') is-invalid @enderror" name="long" value="{{old('long')}}">
                        </div>
                    </div>
                    @error('lat')
                    <span class="invalid-feedback" role="alert">
                    <strong>محل پروژه را روی نقشه مشخص کنید</strong>
                </span>
                    @enderror
                </div>

                <x-backend.input.group label="آپلود بروشور" :error="$errors->first('brochure')">
                    <x-backend.input.file name="brochure" id="brochure"></x-backend.input.file>
                </x-backend.input.group>

                <x-backend.input.group label="وضعیت پروژه" :error="$errors->first('progress')">
                    <x-backend.input.select name="progress">
                        <option value="in_progress">در حال انجام</option>
                        <option value="completed">تمام شده</option>
                    </x-backend.input.select>
                </x-backend.input.group>

                <x-backend.input.group label="وضعیت پروژه" :error="$errors->first('progress')">
                    <x-backend.input.select name="sector_id" label="مربوط به بخش">
                        @foreach($sectors as $sector)
                            <option value="{{$sector->id}}">{{$sector->title}}</option>
                        @endforeach
                    </x-backend.input.select>
                </x-backend.input.group>

                <x-backend.input.group label="مربوط به خدمت" :error="$errors->first('service_id')">
                    <x-backend.input.select name="service_id" >
                        @foreach($services as $service)
                            <option value="{{$service->id}}" >{{$service->title}}</option>
                        @endforeach
                    </x-backend.input.select>
                </x-backend.input.group>

                <input type="hidden" class="form-control" name="files" id="file">
                <div class="fv-row">
                    <!--begin::Dropzone-->
                    <div class="dropzone" id="kt_dropzonejs_example_1">
                        <!--begin::Message-->
                        <div class="dz-message needsclick">
                            <!--begin::Icon-->
                            <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                            <!--end::Icon-->

                            <!--begin::Info-->
                            <div class="ms-4">
                                <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                <span class="fs-7 fw-bold text-gray-400">Upload up to 10 files</span>
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Dropzone-->
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success btn-sm" type="submit" disabled name="action">ذخیره</button>
                <button class="btn btn-active-light-success btn-sm " disabled type="submit" name="action" value="newForm">ذخیره و جدید</button>
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
        @foreach($languages as $lang)
        ClassicEditor
            .create(document.querySelector('#project_content_{{ getLocale($lang) }}'))
            .then(editor => {
            })
            .catch(error => {
            })
        ClassicEditor
            .create(document.querySelector('#project_roles_{{ getLocale($lang) }}'))
            .then(editor => {
            })
            .catch(error => {
            })
        @endforeach
        var files = [];
        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
            url: "{{route('admin.uploadingFile')}}", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 40, // MB
            addRemoveLinks: true,
            acceptedFiles: 'image/*',

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, response) {
                //$('#file').val.push((response));
                //console.log(response);
                files.push(response);
            },
            complete:function(){
                $('#file').val(JSON.stringify(files))
                $('button[type="submit"]').attr("disabled", false);

            }
        });
        $(document).ready(function () {
            $("#project_date_start").flatpickr();
            $("#project_date_end").flatpickr();

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
