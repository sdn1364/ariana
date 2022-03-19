@aware(['error'])
@props(['error'=>null, 'fileName'=>null, 'name', 'model'])


<div class="flex flex-col md:flex-row items-center space-y-3 md:space-y-0 md:space-x-10 rtl:space-x-reverse ">
    <label {{$attributes->class([
    'flex items-center justify-center w-full md:w-fit px-7 py-5 bg-gradient-to-t  rounded-lg border  cursor-pointer',
    'text-primary-500 border-primary-500 from-primary-200  hover:from-primary-300'=>!$error,
    'text-red-500 border-red-500 from-red-200  hover:from-red-300'=> $error,
    'text-green-500 border-green-500 from-green-200  hover:from-green-300'=> $fileName && !$error

])}}>
        <span class="text-sm">{{__('file_select')}}</span>
        <input wire:model="{{$model}}" type='file' name="{{$name}}" class="hidden"/>
    </label>
    <p class="text-sm text-primary-500">{{ $fileName ? $fileName :__('resume_accept')}}</p>
    <div wire:loading wire:target="{{$model}}" class="animate-bounce text-primary-500"><i class="ri-upload-line ri-lg "></i></div>
</div>
