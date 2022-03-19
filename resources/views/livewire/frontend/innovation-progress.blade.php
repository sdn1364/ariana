<div>
    @section('title', __('profile'))

    <x-frontend.header-component :title="__('profile')" :small="true"
                        :image="asset('images/headers/login-header.png')"
    ></x-frontend.header-component>
    <div class="container relative" x-data="{modal : false}">
        <x-frontend.page-title class="mb-10">{{$application->title}}</x-frontend.page-title>
        <div class="mb-10">
            @foreach($innovations as $innovation)
                <div class="h-24  border-dashed border-primary-500 px-10 relative
                {{  !$loop->first && !$loop->last ? 'ltr:border-l rtl:border-r':''}}
                {{ $loop->first ? 'after:h-20 after:top-4':'' }}
                {{ $loop->last ? 'after:h-4 after:top-0':'' }}
                    before:absolute before:w-5 before:h-5 before:bg-white before:border-2 before:border-primary-500 before:rounded-full before:top-4 before:z-30
                    after:absolute after:w-5 after:bg-white ltr:after:border-l rtl:after:border-r after:border-dashed after:border-primary-500  after:z-20
                    ltr:before:left-0 rtl:before:right-0
                    ltr:after:left-0 rtl:after:right-0
                    ltr:before:-ml-2.5 rtl:before:-mr-2.5">

                    <div class="w-5 h-5 absolute rounded-full top-4 z-40 flex items-center justify-center
                                ltr:left-0 rtl:right-0
                                ltr:-ml-2.5 rtl:-mr-2.5
                    ">
                        @if($innovation->id == $application->level)
                            @switch( $application->status )
                                @case('pending')
                                <span class="w-3 h-3 block bg-gray-300 rounded-full"></span>
                                @break
                                @case('accepted')
                                <span class="w-3 h-3 block bg-green-500 rounded-full"></span>
                                @break
                                @case('rejected')
                                <span class="w-3 h-3 block bg-red-500 rounded-full"></span>
                                @break
                            @endswitch
                        @elseif($innovation->id < $application->level)
                            <span class="w-3 h-3 block bg-green-300 rounded-full"></span>
                        @endif
                    </div>
                    <div class="flex relative justify-center items-center w-fit h-fit mb-2">
                        <i class="text-4xl icon-frame-alt text-primary-200"></i>
                        <p class="absolute text-xl font-bold ss02 text-secondary-500 h-fit w-fit">{{ $loop->iteration}}</p>
                    </div>
                    <p class="text-primary-500">{{$innovation->text}}
                        @if($innovation->id == $application->level)
                            @if($application->status == 'rejected')
                                <i class="ri-error-warning-line text-red-500 cursor-pointer" @click="modal = true"></i>
                            @endif
                        @endif
                    </p>
                </div>
            @endforeach
        </div>
        <div class="fixed w-screen h-screen bg-gray-900 bg-opacity-60 flex items-center justify-center z-50 top-0 left-0" x-show="modal">
            <div class="shadow-lg w-[400px] h-fit rounded-2xl border border-primary-500 bg-white p-10" @click.away="modal = false">
                <p class="text-center mb-10">Reasons why you were rejected</p>
                <div class="bg-gray-200 border border-primary-500 rounded-2xl p-10">
                    @if($application->status == 'rejected')
                        <p>{{$application->reason ?? ''}}</p>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
