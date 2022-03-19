@extends('layouts.app')

@section('title', __('who_we_are'))

@section('content')
    <x-frontend.header-component :title="__('who_we_are')" :small="true"
                                 :image="asset('images/headers/whoWeAre-header.png')"
    ></x-frontend.header-component>
    <div class="container relative">
        <div class="grid grid-cols-1 xl:grid-cols-6">
            <!-- menu-->
            @include('pages.side_menu')
            <div class="relative xl:col-span-5 mb-5">
                <div class="mb-5 ltr:pl-10 rtl:pr-10 text-base text-justify order-last lg:order-first">
                    <h2 class="mb-10 text-xl font-bold text-primary-500">

                        <x-lang l="en">
                            certificates and awards
                        </x-lang>
                        <x-lang l="fa">
                            گواهی ها و جوایز
                        </x-lang>
                        <x-lang l="ru">
                            сертификаты и награды
                        </x-lang>
                    </h2>
                </div>

                <div class="ltr:pl-10 rtl:pr-10 pb-10 h-[1000px]">
                    <div class="ms-grid">
                        @foreach($awards as $award)
                            <x-frontend.gallery-image :award="$award"></x-frontend.gallery-image>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script>
        var elem = document.querySelector('.ms-grid');
        var msnry = new Masonry(elem, {
            // options
            itemSelector: '.grid-item',
            originLeft: {{!app()->islocale('fa')}}
        });
    </script>
@endsection
