@extends('layouts.admin')
@section('admin-title', 'درخواست '.$careerApplication->fullname)
@section('admin-page-title', 'درخواست '.$careerApplication->fullname)

@section('content')

    <div class="card card-flush">
        <div class="card-header">
            <h3 class="card-title"> درخواست {{$careerApplication->fullname}}</h3>

        </div>
        <div class="card-body">
            <p><strong>مربوط به شغل:</strong>{{$career->title}}</p>
            <hr>
            <p><strong>نام درخواست دهنده:</strong>{{$careerApplication->fullname}}</p>
            <p><strong>پست الکترونیک:</strong>{{$careerApplication->email}}</p>
            <p><strong>شماره تلفن:</strong>{{$careerApplication->phone}}</p>
            <a href="{{route('admin.download-resume', $careerApplication->id)}}">دانلود رزومه</a>
        </div>
    </div>

@endsection



