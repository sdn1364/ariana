@extends('layouts.admin')
@section('admin-title', 'مرحله '.$innovation->title)
@section('admin-page-title', 'مرحله '.$innovation->title)

@section('content')

    <div class="card card-flush">
        <div class="card-header">
            <h3 class="card-title"> مرحله {{$innovation->title}}</h3>
            <div class="card-toolbar">
                <a href="{{route('admin.sectors.edit', $innovation->id)}}" class="btn btn-sm btn-active-light-primary">ویرایش</a>
            </div>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-3">
                    <div class="border-2 border-gray-200">
                        <img class="img-thumbnail img-fluid" src="{{ asset($innovation->getFirstMediaUrl()) }}" alt="">
                    </div>
                </div>
                <div class="col-9">
                    <x-backend.tabs :languages="$languages">
                        @foreach( $languages as $lang)
                            <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                                <p><strong class="text-muted">متن مرحله: </strong></p>
                                <div dir="{{ app()->getLocale() != 'fa'? 'ltr': 'rtl' }}">
                                    {!! $innovation->translate(getLocale($lang))->text !!}
                                </div>
                            </div>
                        @endforeach
                    </x-backend.tabs>
                    <div class="mt-5">
                        <p><strong class="text-muted">لینک:</strong> {{ $innovation->link }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


