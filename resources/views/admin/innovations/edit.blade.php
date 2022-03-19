@extends('layouts.admin')

@section('admin-title', 'ویرایش مرحله')
@section('admin-page-title', 'ویرایش مرحله')
@section('admin-page-description', 'در این بخش می‌توانید مرحله مورد نظر را ویرایش کنید.')

@section('content')

    <form action="{{ route('admin.innovations.update', $innovation->id) }}" method="post" name="file" enctype="multipart/form-data" id="upload_form">
        @csrf
        @method('put')
        <div class="card card-flush card-shadow">
            <div class="card-header">
                <h3 class="card-title">ویرایش مرحله</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <img class="img-fluid img-thumbnail" src="{{ asset($innovation->getFirstMediaUrl())  }}" alt="">
                    </div>
                    <div class="col-9">
                        <x-backend.tabs :languages="$languages">
                            @foreach( $languages as $lang)
                                <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">

                                    <x-backend.input.group :lang="$lang" :error="$errors->first('text')" label="عنوان مرحله">
                                        <x-backend.input.text :editing="$innovation" name="text" ></x-backend.input.text>
                                    </x-backend.input.group>

                                </div>
                            @endforeach
                        </x-backend.tabs>
                        <div class="mt-5">
                            <x-backend.input.group :error="$errors->first('link')"  label="لینک(دلخواه)">
                                <x-backend.input.text :editing="$innovation" name="link" ></x-backend.input.text>
                            </x-backend.input.group>
                        </div>

                        <input type="hidden" name="file" id="file" value="{{ $innovation->getFirstMediaUrl() }}">
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
            success: function(file, response) {
                $('#file').val(response);
            }
        });
    </script>
@endpush

