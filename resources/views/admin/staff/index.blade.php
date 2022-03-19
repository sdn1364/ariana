@extends('layouts.admin')
@section('admin-title', 'لیست کارمندان')
@section('admin-page-title', 'لیست کارمندان')
@section('admin-page-description', 'در این صفحه لیست قسمت کارمندان سایت را می‌توانید مدیریت کنید.')

@section('admin-page-toolbar')
    <a href="{{route('admin.staffs.create')}}" class="btn btn-sm btn-primary">کارمند جدید</a>
@endsection

@php
    $properties =[
            'headers' => [
                            0 => [
                                    'name' => 'نام',
                                    'field' => 'name'
                                ],
                           ],
            'model' => 'App\Models\staffs\Staff',
            'searchable'=>['title'],
            'route' => 'staffs'
    ];
@endphp

@section('content')

    @livewire('backend.datatable',$properties)
@endsection


