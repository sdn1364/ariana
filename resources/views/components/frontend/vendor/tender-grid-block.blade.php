@props(['tender'])


<div class="w-full h-auto bg-primary-500 border-b-8 border-secondary-500 rounded-lg hover:bg-primary-600 hover:border-secondary-600 flex flex-col justify-between overflow-hidden gap-5">
    @if($tender->hasMedia() && $tender->getMedia()->first()->type == 'image')
        <div class="w-full h-72 overflow-hidden rounded-lg">

            <img class="object-cover w-full h-full" src="{{asset( $tender->getFirstMediaUrl())}}" alt="">
        </div>
    @else
        <div class="w-full h-72 overflow-hidden bg-primary-400 rounded-lg">
            <img class="object-cover w-full h-full" src="{{asset('images/placeholder-image.png')}}" alt="">
        </div>
    @endif

    <div class="px-5 flex flex-col gap-5">
        <h3 class="font-bold text-secondary-500">{{$tender->title}} <span class="text-white">({{__($tender->type)}})</span></h3>
        <p class="text-white">{{__('tender_code')}}: {{$tender->code}}</p>
        <p class="text-secondary-500 ss02">{{__('tender_deadline')}}: {{ app()->isLocale('fa') ? verta($tender->deadline_fa)->format('%B %d، %Y') : $tender->deadline->format('d F Y ') }}</p>
        <p class="text-white">{{__('tender_status')}}: <span class="{{$tender->progress == 'current'? 'text-green-400':'text-red-400'}}">{{ __($tender->progress) }}</span></p>
    </div>
    <a class="w-full transition-all h-10 px-5 flex items-center gap-2 text-secondary-500 hover:text-secondary-600 mb-1" href="{{ route('tender-page', $tender->id) }}">{{__('read_more')}} {!! app()->isLocale('fa') ? '<i class="ri-arrow-left-s-line"></i>' :'<i class="ri-arrow-right-s-line"></i>' !!}</a>
</div>
