@extends('layouts.admin')
@section('admin-title', 'بخش '.$sector->title)
@section('admin-page-title', 'بخش '.$sector->title)

@section('content')

    <div class="card card-flush">
        <div class="card-header">
            <h3 class="card-title"> بخش {{$sector->title}}</h3>
            <div class="card-toolbar">
                <a href="{{route('admin.sectors.edit', $sector->id)}}" class="btn btn-sm btn-active-light-primary">ویرایش</a>
            </div>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-3">
                    <div class="border-2 border-gray-200">
                        <img class="w-100 h-auto" src="{{ asset($sector->getFirstMediaUrl()) }}" alt="">
                    </div>
                </div>
                <div class="col-9">
                    <x-backend.tabs :languages="$languages">
                        @foreach( $languages as $lang)
                            <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                                <p><strong class="text-muted">عنوان بخش: </strong>{{$sector->translate(getLocale($lang))->title}}</p>
                                <p><strong class="text-muted">محتوای بخش: </strong></p>
                                <div dir="{{ app()->getLocale() != 'fa'? 'ltr': 'rtl' }}">
                                    {!! $sector->translate(getLocale($lang))->content !!}
                                </div>
                            </div>
                        @endforeach
                    </x-backend.tabs>
                    <div class="mt-5">
                        <p><strong class="text-muted">بخش والد:</strong> {{ $sector->parent_id != 0 ? $sector->getParentSectors->title : 'بخش والد' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


