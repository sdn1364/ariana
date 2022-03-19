@extends('layouts.admin')
@section('admin-title', 'لیست نقش‌ها')
@section('admin-page-title', 'لیست نقش‌ها')
@section('admin-page-description', 'لیست نقش‌هایی که به امکانات سایت دسترسی دارند')
@section('admin-page-toolbar')
    <a class="btn btn-sm btn-primary" href="{{route('admin.roles.create')}}">نقش جدید</a>
@endsection
@php
    $properties =[
            'headers' => [
                            0 => [
                                    'name' => 'نام',
                                    'field' => 'name'
                                ],
                           ],
            'model' => 'App\Models\User',
            'searchable'=>['name'],
    ];

@endphp
@section('content')
    @livewire('admin.datatable',$properties)
@endsection
