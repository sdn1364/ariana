<div class="card card-flush" x-data="{ modal:false}">
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">

    </div>
    <div class="card-body">
        <table class="table table-row-bordered" id="card">
            <thead>
            <tr>
                <th>#</th>
                <th>عنوان</th>
                <th class="cursor-pointer" wire:click="sort('created_at')">تاریخ ایجاد<i class="{{$sort == 'created_at' ?$direction == 'asc' ? 'ri-arrow-down-s-fill':'ri-arrow-up-s-fill' : ''}}"></i></th>
                <th class="cursor-pointer" wire:click="sort('updated_at')">تاریخ ویرایش<i class="{{$sort == 'updated_at' ?$direction == 'asc' ? 'ri-arrow-down-s-fill':'ri-arrow-up-s-fill' : ''}}"></i></th>
                <th>
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse($applications as $application)
                <tr>
                    <td class="ss02"> {{$loop->iteration + (($applications->currentPage()-1) * $applications->perPage())}}</td>
                    <td><a href="#" wire:click.prevent="showRequest({{$application->id}})" @click.prevent="modal = true">{{$application->title}}</a></td>
                    <td class="ss02">{{$application->cdate_for_humans}}</td>
                    <td class="ss02">{{$application->updated_at->format('y-m-d - h:i')}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">
                        رکوردی برای نمایش وجود ندارد.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <div class="row">
            @if($applications->count() > 0)
                <div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start gap-5">
                    <label for="">
                        <select class="ss02 form-select form-select-sm form-select-solid" name="" id="" wire:model="paginationNumber">
                            <option class="ss02" value="10">10</option>
                            <option class="ss02" value="25">25</option>
                            <option class="ss02" value="50">50</option>
                        </select>
                    </label>
                    <label class="ss02">نمایش {{  $applications->total() < 10 ? $applications->total() : $paginationNumber * ($applications->currentPage())  }} رکورد از {{$applications->total()}} رکورد</label>
                </div>
            @endif
            <div class="ss02 col-sm-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-end">
                {{ $applications->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
    <form wire:submit.prevent="save({{ $innovationApplication->id ?? '' }})" class="modal" tabindex="-1" :class="modal ? 'd-block' : ''" x-transition>
        <div class="modal-dialog modal-fullscreen" @click.away="modal = false">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between">
                    <div>
                        <button class="btn btn-sm btn-light-primary">دانلود PDF</button>
                    </div>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" @click=" modal = false " aria-label="Close">
                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"/>
                                <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"/>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            @if($innovationApplication)
                                <div class="row">
                                    <div class="col"><p><b>عنوان ایده:</b> {{$innovationApplication->title}}</p></div>
                                    <div class="col"><p><b>نام و نام خانوادگی:</b> {{$innovationApplication->fullname}}</p></div>
                                </div>
                                <div class="row">
                                    <div class="col"><p><b>عنوان ارگانی:</b> {{$innovationApplication->organizational_title}}</p></div>
                                    <div class="col"><p><b>نام شرکت:</b> {{$innovationApplication->company_name}}</p></div>
                                </div>
                                <div class="row">
                                    <div class="col"><p><b>پست الکترونیک:</b> {{$innovationApplication->email}}</p></div>
                                    <div class="col"><p><b>شماره تلفن:</b> {{$innovationApplication->phone_number}}</p></div>
                                </div>
                                <div class="row">
                                    <div class="col"><p><b>زمینه فناوری:</b> {{$innovationApplication->field}}</p></div>
                                    <div class="col"><p><b>زمینه استفاده:</b> {{$innovationApplication->usage}}</p></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>توضیح پروپوزال:</b>
                                        <p>{{$innovationApplication->explanation}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p><b>وبسایت:</b> {{$innovationApplication->sample}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>توضیح مشکلی که این موضوع حل می‌کند:</b>
                                        <p>{{$innovationApplication->description}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>شرایط ایده‌آل: </b>
                                        <p>{{$innovationApplication->conditions}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>منافع پروپوزال: </b>
                                        <p>{{$innovationApplication->benefits}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>موانع سر راه انجام پروژه: </b>
                                        <p>{{$innovationApplication->obstacles}}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <div class="mb-5">
                                <label for="" class="form-label">مرحله در حال بررسی</label>
                                <select class="form-control" wire:model="level" name="" id="">
                                    <option value="">انتخاب کنید</option>
                                    @foreach($innovations as $innovation)
                                        <option value="{{$innovation->id}}">{{$innovation->translate('fa')->text}}</option>
                                    @endforeach
                                </select>
                                @error('level')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="" class="form-label">وضعیت</label>
                                <select class="form-control" wire:model="status" name="">
                                    <option value="">انتخاب کنید</option>
                                    <option value="pending">در حال بررسی</option>
                                    <option value="accepted">قبول</option>
                                    <option value="rejected">رد</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div >
                                <label class="form-label" for="">دلیل رد پروپوزال:</label>
                                <textarea class="form-control" wire:model="reason" name="reason" id="" cols="30" rows="10"></textarea>
                                @error('reason')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-success" @click=" modal = false ">ذخیره</button>
                    <button type="button" class="btn btn-sm btn-danger" @click=" modal = false ">لغو</button>
                </div>
            </div>
        </div>
    </form>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    @endpush
</div>
