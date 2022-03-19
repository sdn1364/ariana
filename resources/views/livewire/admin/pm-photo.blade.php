<div class="d-flex justify-content-between h-50 bg-secondary m-2 rounded">
    <div>
        <button type="button" class="btn btn-sm btn-active-light-danger btn-icon"
                wire:click="deleteElement({{ $element->id }})"><i class="las la-times"></i></button>
        <span>عکس</span>
    </div>
    <button type="button" class="btn btn-sm btn-active-light-primary btn-icon"
            data-bs-toggle="modal" data-bs-target="#modules_text_{{$element->id}}"
    ><i class="las la-ellipsis-h"></i></button>

    <div wire:ignore.self class="modal" tabindex="-1" id="modules_text_{{$element->id}}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">عکس</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="store">
                        @if($file)
                        <img class="img-thumbnail img-fluid" src="{{asset($file->temporaryUrl())}}" alt="">
                        @endif
                        <input type="file" class="form-control form-control-file" name="file" id="file" wire:model="file">
                        <div class="my-5">
                            <button type="submit" class="btn btn-sm btn-success" >ذخیره</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
