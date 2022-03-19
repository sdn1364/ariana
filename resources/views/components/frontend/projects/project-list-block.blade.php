<div class="grid-cols-3 hidden lg:grid bg-gray-100 items-center h-fit py-3 divide-x rtl:divide-x-reverse divide-primary-300 rounded-lg ltr:border-r-8 rtl:border-l-8 border-secondary-500">
    <div class="h-fit flex items-center"><p class="text-primary-500 px-5 font-bold ">{{ $project->title }}</p></div>
    <div class="col-span-2 grid grid-cols-5 divide-x rtl:divide-x-reverse divide-primary-300">
        <div class=" flex items-center justify-center"><p class="text-primary-500 text-sm px-2">{{$project->location}}</p></div>
        <div class=" flex flex-col items-center justify-center">{{--<p class="text-primary-500 text-sm">{{$project->sector->getParentSectors->title}}</p>--}}<p class="text-primary-500 text-sm">{{$project->sector->title}}</p></div>
        <div class=" flex items-center justify-center"><p class="text-primary-500 text-sm px-2">{{$project->client}}</p></div>
        <div class=" flex items-center justify-center"><p class="px-2 text-sm py-1 rounded-lg text-gray-50 {{$project->progress == 'in_progress'?'bg-green-300':'bg-sky-300'}}">{{__($project->progress)}}</p></div>
        <div class=" flex items-center justify-center"><a class="text-sm w-fit transition-all px-5 flex items-center gap-2 text-secondary-500 hover:text-secondary-600" href="{{route('project-page', $project->id)}}">{{__('read_more')}} {!! app()->isLocale('fa') ? '<i class="ri-arrow-left-s-line"></i>' :'<i class="ri-arrow-right-s-line"></i>' !!}</a></div>
    </div>
</div>

<div class="lg:hidden border-primary-500 rounded-lg overflow-hidden" :class=" listExpand ? 'border':'' " x-data="{listExpand: false}">
    <div class="bg-gray-100 h-fit py-3 divide-x rtl:divide-x-reverse divide-primary-300
                rounded-lg ltr:border-r-8 rtl:border-l-8 border-secondary-500 flex justify-between
                 divide-x rtl:divide-x-reverse divide-primary-300
                 space-x-2 rtl:space-x-reverse"
         @click="listExpand = true" @click.away="listExpand = false"
    >
        <div class="h-fit flex items-center"><p class="text-primary-500 ltr:pl-5 rtl:pr-5 font-bold">{{ $project->title }}</p></div>
        <div class=" flex items-center justify-center shrink-0"><a class="text-sm w-fit transition-all px-5 flex items-center space-x-2 rtl:space-x-reverse text-secondary-500 hover:text-secondary-600 font-bold" href="{{route('project-page', $project->id)}}">{{__('read_more')}} {!! app()->isLocale('fa') ? '<i class="ri-arrow-left-s-line"></i>' :'<i class="ri-arrow-right-s-line"></i>' !!}</a></div>

    </div>
    <div class="p-3 divide-y divide-primary-500 space-y-3 flex-col" :class=" listExpand ? 'flex':'hidden' " x-transition>
        <div class=" py-2 flex items-center justify-start h-10"><p class="text-primary-500 text-sm">{{__('location')}}: {{$project->location}}</p></div>
        <div class=" py-2 flex flex-row items-center h-10"><p class="text-primary-500 text-sm">{{__('sector')}}: {{$project->sector->getParentSectors->title}} - {{$project->sector->title}}</p></div>
        <div class=" py-2 flex items-center justify-start h-10"><p class="text-sm text-primary-500">{{__('status')}}: {{__($project->progress)}}</p></div>
    </div>

</div>
