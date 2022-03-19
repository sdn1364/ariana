<div class="row">
    <div class="col-4">
        <form wire:submit.prevent="save">
            <div class="shadow-sm card card-flush">

                <div class="card-header">
                    <h3 class="card-title">
                        زبان جدید
                    </h3>
                </div>
                <div class="card-body">

                    <div>
                        <label for="" class="form-label">زبان مورد نظر خود را انتخاب کنید</label>

                        <select class="form-control selectpicker" wire:model="language">
                            <option value="">انتخاب زبان</option>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                @php $name = $localeCode.', '.$properties['native'] @endphp

                                @if(!$languages->contains('language', $name))
                                    <option value="{{$localeCode}}, {{$properties['native']}}" data-icon="fi fi-{{$localeCode}} fas {{app()->getLocale() === 'fa' ? 'ml-2': 'mr-2'}}">
                                        {{ $localeCode}} - {{ $properties['native'] }}
                                    </option>
                                @endif

                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">ذخیره</button>
                </div>
            </div>
        </form>

    </div>
    <div class="col-8">
        <div class="shadow-sm card card-flush">
            <div class="gap-2 py-5 card-header align-items-center gap-md-5">
                <h3 class="card-title">زبان‌های سایت</h3>
                <div class="card-toolbar">
                    <div wire:loading wire:target="file">کمی صبر کنید... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></div>

                    <button wire:click="downloadFile()" class="btn btn-sm btn-active-light-primary">دانلود فایل سمپل</button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-row-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>نام</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($languages as $key=>$lang)
                        <tr>
                            <td class="ss02">{{$loop->iteration}}</td>
                            <td>{{$lang->language}}</td>
                            <td class="gap-5 d-flex justify-content-end align-items-center">
                                @if( Lang::has('site_name',explode(',',$lang->language)[0]) )
                                    <button class="fs-8 fw-light btn btn-sm btn-active-light-danger" wire:click="deleteTranslationFile({{$lang->id}})">حذف فایل ترجمه</button>
                                @else
                                    <livewire:backend.language-upload :lang="$lang" :wire:key="'language-'.$key"/>
                                @endif
                                <button wire:click="delete({{$lang->id}})" class="btn btn-icon btn-sm btn-active-light-danger"><i class="ri-delete-bin-line"></i></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                رکوردی برای نمایش وجود ندارد
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
