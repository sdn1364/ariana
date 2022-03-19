<div class=" border-primary-100 relative hidden xl:flex
                        rtl:border-l-2
                        ltr:border-r-2
                        "
>
    <div class="top-16 transition-all">
        <ul>
            <li class="flex flex-col mb-5">
                <span class="flex flex-row items-center">

                    <a class="flex items-center xl:text-sm 2xl:text-lg w-100 hover:text-secondary-500 {{Request::segment(3) == 'at-a-glance' ? 'text-secondary-500': 'text-primary-500'}}" href="{{route('glance')}}">{{ __('whoweare')['glance'] }}</a>
                </span>
            </li>
            <li class="flex flex-col mb-5">
                <span class="flex flex-row items-center">

                    <a class="flex items-center xl:text-sm 2xl:text-lg w-100 hover:text-secondary-500 {{Request::segment(3) == 'history' ? 'text-secondary-500': 'text-primary-500'}}" href="{{route('history')}}">{{ __('whoweare')['history'] }}</a>
                </span>
            </li>
            <li class="flex flex-col mb-5">
                <span class="flex flex-row items-center">

                    <a class="flex items-center xl:text-sm 2xl:text-lg w-100 hover:text-secondary-500 {{Request::segment(3) == 'leadership' ? 'text-secondary-500': 'text-primary-500'}}" href="{{route('leadership')}}">{{ __('whoweare')['leadership'] }}</a>
                </span>
            </li>
            <li class="flex flex-col mb-5">
                <span class="flex flex-row items-center">

                    <a class="flex items-center xl:text-sm 2xl:text-lg w-100 hover:text-secondary-500 {{Request::segment(3) == 'governance' ? 'text-secondary-500': 'text-primary-500'}}" href="{{route('governance')}}">{{ __('whoweare')['governance'] }}</a>
                </span>
            </li>
            <li class="flex flex-col mb-5 ltr:-ml-6 rtl:-mr-6" x-data="{open: {{ Request::segment(3) === 'csr' ? true : false }} }">
                <span class="flex flex-row items-center">
                    <span class="cursor-pointer text-primary-500 2xl:ltr:mr-1 2xl:rtl:mr-1 flex items-center justify-center transition-all {{Request::segment(3) == 'csr' ? 'text-secondary-500': 'text-primary-500'}}" :class="open && 'ltr:rotate-90 rtl:-rotate-90'" @click="open = true">
                            {!! app()->islocale('fa') ? '<i class="ri-arrow-left-s-line ri-lg"></i>':'<i class="ri-arrow-right-s-line ri-lg"></i>' !!}
                    </span>
                    <a class="flex items-center xl:text-sm 2xl:text-lg w-100 hover:text-secondary-500 {{Request::segment(3) == 'csr' ? 'text-secondary-500': 'text-primary-500'}}" href="{{route('csr')}}">{{ __('whoweare')['csr'] }}</a>
                </span>
                <ul class="ltr:pl-6 rtl:pr-6 mb-5 mt-3" x-show="open" @click.away="open = false">
                    <li class="mb-2">
                        <a class="flex items-center xl:text-xs 2xl:text-sm w-100 hover:text-secondary-500 {{Request::segment(4) == 'people' ? 'text-secondary-500': 'text-primary-500'}}"
                           href="{{route('people')}}">{{ __('whoweare')['people'] }}</a>
                    </li>
                    <li class="mb-2">
                        <a class="flex items-center xl:text-xs 2xl:text-sm w-100 hover:text-secondary-500 {{Request::segment(4) == 'community' ? 'text-secondary-500': 'text-primary-500'}}"
                           href="{{route('community')}}">{{ __('whoweare')['community'] }}</a>
                    </li>
                    <li class="mb-2">
                        <a class="flex items-center xl:text-xs 2xl:text-sm w-100 hover:text-secondary-500 {{Request::segment(4) == 'sustainability&environment' ? 'text-secondary-500': 'text-primary-500'}}"
                           href="{{route('sustainability')}}">{{ __('whoweare')['sustain'] }}</a>
                    </li>
                </ul>
            </li>
            <li class="flex flex-col mb-5">
                <span class="flex flex-row items-center">
                    <a class="text-primary-500 flex items-center xl:text-sm 2xl:text-lg w-100 hover:text-secondary-500 {{Request::segment(3) == 'certificates&awards' ? 'text-secondary-500': 'text-primary-500'}}" href="{{route('awards')}}">{{ __('whoweare')['certificate'] }}</a>
                </span>
            </li>
        </ul>
    </div>
</div>
