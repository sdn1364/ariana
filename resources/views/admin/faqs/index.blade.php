@extends('layouts.admin')
@section('admin-title', 'لیست سوالات متداول')
@section('admin-page-title', ' لیست سوالات متداول')
@section('admin-page-toolbar')
    <a href="{{route('admin.faqs.create')}}" class="btn btn-sm btn-primary">سوال و جواب جدید</a>
@endsection
@php
    $properties =[
            'headers' => [
                            0 => [
                                    'name' => 'سوال',
                                    'field' => 'question',
                                    'relation' => 'questioner'
                                ],
                           ],
            'model' => 'App\Models\faqs\Faq',
            'searchable'=>['name'],
            'route' => 'faqs',
    ];

@endphp
@section('content')
    @livewire('backend.datatable',$properties)
@endsection
