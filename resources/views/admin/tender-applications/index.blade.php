@extends('layouts.admin')
@section('admin-title', 'لیست مناقصه‌ها')
@section('admin-page-title', ' لیست مناقصه‌ها ')

@section('content')
   <div class="card card-flush">
       <div class="card-header">
           <h3 class="card-title">لیست مناقصه‌ها</h3>
       </div>
       <div class="card-body">
           <table class="table table-row-bordered" id="card">
               <thead>
               <tr>
                   <th>#</th>
                   <th>عنوان</th>
                   <th>تعداد درخواست</th>
               </tr>
               </thead>
               <tbody>
               @foreach($tenders as $tender)
                   <tr>
                       <td>{{$loop->iteration}}</td>
                       <td><a href="{{route('admin.tender-applications.show', $tender->id)}}">{{$tender->title}}</a></td>
                       <td class="ss02">
                           {{$tender->tenderApplications->count()}}
                       </td>
                   </tr>
               @endforeach
               </tbody>
           </table>
       </div>
   </div>
@endsection
