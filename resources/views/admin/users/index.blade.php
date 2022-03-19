@extends('layouts.admin')
@section('admin-title', 'لیست مدیران')
@section('admin-page-title', 'لیست مدیران')
@section('admin-page-toolbar')
    <a class="btn btn-primary btn-sm" href="{{route('admin.users.create')}}">مدیر جدید</a>
@endsection
@section('admin-page-description', 'لیست مدیران کنترل پنل وبسایت')
@php
    $properties =[
            'headers' => [
                            0 => [
                                    'name' => 'نام',
                                    'field' => 'fullname'
                                ],
                            1 => [
                                    'name' => 'پست الکترونیک',
                                    'field' => 'email'
                                ],
                           ],
            'model' => 'App\Models\User',
            'searchable'=>['name','email'],
            'route'=> 'users'
    ];
@endphp

@section('content')
    @livewire('admin.datatable',$properties)
@endsection
