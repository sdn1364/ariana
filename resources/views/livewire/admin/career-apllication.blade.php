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
                    <td><a href="{{route('admin.career-applicants.show',$application->id)}}" >{{$application->fullname}}</a></td>

                    <td class="ss02">{{verta($application->created_at)->format('%B %d، %Y - H:i')}}</td>
                    <td class="ss02">{{verta($application->updated_at)->format('%B %d، %Y - H:i')}}</td>
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
    @section('scripts')
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    @endsection
</div>
