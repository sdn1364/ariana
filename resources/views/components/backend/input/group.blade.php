@props(['label'=> null, 'required'=>false, 'error'=> null, 'lang'=>null])

<div class="mb-5 fv-row"
     {{$attributes}}
     x-data
     x-id="['input']"
>
    <label x-bind:for="$id('input')"
           class="form-label"
           >{{$label}} @if($lang)<small>({{ getLanguageName($lang) }})</small>@endif</label>
    {{$slot}}
    @if($error)
        <span class="invalid-feedback" role="alert">
                <strong>{{ $error }}</strong>
        </span>
    @endif
</div>
