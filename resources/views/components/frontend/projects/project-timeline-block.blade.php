<div>
    <div class="grid grid-cols-1 lg:grid-cols-3 w-full shadow h-auto
        lg:h-96 bg-primary-500 overflow-hidden rounded-lg triangle
        {{ app()->isLocale('fa') ? 'triangle-bottom-left': 'triangle-bottom-right'}}">
        <div>
            <img class="object-cover w-full h-full" src="{{asset($project->getFirstMediaUrl())}}" alt="">
        </div>
        <div class="col-span-2 flex flex-col justify-between ltr:pl-5 rtl:pr-5 ltr:pr-16 rtl:pl-16 py-5">
            <h3 class="font-bold text-secondary-500 text-lg">{{$project->title}}</h3>
            <div class="flex flex-col gap-5">
                <div class="grid grid-cols-2">
                    <p class="text-white ss02">{{ __('start_date') }}: {{app()->isLocale('fa') ? verta($project->start_date)->format('%B %d، %Y') : $project->start_date->format('d-F-Y')}}
                    </p>
                    <p class="text-white ss02">{{ __('due_date') }}: {{app()->isLocale('fa') ? verta($project->due_date)->format('%B %d، %Y') : $project->due_date->format('d-F-Y')}}
                    </p>
                </div>
                <p class="text-white">{{ __('client') }}: {{$project->client}}</p>
                <p class="text-white">{{ __('location') }}: {{$project->location}}</p>
            </div>

            <a href="{{route("project-page", $project->id)}}" class="px-10 py-2 bg-secondary-500 rounded-lg text-white font-bold text-lg grow-0 shrink-0 w-fit hover:bg-secondary-600">{{ __('read_more') }}</a>
        </div>
    </div>
</div>
