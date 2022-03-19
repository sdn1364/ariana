@extends('layouts.admin')
@section('admin-title','دسترسی جدید')
@section('admin-page-title', 'دسترسی جدید')
@section('admin-page-description', 'در این صفحه می‌توانید دسترسی‌های جدید بسازید.')
@section('content')
    <form action="{{route('admin.permissions.store')}}" method="post">
        @method('post')
        @csrf
        <div class="card">
            <div class="card-heading">
                <h3 class="card-title">دسترسی جدید</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-lable">نام دسترسی</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="" class="form-label">نوع دسترسی</label>
                        <select name="type" id="" class="form-select">
                            <option value="">انتخاب کنید</option>
                            <option value="create">ساخت</option>
                            <option value="edit">ویرایش</option>
                            <option value="show">نمایش</option>
                            <option value="delete">خذف</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="" class="form-label">نوع دسترسی</label>
                        <select name="category" id="" class="form-select">
                            <option value="">انتخاب کنید</option>
                            <option value="sector">سکتور</option>
                            <option value="page">صفحه</option>
                            <option value="tag">تگ</option>
                            <option value="press">اخبار</option>
                            <option value="project">پروژه</option>
                            <option value="user">کاربران</option>
                            <option value="vendor">تامین‌کننده</option>
                            <option value="admin">مدیران</option>
                            <option value="service">خدمات</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success btn-sm" type="submit">ذخیره</button>
            </div>
        </div>
    </form>
@endsection
