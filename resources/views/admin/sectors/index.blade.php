@extends('layouts.admin')
@section('admin-title', 'لیست بخش‌ها')
@section('admin-page-title', 'لیست بخش‌ها')
@section('admin-page-description', 'در این صفحه لیست بخش‌های (sectors) سایت را می‌توانید مدیریت کنید.')

@section('admin-page-toolbar')
    <a href="{{route('admin.sectors.create')}}" class="btn btn-sm btn-primary">بخش جدید</a>
@endsection

@php
    $properties =[
            'headers' => [
                            0 => [
                                    'name' => 'نام',
                                    'field' => 'title'
                                ],
                           ],
            'model' => 'App\Models\sectors\Sector',
            'searchable'=>['title'],
            'route' => 'sectors'
    ];
@endphp

@section('content')
    <div class="mb-5">
        @livewire('backend.sector-content')
    </div>
    @livewire('backend.datatable',$properties)
@endsection


