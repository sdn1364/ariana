<section class="py-20 overflow-x-hidden">
    @if(isset($history))
    <div class="container relative
            before:absolute  before:block before:bg-secondary-500 before:rounded-b-xl  before:z-0
            rtl:before:right-16 ltr:before:left-16
            rtl:sm:before:right-10 ltr:sm:before:left-10
            rtl:md:before:right-4 ltr:md:before:left-4
            rtl:2xl:before:right-0 ltr:2xl:before:left-0
            before:w-16 before:h-48 before:-top-20
            md:before:w-20 md:before:h-80
            lg:before:w-32
            xl:before:w-32
    ">
        <div class="grid grid-cols-1
                    sm:grid-cols-3 sm:gap-10
                    md:grid-cols-2 md:gap-4
                    xl:grid-cols-3 xl:gap-6
                    ">

            <div class=" overflow-hidden z-20
                                ltr:ml-20 rtl:mr-20
                                ltr:md:ml-0 rtl:md:mr-0
                                ltr:2xl:ml-16 rtl:2xl:mr-16
                                w-48 h-48 mb-5
                                md:w-full md:h-96
                                lg:w-full lg:h-96 lg:mt-7
                                xl:w-full xl:h-96 xl:mb-0 xl:mt-7
                                2xl:w-96
                               ">
                <img class="object-cover w-full h-full" src="{{asset($history->getFirstMediaUrl())}}" alt="">

            </div>
            <div class="flex flex-col col-span-2 items-center md:col-span-1 xl:col-span-2">
                <h1 class="px-20 py-3 text-3xl font-black text-primary-500 border-primary-100 triangle rectangle {{app()->isLocale('fa') ? 'triangle-right rectangle-right':'triangle-left rectangle-left'}}">{{__('history_title')}}</h1>
                <div class="my-5 text-justify indent-5 text-primary-500 ss02 tex-sm md:text-base">{!! $history->text!!}</div>
                <a class="flex flex-grow-0 flex-shrink-0 justify-center items-center px-16 py-4 mx-auto w-auto text-lg font-bold text-white rounded-lg bg-secondary-500 hover:bg-secondary-600" href="">{{__('read_more')}}</a>
            </div>

        </div>
    </div>
    @else
        <x-frontend.empty-container></x-frontend.empty-container>
    @endif
</section>
