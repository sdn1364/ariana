<div>
    @section('title', __('innovation'))

    <x-frontend.header-component :title="__('innovation')" :small="false"
                                 :image="asset('images/headers/innovation-header.png')"
    ></x-frontend.header-component>
    <div class="container">

        <x-frontend.page-description>
            <x-slot name="photo"><img class="object-cover w-full h-full" src="{{ asset($content->getFirstMediaUrl()) }}" alt=""></x-slot>
            <x-slot name="text">
                <x-frontend.page-title>{{$content->title}}</x-frontend.page-title>
                <div class="text-primary-500">
                    {!! $content->text !!}
                </div>
            </x-slot>
        </x-frontend.page-description>

        <h3 class="mt-20 mb-10 text-xl font-extrabold text-center text-primary-500">{{ __('steps')}}:</h3>
    </div>
    <div id="steps" class="flex flex-col justify-center w-full h-full bg-gradient-to-r from-primary-500 to-primary-700 align-center">
        <div class="flex justify-center -mt-px text-center align-center">
            <svg class="fill-secondary-500" viewBox="504.759 247 12 6" width="26" height="14">
                <path d="M12 16l-6-6h12z" transform="matrix(1, 0, 0, 1, 498.758759, 237)"></path>
            </svg>
        </div>
        <div class="container relative overflow-x-hidden">

            <div class=" grid-cols-2 border-white hidden lg:grid">
                <div class="w-full h-12 border-dashed ltr:border-r rtl:border-l"></div>
                <div class="w-full h-12"></div>
                @foreach($innovations as $innovation)
                    @if( $loop->odd)
                        <div class="flex flex-col space-y-5 justify-start p-10">
                            <div class="flex relative justify-center items-center w-fit h-fit">
                                <i class="text-4xl icon-frame-alt text-primary-200"></i>
                                <p class="absolute text-xl font-bold ss02 text-secondary-500 h-fit w-fit">{{ $loop->iteration}}</p>
                            </div>
                            <p class="flex text-white">{{$innovation->text}}</p>
                            @if($innovation->link)
                                <a href="mailto:r&d@arianaco.com" class="text-primary-100 hover:underline decoration-secondary-500">{{$innovation->link}}</a>
                            @endif
                        </div>
                        <div class="relative w-full flex justify-center h-80 border-dashed ltr:rounded-r-[50px] rtl:rounded-l-[50px] border-t ltr:border-r rtl:border-l border-b -mt-px">
                            <div class="md:h-28 lg:h-32 w-[1000px] block bg-secondary-500 absolute bottom-10 ltr:left-1/2 ltr:rounded-l-xl rtl:right-1/2 rtl:rounded-r-xl"></div>
                            <div class="flex md:w-60 lg:w-72 xl:w-96 2xl:w-[550px] md:h-52 lg:h-64 absolute -top-10">
                                <img class="object-cover w-full h-full" src="{{asset($innovation->getFirstMediaUrl())}}" alt="">
                            </div>
                        </div>
                    @endif
                    @if( $loop->even)
                        <div class="w-full h-80 relative flex justify-center border-dashed ltr:rounded-l-[50px] rtl:rounded-r-[50px] border-t ltr:border-l rtl:border-r border-b -mt-px">
                            <div class="md:h-28 lg:h-32 w-[1000px] block bg-secondary-500 absolute bottom-10 ltr:right-1/2 ltr:rounded-r-xl rtl:left-1/2 rtl:rounded-l-xl"></div>
                            <div class=" flex lg:w-72 xl:w-96 2xl:w-[550px] h-64 bg-secondary-500 absolute -top-10">
                                <img class="object-cover w-full h-full" src="{{asset($innovation->getFirstMediaUrl())}}" alt="">
                            </div>
                        </div>
                        <div class="flex flex-col space-y-5 justify-start p-10">
                            <div class="flex relative justify-center items-center w-fit h-fit">
                                <i class="text-4xl icon-frame-alt text-primary-200"></i>
                                <p class="absolute text-xl font-bold text-secondary-500 ss02 h-fit w-fit">{{ $loop->iteration}}</p>
                            </div>
                            <p class="flex text-white">{{$innovation->text}}</p>
                            @if($innovation->link)
                                <a href="#" class="text-primary-100 hover:underline decoration-secondary-500">{{$innovation->link}}</a>
                            @endif
                        </div>
                    @endif
                @endforeach

                <div class="w-full h-12 border-dashed ltr:border-r rtl:border-l"></div>
                <div class="w-full h-12"></div>
            </div>

            <div class="flex flex-col lg:hidden border-white ">
                <div class="w-1/2 lg:w-full h-12  border-dashed ltr:border-r rtl:border-l"></div>
                @foreach($innovations as $innovation)
                    <div class="py-5 relative
                                before:absolute before:top-0 before:block before:w-1/2 before:h-full before:border-dashed before:border-b before:border-t
                                {{ $loop->odd ? 'before:ltr:left-1/2 before:rtl:right-1/2  ltr:before:rounded-r-[50px] rtl:before:rounded-l-[50px] ltr:before:border-r rtl:before:border-l':'' }}
                                {{$loop->even ? 'before:ltr:right-1/2 before:rtl:left-1/2 ltr:before:rounded-l-[50px] rtl:before:rounded-r-[50px] ltr:before:border-l rtl:before:border-r':'' }}">
                        <div class="relative flex justify-center">
                            @if($loop->odd)
                                <div class="h-16 lg:h-32 w-[1000px] block bg-secondary-500 absolute -bottom-8 ltr:left-1/2 ltr:rounded-l-xl lg:rtl:right-1/2 rtl:rounded-r-xl"></div>
                            @endif
                            @if($loop->even)
                                <div class="h-16 lg:h-32 w-[1000px] block bg-secondary-500 absolute -bottom-8 ltr:right-1/2 ltr:rounded-r-xl lg:rtl:left-1/2 rtl:rounded-l-xl"></div>
                            @endif
                            <div class="flex w-[80%] h-40 relative">
                                <img class="object-cover w-full h-full" src="{{asset($innovation->getFirstMediaUrl())}}" alt="">
                            </div>
                        </div>
                        <div class="flex flex-col space-y-5 justify-start p-10 h-fit">
                            <div class="flex relative justify-center items-center w-fit h-fit ">
                                <i class="text-4xl icon-frame-alt text-primary-200"></i>
                                <p class="absolute text-xl font-bold ss02 text-secondary-500 h-fit w-fit">{{ $loop->iteration}}</p>
                            </div>
                            <p class="flex text-white ">{{$innovation->text}}</p>
                            @if($innovation->link)
                                <a href="mailto:r&d@arianaco.com" class="text-primary-100 hover:underline decoration-secondary-500">{{$innovation->link}}</a>
                            @endif
                        </div>
                    </div>
                @endforeach

                <div class="w-1/2 lg:w-full h-12  border-dashed ltr:border-r rtl:border-l"></div>
            </div>

        </div>
        <div class="flex justify-center -mb-px text-center align-center">
            <svg class="fill-secondary-500" viewBox="504.759 247 12 6" width="26" height="14">
                <path d="M 510.759 253 L 504.759 247 L 516.759 247 Z" transform="matrix(-1, 0, 0, -1, 1021.518005, 500)"></path>
            </svg>
        </div>
    </div>
    <div class="flex justify-center py-10 align-center">
        <a href="{{ route('innovationSubmit') }}" class="px-10 py-4 text-xl font-bold text-white rounded-xl bg-secondary-500 hover:bg-secondary-600">{{__('submit')}}</a>
    </div>

</div>
