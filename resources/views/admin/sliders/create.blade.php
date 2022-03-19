@extends('layouts.admin')

@section('admin-title', 'اسلاید جدید')

@section('admin-page-title', 'اسلاید جدید')

@section('content')
    <form action="{{route('admin.slides.store')}}" method="post">
        @csrf
        @method('POST')
        <div class="card card-flush">
            <div class="card-header">
                <h3 class="card-title">اسلاید جدید</h3>
            </div>
            <div class="card-body">
                <x-backend.tabs :languages="$languages">
                    @foreach($languages as $lang)
                        <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                            <x-backend.input.group :lang="$lang" label="عنوان اسلاید" :error="$errors->first('title')">
                                <x-backend.input.text name="title"></x-backend.input.text>
                            </x-backend.input.group>
                        </div>
                    @endforeach
                </x-backend.tabs>

                <x-backend.input.group label="لینک به" :error="$errors->first('link')">
                    <x-backend.input.select name="link" >
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
                <button class="btn btn-success btn-sm" disabled type="submit">ذخیره</button>
            </div>
        </div>
    </form>
@endsection
@push('scripts')
    <script>
        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
            url: "{{route('admin.uploadingFile')}}", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 1,
            maxFilesize: 10, // MB
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
