@extends('layouts.admin')

@section('admin-title', 'ویرایش کارمند')
@section('admin-page-title', 'ویرایش کارمند')
@section('admin-page-description', 'در این بخش می‌توانید یک کارمند  را ویرایش کنید.')

@section('content')

    <form action="{{ route('admin.staffs.update', $staff->id) }}" method="post" name="file" enctype="multipart/form-data" id="upload_form">
        @csrf
        @method('put')
        <div class="card card-flush card-shadow">
            <div class="card-header">
                <h3 class="card-title">ویرایش کارمند</h3>
            </div>
            <div class="card-body" >
                <x-backend.tabs :languages="$languages">
                    @foreach( $languages as $lang)
                        <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                            <x-backend.input.group :lang="$lang" label="نام کارمند" :error="$errors->first('name')">
                                <x-backend.input.text :editing="$staff" name="name"></x-backend.input.text>
                            </x-backend.input.group>
                            <x-backend.input.group :lang="$lang" label="سمت" :error="$errors->first('position')" >
                                <x-backend.input.text :editing="$staff" name="position" ></x-backend.input.text>
                            </x-backend.input.group>

                            <x-backend.input.group :lang="$lang" label="توضیحات" :error="$errors->first('description')">
                                <x-backend.input.textarea :editing="$staff" name="description"  id="service_content"></x-backend.input.textarea>
                            </x-backend.input.group>
                        </div>
                    @endforeach
                </x-backend.tabs>
                <x-backend.input.group label="لینک لیندکدین" :error="$errors->first('link')">
                    <x-backend.input.text :editing="$staff" name="link"></x-backend.input.text>
                </x-backend.input.group>
                <x-backend.input.group label="نوع سمت">
                    <select class="form-select" name="type">
                        <option value="manager"  {{$staff->type = 'manager' ? 'selected': ''}}>مدیر</option>
                        <option value="employee" {{$staff->type = 'employee' ? 'selected': ''}}>کارمند</option>
                    </select>
                </x-backend.input.group>

                <input type="hidden" name="file" id="file" value="{{$staff->getFirstMediaUrl()}}">
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
                <button class="btn btn-sm btn-success" name="action" type="submit">ذخیره</button>
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
            acceptedFiles: 'image/*',

            addRemoveLinks: true,
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
