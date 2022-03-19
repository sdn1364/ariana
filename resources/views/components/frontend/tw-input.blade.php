
@props(['type', 'required'=>false,'model', 'name', 'label'])
@if($type == 'text')
    <div class="flex flex-col gap-2">
        <label for="" class="w-fit text-primary-500 font-medium text-lg relative ltr:pr-1 rtl:pl-1
                            before:absolute before:w-1.5 before:h-1.5 before:rounded-full before:top-0 ltr:before:left-full rtl:before:right-full
                            {{$required ? 'before:bg-red-500': ''}}">{{ $label ?? '' }}</label>

        <input wire:model="{{$model}}" type="{{$textType ?? 'text'}}" id="{{$id ?? ''}}"
               class="h-12 w-full border border-primary-500 px-5 rounded-lg @error( $name) border-red-500 @enderror"
               name="{{ $name }}"
               value="{{ old($name) ?? $slot }}" placeholder="{{$placeholder}}">
        @error($name)
        <span class="text-sm text-red-500 font-light" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
@endif

@if($type == 'textarea')
    <div class="flex flex-col gap-2 grow-0 shrink-0">
        <label for="" class="w-fit text-primary-500 font-medium text-lg relative ltr:pr-1 rtl:pl-1
                            before:absolute before:w-1.5 before:h-1.5 before:rounded-full before:top-0 ltr:before:left-full rtl:before:right-full
                            {{$required? 'before:bg-red-500': ''}}">{{ $label }}</label>

        <textarea wire:model="{{$model}}" placeholder="{{$placeholder ?? ''}}" class="h-auto w-full border border-primary-500 p-5 rounded-lg @error($name) border-red-500 @enderror"
                  rows="{{$row ?? '5'}}"
                  name="{{$name}}">{{ old($name)}}</textarea>

        @error($name)
        <span class="text-sm text-red-500 font-light" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
@endif

@if($type == 'select')
    <div class="mb-5 fv-row">
        <label for="" class="form-label">{{$label}}</label>
        <select wire:model="{{$model}}" name="{{$name}}" id=""
                class="form-select @error($name) border-red-500 @enderror">
            {{ $slot }}
        </select>
        @error($name)
        <span class="text-sm text-red-500 font-light" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
@endif

@if($type == 'date')
    <div class="mb-5 fv-row">
        <label for="" class="form-label">{{ $label }}</label>

        @if($editing)
            <input wire:model="{{$model}}" type="{{$textType}}" id="{{$id}}"
                   class="form-control @error($name) border-red-500 @enderror"
                   name="{{ $name }}"
                   value="{{ old($name) ?  old($name) : $editing->$name}}"/>
        @else
            <input wire:model="{{$model}}" type="{{$textType}}" id="{{$id}}"
                   class="form-control @error($name) border-red-500 @enderror"
                   name="{{ $name }}"
                   value="{{ old($name) }}"/>
        @endif

        @error($name)
        <span class="text-sm text-red-500 font-light" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
@endif
@if( $type == 'file')
    <div class="flex flex-col">
        <x-frontend.page-title class=" w-fit relative {{$required? 'before:bg-red-500': ''}} before:absolute before:w-1.5 before:h-1.5 before:rounded-full before:top-0 ltr:before:left-full rtl:before:right-full">{{$label}}</x-frontend.page-title>
        <div class="flex flex-col md:flex-row items-center space-y-3 md:space-y-0 md:space-x-10 rtl:space-x-reverse ">
            <label class="bank flex items-center justify-center w-full md:w-fit px-7 py-5 text-primary-500 bg-gradient-to-t from-primary-200 rounded-lg border border-primary-500 cursor-pointer hover:from-primary-300">
                <span class="text-sm">{{__('file_select')}}</span>
                <input wire:model="{{$model}}" type='file' name="{{$name}}" class="hidden"/>
            </label>
            <p class="text-sm text-primary-500">{{__('resume_accept')}}</p>
            <div wire:loading wire:target="{{$model}}" class="animate-bounce text-primary-500"><i class="ri-upload-line ri-lg "></i></div>
        </div>
        <div>
            @error($name)
                <span class="text-light text-sm text-red-500" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
@endif

@if($type == 'radio')
    <div class="flex flex-col gap-2">
        <label for="" class="w-fit text-primary-500 font-medium text-lg relative ltr:pr-1 rtl:pl-1
                            before:absolute before:w-1.5 before:h-1.5 before:rounded-full before:top-0 ltr:before:left-full rtl:before:right-full
                            {{$required? 'before:bg-red-500': ''}}">{{ $label }}</label>

        @if($inline)
            <div class="flex items-center gap-10 h-12">
                @foreach($options as $option)
                    <div class="flex items-center gap-1">
                        <input class="appearance-none rounded-full h-5 w-5 border border-primary-500 bg-white focus:outline-none cursor-pointer flex items-center justify-center
                                        checked:relative checked:before:absolute checked:before:w-3 checked:before:h-3 checked:before:bg-green-500 checked:before:rounded-full
                                        " type="radio" name="{{ $name }}" id="radio-{{$loop->index}}" value="{{$option['value']}}">
                        <label class="inline-block text-primary-500" for="radio-{{$loop->index}}">{{$option['label']}}</label>
                    </div>
                @endforeach
            </div>

        @else
            @foreach($options as $option)
                <div class="flex items-center">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label for="inlineRadio20">2</label>
                </div>
            @endforeach
        @endif
        @error($name )
        <span class="text-sm text-red-500 font-light" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
@endif
