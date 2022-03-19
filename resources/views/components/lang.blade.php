@props(['l'])

@if(app()->isLocale($l))
    {{$slot}}
@endif
