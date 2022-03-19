@extends('layouts.admin')
@section('admin-title', 'لیست مناقصه‌ها')
@section('admin-page-title', ' لیست مناقصه‌ها ')

@section('content')
    <div class="card card-flush">
        <div class="card-header">
            <h3 class="card-title">جزییات درخواست‌ مربوط به {{$tender->title}}</h3>
        </div>
        <div class="card-body">
            <table class="table table-row-bordered" id="card">
                <thead>
                <tr>
                    <th>#</th>
                    <th>عنوان</th>
                </tr>
                </thead>
                <tbody>
                @foreach($applications as $application)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><a href="{{route('admin.tender-applications.edit', $application->id)}}">نمایش درخواست</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
