@extends('layouts.admin')

@section('admin-title', 'ویرایش لینک سریع')
@section('admin-page-title', 'ویرایش لینک سریع')
@section('admin-page-description', 'در این بخش می‌توانید لینک سریع را ویرایش کنید.')

@section('content')

    <form action="{{ route('admin.quicklinks.update', $quicklink->id) }}" method="post" name="file" id="upload_form">
        @csrf
        @method('put')
        <div class="card card-flush card-shadow">
            <div class="card-header">
                <h3 class="card-title">ویرایش لینک سریع</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <img class="img-fluid img-thumbnail" src="{{ asset($quicklink->getFirstMediaUrl()) }}" alt="">
                    </div>
                    <div class="col-9">
                        <x-backend.tabs :languages="$languages">
                            @foreach( $languages as $lang)
                                <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">

                                    <x-backend.input.group :lang="$lang" label="عنوان لینک" :error="$errors->first('title')">
                                        <x-backend.input.text :editing="$quicklink" name="title" ></x-backend.input.text>
                                    </x-backend.input.group>
                                    <x-backend.input.group  :lang="$lang" label="متن لینک" :error="$errors->first('text')">
                                        <x-backend.input.textarea :editing="$quicklink"  name="text"  id="service_content"></x-backend.input.textarea>
                                    </x-backend.input.group>

                                </div>
                            @endforeach
                        </x-backend.tabs>

                        <x-backend.input.group label="لینک به" :error="$errors->first('link')">
                            <x-backend.input.select name="link" >
                                <option value="projects" {{ $quicklink->link == 'projects' ? 'selected':'' }}>پروژه‌ها</option>
                                <option value="innovation" {{ $quicklink->link == 'innovation' ? 'selected':'' }}>نوآوری</option>
                                <option value="services" {{ $quicklink->link == 'services' ? 'selected':'' }}>خدمات</option>
                                <option value="tenders" {{ $quicklink->link == 'tenders' ? 'selected':'' }}>مناقصه‌ها</option>
                                <optgroup label="بخش‌ها">
                                    <option value="sectors" {{ $quicklink->link == 'sectors' ? 'selected':'' }}>صفحه اصلی بخش‌ها</option>

                                    @foreach($sectors as $sector)
                                        <option value="{{ $sector->id}}" {{ $quicklink->link == $sector->id ? 'selected':'' }}>{{ $sector->translate('fa')->title }}</option>
                                    @endforeach
                                </optgroup>

                            </x-backend.input.select>
                        </x-backend.input.group>

                        <input type="hidden" name="file" id="file" value="{{ $quicklink->getFirstMediaUrl() }}">

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
        ClassicEditor.create(document.querySelector('#service_content_{{ getLocale($lang) }}'))
            .then(editor => {
            })
            .catch(error => {
            })
        @endforeach

        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
            url: "{{ route('admin.uploadingFile') }}", // Set the url for your upload script location
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

@push('styles')

    <style>
        :root {
            --ck-font-face: dana !important;
        }
    </style>
@endpush
