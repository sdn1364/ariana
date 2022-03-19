<div>
    @if( $showUpload )
        <form wire:submit.prevent="uploadTranslation"  enctype="multipart/form-data">
            <div class="gap-2 bg-red-500 d-flex align-items-center justify-content-end">

                <div>
                    <input id="file_upload" type="file" class="w-1px" style="visibility:hidden;" wire:model="file">
                    @error('file') <small class="text-danger error " dir="ltr">{{ $message }}</small> @enderror

                </div>

                <label id="fileName" for="file_upload" class="py-2 btn btn-active-light-primary btn-sm"><small>{{$buttonName}}</small></label>
                <button class="btn btn-active-light-success btn-sm btn-icon {{ $canSubmit ? '': 'disabled' }}" type="submit" ><i class="ri-upload-line"></i></button>
            </div>
        </form>
    @else
        <button class="btn btn-active-light-primary btn-sm" wire:click="currentUploadingLocale('{{explode(',',$lang->language)[0]}}')" >
            <small class="fw-light">آپلود فایل ترجمه</small>
        </button>
    @endif
</div>
