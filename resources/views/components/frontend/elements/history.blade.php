

<div class="flex flex-col items-center space-y-5">
    <div class="slick-slider history h-96 bg-yellow-100 w-2/3 rounded-lg overflow-hidden">
        @foreach($years as $year)
            <div>
                <div class="slick-slider years flex rounded-lg bg-primary-500 triangle {{ app()->isLocale('fa') ? 'triangle-bottom-left':'triangle-bottom-right'}} ">

                    @foreach($history as $his)
                        @if($his->year == $year->year)
                            <div>
                                <div class="flex flex-row h-96 p-0">
                                    <div class="w-1/2 h-full">
                                        <img class="object-cover w-full h-full" src="{{asset($year->getFirstMediaUrl())}}" alt="">
                                    </div>
                                    <div class="w-1/2 p-10">
                                        <p class="mb-5 text-secondary-500">{{$year->year}}</p>
                                        <div class="text-white">{!! $year->content !!}</div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <div class="slick-slider navForHistory h-20 before:h-px before:border-primary-500 before:w-full before:border-dashed before:border-b before:absolute before:top-1/2 before:left-0">
        @foreach($years as $year)
            <div class="cursor-pointer">
                <div class="h-20 flex flex-col items-center justify-center w-20">
                    <div class="relative w-5 h-5 flex items-center justify-center border border-primary-500 bg-white rounded-full
                                                                                                    before:absolute before:h-10 before:w-px before:bg-primary-500 before:z-10
                                                                                                    {{$loop->odd ? 'before:top-0 before:mt-1':'before:bottom-0 before:mb-1'}}
                        ">
                        <div class="w-3 h-3 bg-primary-500 rounded-full"></div>
                    </div>
                    <p class="absolute text-primary-500 text-sm ltr:ml-10 rtl:mr-10
                                                                                                        {{$loop->odd ? 'bottom-0':'top-0'}}
                        ">{{$year->year}}</p>
                </div>
            </div>
            <div class="cursor-pointer">
                <div class="h-20 flex flex-col items-center justify-center w-20">
                    <div class="relative w-5 h-5 flex items-center justify-center border border-primary-500 bg-white rounded-full
                                                                                                    before:absolute before:h-10 before:w-px before:bg-primary-500 before:z-10
                                                                                                    {{$loop->odd ? 'before:top-0 before:mt-1':'before:bottom-0 before:mb-1'}}
                        ">
                        <div class="w-3 h-3 bg-primary-500 rounded-full"></div>
                    </div>
                    <p class="absolute text-primary-500 text-sm ltr:ml-10 rtl:mr-10
                                                                                                        {{$loop->odd ? 'bottom-0':'top-0'}}
                        ">{{$year->year}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
