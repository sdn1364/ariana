@extends('layouts.admin')
@section('admin-title', 'لیست اخبار')
@section('admin-page-title', 'لیست اخبار')
@section('admin-page-description', 'در این صفحه لیست اخبار سایت را می‌توانید مدیریت کنید.')

@section('admin-page-toolbar')
    <a href="{{route('admin.presses.create')}}" class="btn btn-sm btn-primary">خبر جدید</a>
@endsection

@php
    $properties =[
            'headers' => [
                            0 => [
                                    'name' => 'عنوان خبر',
                                    'field' => 'title'
                                ],
                           ],
            'model' => 'App\Models\presses\Press',
            'searchable'=>['title'],
            'route' => 'presses'
    ];
@endphp

@section('content')
    @livewire('backend.datatable',$properties)
@endsection


