<div>
    @section('title', __('press'))
    <x-frontend.header-component :title="__('press')" :small="true"
                        :image="asset('images/headers/press-header.png')"
    ></x-frontend.header-component>
    <div class="container py-10" x-data="{grid:true,listView:false}">
        <div class="w-full h-max xl:h-10 flex flex-col justify-start mb-10
                    lg:h-fit lg:flex-row lg:items-center lg:justify-between">
            <div class="flex flex-col items-start md:items-center md:flex-row w-full md:w-max">
                <p class="w-max shrink-0 text-primary-500 text-sm ltr:mr-5 rtl:ml-5">{{ __('filter-by') }}:</p>
                <div class="w-full h-10 divide-x rtl:divide-x-reverse flex items-center justify-start w-full">
                    <div class="w-40 flex items-center relative " x-data="{datePicker : false}">
                        <button type="button" class="text-primary-500 text-sm h-10 md:ltr:pl-5 rtl:pr-5" @click="datePicker = true">{{ __('date') }}: <span class="font-bold"></span></button>
                        <div x-show="datePicker" @click.away="datePicker = false" class="absolute w-auto top-full ltr:left-0 rtl:right-0 bg-white border border-primary-500 shadow rounded-lg overflow-hidden z-30">
                            <input id="inlineExampleAlt" type="hidden" wire:model="dte" value="">
                            <div wire:ignore class="inline-date"></div>
                        </div>
                    </div>
                    <div class="flex items-center relative px-4" x-data="{subject : false}">
                        <button type="button" class="text-primary-500 text-sm h-10" @click="subject = true">{{ __('subject') }}: <span class="font-bold"></span></button>
                        <div x-show="subject" @click.away="subject = false" class="absolute w-48 top-full ltr:left-0 rtl:right-0 bg-white border border-primary-500 shadow rounded-lg overflow-hidden">
                            <a wire:click.prevent="setFilter('all')" class="flex items-center hover:bg-gray-100 h-10 w-full px-5 text-primary-500 border-secondary-500 ltr:hover:border-r-4 rtl:hover:border-l-4" href=""> {{ __('all') }} </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-row items-center justify-start h-10" x-data>
                <p class="text-primary-500 text-sm ">{{ __('view') }}:</p>
                <button type="button" class=" text-sm h-10 ltr:pl-5 rtl:pr-5 hover:text-secondary-500 flex items-center " :class="grid ? 'text-secondary-500': 'text-primary-500'" @click="grid = true; listView = false; timeline = false"><span class="icon icon-grid text-lg rtl:ml-2 ltr:mr-2"></span>{{ __('grid') }}</button>
                <button type="button" class=" text-sm h-10 ltr:pl-5 rtl:pr-5 hover:text-secondary-500 flex items-center " :class="listView ? 'text-secondary-500': 'text-primary-500'" @click="grid = false; listView = true; timeline = false"><span class="icon icon-list text-lg rtl:ml-2 ltr:mr-2"></span> {{ __('list') }}</button>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-20" x-show="grid">
            @forelse($presses as $press)
                <div class="flex flex-col justify-between  bg-primary-500 rounded-lg border-b-8 border-secondary-500 hover:bg-primary-700 transition-all">
                    <div class="rounded-lg overflow-hidden shrink-0 grow-0 ">
                        <img class="object-cover h-full w-full" src="{{asset($press->getFirstMediaUrl())}}" alt="">
                    </div>
                    <div class="flex flex-row flex-1 items-center justify-between py-3 px-5">
                        <p class="text-secondary-500 font-bold ">{{Str::limit($press->title, 40)}}</p>
                        <p class="w-20 ltr:text-right rtl:text-left text-white text-sm shrink-0 grow-0 ss02">{{app()->getLocale() == 'fa'? verta($press->created_at)->format('%B، %Y'): $press->created_at->format('d M')}}</p>
                    </div>
                    <div class="p-5">
                        <p class="text-white text-sm text-justify">{{ Str::limit(strip_tags($press->content),250) }}</p>
                    </div>
                    <div class="flex items-center py-3"><a class="text-sm px-5 transition-all flex items-center gap-2 text-secondary-500 hover:text-secondary-600" href="{{route('press-page', $press->id)}}">{{__('read_more')}} {!! app()->getLocale() == 'fa'? '<i class="ri-arrow-left-s-line"></i>' :'<i class="ri-arrow-right-s-line"></i>' !!}</a></div>
                </div>
            @empty
                <div class="col-span-3">
                    <x-frontend.empty-container></x-frontend.empty-container>
                </div>
            @endforelse
        </div>


        <div x-show="listView" class="flex flex-col gap-5">

            @forelse($presses as $press)
                <div class="flex flex-row justify-between items-center bg-primary-500 divide-x rtl:divide-x-reverse divide-primary-300 rounded-lg ltr:border-r-8 rtl:border-l-8 border-secondary-500 hover:bg-primary-700 transition-all">
                    <div class="flex w-full">
                        <div class="w-32 rounded-lg overflow-hidden shrink-0 grow-0 ">
                            <img class="object-cover h-full w-full" src="{{asset('images/photo-1504307651254-35680f356dfd.png')}}" alt="">
                        </div>
                        <div class="flex flex-row flex-1 items-center justify-between py-3">
                            <p class="text-secondary-500 px-5 font-bold ">{{Str::limit($press->title, 40)}}</p>
                            <p class="w-20 text-white text-sm px-3 shrink-0 grow-0 ss-02">{{app()->isLocale('fa') ? verta($press->created_at)->format('%B، %Y'): $press->created_at->format('d M')}}</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-center py-3 shrink-0 grow-0"><a class="text-sm w-fit px-5 transition-all flex items-center gap-2 text-secondary-500 hover:text-secondary-600" href="{{route('press-page', $press->id)}}">{{__('read_more')}} {!! app()->getLocale() == 'fa'? '<i class="ri-arrow-left-s-line"></i>' :'<i class="ri-arrow-right-s-line"></i>' !!}</a></div>
                </div>
            @empty
                <div class="col-span-3">
                    <x-frontend.empty-container></x-frontend.empty-container>
                </div>
            @endforelse
        </div>

        <div class="flex flex-row items-center justify-between mt-5">
            <div class="text-sm text-primary-500 ss02">{{__('page').': '.$presses->currentPage().' '.__('of').' '.$presses->lastPage()}}</div>
            <div>{{$presses->onEachSide(0)->links('vendor.pagination.tailwind')}}</div>
        </div>
    </div>
</div>
