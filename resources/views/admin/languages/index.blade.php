@extends('layouts.admin')
@section('admin-page-title', 'زبان‌های سایت')
@section('admin-title', 'زبان‌های سایت')
@section('admin-page-description', 'تعیین زبان‌های موجود در سایت')

@section('content')
    @livewire('backend.language-table')
@endsection
