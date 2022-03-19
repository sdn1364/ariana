 <div class="card card-flush" xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <div class="card-title">
            <div class="d-flex align-items-center position-relative my-1">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <input type="text" class="form-control form-control-sm ps-15" placeholder="جستجو کنید" wire:model="search">
            </div>
        </div>

        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <div wire:loading>کمی صبر کنید...</div>
            <button class="btn btn-sm py-2 btn-light-primary" wire:click="exportExcel()">
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black"></rect>
                        <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black"></path>
                        <path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4"></path>
                    </svg>
                </span>
                خروجی اکسل
            </button>
            <div class="w-100 mw-150px">
                <select class="form-select form-select-solid form-select-sm" name="type" wire:model="type">
                    <option value="">همه</option>
                    <option value="1">فعال</option>
                    <option value="0">غیرفعال</option>
                </select>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-row-bordered" id="card">
            <thead>
            <tr>
                <th>#</th>

                @foreach($headers as $header)

                    <th class="cursor-pointer" wire:click="sort('{{$header['field']}}')">{{$header['name']}}<i class="{{$sort == $header['field'] ? $direction == 'asc' ? 'ri-arrow-down-s-fill':'ri-arrow-up-s-fill' : ''}}"></i></th>

                @endforeach
                <th class="cursor-pointer" wire:click="sort('status')">وضعیت<i class="{{$sort == 'status' ?$direction == 'asc' ? 'ri-arrow-down-s-fill':'ri-arrow-up-s-fill' : ''}}"></i></th>
                <th class="cursor-pointer" wire:click="sort('created_at')">تاریخ ایجاد<i class="{{$sort == 'created_at' ?$direction == 'asc' ? 'ri-arrow-down-s-fill':'ri-arrow-up-s-fill' : ''}}"></i></th>
                <th class="cursor-pointer" wire:click="sort('updated_at')">تاریخ ویرایش<i class="{{$sort == 'updated_at' ?$direction == 'asc' ? 'ri-arrow-down-s-fill':'ri-arrow-up-s-fill' : ''}}"></i></th>
                <th>
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse($records as $record)
                <tr>
                    <td class="ss02"> {{$loop->iteration + (($records->currentPage()-1) * $records->perPage())}}</td>

                    @foreach($headers as $header)
                        <td class="ss02">
                            @if($loop->first)
                                <a href="{{ route('admin.'.$route.'.show', $record->id) }}">{{ $record[$header['field']] }}</a>

                            @else
                                {{ $record[$header['field']] }}
                            @endif
                        </td>
                    @endforeach

                    <td>
                        <div class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input h-20px w-30px" type="checkbox" value="" {{$record->status == 1 ? 'checked': 'unchecked'}} wire:click="toggleStatus({{$record->id}})"/>
                        </div>
                    </td>
                    <td class="ss02">{{verta($record->translate()->created_at)->format('%B %d، %Y - H:i')}}</td>
                    <td class="ss02">{{verta($record->translate()->updated_at)->format('%B %d، %Y - H:i')}}</td>
                    <td class=" d-flex justify-content-end w-fit bg-red-500">
                        <a href="{{route('admin.'.$route.'.edit', $record->id)}}" class="btn btn-sm btn-icon btn-active-light-info p-2"><i class="ri-edit-box-line"></i></a>

                        <button class="btn btn-sm btn-icon btn-active-light-danger p-2" wire:click="delete({{$record->id}})"><i class="ri-delete-bin-line"></i></button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="{{ count($headers) + 5}}" class="text-center">
                        رکوردی برای نمایش وجود ندارد.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <div class="row">
            @if($records->count() > 0)
                <div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start gap-5">
                    <label for="">
                        <select class="ss02 form-select form-select-sm form-select-solid" name="" id="" wire:model="paginationNumber">
                            <option class="ss02" value="10">10</option>
                            <option class="ss02" value="25">25</option>
                            <option class="ss02" value="50">50</option>
                        </select>
                    </label>
                    <label class="ss02">نمایش {{  $records->total() < 10 ? $records->total() : $paginationNumber * ($records->currentPage())  }} رکورد از {{$records->total()}} رکورد</label>
                </div>
            @endif
            <div class="ss02 col-sm-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-end">
                {{ $records->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
</div>
