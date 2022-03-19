@extends('layouts.admin')
@section('admin-title', 'خبر '.$press->title)
@section('admin-page-title', 'خبر '.$press->title)

@section('content')

    <div class="card card-flush mb-5">
        <div class="card-header">
            <h3 class="card-title">{{$press->title}}</h3>
            <div class="card-toolbar">
                <a href="{{route('admin.presses.edit', $press->id)}}" class="btn btn-sm btn-active-light-primary">ویرایش</a>
            </div>
        </div>
        <div class="card-body">
            <x-backend.tabs :languages="$languages">
                @foreach($languages as $lang)
                    <div class="tab-pane fade {{$loop->first?'show active': ''}}" id="tsa_tab_pane_{{$lang->id}}">
                        <p><strong class="text-muted">عنوان خبر: </strong>{{$press->translate(getLocale($lang))->title}}</p>
                        <p><strong class="text-muted">متن خبر: </strong></p>
                        <div dir="{{ app()->getLocale() != 'fa'? 'ltr': 'rtl' }}" class="mb-5">
                            {!! $press->translate(getLocale($lang))->content !!}
                        </div>
                    </div>
                @endforeach
            </x-backend.tabs>
            <p class="mt-5"><strong class="text-muted">تگ‌ها: </strong></p>
            <input class="form-control form-control-solid" readonly id="kt_tagify_1" name="tags" value="{{$press->tags}}"/>
        </div>
    </div>
    <div class="card card-flush">
        <div class="card-header">
            <h3 class="card-title">گالری</h3>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($press->getMedia() as $media)
                    <div class="col-4">
                        <img class="w-100 h-auto" src="{{asset($media->getUrl())}}" alt="">
                    </div>

                @endforeach
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        var input1 = document.querySelector("#kt_tagify_1");
        new Tagify(input1);
    </script>
@endpush


