@extends('layouts.admin')
@section('admin-title', 'خدمت '.$service->title)
@section('admin-page-title', 'خدمت '.$service->title)

@section('content')

    <div class="card card-flush mb-5">
        <div class="card-header">
            <h3 class="card-title"> خدمت {{$service->title}}</h3>
            <div class="card-toolbar">
                <a href="{{route('admin.faqs.show', $service->id)}}" class="btn btn-sm btn-active-light-primary">نمایش سوالات متداول</a>
                <a href="{{route('admin.services.edit', $service->id)}}" class="btn btn-sm btn-active-light-primary">ویرایش</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <div class="">
                        <img class="img-thumbnail img-fluid" src="{{ asset($service->getFirstMediaUrl()) }}" alt="">
                    </div>
                </div>
                <div class="col-9">
                    <x-backend.tabs :languages="$languages">
                        @foreach($languages as $lang)
                            <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                                <p><strong class="text-muted">عنوان بخش: </strong>{{$service->translate(getLocale($lang))->title}}</p>
                                <p><strong class="text-muted">محتوای بخش: </strong></p>
                                <div dir="{{ app()->getLocale() != 'fa'? 'ltr': 'rtl' }}">
                                    {!! $service->translate(getLocale($lang))->content !!}
                                </div>
                            </div>
                        @endforeach
                    </x-backend.tabs>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-flush">
        <div class="card-header">
            <h3 class="card-title">سوالات متداول مربوط به این بخش</h3>
            <div class="card-toolbar">
                <a href="{{route('admin.faqs.create')}}" class="btn btn-sm btn-active-light-primary">سوال جدید</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-row-bordered" id="card">
                <thead>
                <tr>
                    <th>#</th>
                    <th>سوال</th>
                    <th>جواب</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @forelse($records as $record)
                    <tr>
                        <td class="ss02"> {{$loop->iteration + (($records->currentPage()-1) * $records->perPage())}}</td>

                        <td class="ss02">{$record->question}</td>
                        <td class="ss02">{$record->answer}</td>
                        <td class=" d-flex justify-content-end w-fit bg-red-500">
                            <a href="{{ route('admin.faqs.edit', $record->id)}}" class="btn btn-sm btn-icon btn-active-light-info p-2"><i class="ri-edit-box-line"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">
                            رکوردی برای نمایش وجود ندارد.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection


