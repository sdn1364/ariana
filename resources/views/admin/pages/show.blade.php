@extends('layouts.admin')

@section('admin-title', 'ویرایش صفحه')
@section('admin-page-title', 'ویرایش صفحه')
@section('admin-page-description', 'در این بخش می‌توانید صفحه مورد نظر را ویرایش کنید.')

@section('content')
    @livewire('backend.pagemaker.page-creator', ['page_id' => $page->id])
@endsection

@push('styles')
    <style>
        :root {
            --ck-font-face: dana !important;
        }

        .preview-pane {
            margin-top: 50px;
        }

        .module {
            min-height: 50px;
        }

        .moduleContent {
            width: 100%;
            min-height: 25px;
            display: flex;
            flex-direction: column;
            border-radius:  0.475rem;
        }
        .module .name {
            width: fit-content;
            min-height: 25px;
            line-height: 25px;
            vertical-align: middle;
            border-radius: 0.475rem ;
        }
        .sizes{
            width: fit-content;
            display: none;
            list-style: none;
            border-radius: 0.475rem;
        }
        .sizes.active{
            display: flex;
        }
    </style>
@endpush
