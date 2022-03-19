@aware(['error', 'lang'])

@props(['name', 'lang'=>null, 'editing'=>null, 'error'=> null])

@if($lang)
    @if($editing)
        <input type="text" x-bind:id="$id('input')"
               {{$attributes->class([
                'form-control',
                'is-invalid'=> $error
                ])}}
               name="{{ getLocale($lang).'_'.$name }}"
               value="{{ old($lang ? getLocale($lang).'_'.$name : $name) ?  old($lang ? getLocale($lang).'_'.$name : $name) : $editing->translate(getLocale($lang))->$name}}">
    @else
        <input type="text" x-bind:id="$id('input')"
               {{$attributes->class([
                'form-control',
                'is-invalid'=> $error
                ])}}
               name="{{ $lang ? getLocale($lang).'_'.$name : $name }}"
               value="{{ old($lang ? getLocale($lang).'_'.$name : $name)}}">
    @endif
@else
    @if($editing)
        <input type="text" x-bind:id="$id('input')"
               {{$attributes->class([
                'form-control',
                'is-invalid'=> $error
                ])}}
               name="{{ $name }}"
               value="{{ old($name) ?  old($name) : $editing->$name}}">
    @else
        <input type="text" x-bind:id="$id('input')"
               {{$attributes->class([
                'form-control',
                'is-invalid'=> $error
                ])}}
               name="{{ $name }}"
               value="{{ old($name)}}">
    @endif
@endif
