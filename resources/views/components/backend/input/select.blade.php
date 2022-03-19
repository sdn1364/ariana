@aware(['error'])
@props(['error', 'name'=>null, 'lang'])


<select name="{{$name}}"
        {{$attributes}}
        class="form-select @error($name) is-invalid @enderror">
    {{ $slot }}
</select>
