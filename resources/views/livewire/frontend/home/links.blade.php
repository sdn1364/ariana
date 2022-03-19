<section>

    @if(isset($links))
        <div class="grid overflow-hidden grid-cols-2 lg:grid-cols-3">
            @foreach($links as $link)
                <div class=" flex items-center justify-center overflow-hidden relative flex-col {{$loop->iteration / 4 == 1 ? 'col-span-1 lg:col-span-2 ':''}}
                     items-center p-5 h-48 md:h-64 lg:h-80 xl:h-96 bg-center bg-no-repeat bg-cover group hover:before:bg-opacity-80 hover:before:transition-all
                     before:absolute before:block before:w-full before:h-full before:bg-gray-900 before:bg-opacity-40 xl:before:bg-opacity-20 before:top-0 before:left-0 before:z-0"
                     style="background-image: url('{{asset($link->getFirstMediaUrl())}}')">
                    <div class="flex relative z-20 flex-col justify-between items-center space-y-5 w-80 h-full transition-all duration-300 xl:h-auto xl:top-full xl:-mt-16 group-hover:mt-0 group-hover:top-0">

                        <h2 class="font-bold text-center text-white md:text-2xl lg:text-3xl xl:text-4xl">{{$link->title}}</h2>

                        <div class="h-48 text-sm text-justify text-white indent-5 hidden xl:flex overflow-hidden overscroll-contain
                                    hover:scrollbar-thin scrollbar-thumb-primary-100 scrollbar-thumb-opacity-30 scrollbar-track-opacity-0 scrollbar-thumb-rounded-md
                                    hover:overflow-y-auto ltr:xl:pr-5 rtl:xl:pl-5">
                                {!! $link->text !!}
                        </div>

                        <a class="px-3 py-2 mx-auto text-sm font-normal text-center text-white rounded-lg border-2 xl:px-10 xl:py-3 xl:font-bold xl:text-lg xl:rounded-xl border-secondary-500 bg-secondary-500 xl:bg-opacity-0 xl:hover:bg-opacity-0 xl:text-secondary-500 xl:hover:bg-secondary-500 hover:text-white" href="
                            @if($link->link == 'projects')
                                {{route('project')}}
                            @elseif( $link->link == 'services')
                                {{ route('services') }}
                            @elseif( $link->link == 'tenders')
                                {{ route('vendor') }}
                            @elseif( $link->link == 'innovation')
                                {{ route('innovation') }}
                            @elseif( $link->link == 'sectors')
                                {{ route('allSector') }}
                            @else
                                {{ route('sector', $link->link) }}
                            @endif
                        ">{{__('read_more')}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <x-frontend.empty-container></x-frontend.empty-container>
    @endif

</section>
