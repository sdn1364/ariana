@extends('layouts.admin')
@section('admin-title', 'نقش جدید');
@section('admin-page-title', 'نقش جدید')
@section('admin-page-description', 'در این صفحه می‌توانید یک نقش جدید ایجاد کنید.')
@section('content')
    <form action="{{route('admin.roles.store')}}" method="post">
        @method('post')
        @csrf
        <div class="card card-flush">
            <div class="card-header">
                <h3 class="card-title">نقش جدید</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="mb-5">
                        <label for="" class="form-label">نام نقش</label>
                        <input type="text" class="form-control" name="nickname">
                    </div>
                </div>
                <h4 class="mb-3">دسترسی‌ها</h4>
                <div class="row">
                    @foreach($permissions as $key=>$permission)
                        <fieldset class="col-md-3 mb-5">
                            <div class="bg-lighten p-5 rounded-3">
                                <div class="width-100 mb-5">
                                    <div class="form-check form-check-custom form-check-solid mb-1">
                                        <input class="form-check-input" type="checkbox" value="{{$key}}" id="{{$key}}" onchange="setPermission('{{$key}}')">
                                        <label class="form-check-label text-info" for="{{$key}}">
                                            {{$permission['name']}}:
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex gap-5">
                                    @foreach ($permission['types'] as $key=>$type)
                                        <div class="form-check form-check-inline form-check-custom form-check-solid form-check-sm">
                                            <input class="form-check-input" type="checkbox" value="{{$type}}" id="{{Str::snake($type)}}" name="permissions[]">
                                            <label class="form-check-label" for="{{Str::snake($type)}}">
                                                {{$key}}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>


                        </fieldset>
                    @endforeach
                </div>

            </div>
            <div class="card-footer">
                <button class="btn btn-sm btn-success"  type='submit'>ذخیره</button>
            </div>
        </div>
    </form>
@endsection
