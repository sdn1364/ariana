@extends('layouts.admin')
@section('admin-title', 'تاریخچه '.$history->year)
@section('admin-page-title', 'تاریخچه '.$history->year)

@section('content')

    <div class="card card-flush">
        <div class="card-header">
            <h3 class="card-title ss02"> تاریخچه {{$history->year}}</h3>
            <div class="card-toolbar">
                <a href="{{route('admin.histories.edit', $history->id)}}" class="btn btn-sm btn-active-light-primary">ویرایش</a>
            </div>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-3">
                    <div class="border-2 border-gray-200">
                        <img class="w-100 h-auto" src="{{ asset($history->getFirstMediaUrl()) }}" alt="">
                    </div>
                </div>
                <div class="col-9">
                    <x-backend.tabs :languages="$languages">
                        @foreach( $languages as $lang)
                            <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                                <p><strong class="text-muted">عنوان بخش: </strong>{{$history->translate(getLocale($lang))->title}}</p>
                                <p><strong class="text-muted">محتوای تاریخچه: </strong></p>
                                <div dir="{{ app()->getLocale() != 'fa'? 'ltr': 'rtl' }}">
                                    {!! $history->translate(getLocale($lang))->content !!}
                                </div>
                            </div>
                        @endforeach
                    </x-backend.tabs>
                    <p class="mt-5 ss02"><strong class="text-muted">سال تاریخچه: </strong>{{$history->year}}</p>
                </div>
            </div>
        </div>
    </div>

@endsection


