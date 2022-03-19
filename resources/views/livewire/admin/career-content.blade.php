<div>
    <form action="" wire:submit.prevent="save(Object.fromEntries(new FormData($event.target)))">
        <div class="card card-flush">
            <div class="card-header">
                <h3 class="card-title">محتوای صفحه فرصت‌های شغلی</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        @if($content->hasMedia())
                            <div class="mb-5">
                                <img class="img-fluid rounded" src="{{asset($content->getFirstMediaUrl())}}" alt="">
                            </div>
                        @endif
                        <input type="hidden" name="file" id="file" wire:model="file">
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
                    <div class="col-8" wire:ignore>
                        <x-backend.tabs :languages="$languages">
                            @foreach( $languages as $lang)
                                <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                                <textarea id="{{'history_content_'.getLocale($lang) }}"
                                          class="form-control text-black @error( getLocale($lang).'_text') is-invalid @enderror"
                                          rows="5"
                                          wire:model="inputs.{{ getLocale($lang) }}_text"
                                          name="{{getLocale($lang).'_text'}}">{{ old(getLocale($lang).'_text') ?  old(getLocale($lang).'_text') : $content->translate(getLocale($lang))->text}}</textarea>
                                </div>
                            @endforeach
                        </x-backend.tabs>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-success">ذخیره</button>
            </div>
            @push('scripts')
                <script>
                    @foreach( $languages as $lang)
                    ClassicEditor
                        .create(document.querySelector('#history_content_{{ getLocale($lang) }}'))
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
        </div>
    </form>
</div>
