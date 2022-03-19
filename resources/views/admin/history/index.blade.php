
@extends('layouts.admin')
@section('admin-title', 'لیست تاریخچه')
@section('admin-page-title', 'لیست تاریخچه')
@section('admin-page-description', 'در این صفحه لیست قسمت تاریخچه سایت را می‌توانید مدیریت کنید.')

@section('admin-page-toolbar')
    <a href="{{route('admin.histories.create')}}" class="btn btn-sm btn-primary">تاریخچه جدید</a>
@endsection
@php
    $properties =[
            'headers' => [
                            0 => [
                                    'name' => 'سال',
                                    'field' => 'year'
                                ],
                           ],
            'model' => 'App\Models\Histories\History',
            'searchable'=>['title'],
            'route' => 'histories'
    ];
@endphp

@section('content')

    @livewire('backend.datatable',$properties)
@endsection


