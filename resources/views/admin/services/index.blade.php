@extends('layouts.admin')
@section('admin-title', 'لیست خدمات')
@section('admin-page-title', 'لیست خدمات')
@section('admin-page-description', 'در این صفحه می‌توانید بخش خدمات را مدیریت کنید.')
@section('admin-page-toolbar')
    <a class="btn btn-primary btn-sm" href="{{route('admin.services.create')}}">خدمت جدید</a>
@endsection
@section('admin-page-description', 'لیست مدیران کنترل پنل وبسایت')
@php
    $properties =[
            'headers' => [
                            0 => [
                                    'name' => 'عنوان',
                                    'field' => 'title'
                                ],

                           ],
            'model' => 'App\Models\services\Service',
            'searchable'=>['title','content'],
            'route' => 'services'
    ];
@endphp

@section('content')
    @livewire('backend.datatable',$properties)
@endsection
