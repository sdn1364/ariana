@extends('layouts.admin')

@section('admin-title', 'ویرایش بخش')
@section('admin-page-title', 'ویرایش بخش')
@section('admin-page-description', 'در این بخش می‌توانید بخض مورد نظر را ویرایش کنید.')

@section('content')

    <form action="{{ route('admin.sectors.update', $sector->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card card-flush card-shadow">
            <div class="card-header">
                <h3 class="card-title">ویرایش بخش {{$sector->title}}</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <img class="img-fluid img-thumbnail" src="{{asset($sector->getFirstMediaUrl())}}" alt="">
                    </div>
                    <div class="col-9">
                        <x-backend.tabs :languages="$languages">
                            @foreach( $languages as $lang )
                                <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                                    <x-backend.input.group label="نام بخش" :error="$errors->first('title')">
                                        <x-backend.input.text :editing="$sector" :lang="$lang" type="text" name="title"></x-backend.input.text>
                                    </x-backend.input.group>
                                    <x-backend.input.group label="محتوای بخش" :error="$errors->first('content')">
                                        <x-backend.input.textarea :editing="$sector" :lang="$lang" name="content" id="sector_content"></x-backend.input.textarea>
                                    </x-backend.input.group>
                                </div>
                            @endforeach
                        </x-backend.tabs>

                        <x-backend.input.group label="عکس بنر بالای صفحه" :error="$errors->first('banner')">
                            <x-backend.input.file :editing="$sector" name="banner" id="banner"></x-backend.input.file>
                        </x-backend.input.group>

                        <x-backend.input.group label="قالب نمایش" :error="$errors->first('type')">
                            <x-backend.input.select name="type">
                                <option value="type-1" {{$sector->type == 'type-1'? 'selected': ''}}>نوع یک</option>
                                <option value="type-2" {{$sector->type == 'type-2'? 'selected': ''}}>نوع دو</option>
                            </x-backend.input.select>
                        </x-backend.input.group>

                        <x-backend.input.group label="بخش والد" :error="$errors->first('type')">
                            <x-backend.input.select name="parent_id">
                                <option value="0">بخش والد</option>
                                @foreach($sectors as $record)
                                    <option value="{{ $record->id }}" {{$record->id == $sector->parent_id ? 'selected': ''}}>{{ $record->title }}</option>
                                @endforeach
                            </x-backend.input.select>
                        </x-backend.input.group>

                        <input type="hidden" name="file" id="file" value="{{$sector->getFirstMediaUrl()}}">
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
                <button class="btn btn-sm btn-success" name="action" type="submit">ویرایش</button>
            </div>
        </div>
    </form>
@endsection

@push('scripts')

    <script>
        @foreach($languages as $lang)
        ClassicEditor
            .create(document.querySelector('#sector_content_{{ getLocale($lang) }}'))
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
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            acceptedFiles: 'image/*',

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (file, response) {
                $('#file').val(response);
                console.log(response);
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
