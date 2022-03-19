<div>
    @section('title', __('vendor'))

    <x-frontend.header-component :title="__('vendor')" :small="true"
                                 :image="asset('images/headers/vendor-header.png')"
    ></x-frontend.header-component>
    <div class="container py-10" x-data="{grid:true, listView:false}">
        <p class="text-primary-500 mb-10 text-justify">{{ __('vendor_intro') }}</p>

        <div class="w-full h-max xl:h-10 flex flex-col justify-start mb-10
                    lg:h-fit lg:flex-row lg:items-center lg:justify-between">
            <div class="flex flex-col items-start md:items-center md:flex-row w-full md:w-max">
                <p class="w-max shrink-0 text-primary-500 text-sm ltr:mr-5 rtl:ml-5">{{ __('filter-by') }}:</p>
                <div class="w-full h-10 divide-x rtl:divide-x-reverse flex items-center">
                    <div class="flex items-center relative ltr:pr-4 rtl:pl-4" x-data="{type : false}">
                        <button type="button" class="text-primary-500 text-sm h-10" @click="type = true">{{ __('type') }}: <span class="font-bold">{{ __($type) }}</span></button>
                        <div x-show="type" @click.away="type = false" class="absolute w-48 top-full ltr:left-0 rtl:right-0 bg-white border border-primary-500 shadow rounded-lg overflow-hidden">
                            <a @click="type = false" wire:click.prevent="setType('all')" class="flex items-center hover:bg-gray-100 h-10 w-full px-5 text-primary-500 border-secondary-500 ltr:hover:border-r-4 rtl:hover:border-l-4" href=""> {{ __('all') }} </a>
                            <a @click="type = false" wire:click.prevent="setType('manufacturer')" class="flex items-center hover:bg-gray-100 h-10 w-full px-5 text-primary-500 border-secondary-500 ltr:hover:border-r-4 rtl:hover:border-l-4" href=""> {{ __('manufacturers') }} </a>
                            <a @click="type = false" wire:click.prevent="setType('constructor')" class="flex items-center hover:bg-gray-100 h-10 w-full px-5 text-primary-500 border-secondary-500 ltr:hover:border-r-4 rtl:hover:border-l-4" href=""> {{ __('constructors') }} </a>
                        </div>
                    </div>
                    <div class="flex items-center relative px-4" x-data="{status : false}">
                        <button type="button" class="text-primary-500 text-sm h-10" @click="status = true">{{ __('status') }}: <span class="font-bold">{{ __($status) }}</span></button>
                        <div x-show="status" @click.away="status = false" class="absolute w-48 top-full ltr:left-0 rtl:right-0 bg-white border border-primary-500 shadow rounded-lg overflow-hidden">
                            <a @click="status = false" wire:click.prevent="setStatus('all')" class="flex items-center hover:bg-gray-100 h-10 w-full px-5 text-primary-500 border-secondary-500 ltr:hover:border-r-4 rtl:hover:border-l-4" href=""> {{ __('all') }} </a>
                            <a @click="status = false" wire:click.prevent="setStatus('current')" class="flex items-center hover:bg-gray-100 h-10 w-full px-5 text-primary-500 border-secondary-500 ltr:hover:border-r-4 rtl:hover:border-l-4" href=""> {{ __('current') }} </a>
                            <a @click="status = false" wire:click.prevent="setStatus('expired')" class="flex items-center hover:bg-gray-100 h-10 w-full px-5 text-primary-500 border-secondary-500 ltr:hover:border-r-4 rtl:hover:border-l-4" href=""> {{ __('expired') }} </a>
                        </div>
                    </div>
                    <div class="flex items-center relative" x-data="{datePicker : false}">
                        <button type="button" class="text-primary-500 text-sm h-10 ltr:pl-5 rtl:pr-5" @click="datePicker = true">
                            {{ __('deadline') }} : <span class="font-bold ss02">{{app()->isLocale('fa') ? verta($today)->format('%B %d، %Y') : $today->format('d-F-Y')}}</span>
                        </button>
                        <div x-show="datePicker" @click.away="datePicker = false" class="absolute w-auto top-full ltr:left-0 rtl:right-0 bg-white border border-primary-500 shadow rounded-lg overflow-hidden z-30">
                            <input id="inlineExampleAlt" type="hidden" wire:model="dte" value="">
                            <div wire:ignore class="inline-date"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-row items-center justify-start md:justify-start h-10" x-data>
                <p class="text-primary-500 text-sm ">{{ __('view') }}:</p>
                <button type="button" class=" text-sm h-10 ltr:pl-5 rtl:pr-5 hover:text-secondary-500 flex items-center " :class="grid ? 'text-secondary-500': 'text-primary-500'" @click="grid = true; listView = false; timeline = false"><span class="icon icon-grid text-lg rtl:ml-2 ltr:mr-2"></span>{{ __('grid') }}</button>
                <button type="button" class=" text-sm h-10 ltr:pl-5 rtl:pr-5 hover:text-secondary-500 flex items-center " :class="listView ? 'text-secondary-500': 'text-primary-500'" @click="grid = false; listView = true; timeline = false"><span class="icon icon-list text-lg rtl:ml-2 ltr:mr-2"></span> {{ __('list') }}</button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-20" x-show="grid">
            @forelse($tenders as $tender)
                <x-frontend.vendor.tender-grid-block :tender="$tender"></x-frontend.vendor.tender-grid-block>
            @empty
                <div class="col-span-3">
                    <x-frontend.empty-container></x-frontend.empty-container>
                </div>
            @endforelse
        </div>
        <div class="flex flex-col gap-5" x-show="listView">
            <div class="grid grid-cols-2 bg-primary-500 h-16 py-2 divide-x rtl:divide-x-reverse divide-primary-300 rounded-lg ltr:border-r-8 rtl:border-l-8 border-secondary-500">
                <div class="h-12 flex items-center"><p class="text-white ltr:pl-5 rtl:pr-5 ">{{__('subject')}}</p></div>
                <div class="grid grid-cols-4 divide-x rtl:divide-x-reverse divide-primary-300">
                    <div class="h-12 flex items-center justify-center"><p class="text-white">{{__('tender_code')}}</p></div>
                    <div class="h-12 flex items-center justify-center"><p class="text-white">{{__('tender_deadline')}}</p></div>
                    <div class="h-12 flex items-center justify-center"><p class="text-white">{{__('status')}}</p></div>
                    <div></div>
                </div>
            </div>

            @forelse($tenders as $tender)
                <x-frontend.vendor.tender-list-block :tender="$tender"></x-frontend.vendor.tender-list-block>
            @empty
                <div class="col-span-2">
                    <x-frontend.empty-container></x-frontend.empty-container>
                </div>
            @endforelse
        </div>
    </div>
</div>
