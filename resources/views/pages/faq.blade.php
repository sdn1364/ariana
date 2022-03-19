@extends('layouts.app')
@section('title', __('faq'))
@section('content')
    <x-frontend.header-component :title="__('faq')" :small="true" :image="asset('images/headers/contact-header.png')"></x-frontend.header-component>
    <div class="container pb-10">
        <div class="flex flex-col mt-32">
            @foreach($faqs as $faq)
                @if($faq->status == 1)
                    <div class="flex flex-row gap-10 mb-10">
                        <h5 class="w-1/2 text-primary-500 pl-5 font-bold text-xl relative text-justify before:absolute before:w-2 before:h-2 before:bg-secondary-500 before:left-0 before:top-3 before:rounded-full">{{$faq->question}}</h5>
                        <p class="w-1/2  text-primary-500 text-justify">{{$faq->answer}}</p>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="mx-auto w-full flex items-center justify-center">
            <a href="{{ route('services') }}" class="bg-secondary-500 px-20 py-5  rounded-lg text-white font-bold text-xl">{{ __('back') }}</a>
        </div>
    </div>
@endsection
