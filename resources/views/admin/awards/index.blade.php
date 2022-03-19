@extends('layouts.admin')
@section('admin-title', 'لیست جوایز و گواهی‌ها')
@section('admin-page-title', 'لیست جوایز و گواهی‌ها')
@section('admin-page-description', 'در این صفحه لیست قسمت جوایز و گواهی‌های سایت را می‌توانید مدیریت کنید.')

@section('admin-page-toolbar')
    <a href="{{route('admin.awards.create')}}" class="btn btn-sm btn-primary">گواهی یا جایزه جدید</a>
@endsection

@php
    $properties =[
            'headers' => [
                            0 => [
                                    'name' => 'عنوان',
                                    'field' => 'content'
                                ],
                           ],
            'model' => 'App\Models\awards\Award',
            'searchable'=>['title'],
            'route' => 'awards'
    ];
@endphp

@section('content')

    @livewire('backend.datatable',$properties)
@endsection


