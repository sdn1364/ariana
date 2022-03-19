@extends('layouts.admin')

@section('admin-title', 'لیست اسلایدهای صفحه اصلی')

@section('admin-page-title', 'لیست اسلایدهای صفحه اصلی')
@section('admin-page-description', 'لیست اسلایدهای صفحه اصلی را در این صفحه می‌توانید مدیریت کنید')

@section('admin-page-toolbar')

    <a href="{{route('admin.slideshows.create')}}" class="btn btn-sm btn-primary">اسلاید جدید</a>

@endsection
@php
    $properties =[
            'headers' => [
                            0 => [
                                    'name' => 'نام',
                                    'field' => 'name'
                                ],
                           ],
            'model' => 'App\Models\slides\Slide',
            'searchable'=>['name'],
    ];
@endphp
@section('content')
    @livewire('admin.datatable',$properties)
@endsection
