@extends('layouts.admin')
@section('admin-title', 'ویرایش سوال و جواب')
@section('admin-page-title', 'ویرایش سوال و جواب')
@section('content')
    <form action="{{ route('admin.faqs.update', $faq->id) }}" method="post">
        @csrf
        @method('put')
        <div class="card card-flush">
            <div class="card-header">
                <h3 class="card-title">ویرایش سوال و جواب</h3>
            </div>
            <div class="card-body">
                <x-backend.tabs :languages="$languages">
                    @foreach( $languages as $lang )
                        <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                            <x-backend.input.group :lang="$lang" label="سوال" :error="$errors->first('question')">
                                <x-backend.input.textarea :editing="$faq" name="question"></x-backend.input.textarea>
                            </x-backend.input.group>

                            <x-backend.input.group :lang="$lang" label="جواب" :error="$errors->first('answer')">
                                <x-backend.input.textarea :editing="$faq" name="answer"></x-backend.input.textarea>
                            </x-backend.input.group>
                        </div>
                    @endforeach
                </x-backend.tabs>
                <x-backend.input.group label="مربوط به خدمت" :error="$errors->first('service_id')">
                    <x-backend.input.select type="select" name="service_id">
                        @foreach($questioners as $questioner)
                            <option value="{{$questioner->id}}" {{$faq->service_id == $questioner->id ? 'selected': ''}}>{{$questioner->title}}</option>
                        @endforeach
                    </x-backend.input.select>
                </x-backend.input.group>
            </div>
            <div class="card-footer">
                <button class="btn btn-success btn-sm" type="submit" name="action" >ذخیره</button>
            </div>
        </div>
    </form>
@endsection
