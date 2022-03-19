@extends('layouts.admin')
@section('admin-title', 'لیست دسترسی‌ها')
@section('admin-page-title', 'لیست دسترسی‌ها')
@section('admin-page-description', 'در این صفحه می‌توانید نوع دسترسی‌ها را تعیین کنید.')

@section('admin-page-toolbar')
    <a class="btn btn-primary btn-sm" href="{{route('admin.permissions.create')}}">دسترسی جدید</a>
@endsection
@section('content')
@endsection
