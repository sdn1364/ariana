@extends('layouts.admin')
@section('admin-title', 'لیست مناقصه‌ها')
@section('admin-page-title', ' لیست مناقصه‌ها ')
@section('admin-page-toolbar')
    <a href="{{route('admin.tenders.create')}}" class="btn btn-sm btn-primary">مناقصه جدید</a>
@endsection
@php
    $properties =[
            'headers' => [
                            0 => [
                                    'name' => 'عنوان',
                                    'field' => 'title',
                                ],
                           ],
            'model' => 'App\Models\tenders\Tender',
            'searchable'=>['title'],
            'route' => 'tenders',
    ];

@endphp
@section('content')
    @livewire('backend.datatable',$properties)
@endsection
