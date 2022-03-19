@extends('layouts.admin')
@section('admin-title', 'بخش '.$slide->name)
@section('admin-page-title', 'بخش '.$slide->name)

@section('content')

    <div class="card card-flush">
        <div class="card-header">
            <h3 class="card-title"> اسلاید {{$slide->name}}</h3>
            <div class="card-toolbar">
                <a href="{{route('admin.slides.edit', $slide->id)}}" class="btn btn-sm btn-active-light-primary">ویرایش</a>
            </div>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-3">
                    <div class="border-2 border-gray-200">
                        <img class="w-100 h-auto" src="{{ asset($slide->getFirstMediaUrl()) }}" alt="">
                    </div>
                </div>
                <div class="col-9">
                    <x-backend.tabs :languages="$languages">
                        @foreach( $languages as $lang)
                            <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                                <p><strong class="text-muted">عنوان اسلاید: </strong>{{$slide->translate(getLocale($lang))->title}}</p>
                            </div>
                        @endforeach
                    </x-backend.tabs>
                    <div class="mt-5">
                        <p><strong class="text-muted">لینک به:</strong> {{ $slide->link }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


