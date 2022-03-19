<div>
    @section('title', __('services'))
    @section('styles')
        <script src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    @endsection
    <x-frontend.header-component :title="__('services')" :small="false"
                                 :image="asset('images/headers/whoWeAre-header.png')"
    ></x-frontend.header-component>

    <div class="container overflow-x-hidden md:overflow-x-visible"
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
             },
         scroll: ($el)=>{
            document.querySelector($el).scrollIntoView({
              block: 'center',
                behavior: 'smooth',
            });
         }
         }"
         x-init="reactOnScroll()"
         @scroll.window="reactOnScroll()"
    >
        @if($services->isNotEmpty())
            <div class="grid grid-cols-1 xl:grid-cols-6">
                <!-- menu-->
                <div class=" border-primary-100 relative rtl:border-l-2 ltr:border-r-2 hidden xl:flex">

                    <div :class=" {'fixed pt-2' : hasScrolled} " class="top-16 transition-all">
                        @foreach($services as $service)
                            <a class="flex items-center mb-5 text-lg w-100 hover:text-secondary-500"
                               :class="currentScroll === {{$service->id}} ? 'text-secondary-500':'text-primary-500'"
                               @click.prevent="currentScroll = {{$service->id}}; scroll($event.target.getAttribute('href'))" href="#service_{{ $service->id }}">{{$service->title}}</a>
                        @endforeach
                    </div>
                </div>
                <!-- content-->
                <div class="relative z-20 xl:col-span-5">
                    @foreach($services as $service)
                        <div id="service_{{ $service->id }}"
                             x-intersect.full="currentScroll = {{ $service->id }}"
                             class="{{ $loop->even ? 'text-white bg-primary-500 relative
                                    before:absolute before:bg-primary-500 before:w-[1000px] before:h-full rtl:before:right-full ltr:before:left-full before:top-0
                                    after:absolute after:bg-primary-500 after:w-[1000px] after:h-full rtl:after:left-full ltr:after:right-full after:top-0 xl:after:hidden
                                    ': 'text-primary-500' }}
                                 ">
                            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-10 lg:gap-y-0
                                        xl:ltr:pl-10 xl:rtl:pr-10

                                        {{ $loop->first ? 'pb-10': 'py-28' }}
                            {{ $loop->odd ? 'overflow-hidden': '' }}
                                ">
                                <div class="mb-5 text-base text-justify order-last lg:order-first mt-10 xl:mt-0">
                                    <h2 class="text-xl font-bold mb-5 {{$loop->even ? 'text-white': 'text-primary-500'}}"> {{ $service->title }}</h2>
                                    {!! $service->content !!}
                                    <a class="mt-5 flex items-center text-capitalize font-bold hover:text-secondary-500" href="{{ route('faq', $service->id) }}">
                                        <i class="ri-arrow-{{ app()->isLocale('fa') ? 'left' : 'right' }}-s-line"></i>
                                        {{ __('faq') }}
                                    </a>
                                </div>

                                <div class="relative h-60 before:absolute before:bg-secondary-500 before:z-10
                                            {{ $loop->odd ? 'ltr:pr-8 rtl:pl-8 md:ltr:pr-12 md:rtl:pl-12': '' }}
                                    md:h-80
                                   xl:ltr:pr-20 xl:rtl:pl-20 xl:h-96
                                   lg:ltr:pr-16 lg:rtl:pl-16 lg:h-80

{{ $loop->odd && !$loop->first ? ' before:w-16 md:before:w-28 lg:before:w-40 before:h-[600px] before:rounded-b-xl xl:before:rounded-t-xl ltr:before:right-0 rtl:before:left-0 xl:before:top-1/2 before:bottom-1/2' : '' }}
                                {{ $loop->even ? ' before:h-16 md:before:h-28 lg:before:h-36 xl:before:h-40 before:w-[600px] ltr:before:rounded-l-xl ltr:before:left-1/2 rtl:before:rounded-r-xl rtl:before:right-1/2 before:-bottom-8 md:before:-bottom-16 md:before:-bottom-20':'' }}
                                    ">
                                    <div class="w-full h-full overflow-hidden z-30 relative">
                                        <img class="object-cover w-full h-full" src="{{ asset($service->getFirstMediaUrl()) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        @else
            <div class="py-20">
                <x-frontend.empty-container></x-frontend.empty-container>
            </div>
        @endif
    </div>
    @section('styles')
        <style>
            :target {
                @apply t-40;
            }
        </style>
    @endsection
</div>
