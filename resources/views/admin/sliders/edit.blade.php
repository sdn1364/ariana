@extends('layouts.admin')

@section('admin-title', 'ویرایش اسلاید')

@section('admin-page-title', 'ویرایش اسلاید')

@section('content')
    <form action="{{route('admin.slides.update',$slide->id)}}" method="post">
        @csrf
        @method('put')
        <div class="card card-flush">
            <div class="card-header">
                <h3 class="card-title">ویرایش اسلاید</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <x-backend.tabs :languages="$languages">
                            @foreach(getAllLanguages() as $lang)
                                <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">

                                    <x-backend.input.text :editing="$slide" :lang="$lang" type="text" name="title" label="عنوان اسلاید"></x-backend.input.text>
                                </div>
                            @endforeach
                        </x-backend.tabs>


                        <x-backend.input.group label="لینک به" :error="$errors->first('link')">
                            <x-backend.input.select name="link" >
                                <option value="projects" {{ $slide->link == 'projects' ? 'selected':'' }}>پروژه‌ها</option>
                                <option value="innovation" {{ $slide->link == 'innovation' ? 'selected':'' }}>نوآوری</option>
                                <option value="services" {{ $slide->link == 'services' ? 'selected':'' }}>خدمات</option>
                                <option value="tenders" {{ $slide->link == 'tenders' ? 'selected':'' }}>مناقصه‌ها</option>
                                <optgroup label="بخش‌ها">
                                    <option value="sectors" {{ $slide->link == 'sectors' ? 'selected':'' }}>صفحه اصلی بخش‌ها</option>

                                    @foreach($sectors as $sector)
                                        <option value="{{ $sector->id}}" {{ $slide->link == $sector->id ? 'selected':'' }}>{{ $sector->translate('fa')->title }}</option>
                                    @endforeach
                                </optgroup>

                            </x-backend.input.select>
                        </x-backend.input.group>

                        <input type="hidden" name="file" id="file" value="{{$slide->getFirstMediaUrl()}}">
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
                    <div class="col-3">
                        <div class="border-2 border-gray-200">
                            <img class="w-100 h-auto" src="{{ asset($slide->getFirstMediaUrl()) }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button class="btn btn-success btn-sm" type="submit">ذخیره</button>
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
            success: function(file, response) {
                $('#file').val(response);
                console.log(response);
            }
        });
    </script>
@endpush
