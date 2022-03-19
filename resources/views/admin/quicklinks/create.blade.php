@extends('layouts.admin')

@section('admin-title', 'لینک سریع جدید')
@section('admin-page-title', 'لینک سریع جدید')
@section('admin-page-description', 'در این بخش می‌توانید یک لینک سریع جدید درست کنید.')

@section('content')

    <form action="{{ route('admin.quicklinks.store') }}" method="post" id="upload_form">
        @csrf
        @method('post')
        <div class="card card-flush card-shadow">
            <div class="card-header">
                <h3 class="card-title">لینک جدید</h3>
            </div>
            <div class="card-body">
                <x-backend.tabs :languages="$languages">
                    @foreach( $languages as $lang)
                        <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                            <x-backend.input :lang="$lang" type="text" name="title" label="عنوان لینک"></x-backend.input>
                            <x-backend.input :lang="$lang" type="editor" name="text" label="متن لینک" id="service_content"></x-backend.input>
                        </div>
                    @endforeach
                </x-backend.tabs>
                <x-backend.input type="select" name="link" label="لینک به">
                    <option value="projects">پروژه‌ها</option>
                    <option value="innovation">نوآوری</option>
                    <option value="services">خدمات</option>
                    <option value="tenders">مناقصه‌ها</option>
                    <optgroup label="بخش‌ها">
						<option value="sectors">صفحه اصلی بخش‌ها</option>
                        @foreach($sectors as $sector)
                            <option value="{{ $sector->id}}">{{ $sector->translate('fa')->title }}</option>
                        @endforeach
                    </optgroup>

                </x-backend.input>
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
    <script src="{{asset('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>

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
