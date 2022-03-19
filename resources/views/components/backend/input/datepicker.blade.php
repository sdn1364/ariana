@aware(['error'])
@props(['id','name', 'error'=>null, 'editing'=> null])

@if($editing)
    <input type="text" id="{{$id}}"
           {{$attributes->class([
            'form-control',
            'is-invalid'=> $error
            ])}}
           name="{{ $name }}"
           value="{{ old($name) ?  old($name) : $editing->$name}}"/>
@else
    <input type="text" id="{{$id}}"
           {{$attributes->class([
            'form-control',
            'is-invalid'=> $error
            ])}}
           name="{{ $name }}"
           value="{{ old($name) }}"/>
@endif
