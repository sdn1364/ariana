@extends('layouts.admin')

@section('admin-title', 'ویرایش مناقصه')
@section('admin-page-title', 'ویرایش مناقصه')
@section('admin-page-description', 'در این بخش می‌توانید یک مناقصه را ویرایش کنید.')

@section('content')

    <form action="{{ route('admin.tenders.update', $tender->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card card-flush card-shadow">
            <div class="card-header">
                <h3 class="card-title">ویرایش مناقصه</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <img class="img-thumbnail img-fluid" src="{{ asset($tender->getFirstMediaUrl()) }}" alt="">
                    </div>
                    <div class="col-9">
                        <x-backend.tabs :languages="$languages">
                            @foreach($languages as $lang)
                                <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                                    <x-backend.input.group :lang="$lang" label="عنوان مناقصه">
                                        <x-backend.input.text :editing="$tender" name="title"></x-backend.input.text>
                                    </x-backend.input.group>
                                    <x-backend.input.group label="خلاصه" :lang="$lang" :error="$errors->first('brief')">
                                        <x-backend.input.textarea :editing="$tender"  type="editor" name="brief" label="خلاصه" id="tender_brief"></x-backend.input.textarea>

                                    </x-backend.input.group>
                                    <x-backend.input.group :lang="$lang" label="نقش‌ها" :error="$errors->first('roles')">
                                        <x-backend.input.textarea :editing="$tender" name="roles" id="tender_roles"></x-backend.input.textarea>
                                    </x-backend.input.group>

                                </div>
                            @endforeach
                        </x-backend.tabs>
                        <div class="row mt-5">
                            <div class="col">
                                <x-backend.input.group label="کد مناقصه" :error="$errors->first('code')">
                                    <x-backend.input.text :editing="$tender" name="code"></x-backend.input.text>
                                </x-backend.input.group>                            </div>
                            <div class="col">
                                <x-backend.input.group label="تاریخ ضرب‌الاجل" :error="$errors->first('deadline')">
                                    <x-backend.input.datepicker :editing="$tender" id="tender_deadline" name="deadline"></x-backend.input.datepicker>
                                </x-backend.input.group>                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <x-backend.input.group label="وضعیت">
                                    <x-backend.input.select name="progress">
                                        <option {{$tender->progress == 'current' ? 'selected':''}} value="current">در حال اجرا</option>
                                        <option {{$tender->progress == 'expired' ? 'selected': ''}} value="expired">منقضی</option>
                                    </x-backend.input.select>
                                </x-backend.input.group>

                            </div>
                            <div class="col">
                                <x-backend.input.group label="نوع مناقصه">

                                    <x-backend.input.select name="type">
                                        <option {{$tender->type == 'constructor'?'selected':''}} value="constructor">Constructor</option>
                                        <option {{$tender->type == 'Manufacturer'?'selected':''}} value="manufacturer">Manufacturer</option>
                                    </x-backend.input.select>
                                </x-backend.input.group>

                            </div>
                            <div class="col">
                                <x-backend.input.group label="بخش مربوطه">
                                    <x-backend.input.select name="sector_id" >
                                        @foreach($sectors as $record)
                                            <option  {{$tender->sector_id == $record->id ? 'selected':''}} value="{{ $record->id }}">{{ $record->title }}</option>
                                        @endforeach
                                    </x-backend.input.select>
                                </x-backend.input.group>

                            </div>
                        </div>
                        <x-backend.input.group label="آپلود سند">
                            <x-backend.input.file :editing="$tender"  name="document" id="document"></x-backend.input.file>
                        </x-backend.input.group>

                        <div class="mb-5">
                            <label class="form-label">تگ‌ها</label>
                            <input class="form-control" value="{{old('tags')?old('tags'):$tender->tags}}" id="kt_tagify_1" name="tags"/>
                            @error('tags')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                            @enderror
                        </div>
                        <input type="hidden" name="file" id="file" value="{{ $tender->getFirstMediaUrl() }}">
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
    <script src="{{asset('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>

    <script>
        @foreach($languages as $lang)
        ClassicEditor
            .create(document.querySelector('#tender_brief_{{ getLocale($lang) }}'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.log(error);
            })
        ClassicEditor
            .create(document.querySelector('#tender_roles_{{ getLocale($lang) }}'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.log(error);
            })
        @endforeach
        var input1 = document.querySelector("#kt_tagify_1");
        new Tagify(input1);
        $(document).ready(function () {
            $("#tender_deadline").flatpickr();
        })
        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
            url: "{{route('admin.uploadingFile')}}", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 1,
            maxFilesize: 4,
            acceptedFiles: 'image/*',
            addRemoveLinks: true,
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
