@if ($message = Session::get('success'))
    <!--begin::Alert-->
    <div class="alert alert-dismissible bg-light-success border border-success border-dashed
                d-flex flex-column flex-sm-row p-5 mb-10">
        <!--begin::Icon-->
        <span class="svg-icon svg-icon-2hx svg-icon-success me-4 mb-5 mb-sm-0">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
</svg>
        </span>
        <!--end::Icon-->

        <!--begin::Wrapper-->
        <div class="d-flex flex-column pe-0 pe-sm-10">
            <!--begin::Title-->
            <h5 class="mb-1">عملیات موفق بود.</h5>
            <!--end::Title-->
            <!--begin::Content-->
            <span>{{ $message }}</span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Close-->
        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
<span class="svg-icon svg-icon-success svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"/>
<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"/>
</svg></span>
        </button>
        <!--end::Close-->
    </div>
    <!--end::Alert-->
@endif

@if ($message = Session::get('error'))
    <!--begin::Alert-->
    <div class="alert alert-dismissible bg-light-danger border border-danger border-dashed
                d-flex flex-column flex-sm-row p-5 mb-10">
        <!--begin::Icon-->
        <span class="svg-icon svg-icon-2hx svg-icon-danger me-4 mb-5 mb-sm-0">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"/>
<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"/>
</svg>
        </span>
        <!--end::Icon-->

        <!--begin::Wrapper-->
        <div class="d-flex flex-column pe-0 pe-sm-10">
            <!--begin::Title-->
            <h5 class="mb-1">خطایی رخ داده است!</h5>
            <!--end::Title-->
            <!--begin::Content-->
            <span>{{ $message }}</span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Close-->
        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
<span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"/>
<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"/>
</svg></span>
        </button>
        <!--end::Close-->
    </div>
    <!--end::Alert-->
@endif

@if ($message = Session::get('warning'))
    <!--begin::Alert-->
    <div class="alert alert-dismissible bg-light-warning border border-warning border-dashed
                d-flex flex-column flex-sm-row p-5 mb-10">
        <!--begin::Icon-->
        <span class="svg-icon svg-icon-2hx svg-icon-warning me-4 mb-5 mb-sm-0">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
<rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"/>
<rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="black"/>
</svg>
        </span>
        <!--end::Icon-->

        <!--begin::Wrapper-->
        <div class="d-flex flex-column pe-0 pe-sm-10">
            <!--begin::Title-->
            <h5 class="mb-1">مراقب باشید!</h5>
            <!--end::Title-->
            <!--begin::Content-->
            <span>{{ $message }}</span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Close-->
        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
<span class="svg-icon svg-icon-warning svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"/>
<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"/>
</svg></span>
        </button>
        <!--end::Close-->
    </div>
    <!--end::Alert-->
@endif

@if ($message = Session::get('info'))
    <!--begin::Alert-->
    <div class="alert alert-dismissible bg-light-info border border-info border-dashed
                d-flex flex-column flex-sm-row p-5 mb-10">
        <!--begin::Icon-->
        <span class="svg-icon svg-icon-2hx svg-icon-info me-4 mb-5 mb-sm-0">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
<rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"/>
<rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="black"/>
</svg>
        </span>
        <!--end::Icon-->

        <!--begin::Wrapper-->
        <div class="d-flex flex-column pe-0 pe-sm-10">
            <!--begin::Title-->
            <h5 class="mb-1">در جربان باشید!</h5>
            <!--end::Title-->
            <!--begin::Content-->
            <span>{{ $message }}</span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Close-->
        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
<span class="svg-icon svg-icon-info svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"/>
<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"/>
</svg></span>
        </button>
        <!--end::Close-->
    </div>
    <!--end::Alert-->
@endif

@if ($errors->any())
    <!--begin::Alert-->
    <div class="alert alert-dismissible bg-light-danger border border-danger border-dashed
                d-flex flex-column flex-sm-row p-5 mb-10">
        <!--begin::Icon-->
        <span class="svg-icon svg-icon-2hx svg-icon-danger me-4 mb-5 mb-sm-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"/>
                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"/>
            </svg>
        </span>
        <!--end::Icon-->

        <!--begin::Wrapper-->
        <div class="d-flex flex-column pe-0 pe-sm-10">
            <!--begin::Title-->
            <h5 class="mb-1">خطایی رخ داد</h5>
            <!--end::Title-->
            <!--begin::Content-->
            <span>لطفا فرم زیر را بررسی کنید.</span>
        @foreach($errors->all() as $err)
            {{ $err }}
        @endforeach
        <!--end::Content-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Close-->
        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
<span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"/>
<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"/>
</svg></span>
        </button>
        <!--end::Close-->
    </div>
    <!--end::Alert-->
@endif
