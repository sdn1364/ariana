@props(['project'])

<div class="w-full h-auto bg-primary-500 border-b-8 border-secondary-500 rounded-lg hover:bg-primary-600 hover:border-secondary-600 flex flex-col justify-between overflow-hidden gap-5">
    @if($project->hasMedia() && $project->getMedia()->first()->type == 'image')
        <div class="w-full h-72 overflow-hidden">

            <img class="object-cover w-full h-full" src="{{asset( $project->getFirstMediaUrl())}}" alt="">
        </div>
    @else
        <div class="w-full h-72 overflow-hidden bg-primary-400">
            <img class="object-cover w-full h-full" src="{{asset('images/placeholder-image.png')}}" alt="">
        </div>
    @endif
    <div class="px-5 flex flex-col gap-5">
        <h3 class="font-bold text-secondary-500 text-center">{{$project->title}}</h3>
    </div>
    <a class="w-full transition-all h-10 px-5 flex items-center gap-2 text-secondary-500 hover:text-secondary-600 mb-1" href="{{route('project-page', $project->id)}}">{{__('read_more')}} {!! app()->isLocale('fa') ? '<i class="ri-arrow-left-s-line"></i>' :'<i class="ri-arrow-right-s-line"></i>' !!}</a>
</div>
