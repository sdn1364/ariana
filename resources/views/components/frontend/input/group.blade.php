@props(['label'=> null, 'required'=>false, 'error'])

<div class="flex flex-col space-y-2"
     {{$attributes}}
     x-data
     x-id="['input']"
>
    <label x-bind:for="$id('input')"
           class="w-fit text-primary-500 font-medium text-lg relative ltr:pr-1 rtl:pl-1
                  before:absolute before:w-1.5 before:h-1.5 before:rounded-full before:top-0 ltr:before:left-full rtl:before:right-full
                  {{$required ? 'before:bg-red-500': ''}}">{{ $label }}</label>
    {{$slot}}
    @if($error)
        <span class="text-sm text-red-500 font-light">
                <strong>{{ $error }}</strong>
        </span>
    @endif
</div>
