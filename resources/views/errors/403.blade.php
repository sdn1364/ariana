@extends('layouts.app')
@section('content')
    <section class="py-40 h-full">
        <div class="text-center w-full">
            <img class="mx-auto" src="{{ asset('images/403.jpg') }}" alt="">
            <h3 class="text-primary-500 text-3xl font-black mb-10">{{__('403_text')}}</h3>
            <a class="px-8 py-3 bg-secondary-500 rounded-lg mt-5 font-bold text-white" href="{{ url()->previous() }}">{{__('back')}}</a>
        </div>
    </section>
    @endsection
