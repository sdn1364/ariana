<div class="d-flex justify-content-between h-50 bg-secondary m-2 rounded">
    <div>
        <button type="button" class="btn btn-sm btn-active-light-danger btn-icon"
                wire:click="deleteElement({{ $element->id }})"><i class="las la-times"></i></button>
        <span>عنوان</span>
    </div>
    <button type="button" class="btn btn-sm btn-active-light-primary btn-icon"
            data-bs-toggle="modal" data-bs-target="#modules_text_{{$element->id}}"
    ><i class="las la-ellipsis-h"></i></button>


    <div class="modal" tabindex="-1" id="modules_text_{{$element->id}}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">متن</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="store(Object.fromEntries(new FormData($event.target)))">

                        <div>
                            <ul class="nav nab-tabs nav-line-tabs mb-5 fs-6 ">
                                @foreach($languages as $lang)
                                    <li class="nav-item">
                                        <a href="#element_tab_pane_{{$element->id}}_{{$element->part}}_{{$element->pm_row_id}}_{{ getLocale($lang) }}" class="nav-link position-relative {{$loop->first? 'active' : ''}}" data-bs-toggle="tab">
                                            {{ getLanguageName($lang) }}
                                            @if($errors->has(getLocale($lang).'_title') || $errors->has(getLocale($lang).'_content'))
                                                <i class="ri-error-warning-fill text-danger mr-2 position-absolute top-0 -left-4 "></i>
                                            @endif
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content bg-gray-100 p-5 rounded-4">
                                @foreach( $languages as $lang )
                                    <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="element_tab_pane_{{$element->id}}_{{$element->part}}_{{$element->pm_row_id}}_{{ getLocale($lang) }}">
                                        <label for="" class="form-label">عنوان <small>({{ getLanguageName($lang) }})</small></label>

                                        <input class=" form-control text-black @error( getLocale($lang).'_content') is-invalid @enderror"
                                                  name="{{getLocale($lang).'_content'}}"/>

                                        @error(getLocale($lang).'_content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="my-5">
                            <button type="submit" class="btn btn-sm btn-success" data-bs-dismiss="modal">ذخیره</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
