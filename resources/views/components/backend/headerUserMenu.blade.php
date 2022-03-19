
<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">

    <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
        @auth()
            <img alt="Logo" src="{{asset(auth()->user()->getFirstMediaUrl()?? '') }}"/>
        @endauth
    </div>

    <div class="py-4 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold fs-6 w-275px" data-kt-menu="true">

        <div class="px-3 menu-item">
            <div class="px-3 menu-content d-flex align-items-center">

                <div class="symbol symbol-50px me-5">
                    @auth()
                    <img alt="Logo" src="{{asset(auth()->user()->getFirstMediaUrl()?? '') }}"/>
                    @endauth
                </div>


                <div class="d-flex flex-column">
                    <div class="fw-bolder d-flex align-items-center fs-5">@auth(){{auth()->user()->name.' '.auth()->user()->lastname}}@endauth
{{--
                        <span class="px-2 py-1 badge badge-light-success fw-bolder fs-8 ms-2">Pro</span>
--}}
                    </div>
                    <a href="#" class="fw-bold text-muted text-hover-primary fs-7">@auth(){{auth()->user()->email}}@endauth</a>
                </div>

            </div>
        </div>


        <div class="my-2 separator"></div>


        <div class="px-5 menu-item">
            <a href="../../demo1/dist/account/overview.html" class="px-5 menu-link">My Profile</a>
        </div>


        <div class="px-5 menu-item">
            <a href="../../demo1/dist/apps/projects/list.html" class="px-5 menu-link">
                <span class="menu-text">My Projects</span>
                <span class="menu-badge">
														<span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
													</span>
            </a>
        </div>


        <div class="px-5 menu-item" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
            <a href="#" class="px-5 menu-link">
                <span class="menu-title">My Subscription</span>
                <span class="menu-arrow"></span>
            </a>

            <div class="py-4 menu-sub menu-sub-dropdown w-175px">

                <div class="px-3 menu-item">
                    <a href="../../demo1/dist/account/referrals.html" class="px-5 menu-link">Referrals</a>
                </div>


                <div class="px-3 menu-item">
                    <a href="../../demo1/dist/account/billing.html" class="px-5 menu-link">Billing</a>
                </div>


                <div class="px-3 menu-item">
                    <a href="../../demo1/dist/account/statements.html" class="px-5 menu-link">Payments</a>
                </div>


                <div class="px-3 menu-item">
                    <a href="../../demo1/dist/account/statements.html" class="px-5 menu-link d-flex flex-stack">Statements
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
                </div>
                <div class="my-2 separator"></div>
                <div class="px-3 menu-item">
                    <div class="px-3 menu-content">
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications"/>
                            <span class="form-check-label text-muted fs-7">Notifications</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-5 menu-item">
            <a href="../../demo1/dist/account/statements.html" class="px-5 menu-link">My Statements</a>
        </div>
        <div class="my-2 separator"></div>
        <div class="px-5 menu-item" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
            <a href="#" class="px-5 menu-link">
													<span class="menu-title position-relative">Language
													<span class="px-3 py-2 rounded fs-8 bg-light position-absolute translate-middle-y top-50 end-0">English
													<img class="w-15px h-15px rounded-1 ms-2" src="{{asset('assets/media/flags/united-states.svg')}}" alt=""/></span></span>
            </a>
            <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                <div class="px-3 menu-item">
                    <a href="../../demo1/dist/account/settings.html" class="px-5 menu-link d-flex active">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="{{asset('assets/media/flags/united-states.svg')}}" alt=""/>
														</span>English</a>
                </div>
                <div class="px-3 menu-item">
                    <a href="../../demo1/dist/account/settings.html" class="px-5 menu-link d-flex">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="{{asset('assets/media/flags/spain.svg')}}" alt=""/>
														</span>Spanish</a>
                </div>
                <div class="px-3 menu-item">
                    <a href="../../demo1/dist/account/settings.html" class="px-5 menu-link d-flex">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="{{asset('assets/media/flags/germany.svg')}}" alt=""/>
														</span>German</a>
                </div>
                <div class="px-3 menu-item">
                    <a href="../../demo1/dist/account/settings.html" class="px-5 menu-link d-flex">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="{{asset('assets/media/flags/japan.svg')}}" alt=""/>
														</span>Japanese</a>
                </div>
                <div class="px-3 menu-item">
                    <a href="../../demo1/dist/account/settings.html" class="px-5 menu-link d-flex">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="{{asset('assets/media/flags/france.svg')}}" alt=""/>
														</span>French</a>
                </div>
            </div>
        </div>
        <div class="px-5 my-1 menu-item">
            <a href="../../demo1/dist/account/settings.html" class="px-5 menu-link">Account Settings</a>
        </div>
        <div class="px-5 menu-item">
            <form id="logoutForm" action="{{route('admin.logout')}}" method="post">
                @csrf
                @method('post')
                <a onclick="document.querySelector('#logoutForm').submit()" class="px-5 menu-link btn">خروج از سیستم</a>

            </form>
        </div>
        <div class="my-2 separator"></div>
        <div class="px-5 menu-item">
            <div class="px-5 menu-content">
                <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo1/dist/index.html"/>
                    <span class="pulse-ring ms-n1"></span>
                    <span class="text-gray-600 form-check-label fs-7">Dark Mode</span>
                </label>
            </div>
        </div>
    </div>
</div>
