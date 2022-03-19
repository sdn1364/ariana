@extends('layouts.admin')
@section('admin-title', 'لیست تماس با ما')
@section('admin-page-title', 'لیست تماس با ما')
@section('admin-page-description', 'در این صفحه لیست اخبار سایت را می‌توانید مدیریت کنید.')

@section('admin-page-toolbar')
    <a href="{{route('admin.contacts.create')}}" class="btn btn-sm btn-primary">دفتر جدید</a>
@endsection

@php
    $properties =[
            'headers' => [
                            0 => [
                                    'name' => 'نام دفتر',
                                    'field' => 'title'
                                ],
                           ],
            'model' => 'App\Models\contacts\Contact',
            'searchable'=>['title'],
            'route' => 'contacts'
    ];
@endphp

@section('content')
    @livewire('backend.datatable',$properties)
@endsection


