@extends('layouts.admin')
@section('admin-title', 'شغل '.$career->title)
@section('admin-page-title', 'شغل '.$career->title)

@section('content')

    <div class="card card-flush">
        <div class="card-header">
            <h3 class="card-title">شغل {{$career->title}}</h3>
            <div class="card-toolbar">
                <a href="{{route('admin.careers.edit', $career->id)}}" class="btn btn-sm btn-active-light-primary">ویرایش</a>
            </div>
        </div>
        <div class="card-body">
            <x-backend.tabs :languages="$languages">
                @foreach($languages as $lang)
                    <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                        <p><strong class="text-muted">عنوان شغل: </strong>{{$career->translate(getLocale($lang))->title}}</p>
                        <p><strong class="text-muted">محل شغل: </strong>{{$career->translate(getLocale($lang))->location}}</p>
                        <p><strong class="text-muted">بخش مربوطه: </strong>{{$career->translate(getLocale($lang))->location}}</p>
                        <p><strong class="text-muted">خلاصه: </strong></p>
                        <div dir="{{ app()->getLocale() != 'fa'? 'ltr': 'rtl' }}" class="mb-5">
                            {!! $career->translate(getLocale($lang))->summary !!}
                        </div>
                        <p><strong class="text-muted">مسئولیت‌ها: </strong></p>
                        <div dir="{{ app()->getLocale() != 'fa'? 'ltr': 'rtl' }}" class="mb-5">
                            {!! $career->translate(getLocale($lang))->responsibilities !!}
                        </div>
                        <p><strong class="text-muted">نیازمندی‌ها: </strong></p>
                        <div dir="{{ app()->getLocale() != 'fa'? 'ltr': 'rtl' }}" class="mb-5">
                            {!! $career->translate(getLocale($lang))->requirements !!}
                        </div>
                    </div>
                @endforeach
            </x-backend.tabs>
        </div>
    </div>

@endsection


