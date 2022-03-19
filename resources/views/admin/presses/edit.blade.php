@extends('layouts.admin')

@section('admin-title', 'خبر جدید')
@section('admin-page-title', 'خبر جدید')
@section('admin-page-description', 'در این بخش می‌توانید خبر مورد نظر را ویرایش درست کنید.')

@section('content')

    <form action="{{ route('admin.presses.update', $press->id) }}" method="post">
        @csrf
        @method('put')
        <div class="card card-flush card-shadow">
            <div class="card-header">
                <h3 class="card-title">ویرایش خبر {{$press->title}}</h3>

            </div>
            <div class="card-body">
                <x-backend.tabs :languages="$languages">
                    @foreach($languages as $lang)
                        <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                            <x-backend.input.group :lang="$lang" label="عنوان خبر" :error="$errors->first('title')">
                                <x-backend.input.text :editing="$press" name="title"></x-backend.input.text>
                            </x-backend.input.group>

                            <x-backend.input.group :lang="$lang" label="محتوای خبر" :error="$errors->first('content')">
                                <x-backend.input.textarea :editing="$press" name="content"  id="service_content" ></x-backend.input.textarea>
                            </x-backend.input.group>

                        </div>
                    @endforeach
                </x-backend.tabs>

                <x-backend.input.group label="موضوع" :error="$errors->first('subject')">
                    <x-backend.input.select name="subject" >
                        <option value="vendor" {{ $press->subject === 'vendor' ? 'selected': '' }}>تامین کنندگان</option>
                        <option value="sector" {{ $press->subject === 'sector' ? 'selected': '' }}>بخش‌های فنی</option>
                        <option value="project" {{ $press->subject === 'project' ? 'selected': '' }}>پروژه‌ها</option>
                    </x-backend.input.select>
                </x-backend.input.group>

                <div class="mb-5">
                    <label class="form-label">تگ‌ها</label>
                    <input class="form-control" value="{{old('tags') ? old('tags') :$press->tags}}" id="kt_tagify_1" name="tags"/>
                    @error('tags')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <input type="hidden" class="form-control" name="files" id="file">
                <div class="fv-row mb-5 mt-5">
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
                <div class="row g-5">
                    @foreach($press->getMedia() as $media)
                        <div class="col-lg-2" id="image_{{$media->id}}">
                            <div class="card card-flush card-stretch">
                                <div class="card-body p-0">
                                    <div class="h-150px w-auto rounded mb-5" style="overflow: hidden">
                                        <img class="img-thumbnail rounded h-100 w-auto" src="{{asset($media->getUrl())}}" alt="">
                                    </div>
                                </div>
                                <div class="card-footer p-0">
                                    <button type="button" data-kt-indicator="off" onclick="deleteImage(event,{{$media->id}})" class="btn btn-sm w-100 btn-danger">
                                    <span class="indicator-label fs-6 fw-light">
                                        حذف
                                    </span>
                                        <span class="indicator-progress fs-6 fw-light">
                                        کمی صبر کنید... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
        @foreach($languages as $lang)
        ClassicEditor
            .create(document.querySelector('#service_content_{{ getLocale($lang) }}'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.log(error);
            })
        @endforeach
        var input1 = document.querySelector("#kt_tagify_1");
        new Tagify(input1);
        var files = [];
        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
            url: "{{route('admin.uploadingFile')}}", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 40, // MB
            addRemoveLinks: true,
            acceptedFiles: 'image/*',

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, response) {

                files.push(response);
            },
            complete:function(){
                $('#file').val(JSON.stringify(files))
            }
        });

        function deleteImage(event,id) {
            event.preventDefault();
            var $this = event.target;
            $this.setAttribute("data-kt-indicator", 'on');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            jQuery.ajax({
                url: "{{ route('admin.delete_press_image') }}",
                method: 'post',
                data: {
                    id: id,
                    project_id: {{$press->id}}
                },
                success: function (result) {
                    $('#image_' + id).remove()
                }
            });
        }
    </script>
@endpush

@push('styles')

    <style>
        :root{
            --ck-font-face: dana!important;
        }
    </style>
@endpush
