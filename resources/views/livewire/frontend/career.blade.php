<div>
    @section('title', __('career'))

    <x-frontend.header-component :title="__('career')" :small="false"
                        :image="asset('images/headers/career-header.png')"
    ></x-frontend.header-component>
    <div class="container">
        <x-frontend.page-description>
            <x-slot name="photo">
                <img class="object-cover w-full h-full" src="{{ asset($content->getFirstMediaUrl()) }}" alt="">
            </x-slot>
            <x-slot name="text">
                <div class="text-primary-500">
                    {!! $content->text !!}
                </div>
            </x-slot>
        </x-frontend.page-description>
        <h3 class="mt-20 mb-20 text-xl font-extrabold text-center text-primary-500">{{ __('job_vacancy')}}:</h3>
        <div class="grid grid-cols-1 gap-5 mb-10 lg:grid-cols-2 lg:gap-10">
            @foreach($careers as $career)
                <div class="flex flex-col justify-between p-5 w-full rounded-lg border border-primary-500">
                    <h3 class="font-bold text-primary-500">{{$career->title}}</h3>
                    <p class="text-primary-500 my-5">{{$career->location}}</p>
                    <div class="flex flex-row justify-between items-center w-full">
                        <p class="px-4 py-2 text-sm bg-gray-100 rounded-lg text-primary-500">{{$career->section}}</p>
                        <a href="{{route('career-page', $career->id)}}" class="flex flex-row gap-2 items-center text-secondary-500 hover:text-secondary-600">{{ __('read_more') }} {!! app()->getLocale() == 'fa'? '<i class="ri-arrow-left-s-line"></i>':'<i class="ri-arrow-right-s-line"></i>' !!}</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex flex-row justify-between items-center my-10">
            <div class="text-sm text-primary-500 ss02">{{__('page').': '.$careers->currentPage().' '.__('of').' '.$careers->lastPage()}}</div>
            <div>{{$careers->onEachSide(0)->links('vendor.pagination.tailwind')}}</div>
        </div>
    </div>
</div>
