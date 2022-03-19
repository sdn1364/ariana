@extends('layouts.admin')
@section('admin-title', 'لیست مشاغل')
@section('admin-page-title', 'لیست مشاغل')
@section('admin-page-description', 'در این صفحه لیست مشاغل را می‌توانید مدیریت کنید.')

@section('admin-page-toolbar')
    <a href="{{route('admin.careers.create')}}" class="btn btn-sm btn-primary">شغل جدید</a>
@endsection

@php
    $properties =[
            'headers' => [
                            0 => [
                                    'name' => 'شغل',
                                    'field' => 'title'
                                ],
                           ],
            'model' => 'App\Models\careers\Career',
            'searchable'=>['title'],
            'route' => 'careers'
    ];
@endphp

@section('content')
    <div class="mb-5">
        @livewire('backend.career-content')
    </div>
    @livewire('backend.datatable',$properties)
@endsection


