<div class="d-flex justify-content-between h-50 bg-secondary m-2 rounded">
    <div>
        <button type="button" class="btn btn-sm btn-active-light-danger btn-icon"
                wire:click="deleteElement({{ $element->id }})"><i class="las la-times"></i></button>
        <span>تاریخچه</span>
    </div>

</div>
