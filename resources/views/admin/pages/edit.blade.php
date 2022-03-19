@extends('layouts.admin')

@section('admin-title', 'ویرایش صفحه')
@section('admin-page-title', 'ویرایش صفحه')
@section('admin-page-description', 'در این بخش می‌توانید صفحه مورد نظر را ویرایش کنید.')

@section('content')

    <form action="{{ route('admin.pages.update', $page->id) }}" method="post">
        @csrf
        @method('put')
        <div class="card card-flush card-shadow mb-5">
            <div class="card-header">
                <h3 class="card-title">ویرایش صفحه</h3>

            </div>
            <div wire:ignore class="card-body">
                <div class="row">
                    <div class="col-3">
                        <img class="img-thumbnail img-fluid" src="{{ asset($page->getFirstMediaUrl()) }}" alt="">
                    </div>
                    <div class="col-9">
                        <x-backend.tabs :languages="$languages">
                            @foreach( $languages as $lang)
                                <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">

                                    <x-backend.input.group :lang="$lang" label="عنوان صفحه" :error="$errors->first('title')">
                                        <x-backend.input.text :editing="$page" name="title" ></x-backend.input.text>
                                    </x-backend.input.group>

                                    <x-backend.input.group :lang="$lang" label="محتوای صفحه" :error="$errors->first('content')">
                                        <x-backend.input.textarea :editing="$page" name="content" id="page_content"></x-backend.input.textarea>
                                    </x-backend.input.group>

                                </div>
                            @endforeach
                        </x-backend.tabs>
                        <br>
                        <x-backend.input.group label="انتخاب صفحه والد" :error="$errors->first('parent_id')" >
                            <x-backend.input.select name="parent_id">
                                <option {{$page->parent_id == 0 ? 'selected' : ''}} value="0">صفحه والد</option>
                                @foreach($pages as $pge)
                                    @if($page->id != $pge->id)
                                        <option {{$page->parent_id == $pge->id ? 'selected' : ''}} value="{{$pge->id}}">{{$pge->title}}</option>
                                    @endif
                                @endforeach
                            </x-backend.input.select>
                        </x-backend.input.group>

                        <input type="hidden" name="file" id="file" value="{{ $page->getFirstMediaUrl() }}">
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
                <button class="btn btn-sm btn-success">ذخیره</button>
            </div>
        </div>
    </form>
@endsection

@push('scripts')

    <script>
        @foreach( $languages as $lang)
        ClassicEditor.create(document.querySelector('#page_content_{{ getLocale($lang) }}'))
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

        .preview-pane {
            margin-top: 50px;
        }

        .module {
            min-height: 50px;
        }

        .moduleContent {
            width: 100%;
            min-height: 25px;
            display: flex;
            flex-direction: column;
            border-radius:  0.475rem;
        }
        .module .name {
            width: fit-content;
            min-height: 25px;
            line-height: 25px;
            vertical-align: middle;
            border-radius: 0.475rem ;
        }
        .sizes{
            width: fit-content;
            display: none;
            list-style: none;
            border-radius: 0.475rem;
        }
        .sizes.active{
            display: flex;
        }
    </style>
@endpush
