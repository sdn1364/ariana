@extends('layouts.admin')
@section('admin-title', 'درخواست مناقصه')
@section('admin-page-title', ' درخواست مناقصه‌ها ')

@section('content')
    <div class="card card-flush">
        <div class="card-header">
            <h3 class="card-title"> درخواست‌ مربوط به {{$tender->title}}</h3>
        </div>
        <div class="card-body">
            @if($tender->type == 'constructor')
                <div class="row mb-5">
                    <div class="col-3">
                        <form action="{{route('admin.vendor_document_download')}}" method="get">
                            @csrf
                            <input type="hidden" value="{{$tenderApplication->bank}}" name="file">
                            <button type="submit" class="btn btn-light-primary w-100">دانلود مدارک بانکی</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <form action="{{route('admin.vendor_document_download')}}" method="get">
                            @csrf
                            <input type="hidden" value="{{$tenderApplication->registration}}" name="file">
                            <button type="submit" class="btn btn-light-primary w-100">دانلود مدارک ثبت شرکت</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <form action="{{route('admin.vendor_document_download')}}" method="get">
                            @csrf
                            <input type="hidden" value="{{$tenderApplication->executive_record}}" name="file">
                            <button type="submit" class="btn btn-light-primary w-100">دانلود مدارک سابقه اجرایی</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <form action="{{route('admin.vendor_document_download')}}" method="get">
                            @csrf
                            <input type="hidden" value="{{$tenderApplication->company_info}}" name="file">
                            <button type="submit" class="btn btn-light-primary w-100">دانلود تبلیغات</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <form action="{{route('admin.vendor_document_download')}}" method="get">
                            @csrf
                            <input type="hidden" value="{{$tenderApplication->company_info}}" name="file">
                            <button type="submit" class="btn btn-light-primary w-100">دانلود کاتالوگ شرکت</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <form action="{{route('admin.vendor_document_download')}}" method="get">
                            @csrf
                            <input type="hidden" value="{{$tenderApplication->certificates}}" name="file">
                            <button type="submit" class="btn btn-light-primary w-100">دانلود مجوزها</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <form action="{{route('admin.vendor_document_download')}}" method="get">
                            @csrf
                            <input type="hidden" value="{{$tenderApplication->machinery}}" name="file">
                            <button type="submit" class="btn btn-light-primary w-100">دانلود تجهیزات</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <form action="{{route('admin.vendor_document_download')}}" method="get">
                            @csrf
                            <input type="hidden" value="{{$tenderApplication->offer}}" name="file">
                            <button type="submit" class="btn btn-light-primary w-100">دانلود پیشنهاد قیمت</button>
                        </form>
                    </div>
                </div>
            @else
                <div class="row mb-5">
                    <div class="col-3">
                        <form action="{{route('admin.vendor_document_download')}}" method="get">
                            @csrf
                            <input type="hidden" value="{{$tenderApplication->bank}}" name="file">
                            <button type="submit" class="btn btn-light-primary w-100">دانلود مدارک بانکی</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <form action="{{route('admin.vendor_document_download')}}" method="get">
                            @csrf
                            <input type="hidden" value="{{$tenderApplication->registration}}" name="file">
                            <button type="submit" class="btn btn-light-primary w-100">دانلود مدارک ثبت شرکت</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <form action="{{route('admin.vendor_document_download')}}" method="get">
                            @csrf
                            <input type="hidden" value="{{$tenderApplication->product}}" name="file">
                            <button type="submit" class="btn btn-light-primary w-100">دانلود معرفی محصول</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <form action="{{route('admin.vendor_document_download')}}" method="get">
                            @csrf
                            <input type="hidden" value="{{$tenderApplication->ad}}" name="file">
                            <button type="submit" class="btn btn-light-primary w-100">دانلود تبلیغات</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <form action="{{route('admin.vendor_document_download')}}" method="get">
                            @csrf
                            <input type="hidden" value="{{$tenderApplication->company_info}}" name="file">
                            <button type="submit" class="btn btn-light-primary w-100">دانلود کاتالوگ شرکت</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <form action="{{route('admin.vendor_document_download')}}" method="get">
                            @csrf
                            <input type="hidden" value="{{$tenderApplication->certificates}}" name="file">
                            <button type="submit" class="btn btn-light-primary w-100">دانلود مجوزها</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <form action="{{route('admin.vendor_document_download')}}" method="get">
                            @csrf
                            <input type="hidden" value="{{$tenderApplication->capacity}}" name="file">
                            <button type="submit" class="btn btn-light-primary w-100">دانلود ظرفیت تولید</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <form action="{{route('admin.vendor_document_download')}}" method="get">
                            @csrf
                            <input type="hidden" value="{{$tenderApplication->offer}}" name="file">
                            <button type="submit" class="btn btn-light-primary w-100">دانلود پیشنهاد قیمت</button>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
