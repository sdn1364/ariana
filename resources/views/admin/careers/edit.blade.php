@extends('layouts.admin')

@section('admin-title', 'ویرایش شغل')
@section('admin-page-title', 'ویرایش شغل')
@section('admin-page-description', 'در این بخش می‌توانید یک شغل جدید درست کنید.')

@section('content')

    <form action="{{ route('admin.careers.update', $career->id) }}" method="post">
        @csrf
        @method('put')
        <div class="card card-flush card-shadow">
            <div class="card-header">
                <h3 class="card-title">شغل جدید</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <img class="img-thumbnail img-fluid" src="{{ asset($career->getFirstMediaUrl()) }}" alt="">
                    </div>
                    <div class="col-9">
                        <x-backend.tabs :languages="$languages">
                            @foreach($languages as $lang)
                                <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">

                                    <x-backend.input.group label="عنوان شغل" :lang="$lang" :error="$errors->first('title')">
                                        <x-backend.input.text :editing="$career" name="title" ></x-backend.input.text>
                                    </x-backend.input.group>

                                    <x-backend.input.group label="خلاصه" :lang="$lang" :error="$errors->first('summary')">
                                        <x-backend.input.textarea :editing="$career" name="summary"  id="job_summary"></x-backend.input.textarea>
                                    </x-backend.input.group>

                                    <x-backend.input.group :lang="$lang" label="مکان" :error="$errors->first('location')">
                                        <x-backend.input.text :editing="$career" name="location" ></x-backend.input.text>
                                    </x-backend.input.group>

                                    <x-backend.input.group  :lang="$lang" label="بخش" :error="$errors->first('section')">
                                        <x-backend.input.text :editing="$career" name="section" ></x-backend.input.text>
                                    </x-backend.input.group>

                                    <x-backend.input.group :lang="$lang" :error="$errors->first('responsibilities')" label="مسئولیت‌ها">
                                        <x-backend.input.textarea :editing="$career" name="responsibilities" id="job_responsibilities" ></x-backend.input.textarea>
                                    </x-backend.input.group>

                                    <x-backend.input.group :lang="$lang" :error="$errors->first('requirements')" label="نیازمندی‌ها">
                                        <x-backend.input.textarea :editing="$career" name="requirements" id="job_requirements"></x-backend.input.textarea>

                                    </x-backend.input.group>
                                </div>
                            @endforeach
                        </x-backend.tabs>
                        <input type="hidden" name="file" id="file" value="{{$career->getFirstMediaUrl()}}">
                        <div class="fv-row mt-5">
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
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-sm btn-success" name="action" type="submit">ذخیره</button>
            </div>
        </div>
    </form>
@endsection
@push('styles')
    <style>
        :root {
            --ck-font-face: dana !important;
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
            .create(document.querySelector('#job_responsibilities_{{ getLocale($lang) }}'))
            .then(editor => {
            })
            .catch(error => {
            })
        ClassicEditor
            .create(document.querySelector('#job_requirements_{{ getLocale($lang) }}'))
            .then(editor => {
            })
            .catch(error => {
            })
        ClassicEditor
            .create(document.querySelector('#job_summary_{{ getLocale($lang) }}'))
            .then(editor => {
            })
            .catch(error => {
            })
        @endforeach
        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
            url: "{{route('admin.uploadingFile')}}", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 1,
            maxFilesize: 4, // MB
            acceptedFiles: 'image/*',

            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, response) {
                $('#file').val(response);
                $('button[type="submit"]').attr("disabled", false);

            }
        });
    </script>
@endpush
