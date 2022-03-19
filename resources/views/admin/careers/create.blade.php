@extends('layouts.admin')

@section('admin-title', 'شغل جدید')
@section('admin-page-title', 'شغل جدید')
@section('admin-page-description', 'در این بخش می‌توانید یک شغل جدید درست کنید.')

@section('content')

    <form action="{{ route('admin.careers.store') }}" method="post">
        @csrf
        @method('post')
        <div class="card card-flush card-shadow">
            <div class="card-header">
                <h3 class="card-title">شغل جدید</h3>
            </div>
            <div class="card-body">
                <x-backend.tabs :languages="$languages">
                    @foreach($languages as $lang)
                        <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">

                            <x-backend.input.group label="عنوان شغل" :lang="$lang" :error="$errors->first('title')">
                                <x-backend.input.text name="title" ></x-backend.input.text>
                            </x-backend.input.group>

                            <x-backend.input.group label="خلاصه" :lang="$lang" :error="$errors->first('summary')">
                                <x-backend.input.textarea name="summary"  id="job_summary"></x-backend.input.textarea>
                            </x-backend.input.group>

                            <x-backend.input.group :lang="$lang" label="مکان" :error="$errors->first('location')">
                                <x-backend.input.text name="location" ></x-backend.input.text>
                            </x-backend.input.group>

                            <x-backend.input.group  :lang="$lang" label="بخش" :error="$errors->first('section')">
                                <x-backend.input.text name="section" ></x-backend.input.text>
                            </x-backend.input.group>

                            <x-backend.input.group :lang="$lang" :error="$errors->first('responsibilities')" label="مسئولیت‌ها">
                                <x-backend.input.textarea name="responsibilities" id="job_responsibilities" ></x-backend.input.textarea>
                            </x-backend.input.group>

                            <x-backend.input.group :lang="$lang" :error="$errors->first('requirements')" label="نیازمندی‌ها">
                                <x-backend.input.textarea name="requirements" id="job_requirements"></x-backend.input.textarea>

                            </x-backend.input.group>
                        </div>
                    @endforeach
                </x-backend.tabs>

                <input type="hidden" name="file" id="file">
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
                <button class="btn btn-sm btn-success" name="action" disabled type="submit">ذخیره</button>
                <button class="btn btn-sm btn-active-light-success" disabled type="submit" name="action" value="newForm">ذخیره و جدید</button>
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
    <script src="{{ asset('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
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
    </script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
    <script>


        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
            url: "{{route('admin.uploadingFile')}}", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 1,
            maxFilesize: 4, // MB
            addRemoveLinks: true,
            acceptedFiles: 'image/*',
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
