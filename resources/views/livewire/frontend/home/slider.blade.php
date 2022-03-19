<section class="relative w-full overflow-hidden
                    h-[300px]
                    sm:h-[400px]
                    md:h-[400px]
                    lg:h-[600px]
                    xl:h-screen
                    ">
    @if($slides->isNotEmpty())
    <div class="main-carousel relative">
        @foreach($slides as $slide)
            <div>
                <div class="flex items-center justify-center overflow-hidden relative
                                w-screen
                                h-[300px]
                                sm:h-[400px]
                                md:h-[400px]
                                lg:h-[600px]
                                xl:h-screen
                                before:absolute before:block before:w-full before:h-full before:bg-gray-900 before:bg-opacity-30
                                ">
                    {{--========================= slider content--}}
                    <div class="absolute flex z-40 items-center justify-center
                                    max-w-xl
                                    h-32 w-48
                                    lg:h-fit lg:w-fit
                                    ">
                        <div class="w-full h-full  triangle triangle-right before:top-[2px] before:right-[2px] flex items-center justify-center
                                        px-4 py-8
                                        sm:px-5 sm:py-6
                                        lg:px-20 lg:py-40
                                        xl:py-20
                                        ">
                            <h1 class="justify-center items-center text-2xl font-black text-white tracking-tight flex
                                            lg:text-6xl
                                            xl:text-7xl
                                            ">{{$slide->title}}</h1>
                        </div>
                        @if($slide->link == 'projects')
                        <a class=" bg-secondary-500 absolute font-bold mx-auto hover:bg-secondary-500 text-white text-center
                                    left-0 -bottom-4
                                    py-2 px-2 text-sm rounded
                                    sm:py-2 sm:px-2 sm:rounded sm:-bottom-4
                                    lg:py-6 lg:px-16 lg:text-xl lg:-bottom-8
                                    xl:py-6 xl:px-12 xl:rounded-lg
                                    " href="{{ route('project') }}">{{__('read_more')}}</a>

                        @elseif( $slide->link == 'services')
                            <a class=" bg-secondary-500 absolute font-bold mx-auto hover:bg-secondary-500 text-white text-center
                                    left-0 -bottom-4
                                    py-2 px-2 text-sm rounded
                                    sm:py-2 sm:px-2 sm:rounded sm:-bottom-4
                                    lg:py-6 lg:px-16 lg:text-xl lg:-bottom-8
                                    xl:py-6 xl:px-12 xl:rounded-lg
                                    " href="{{ route('services') }}">{{__('read_more')}}</a>
                        @elseif( $slide->link == 'tenders')
                            <a class=" bg-secondary-500 absolute font-bold mx-auto hover:bg-secondary-500 text-white text-center
                                    left-0 -bottom-4
                                    py-2 px-2 text-sm rounded
                                    sm:py-2 sm:px-2 sm:rounded sm:-bottom-4
                                    lg:py-6 lg:px-16 lg:text-xl lg:-bottom-8
                                    xl:py-6 xl:px-12 xl:rounded-lg
                                    " href="{{ route('vendor') }}">{{__('read_more')}}</a>
                        @elseif( $slide->link == 'innovation')
                            <a class=" bg-secondary-500 absolute font-bold mx-auto hover:bg-secondary-500 text-white text-center
                                    left-0 -bottom-4
                                    py-2 px-2 text-sm rounded
                                    sm:py-2 sm:px-2 sm:rounded sm:-bottom-4
                                    lg:py-6 lg:px-16 lg:text-xl lg:-bottom-8
                                    xl:py-6 xl:px-12 xl:rounded-lg
                                    " href="{{ route('innovation') }}">{{__('read_more')}}</a>
                        @elseif( $slide->link == 'sectors')
                            <a class=" bg-secondary-500 absolute font-bold mx-auto hover:bg-secondary-500 text-white text-center
                                    left-0 -bottom-4
                                    py-2 px-2 text-sm rounded
                                    sm:py-2 sm:px-2 sm:rounded sm:-bottom-4
                                    lg:py-6 lg:px-16 lg:text-xl lg:-bottom-8
                                    xl:py-6 xl:px-12 xl:rounded-lg
                                    " href="{{ route('allSector') }}">{{__('read_more')}}</a>
                        @else
                            <a class=" bg-secondary-500 absolute font-bold mx-auto hover:bg-secondary-500 text-white text-center
                                    left-0 -bottom-4
                                    py-2 px-2 text-sm rounded
                                    sm:py-2 sm:px-2 sm:rounded sm:-bottom-4
                                    lg:py-6 lg:px-16 lg:text-xl lg:-bottom-8
                                    xl:py-6 xl:px-12 xl:rounded-lg
                                    " href="{{ route('sector', $slide->link) }}">{{__('read_more')}}</a>
                        @endif
                        <div class="absolute bg-primary-100 top-0 left-0 w-full h-[3px]"></div>
                        <div class="absolute bg-primary-100 top-0 left-0 w-[3px] h-3/5"></div>
                        <div class="absolute bg-primary-100 bottom-0 right-0 w-[3px] h-full"></div>
                        <div class="absolute bg-primary-100 bottom-0 right-0 w-1/2 h-[3px]"></div>
                    </div>
                    {{--========================= slider image--}}

                    <img class="object-cover w-full h-full" src="{{asset($slide->getFirstMediaUrl())}}" alt="">
                </div>
            </div>
        @endforeach
    </div>
    <div class="absolute z-40 w-full flex items-center justify-center
                    bottom-2
                    sm:bottom-5
                    lg:bottom-18
                    ">
        <div class="bg-gradient-to-bl bg-contain to-secondary-100 from-gray-100 shadow-lg
                        border-2 border-primary-500 rounded-full relative flex justify-center
                        before:animate-bounce before:bg-primary-500 before:rounded-full before:absolute
                        w-4 h-7
                        sm:w-8 sm:h-12
                        lg:w-12 lg:h-20 lg:border-4
                        xl:w-10 lg:h-16 lg:border-4
                        before:w-0.5 before:h-2 before:top-2
                        sm:before:w-1 sm:before:h-3 sm:before:top-4
                        lg:before:w-2 lg:before:h-4 lg:before:top-5
                        xl:before:w-2 xl:before:h-2 xl:before:top-3
                        "></div>
    </div>
    @else
        <div class="flex items-center justify-center overflow-hidden relative
                                w-screen
                                h-[300px]
                                sm:h-[400px]
                                md:h-[400px]
                                lg:h-[400px]
                                xl:h-screen">
            <x-frontend.empty-container></x-frontend.empty-container>
        </div>
    @endif
</section>
