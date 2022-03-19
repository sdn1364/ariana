@extends('layouts.admin')

@section('admin-title', 'صفحه جدید')
@section('admin-page-title', 'صفحه جدید')
@section('admin-page-description', 'در این بخش می‌توانید یک صفحه جدید درست کنید.')

@section('content')

    <form action="{{ route('admin.pages.store') }}" method="post">
        @csrf
        @method('post')
        <div class="card card-flush card-shadow mb-5">
            <div class="card-header">
                <h3 class="card-title">صفحه جدید</h3>

            </div>
            <div class="card-body">
                <x-backend.tabs :languages="$languages">
                    @foreach( $languages as $lang)
                        <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">


                            <x-backend.input.group :lang="$lang" label="عنوان صفحه" :error="$errors->first('title')">
                                <x-backend.input.text name="title" ></x-backend.input.text>

                            </x-backend.input.group>

                            <x-backend.input.group :lang="$lang" label="محتوای صفحه" :error="$errors->first('content')">
                                <x-backend.input.textarea name="content"  id="service_content"></x-backend.input.textarea>

                            </x-backend.input.group>

                        </div>
                    @endforeach
                </x-backend.tabs>
                <x-admin.input type="select" label="انتخاب صفحه والد" name="parent_id">
                    <option value="0">صفحه والد</option>
                    @foreach($pages as $page)
                        <option value="{{$page->id}}">{{$page->title}}</option>
                    @endforeach
                </x-admin.input>
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
                <button class="btn btn-sm btn-success" name="action" type="submit">ذخیره</button>
            </div>
        </div>

    </form>

@endsection

@section('scripts')
    <script src="{{asset('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>

    <script>
        @foreach( $languages as $lang)
        ClassicEditor
            .create(document.querySelector('#service_content_{{ getLocale($lang) }}'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.log(error);
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
@endsection

@section('styles')

    <style>
        :root {
            --ck-font-face: dana !important;
        }

        .preview-pane {
            margin-top: 50px;
        }

        .module {
            position: relative;
            min-height: 50px;

        }

        .module .content {
            padding: 1rem;
            padding-top: calc(1rem + 35px);

            border-radius: 5px 0 5px 5px;

        }

        .module .name {
            width: auto;
            min-height: 25px;
            line-height: 25px;
            vertical-align: middle;
            position: absolute;
            bottom: 100%;
            right: -1px;
            border-radius: 5px 5px 0 0;
        }
    </style>
@endsection
