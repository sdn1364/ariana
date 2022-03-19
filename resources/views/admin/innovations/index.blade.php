@extends('layouts.admin')
@section('admin-title', 'لیست مراحل نوآوری')
@section('admin-page-title', 'لیست مراحل نوآوری')
@section('admin-page-description', 'در این صفحه لیست مراحل بخش نوآوری سایت را می‌توانید مدیریت کنید.')

@section('admin-page-toolbar')
    <a href="{{route('admin.innovations.create')}}" class="btn btn-sm btn-primary">مرحله جدید</a>
@endsection

@php
    $properties =[
            'headers' => [
                            0 => [
                                    'name' => 'عنوان',
                                    'field' => 'text'
                                ],
                           ],
            'model' => 'App\Models\innovations\Innovation',
            'searchable'=>['title'],
            'route' => 'innovations'
    ];
@endphp

@section('content')
    <div class="mb-5">
        @livewire('backend.innovation-content')
    </div>
    @livewire('backend.datatable',$properties)
@endsection



