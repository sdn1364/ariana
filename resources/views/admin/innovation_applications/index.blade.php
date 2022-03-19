@extends('layouts.admin')
@section('admin-title', 'لیست درخواست‌های نوآوری')
@section('admin-page-title', 'لیست درخواست‌های نوآوری')
@section('admin-page-description', 'در این صفحه لیست درخواست‌های بخش نوآوری سایت را می‌توانید مدیریت کنید.')


@section('content')
    @livewire('backend.innovation-application')
@endsection



