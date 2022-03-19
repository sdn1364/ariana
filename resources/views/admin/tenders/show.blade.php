@extends('layouts.admin')
@section('admin-title', 'مناقصه '.$tender->title)
@section('admin-page-title', 'بخش '.$tender->title)

@section('content')

    <div class="card card-flush">
        <div class="card-header">
            <h3 class="card-title"> مناقصه {{$tender->title}}</h3>
            <div class="card-toolbar">
                <a href="{{route('admin.tenders.edit', $tender->id)}}" class="btn btn-sm btn-active-light-primary">ویرایش</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <div class="border-2 border-gray-200">
                        <img class="img-fluid img-thumbnail" src="{{asset($tender->getFirstMediaUrl())}}" alt="">
                    </div>
                </div>
                <div class="col-9">
                    <x-backend.tabs :languages="$languages">
                        @foreach($languages as $lang)
                            <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                                <p><strong class="text-muted">عنوان مناقصه: </strong>{{$tender->translate(getLocale($lang))->title}}</p>
                                <p><strong class="text-muted">خلاصه مناقصه: </strong></p>
                                <div dir="{{ app()->getLocale() != 'fa'? 'ltr': 'rtl' }}">
                                    {!! $tender->translate(getLocale($lang))->brief !!}
                                </div>
                                <p><strong class="text-muted">نقش‌ها: </strong></p>
                                <div dir="{{ app()->getLocale() != 'fa'? 'ltr': 'rtl' }}">
                                    {!! $tender->translate(getLocale($lang))->brief !!}
                                </div>
                            </div>
                        @endforeach
                    </x-backend.tabs>
                    <div class="mt-5">
                        <div class="row">
                            <div class="col">
                                <p><strong class="text-muted">  مربوط به بخش:</strong>{{ $tender->sector->getParentSectors->title }} - {{ $tender->sector->title }}</p>
                            </div>
                            <div class="col">
                                <p><strong class="text-muted">  ضرب‌الاجل:</strong>{{ $tender->deadline }}</p>
                            </div>
                        </div>
                        <p class="ss02"><strong class="text-muted"> وضعیت: </strong>{!! $tender->progress == 'current'? '<span class="text-success fw-bold">در حال اجرا</span>':'<span class="text-danger fw-bold">منقضی</span>' !!}</p>
                        <div class="d-flex align-items-center justify-content-between mb-5">
                            <p class="ss02 mb-0"><strong class="text-muted"> تعداد درخواست‌ها: </strong> {{$tender->tender_applications && $tender->tender_applications->count()}}</p>
                            <a href="{{route('admin.tender-applications.show', $tender->id)}}" class="btn btn-sm btn-active-light-primary">نمایش درخواست‌ها</a>
                        </div>
                        <p class="mt-5"><strong class="text-muted">تگ‌ها: </strong></p>
                        <input class="form-control form-control-solid" readonly id="kt_tagify_1" name="tags" value="{{$tender->tags}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var input1 = document.querySelector("#kt_tagify_1");
        new Tagify(input1);
    </script>
@endpush
