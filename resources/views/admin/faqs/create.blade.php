@extends('layouts.admin')
@section('admin-title', 'سوال و جواب جدید')
@section('admin-page-title', 'سوال و جواب جدید')
@section('admin-page-description', 'در این صفحه می‌توانید سوال و جواب جدید ایجاد کنید.')
@section('content')
    <form action="{{route('admin.faqs.store')}}" method="post">
        @csrf
        @method('POST')
        <div class="card card-flush">
            <div class="card-header">
                <h3 class="card-title">سوال و جواب جدید</h3>
            </div>
            <div class="card-body">
                <x-backend.tabs :languages="$languages">
                    @foreach( $languages as $lang )
                        <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">

                            <x-backend.input.group :lang="$lang" label="سوال" :error="$errors->first('question')">
                                <x-backend.input.textarea name="question"></x-backend.input.textarea>
                            </x-backend.input.group>

                            <x-backend.input.group :lang="$lang" label="جواب" :error="$errors->first('answer')">
                                <x-backend.input.textarea name="answer"></x-backend.input.textarea>
                            </x-backend.input.group>
                        </div>
                    @endforeach
                </x-backend.tabs>

                <x-backend.input.group label="مربوط به خدمت" :error="$errors->first('service_id')">
                    <x-backend.input.select type="select" name="service_id">
                        @foreach($questioners as $questioner)
                            <option value="{{$questioner->id}}">{{$questioner->title}}</option>
                        @endforeach
                    </x-backend.input.select>
                </x-backend.input.group>
            </div>
            <div class="card-footer">
                <button class="btn btn-success btn-sm" type="submit" name="action">ذخیره</button>
                <button class="btn btn-active-light-success btn-sm " type="submit" name="action" value="newForm">ذخیره و جدید</button>
            </div>
        </div>
    </form>
@endsection
