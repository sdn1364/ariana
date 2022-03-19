<div>
    @section('title', __('sectors'))

    <x-frontend.header-component :title="__('sectors')" :small="false"
                                 :image="asset('images/headers/sectors-header.png')"
    ></x-frontend.header-component>
    <div class="container relative overflow-x-hidden md:overflow-x-visible
                before:absolute before:block before:bg-secondary-500 before:top-0 before:rounded-b-xl before:z-30
                2xl:before:w-40 2xl:ltr:before:right-0 2xl:rtl:before:left-0
                xl:before:w-40 xl:ltr:before:right-16 xl:rtl:before:left-16
                lg:before:w-32 lg:before:h-60 lg:ltr:before:right-16 lg:rtl:before:left-16
                md:before:w-28 md:before:h-68 md:ltr:before:right-16 md:rtl:before:left-16
                before:w-24 before:h-48 ltr:before:right-4 rtl:before:left-4
"
         x-data="{
        currentScroll:0,
        scrollPin:0,
        hasScrolled: false,
        reactOnScroll() {

            if (this.$el.getBoundingClientRect().top < 64 && window.scrollY > this.$el.getBoundingClientRect().top) {
                this.hasScrolled = true;
            } else {
                this.hasScrolled = false;
            }
        }
    }"
         x-init="reactOnScroll()"
         @scroll.window="reactOnScroll()"
    >
        <div class="grid grid-cols-1 xl:grid-cols-6 ">
            <!-- menu-->
            <div class=" border-primary-100 relative hidden xl:flex
                        rtl:border-l-2
                        ltr:border-r-2
                        "
            >
                <div :class=" {'fixed pt-2' : hasScrolled} " class="top-16 transition-all">
                    <ul x-data="{child: 0}">
                        @foreach($sectors as $sec)
                            <li class="flex flex-col mb-5">
                                <span class="flex flex-row items-center">
                                    <span :class="child === {{$sec->id}} ? 'text-secondary-500':'text-primary-500'"
                                          @click="child = {{$sec->id}}" class="cursor-pointer text-primary-500 2xl:ltr:mr-1 2xl:rtl:mr-1 flex items-center justify-center">
                                        {!! app()->islocale('fa') ? '<i class="ri-arrow-left-s-line ri-lg"></i>':'<i class="ri-arrow-right-s-line ri-lg"></i>' !!}
                                    </span>
                                    <a :class="child === {{$sec->id}} ? 'text-secondary-500':'text-primary-500'" class="flex items-center xl:text-sm 2xl:text-lg w-100 hover:text-secondary-500" href="{{route('sector',$sec->id)}}">{{$sec->title}}</a>
                                </span>
                                <ul class="ltr:pl-6 rtl:pr-6 mb-5 mt-3" x-show="child === {{$sec->id}}" @click.away="child = 0">
                                    @foreach($sec->getChildSectors as $child)
                                        <li class="mb-2">
                                            <a :class="child === {{$child->id}} ? 'text-secondary-500':'text-primary-500'"
                                               class="flex items-center xl:text-xs 2xl:text-sm w-100 hover:text-secondary-500 text-primary-500"
                                               href="{{route('sector',$child->id)}}">{{$child->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- content-->
            <div class="relative xl:col-span-5">
                <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-10 xl:ltr:pl-10 xl:rtl:pr-10 relative mb-10 py-10">
                    <div class="mb-5 text-base text-justify order-last lg:order-first  sector-content text-primary-500">
                        <h2 class="mb-10 text-xl font-bold ">{{ $content->title }}</h2>
                        {!! $content->text !!}
                    </div>

                    <div class="h-72 md:h-80 lg:h-96 z-40 relative
                                2xl:ltr:pr-20 2xl:rtl:pl-20
                                xl:ltr:pr-16 xl:rtl:pl-16
                                lg:ltr:pr-16 lg:rtl:pl-16
                                md:ltr:pr-10 md:rtl:pl-10
                                ltr:pr-8 rtl:pl-8
                               ">
                        <img class="object-cover w-full h-full" src="{{ asset($content->getFirstMediaUrl()) }}" alt="">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 ">
                    @foreach($sectors as $sec)
                        @if($loop->iteration == 2 && $sectors->count() <= 2)
                            @php
                                $iteration = 2;
                            @endphp
                        @elseif($loop->iteration >= 8)
                            @php
                                $iteration = 3;
                            @endphp
                        @else
                            @php
                                $iteration = 4;
                            @endphp
                        @endif
                        @if($sec->parent_id == 0)
                            <a href="{{route('sector', $sec->id)}}"
                               class="{{$loop->iteration % $iteration == 0 ? 'col-span-2': ''}} group text-white bg-center bg-cover flex justify-center items-center font-bold relative overflow-hidden
                                      lg:h-80 h-60 lg:text-xl
                                      md:text-lg
                                      before:absolute before:bg-gray-900 before:bg-opacity-50 before:w-full before:h-full before:z-0
                                      hover:before:bg-opacity-30
                                      " style="background-image: url('{{$sec->getFirstMediaUrl()}}')">
                                <span class="relative z-20 group-hover:text-2xl group-hover:text-secondary-500 transition-all">
                                    {{$sec->title}}
                                </span>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
