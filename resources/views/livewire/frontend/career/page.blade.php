<div>
    @section('title', __('career'))

    <x-frontend.header-component :title="__('career')" :small="false"
                        :image="asset('images/headers/career-header.png')"
                        :breadcrumb="[
                            __('career'), $career->title
                        ]"
    ></x-frontend.header-component>
    <div class="container">
        <x-frontend.page-description>
            <x-slot name="photo">
                <img class="object-cover w-full h-full" src="{{ asset($career->getFirstMediaUrl()) }}" alt="">
            </x-slot>
            <x-slot name="text">
                <div class="grid grid-cols-6 mb-10">
                    <h2 class="col-span-5 text-xl font-bold text-primary-500">{{$career->title}}</h2>
                    <p class="text-primary-500 text-sm w-fit shrink-0 grow-0">{{app()->isLocale('fa') ? verta($career->created_at)->format('%B، %Y'): $career->created_at->format('d M')}}</p>
                </div>
                <div class="text-primary-500 sector-content">
                    {!! $career->summary !!}
                </div>
            </x-slot>
        </x-frontend.page-description>
        <h2 class="col-span-5 text-xl font-bold text-primary-500 my-5">{{__('responsibilities')}}</h2>
        <div class="text-primary-500 sector-content break-words">
            {!! $career->responsibilities !!}
        </div>
        <h2 class="col-span-5 text-xl font-bold text-primary-500 mt-10 mb-5">{{__('requirements')}}</h2>
        <div class="text-primary-500 sector-content break-words">
            {!! $career->requirements !!}
        </div>
        <div class="flex flex-row items-center justify-center my-10">
            <a href="{{route('career-apply', $career->id)}}" class="py-3 px-12 bg-secondary-500 text-xl text-white font-bold rounded-lg">{{ __('apply') }}</a>
        </div>
    </div>
</div>
