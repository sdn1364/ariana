<div class="grid grid-cols-2 content- bg-gray-200 h-fit py-3 divide-x rtl:divide-x-reverse divide-primary-300 rounded-lg ltr:border-r-8 rtl:border-l-8 border-secondary-500">
    <div class="h-fit flex items-center"><p class="text-primary-500 ltr:pl-5 rtl:pr-5 "> {{$tender->title}} <span class="text-secondary-500">({{__($tender->type)}})</span>  </p></div>
    <div class="grid grid-cols-4 divide-x rtl:divide-x-reverse divide-primary-300">
        <div class="hidden lg:flex items-center justify-center"><p class="text-primary-500">{{$tender->code}}</p></div>
        <div class="hidden lg:flex items-center justify-center"><p class="text-primary-500 ss02">{{ app()->getLocale() == 'fa' ? verta($tender->deadline_fa)->format('%B %d، %Y') : $tender->deadline->format('d F Y') }}</p></div>
        <div class="hidden lg:flex items-center justify-center"><p class="{{$tender->progress == 'current' ? 'text-green-400':'text-red-400'}}">{{__($tender->progress)}}</p></div>
        <div class="flex items-center justify-center col-span-3 lg:col-span-1"><a class="w-max shrink-0 transition-all px-5 flex items-center space-x-2 rtl:space-x-reverse text-secondary-500 hover:text-secondary-600" href="{{route('tender-page', $tender->id)}}">{{__('read_more')}} {!! app()->getLocale() == 'fa'? '<i class="ri-arrow-left-s-line"></i>' :'<i class="ri-arrow-right-s-line"></i>' !!}</a></div>
    </div>
</div>
