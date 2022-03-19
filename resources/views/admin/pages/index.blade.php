@extends('layouts.admin')
@section('admin-title', 'لیست صفحه‌ها')
@section('admin-page-title', 'لیست صفحه‌ها')
@section('admin-page-description', 'در این صفحه لیست صفحه‌های سایت را می‌توانید مدیریت کنید.')

@section('admin-page-toolbar')
    <a href="{{route('admin.pages.create')}}" class="btn btn-sm btn-primary">صفحه جدید</a>
@endsection

@php
    $properties =[
            'headers' => [
                            0 => [
                                    'name' => 'عنوان',
                                    'field' => 'title'
                                ],
                           ],
            'model' => 'App\Models\pages\Page',
            'searchable'=>['title'],
            'route' => 'pages'
    ];
@endphp

@section('content')
    @livewire('backend.datatable',$properties)
@endsection


