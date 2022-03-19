@aware(['error', 'lang'])

@props(['name', 'lang'=>null, 'editing'=>null, 'error'=> null, 'id'])

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
