@extends('layouts.admin')
@section('admin-title', 'لیست پروژه‌ها')
@section('admin-page-title', 'لیست پروژه‌ها')
@section('admin-page-description', 'در این صفحه لیست پروژه‌های سایت را می‌توانید مدیریت کنید.')

@section('admin-page-toolbar')
    <a href="{{route('admin.projects.create')}}" class="btn btn-sm btn-primary">پروژه جدید</a>
@endsection

@php
    $properties =[
            'headers' => [
                            0 => [
                                    'name' => 'عنوان پروژه',
                                    'field' => 'title'
                                ],
                           ],
            'model' => 'App\Models\projects\Project',
            'searchable'=>['title'],
            'route' => 'projects'
    ];
@endphp

@section('content')
    @livewire('backend.datatable',$properties)
@endsection


