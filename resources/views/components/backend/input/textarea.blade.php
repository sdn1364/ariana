@aware(['error', 'lang'])
@props(['error', 'name', 'lang'=>null, 'id'=> null, 'editing'=> null])


@if($editing)
    <textarea id="{{ $id.'_'.getLocale($lang) }}"
              {{$attributes->class([
                 'form-control text-black',
                 'is-invalid'=> $error
                 ])}}
              name="{{$lang ? getLocale($lang).'_'.$name : $name}}">{{ old($lang ? getLocale($lang).'_'.$name : $name) ?  old($lang ? getLocale($lang).'_'.$name : $name) : $editing->translate(getLocale($lang))->$name }}</textarea>
@else
    <textarea id="{{ $id.'_'.getLocale($lang) }}"
              {{$attributes->class([
                 'form-control text-black',
                 'is-invalid'=> $error
                 ])}}              rows="5"
              name="{{$lang ? getLocale($lang).'_'.$name : $name}}">{{ old($lang ? getLocale($lang).'_'.$name : $name) }}</textarea>
@endif

