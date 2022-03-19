@extends('layouts.admin')

@section('admin-title', 'بخش جدید')
@section('admin-page-title', 'بخش جدید')
@section('admin-page-description', 'در این بخش می‌توانید یک بخش جدید درست کنید.')

@section('content')

    <form action="{{ route('admin.sectors.store') }}" method="post" name="file" enctype="multipart/form-data" id="upload_form" >
        @csrf
        @method('post')
        <div class="card card-flush card-shadow">
            <div class="card-header">
                <h3 class="card-title">بخش جدید</h3>
            </div>
            <div class="card-body">
                <x-backend.tabs :languages="$languages">
                    @foreach( $languages as $lang)
                        <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                            <x-backend.input.group :lang="$lang" label="نام بخش" :error="$errors->first('title')">
                                <x-backend.input.text name="title"></x-backend.input.text>
                            </x-backend.input.group>
                            <x-backend.input.group :lang="$lang" label="محتوای بخش" :error="$errors->first('content')">
                                <x-backend.input.textarea  name="content"  id="service_content"></x-backend.input.textarea>
                            </x-backend.input.group>
                        </div>
                    @endforeach
                </x-backend.tabs>

                <x-backend.input.group label="عکس بنر بالای صفحه" :error="$errors->first('banner')">
                    <x-backend.input.file name="banner" id="banner"></x-backend.input.file>
                </x-backend.input.group>

                <x-backend.input.group label="قالب نمایش" :error="$errors->first('type')">
                    <x-backend.input.select name="type">
                        <option value="type-1">نوع یک</option>
                        <option value="type-2">نوع دو</option>
                    </x-backend.input.select>
                </x-backend.input.group>

                <x-backend.input.group label="بخش والد" :error="$errors->first('parent_id')">
                    <x-backend.input.select name="parent_id">
                        <option value="0">انتخاب کنید</option>
                        @foreach($sectors as $record)
                            <option value="{{ $record->id }}">{{ $record->title }}</option>
                        @endforeach
                    </x-backend.input.select>
                </x-backend.input.group>

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

@push('scripts')
    <script>
        @foreach( $languages as $lang)
        ClassicEditor
            .create(document.querySelector('#service_content_{{ getLocale($lang) }}'))
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
            addRemoveLinks: true,
            acceptedFiles: 'image/*',

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (file, response) {
                $('#file').val(response);
                $('button[type="submit"]').attr("disabled", false);

            }
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
