@extends('layouts.admin')
@section('admin-title', 'نمایش سوال متداول')
@section('admin-page-title', 'نمایش سوال متداول')

@section('content')

    <div class="card card-flush">
        <div class="card-header">
            <h3 class="card-title">نمایش سوال متداول</h3>
            <div class="card-toolbar">
                <a href="{{route('admin.faqs.edit', $faq->id)}}" class="btn btn-sm btn-active-light-primary">ویرایش</a>
            </div>
        </div>
        <div class="card-body">
            <x-backend.tabs :languages="$languages">
                @foreach($languages as $lang)
                    <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                        <p><strong class="text-muted">عنوان سوال: </strong>{{$faq->translate(getLocale($lang))->question}}</p>
                        <p><strong class="text-muted">متن پاسخ: </strong></p>
                        <div dir="{{ app()->getLocale() != 'fa'? 'ltr': 'rtl' }}" class="mb-5">
                            {!! $faq->translate(getLocale($lang))->answer !!}
                        </div>
                    </div>
                @endforeach
            </x-backend.tabs>
            <p class="mt-5"><strong class="text-muted">مربوط به خدمت: </strong>{{ $faq->service->title }}</p>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        var input1 = document.querySelector("#kt_tagify_1");
        new Tagify(input1);
    </script>
@endpush


