<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="flex-wrap mb-5 page-title d-flex align-items-center me-3 mb-lg-0">
                <h1 class="my-1 d-flex align-items-center text-dark fw-bolder fs-3">@yield('admin-page-title')
                    <span class="mx-2 border-gray-200 h-20px border-start ms-3"></span>
                    <small class="my-1 text-muted fs-7 fw-bold ms-1">@yield('admin-page-description')</small>
                </h1>
            </div>
            <div class="gap-2 d-flex align-items-center gap-lg-3">
                @yield('admin-page-toolbar')
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid">
        <div id="kt_content_container" class="container-xxl">
            @include('admin.partials.flashMessages')

            @yield('content')
        </div>
    </div>
</div>
