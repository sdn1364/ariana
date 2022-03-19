@props(['editing'=>null, 'type', 'lang'=> null, 'label'=>null, 'textType'=>null, 'name'=>null, 'id'=>null])
@if($type == 'text' && $lang)
    <div class="mb-5 fv-row">
        <label for="" class="form-label">{{ $label }} <small>({{ getLanguageName($lang) }})</small></label>

        @if($editing)
            @if($editing->hasTranslation(getLocale($lang)))
                <input type="{{$textType}}"
                       class="form-control @error( getLocale($lang).'_'.$name) is-invalid @enderror"
                       name="{{ getLocale($lang).'_'.$name }}"
                       value="{{ old(getLocale($lang).'_'.$name) ?  old(getLocale($lang).'_'.$name) : $editing->translate(getLocale($lang))->$name}}">
            @else
                <input type="{{$textType}}"
                       class="form-control @error( getLocale($lang).'_'.$name) is-invalid @enderror"
                       name="{{ getLocale($lang).'_'.$name }}"
                       value="{{ old(getLocale($lang).'_'.$name) }}">
            @endif
        @else
            <input type="{{$textType}}"
                   class="form-control @error( getLocale($lang).'_'.$name) is-invalid @enderror"
                   name="{{ getLocale($lang).'_'.$name }}"
                   value="{{ old(getLocale($lang).'_'.$name) }}">
        @endif

        @error(getLocale($lang).'_'.$name )
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
@elseif($type == 'text')
    <div class="mb-5 fv-row">
        <label for="" class="form-label">{{ $label }}</label>

        @if($editing)
            <input type="{{$textType}}" id="{{$id}}"
                   class="form-control @error($name) is-invalid @enderror"
                   name="{{ $name }}"
                   value="{{ old($name) ?  old($name) : $editing->$name}}">
        @else
            <input type="{{$textType}}" id="{{$id}}"
                   class="form-control @error( $name) is-invalid @enderror"
                   name="{{ $name }}"
                   value="{{ old($name) }}">
        @endif

        @error($name )
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
@endif

@if($type == 'editor')
    <div class="mb-5 fv-row">
        <label for="" class="form-label">{{$label}} <small>({{ getLanguageName($lang) }})</small></label>
        @if($editing)
            @if($editing->hasTranslation(getLocale($lang)))

                <textarea id="{{ $id.'_'.getLocale($lang) }}"
                          class="form-control text-black @error( getLocale($lang).'_'.$name) is-invalid @enderror"
                          rows="5"
                          name="{{getLocale($lang).'_'.$name}}">{{ old(getLocale($lang).'_'.$name) ?  old(getLocale($lang).'_'.$name) : $editing->translate(getLocale($lang))->$name }}</textarea>
            @else
                <textarea id="{{ $id.'_'.getLocale($lang) }}"
                          class="form-control text-black @error( getLocale($lang).'_'.$name) is-invalid @enderror"
                          rows="5"
                          name="{{getLocale($lang).'_'.$name}}">{{ old(getLocale($lang).'_'.$name)}}</textarea>
            @endif
        @else
            <textarea id="{{ $id.'_'.getLocale($lang) }}"
                      class="form-control text-black @error( getLocale($lang).'_'.$name) is-invalid @enderror"
                      rows="5"
                      name="{{getLocale($lang).'_'.$name}}">{{ old(getLocale($lang).'_'.$name)}}</textarea>
        @endif

        @error(getLocale($lang).'_'.$name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
@endif

@if($type == 'textarea')
    <div class="mb-5 fv-row">
        <label for="" class="form-label">{{$label}} <small>({{ getLanguageName($lang) }})</small></label>
        @if($editing)
            @if($editing->hasTranslation(getLocale($lang)))

                <textarea class="form-control text-black @error( getLocale($lang).'_'.$name) is-invalid @enderror"
                          rows="5"
                          name="{{getLocale($lang).'_'.$name}}">{{ old(getLocale($lang).'_'.$name) ?  old(getLocale($lang).'_'.$name) : $editing->translate(getLocale($lang))->$name}}</textarea>
            @else
                <textarea class="form-control text-black @error( getLocale($lang).'_'.$name) is-invalid @enderror"
                          rows="5"
                          name="{{getLocale($lang).'_'.$name}}">{{ old(getLocale($lang).'_'.$name)}}</textarea>
            @endif
        @else
            <textarea class="form-control text-black @error( getLocale($lang).'_'.$name) is-invalid @enderror"
                      rows="5"
                      name="{{getLocale($lang).'_'.$name}}">{{ old(getLocale($lang).'_'.$name)}}</textarea>
        @endif
        @error(getLocale($lang).'_'.$name)
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
@endif

@if($type == 'select')
    <div class="mb-5 fv-row">
        <label for="" class="form-label">{{$label}}</label>
        <select name="{{$name}}" id=""
                class="form-select @error($name) is-invalid @enderror">
            {{ $slot }}
        </select>
        @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
@endif

@if($type == 'date')
    <div class="mb-5 fv-row">
        <label for="" class="form-label">{{ $label }}</label>

        @if($editing)
            <input type="{{$textType}}" id="{{$id}}"
                   class="form-control @error($name) is-invalid @enderror"
                   name="{{ $name }}"
                   value="{{ old($name) ?  old($name) : $editing->$name}}"/>
        @else
            <input type="{{$textType}}" id="{{$id}}"
                   class="form-control @error($name) is-invalid @enderror"
                   name="{{ $name }}"
                   value="{{ old($name) }}"/>
        @endif

        @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
@endif
@if( $type == 'file')
    <div class="mb-5 fv-row">
        <label for="" class="form-label">{{ $label }}</label>

        @if($editing)
            <input type="file" id="{{$id}}"
                   class="form-control-file form-control @error($name) is-invalid @enderror"
                   name="{{ $name }}"
                   value="{{ old($name) ?  old($name) : $editing->$name}}">
        @else
            <input type="file" id="{{$id}}"
                   class="form-control-file form-control @error( $name) is-invalid @enderror"
                   name="{{ $name }}"
                   value="{{ old($name) }}">
        @endif

        @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
@endif

