@extends('layouts.admin')
@section('admin-title', 'مدیر جدید')
@section('admin-page-title', 'مدیر جدید')
@section('content')
    <form action="{{route('admin.users.store')}}" novalidate="novalidate" method="post" enctype="multipart/form-data">
        @method('post')
        @csrf
        <div class="card card-flush">
            <div class="card-header">
                <h3 class="card-title">مدیر جدید</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <!--begin::Image input-->
                        <div class="image-input image-input-empty" data-kt-image-input="true" style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                            <!--begin::Image preview wrapper-->
                            <div class="image-input-wrapper w-125px h-125px"></div>
                            <!--end::Image preview wrapper-->

                            <!--begin::Edit button-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                   data-kt-image-input-action="change"
                                   data-bs-toggle="tooltip"
                                   data-bs-dismiss="click"
                                   title="Change avatar">
                                <i class="bi bi-pencil-fill fs-7"></i>

                                <!--begin::Inputs-->
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg"/>
                                <input type="hidden" name="avatar_remove"/>
                                <!--end::Inputs-->
                            </label>
                            <!--end::Edit button-->

                            <!--begin::Cancel button-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                  data-kt-image-input-action="cancel"
                                  data-bs-toggle="tooltip"
                                  data-bs-dismiss="click"
                                  title="Cancel avatar">
                                 <i class="bi bi-x fs-2"></i>
                             </span>
                            <!--end::Cancel button-->

                            <!--begin::Remove button-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                  data-kt-image-input-action="remove"
                                  data-bs-toggle="tooltip"
                                  data-bs-dismiss="click"
                                  title="Remove avatar">
                                 <i class="bi bi-x fs-2"></i>
                             </span>
                            <!--end::Remove button-->
                        </div>
                        <!--end::Image input-->
                    </div>
                    <div class="col-10">
                        <div class="row">
                            <div class="col-6">
                                <x-admin.input type="text" name="name" label="نام"></x-admin.input>

                            </div>
                            <div class="col-6">
                                <x-admin.input type="text" name="lastname" label="نام خانوادگی"></x-admin.input>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <x-admin.input type="text" name="email" label="پست الکترونیک"></x-admin.input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <x-admin.input type="text" textType="password" name="password" label="کلمه عبور"></x-admin.input>

                            </div>
                            <div class="col-6">
                                <x-admin.input type="text" textType="password" name="password_confirmation" label="تکرار کلمه عبور"></x-admin.input>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button class="btn btn-success" type="submit">ذخیره</button>
            </div>

        </div>
    </form>

@endsection

