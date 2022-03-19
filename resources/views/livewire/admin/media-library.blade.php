<div>
    <div class="card card-flush">
        <div class="card-header">
            <div class="card-title">
                <div class="d-flex align-items-center position-relative my-1 ">
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"/>
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"/>
                        </svg>
                    </span>
                    <input type="text" data-kt-filemanager-table-filter="search" class="form-control form-control-sm w-150px ps-15" placeholder="جستجو کنید"/>
                </div>
            </div>
            <div class="card-toolbar">
                <div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
                    @if($folderId)
                        <a href="#" wire:click.prevent="goBack()" class="btn btn-icon btn-light-primary me-3">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black"/>
                                    <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black"/>
                                    <path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4"/>
                                </svg>
                            </span>
                        </a>
                    @endif

                    <button type="button" class="btn btn-sm btn-light-primary me-3" id="kt_file_manager_new_folder">
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
                                <path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.2C9.7 3 10.2 3.20001 10.4 3.60001ZM16 12H13V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V12H8C7.4 12 7 12.4 7 13C7 13.6 7.4 14 8 14H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V14H16C16.6 14 17 13.6 17 13C17 12.4 16.6 12 16 12Z" fill="black"/>
                                <path opacity="0.3" d="M11 14H8C7.4 14 7 13.6 7 13C7 12.4 7.4 12 8 12H11V14ZM16 12H13V14H16C16.6 14 17 13.6 17 13C17 12.4 16.6 12 16 12Z" fill="black"/>
                            </svg>
                        </span>
                        پوشه جدید
                    </button>

                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
                                <path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM16 11.6L12.7 8.29999C12.3 7.89999 11.7 7.89999 11.3 8.29999L8 11.6H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V11.6H16Z" fill="black"/>
                                <path opacity="0.3" d="M11 11.6V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V11.6H11Z" fill="black"/>
                            </svg>
                        </span>
                        آپلود فایل
                    </button>
                </div>
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-filemanager-table-toolbar="selected">
                    <div class="fw-bolder me-5">
                        <span class="me-2" data-kt-filemanager-table-select="selected_count"></span>Selected
                    </div>
                    <button type="button" class="btn btn-danger" data-kt-filemanager-table-select="delete_selected">Delete Selected</button>
                </div>
            </div>
        </div>

        <div class="card-body">
            @foreach($breadcrumb as $item)
                <p>{{$item['name']}}</p>
            @endforeach
            <div class="d-flex flex-stack">

                <div class="badge badge-lg badge-light-primary">
                    <div class="d-flex align-items-center flex-wrap">
                        <a href="../../demo1/dist/apps/file-manager/folders.html">پوشه اصلی</a>
                        <span class="svg-icon svg-icon-2 svg-icon-primary mx-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black"/>
                            </svg>
                        </span>
                        <a href="../../demo1/dist/apps/file-manager/folders.html">themes</a>
                        <span class="svg-icon svg-icon-2 svg-icon-primary mx-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black"/>
                            </svg>
                        </span>
                        <a href="../../demo1/dist/apps/file-manager/folders.html">html</a>
                        <span class="svg-icon svg-icon-2 svg-icon-primary mx-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black"/>
                                </svg>
						</span>
                    </div>
                </div>
                <div class="badge badge-lg badge-primary">
                    <span id="kt_file_manager_items_counter" class="ss02">{{$folders->count()}} عنوان</span>
                </div>
            </div>
            <table id="kt_file_manager_list" data-kt-filemanager-table="folders" class="table align-middle table-row-dashed fs-6 gy-5">
                <thead>
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_file_manager_list .form-check-input" value="1"/>
                        </div>
                    </th>
                    <th class="min-w-250px">نام</th>
                    <th class="min-w-10px">حجم</th>
                    <th class="min-w-125px">آخرین ویرایش</th>
                    <th class="w-125px"></th>
                </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">
                @foreach( $folders as $folder )
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td data-order="account">
                            <div class="d-flex align-items-center">
                                <span class="svg-icon svg-icon-2x svg-icon-primary me-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
                                        <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"/>
                                    </svg>
                                </span>
                                <a href="#" wire:click.prevent="changeFolder('{{$folder->id}}')" class="text-gray-800 text-hover-primary">{{ $folder->name }}</a>
                            </div>
                        </td>
                        <td class="ss02">{{ $folder->size }}</td>
                        <td class="ss02">{{ $folder->udate_for_humans }}</td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                      d="M18.4 5.59998C18.7766 5.9772 18.9881 6.48846 18.9881 7.02148C18.9881 7.55451 18.7766 8.06577 18.4 8.44299L14.843 12C14.466 12.377 13.9547 12.5887 13.4215 12.5887C12.8883 12.5887 12.377 12.377 12 12C11.623 11.623 11.4112 11.1117 11.4112 10.5785C11.4112 10.0453 11.623 9.53399 12 9.15698L15.553 5.604C15.9302 5.22741 16.4415 5.01587 16.9745 5.01587C17.5075 5.01587 18.0188 5.22741 18.396 5.604L18.4 5.59998ZM20.528 3.47205C20.0614 3.00535 19.5074 2.63503 18.8977 2.38245C18.288 2.12987 17.6344 1.99988 16.9745 1.99988C16.3145 1.99988 15.661 2.12987 15.0513 2.38245C14.4416 2.63503 13.8876 3.00535 13.421 3.47205L9.86801 7.02502C9.40136 7.49168 9.03118 8.04568 8.77863 8.6554C8.52608 9.26511 8.39609 9.91855 8.39609 10.5785C8.39609 11.2384 8.52608 11.8919 8.77863 12.5016C9.03118 13.1113 9.40136 13.6653 9.86801 14.132C10.3347 14.5986 10.8886 14.9688 11.4984 15.2213C12.1081 15.4739 12.7616 15.6039 13.4215 15.6039C14.0815 15.6039 14.7349 15.4739 15.3446 15.2213C15.9543 14.9688 16.5084 14.5986 16.975 14.132L20.528 10.579C20.9947 10.1124 21.3649 9.55844 21.6175 8.94873C21.8701 8.33902 22.0001 7.68547 22.0001 7.02551C22.0001 6.36555 21.8701 5.71201 21.6175 5.10229C21.3649 4.49258 20.9947 3.93867 20.528 3.47205Z"
                                                      fill="black"/>
                                                <path
                                                    d="M14.132 9.86804C13.6421 9.37931 13.0561 8.99749 12.411 8.74695L12 9.15698C11.6234 9.53421 11.4119 10.0455 11.4119 10.5785C11.4119 11.1115 11.6234 11.6228 12 12C12.3766 12.3772 12.5881 12.8885 12.5881 13.4215C12.5881 13.9545 12.3766 14.4658 12 14.843L8.44699 18.396C8.06999 18.773 7.55868 18.9849 7.02551 18.9849C6.49235 18.9849 5.98101 18.773 5.604 18.396C5.227 18.019 5.0152 17.5077 5.0152 16.9745C5.0152 16.4413 5.227 15.93 5.604 15.553L8.74701 12.411C8.28705 11.233 8.28705 9.92498 8.74701 8.74695C8.10159 8.99737 7.5152 9.37919 7.02499 9.86804L3.47198 13.421C2.52954 14.3635 2.00009 15.6417 2.00009 16.9745C2.00009 18.3073 2.52957 19.5855 3.47202 20.528C4.41446 21.4704 5.69269 21.9999 7.02551 21.9999C8.35833 21.9999 9.63656 21.4704 10.579 20.528L14.132 16.975C14.5987 16.5084 14.9689 15.9544 15.2215 15.3447C15.4741 14.735 15.6041 14.0815 15.6041 13.4215C15.6041 12.7615 15.4741 12.108 15.2215 11.4983C14.9689 10.8886 14.5987 10.3347 14.132 9.86804Z"
                                                    fill="black"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-300px" data-kt-menu="true">
                                        <div class="card card-flush">
                                            <div class="card-body p-5">
                                                <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                                                    <div class="me-5" data-kt-indicator="on">
                                                        <span class="indicator-progress">
                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                        </span>
                                                    </div>
                                                    <div class="fs-6 text-dark">ایجاد لینک</div>
                                                </div>
                                                <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                                                    <div class="d-flex mb-3">
                                                        <span class="svg-icon svg-icon-2 svg-icon-success me-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="black"/>
                                                            </svg>
                                                        </span>
                                                        <div class="fs-6 text-dark">Share Link Generated</div>
                                                    </div>
                                                    <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/"/>
                                                    <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only.
                                                        <a href="../../demo1/dist/apps/file-manager/settings/.html" class="ms-2">Change permissions</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                                                <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                                                <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-150px py-4" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/file-manager/files.html" class="menu-link px-3">View</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">Rename</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Download Folder</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">Move to folder</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row" data-id="{{ $folder->id }}">حذف</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                @foreach( $files as $file )
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td data-order="account">
                            <div class="d-flex align-items-center">
                                <span class="svg-icon svg-icon-2x svg-icon-primary me-4">
                                    @if(Str::contains($file->mime, 'image'))
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="black"/>
                                    <path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="black"/>
                                    </svg>
                                    @elseif(Str::contains($file->mime, 'video'))
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 16" fill="none">
                                            <path opacity="0.3" d="M19,2H15.5v.26a.94.94,0,0,1-1,1h-9a.94.94,0,0,1-1-1V2H1A.94.94,0,0,0,0,3V17a.94.94,0,0,0,1,1H4.5v-.26a.94.94,0,0,1,1-1h9a.94.94,0,0,1,1,1V18H19a.94.94,0,0,0,1-1V3A.94.94,0,0,0,19,2ZM3.8,15.28a.94.94,0,0,1-.93.94h-1a.94.94,0,0,1-.94-.94v-1a.94.94,0,0,1,.94-.93h1a.93.93,0,0,1,.93.93Zm0-4.95a.94.94,0,0,1-.93.94h-1a.94.94,0,0,1-.94-.94v-1a.94.94,0,0,1,.94-.93h1a.93.93,0,0,1,.93.93Zm15.49,4.95a.94.94,0,0,1-.94.94h-1a.94.94,0,0,1-.94-.94v-1a.94.94,0,0,1,.94-.93h1a.94.94,0,0,1,.94.93Zm0-4.95a.94.94,0,0,1-.94.94h-1a.94.94,0,0,1-.94-.94v-1a.94.94,0,0,1,.94-.93h1a.94.94,0,0,1,.94.93ZM3.8,5.51a.94.94,0,0,1-.93.94h-1a.94.94,0,0,1-.94-.94v-1a.94.94,0,0,1,.94-.94h1a.94.94,0,0,1,.93.94Zm15.49,0a.94.94,0,0,1-.94.94h-1a.94.94,0,0,1-.94-.94v-1a.94.94,0,0,1,.94-.94h1a.94.94,0,0,1,.94.94Z" fill="black"/>
                                            <path d="M14.5,15h-9a.94.94,0,0,1-1-1V6a.94.94,0,0,1,1-1h9a.94.94,0,0,1,1,1v8A.94.94,0,0,1,14.5,15Z" fill="black"/>
                                        </svg>
                                    @elseif(Str::contains($file->mime, 'application/pdf'))
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="black"/>
                                            <rect x="7" y="17" width="6" height="2" rx="1" fill="black"/>
                                            <rect x="7" y="12" width="10" height="2" rx="1" fill="black"/>
                                            <rect x="7" y="7" width="6" height="2" rx="1" fill="black"/>
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"/>
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="black"/>
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"/>
                                        </svg>
                                    @endif
                                </span>
                                <a href="" class="text-gray-800 text-hover-primary">{{ $file->alias }}</a>
                            </div>
                        </td>
                        <td class="ss02">{{ $file->humanSize() }}</td>
                        <td class="ss02">{{ $file->udate_for_humans }}</td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                      d="M18.4 5.59998C18.7766 5.9772 18.9881 6.48846 18.9881 7.02148C18.9881 7.55451 18.7766 8.06577 18.4 8.44299L14.843 12C14.466 12.377 13.9547 12.5887 13.4215 12.5887C12.8883 12.5887 12.377 12.377 12 12C11.623 11.623 11.4112 11.1117 11.4112 10.5785C11.4112 10.0453 11.623 9.53399 12 9.15698L15.553 5.604C15.9302 5.22741 16.4415 5.01587 16.9745 5.01587C17.5075 5.01587 18.0188 5.22741 18.396 5.604L18.4 5.59998ZM20.528 3.47205C20.0614 3.00535 19.5074 2.63503 18.8977 2.38245C18.288 2.12987 17.6344 1.99988 16.9745 1.99988C16.3145 1.99988 15.661 2.12987 15.0513 2.38245C14.4416 2.63503 13.8876 3.00535 13.421 3.47205L9.86801 7.02502C9.40136 7.49168 9.03118 8.04568 8.77863 8.6554C8.52608 9.26511 8.39609 9.91855 8.39609 10.5785C8.39609 11.2384 8.52608 11.8919 8.77863 12.5016C9.03118 13.1113 9.40136 13.6653 9.86801 14.132C10.3347 14.5986 10.8886 14.9688 11.4984 15.2213C12.1081 15.4739 12.7616 15.6039 13.4215 15.6039C14.0815 15.6039 14.7349 15.4739 15.3446 15.2213C15.9543 14.9688 16.5084 14.5986 16.975 14.132L20.528 10.579C20.9947 10.1124 21.3649 9.55844 21.6175 8.94873C21.8701 8.33902 22.0001 7.68547 22.0001 7.02551C22.0001 6.36555 21.8701 5.71201 21.6175 5.10229C21.3649 4.49258 20.9947 3.93867 20.528 3.47205Z"
                                                      fill="black"/>
                                                <path
                                                    d="M14.132 9.86804C13.6421 9.37931 13.0561 8.99749 12.411 8.74695L12 9.15698C11.6234 9.53421 11.4119 10.0455 11.4119 10.5785C11.4119 11.1115 11.6234 11.6228 12 12C12.3766 12.3772 12.5881 12.8885 12.5881 13.4215C12.5881 13.9545 12.3766 14.4658 12 14.843L8.44699 18.396C8.06999 18.773 7.55868 18.9849 7.02551 18.9849C6.49235 18.9849 5.98101 18.773 5.604 18.396C5.227 18.019 5.0152 17.5077 5.0152 16.9745C5.0152 16.4413 5.227 15.93 5.604 15.553L8.74701 12.411C8.28705 11.233 8.28705 9.92498 8.74701 8.74695C8.10159 8.99737 7.5152 9.37919 7.02499 9.86804L3.47198 13.421C2.52954 14.3635 2.00009 15.6417 2.00009 16.9745C2.00009 18.3073 2.52957 19.5855 3.47202 20.528C4.41446 21.4704 5.69269 21.9999 7.02551 21.9999C8.35833 21.9999 9.63656 21.4704 10.579 20.528L14.132 16.975C14.5987 16.5084 14.9689 15.9544 15.2215 15.3447C15.4741 14.735 15.6041 14.0815 15.6041 13.4215C15.6041 12.7615 15.4741 12.108 15.2215 11.4983C14.9689 10.8886 14.5987 10.3347 14.132 9.86804Z"
                                                    fill="black"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-300px" data-kt-menu="true">
                                        <div class="card card-flush">
                                            <div class="card-body p-5">
                                                <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                                                    <div class="me-5" data-kt-indicator="on">
                                                        <span class="indicator-progress">
                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                        </span>
                                                    </div>
                                                    <div class="fs-6 text-dark">ایجاد لینک</div>
                                                </div>
                                                <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                                                    <div class="d-flex mb-3">
                                                        <span class="svg-icon svg-icon-2 svg-icon-success me-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="black"/>
                                                            </svg>
                                                        </span>
                                                        <div class="fs-6 text-dark">Share Link Generated</div>
                                                    </div>
                                                    <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/"/>
                                                    <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only.
                                                        <a href="../../demo1/dist/apps/file-manager/settings/.html" class="ms-2">Change permissions</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                                                <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                                                <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-150px py-4" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/file-manager/files.html" class="menu-link px-3">View</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">Rename</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Download Folder</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">Move to folder</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row" data-id="{{ $file->id }}">حذف</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <table class="d-none">
        <tr id="kt_file_manager_new_folder_row" data-kt-filemanager-template="upload">
            <td></td>
            <td id="kt_file_manager_add_folder_form" class="fv-row">
                <div class="d-flex align-items-center">
                    <span class="svg-icon svg-icon-2x svg-icon-primary me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
                            <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"/>
                        </svg>
                    </span>

                    <input type="text" name="new_folder_name" placeholder="نام پوشه را وارد کنید" class="form-control mw-250px me-3"/>

                    <button class="btn btn-icon btn-light-primary me-3" id="kt_file_manager_add_folder">
                        <span class="indicator-label">
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="black"/>
                                </svg>
                            </span>
                        </span>
                        <span class="indicator-progress">
                            <span class="spinner-border spinner-border-sm align-middle"></span>
                        </span>
                    </button>

                    <button class="btn btn-icon btn-light-danger" id="kt_file_manager_cancel_folder">
                        <span class="indicator-label">
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"/>
                                    <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"/>
                                </svg>
                            </span>
                        </span>
                        <span class="indicator-progress">
                            <span class="spinner-border spinner-border-sm align-middle"></span>
                        </span>
                    </button>
                </div>
            </td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <div class="d-none" data-kt-filemanager-template="rename">
        <div class="fv-row">
            <div class="d-flex align-items-center">
                <span id="kt_file_manager_rename_folder_icon"></span>
                <input type="text" id="kt_file_manager_rename_input" name="rename_folder_name" placeholder="نام پوشه جدید را وارد کنید." class="form-control mw-250px me-3" value=""/>
                <button class="btn btn-icon btn-light-primary me-3" id="kt_file_manager_rename_folder">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="black"/>
                        </svg>
                    </span>
                </button>
                <button class="btn btn-icon btn-light-danger" id="kt_file_manager_rename_folder_cancel">
                    <span class="indicator-label">
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"/>
                                <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"/>
                            </svg>
                        </span>
                    </span>
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>

    <div class="d-none" data-kt-filemanager-template="action">
        <div class="d-flex justify-content-end">
            <div class="ms-2" data-kt-filemanger-table="copy_link">
                <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <span class="svg-icon svg-icon-5 m-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3"
                                  d="M18.4 5.59998C18.7766 5.9772 18.9881 6.48846 18.9881 7.02148C18.9881 7.55451 18.7766 8.06577 18.4 8.44299L14.843 12C14.466 12.377 13.9547 12.5887 13.4215 12.5887C12.8883 12.5887 12.377 12.377 12 12C11.623 11.623 11.4112 11.1117 11.4112 10.5785C11.4112 10.0453 11.623 9.53399 12 9.15698L15.553 5.604C15.9302 5.22741 16.4415 5.01587 16.9745 5.01587C17.5075 5.01587 18.0188 5.22741 18.396 5.604L18.4 5.59998ZM20.528 3.47205C20.0614 3.00535 19.5074 2.63503 18.8977 2.38245C18.288 2.12987 17.6344 1.99988 16.9745 1.99988C16.3145 1.99988 15.661 2.12987 15.0513 2.38245C14.4416 2.63503 13.8876 3.00535 13.421 3.47205L9.86801 7.02502C9.40136 7.49168 9.03118 8.04568 8.77863 8.6554C8.52608 9.26511 8.39609 9.91855 8.39609 10.5785C8.39609 11.2384 8.52608 11.8919 8.77863 12.5016C9.03118 13.1113 9.40136 13.6653 9.86801 14.132C10.3347 14.5986 10.8886 14.9688 11.4984 15.2213C12.1081 15.4739 12.7616 15.6039 13.4215 15.6039C14.0815 15.6039 14.7349 15.4739 15.3446 15.2213C15.9543 14.9688 16.5084 14.5986 16.975 14.132L20.528 10.579C20.9947 10.1124 21.3649 9.55844 21.6175 8.94873C21.8701 8.33902 22.0001 7.68547 22.0001 7.02551C22.0001 6.36555 21.8701 5.71201 21.6175 5.10229C21.3649 4.49258 20.9947 3.93867 20.528 3.47205Z"
                                  fill="black"/>
                            <path d="M14.132 9.86804C13.6421 9.37931 13.0561 8.99749 12.411 8.74695L12 9.15698C11.6234 9.53421 11.4119 10.0455 11.4119 10.5785C11.4119 11.1115 11.6234 11.6228 12 12C12.3766 12.3772 12.5881 12.8885 12.5881 13.4215C12.5881 13.9545 12.3766 14.4658 12 14.843L8.44699 18.396C8.06999 18.773 7.55868 18.9849 7.02551 18.9849C6.49235 18.9849 5.98101 18.773 5.604 18.396C5.227 18.019 5.0152 17.5077 5.0152 16.9745C5.0152 16.4413 5.227 15.93 5.604 15.553L8.74701 12.411C8.28705 11.233 8.28705 9.92498 8.74701 8.74695C8.10159 8.99737 7.5152 9.37919 7.02499 9.86804L3.47198 13.421C2.52954 14.3635 2.00009 15.6417 2.00009 16.9745C2.00009 18.3073 2.52957 19.5855 3.47202 20.528C4.41446 21.4704 5.69269 21.9999 7.02551 21.9999C8.35833 21.9999 9.63656 21.4704 10.579 20.528L14.132 16.975C14.5987 16.5084 14.9689 15.9544 15.2215 15.3447C15.4741 14.735 15.6041 14.0815 15.6041 13.4215C15.6041 12.7615 15.4741 12.108 15.2215 11.4983C14.9689 10.8886 14.5987 10.3347 14.132 9.86804Z"
                                  fill="black"/>
                        </svg>
                    </span>
                </button>
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-300px" data-kt-menu="true">
                    <div class="card card-flush">
                        <div class="card-body p-5">
                            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                                <div class="me-5" data-kt-indicator="on">
                                    <span class="indicator-progress">
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </div>

                                <div class="fs-6 text-dark">Generating Share Link...</div>
                            </div>

                            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                                <div class="d-flex mb-3">
                                    <span class="svg-icon svg-icon-2 svg-icon-success me-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="black"/>
                                        </svg>
                                    </span>
                                    <div class="fs-6 text-dark">Share Link Generated</div>
                                </div>
                                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/"/>
                                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only.
                                    <a href="../../demo1/dist/apps/file-manager/settings/.html" class="ms-2">Change permissions</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ms-2">
                <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <span class="svg-icon svg-icon-5 m-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                            <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                            <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                        </svg>
                    </span>
                </button>
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-150px py-4" data-kt-menu="true">
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">دانلود فایل</a>
                    </div>
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">تغییر نام</a>
                    </div>
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">انتقال به پوشه</a>
                    </div>
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">حذف</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-none" data-kt-filemanager-template="checkbox">
        <div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" value="1"/>
        </div>
    </div>

    <div class="modal fade" id="kt_modal_upload" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <form class="form" action="{{route('admin.file_upload')}}" id="kt_modal_upload_form" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('POST')
                    <div class="modal-header">
                        <h2 class="fw-bolder">آپلود فایل</h2>


                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"/>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="modal-body pt-10 pb-15 px-lg-17">
                        <input type="hidden" name="folder_id" value="{{$folderId}}">
                        <div class="form-group">
                            <div class="dropzone dropzone-queue mb-2" id="kt_modal_upload_dropzone">
                                <div class="dropzone-panel mb-4 d-flex justify-content-center">
                                    <a class="dropzone-select btn btn-sm btn-primary me-2">انتخاب فایل</a>
                                    <a class="dropzone-upload btn btn-sm btn-light-primary me-2">آپلود همه</a>
                                    <a class="dropzone-remove-all btn btn-sm btn-light-primary">حذف همه</a>
                                </div>
                                <div class="dropzone-items wm-200px">
                                    <div class="dropzone-item p-5 d-flex flex-row-reverse" style="display:none">
                                        <div class="dropzone-file">
                                            <div class="dropzone-filename text-dark text-right" title="some_image_file_name.jpg">
                                                <span data-dz-name="">some_image_file_name.jpg</span>
                                                <strong>(<span data-dz-size="">340kb</span>)</strong>
                                            </div>
                                            <div class="dropzone-error mt-0" data-dz-errormessage=""></div>
                                        </div>
                                        <div class="dropzone-progress">
                                            <div class="progress bg-light-primary">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                            </div>
                                        </div>
                                        <div class="dropzone-toolbar flex-row-reverse">
                                            <span class="dropzone-start">
                                                <i class="bi bi-play-fill fs-3"></i>
                                            </span>
                                            <span class="dropzone-cancel" data-dz-remove="" style="display: none;">
                                                <i class="bi bi-x fs-3"></i>
                                            </span>
                                            <span class="dropzone-delete" data-dz-remove="">
                                                <i class="bi bi-x fs-1"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <span class="form-text fs-6 text-muted text-center">ماکسیمم حجم آپلود به ازای هر فایل ۱۰۰ مگا بایت است.</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="kt_modal_move_to_folder" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <form class="form" action="#" id="kt_modal_move_to_folder_form">
                    <div class="modal-header">
                        <h2 class="fw-bolder">Move to folder</h2>
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"/>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="modal-body pt-10 pb-15 px-lg-17">
                        <div class="form-group fv-row">
                            <div class="d-flex">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="0" id="kt_modal_move_to_folder_0"/>

                                    <label class="form-check-label" for="kt_modal_move_to_folder_0">
                                        <div class="fw-bolder">
                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
                                                    <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"/>
                                                </svg>
                                            </span>
                                            account
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class='separator separator-dashed my-5'></div>
                            <div class="d-flex">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="1" id="kt_modal_move_to_folder_1"/>
                                    <label class="form-check-label" for="kt_modal_move_to_folder_1">
                                        <div class="fw-bolder">
                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
                                                    <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"/>
                                                </svg>
                                            </span>
                                            apps
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class='separator separator-dashed my-5'></div>
                            <div class="d-flex">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="2" id="kt_modal_move_to_folder_2"/>
                                    <label class="form-check-label" for="kt_modal_move_to_folder_2">
                                        <div class="fw-bolder">
                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
                                                    <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"/>
                                                </svg>
                                            </span>
                                            widgets
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class='separator separator-dashed my-5'></div>
                            <div class="d-flex">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="3" id="kt_modal_move_to_folder_3"/>

                                    <label class="form-check-label" for="kt_modal_move_to_folder_3">
                                        <div class="fw-bolder">
                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
                                                    <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"/>
                                                </svg>
                                            </span>
                                            assets
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class='separator separator-dashed my-5'></div>
                            <div class="d-flex">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="4" id="kt_modal_move_to_folder_4"/>

                                    <label class="form-check-label" for="kt_modal_move_to_folder_4">
                                        <div class="fw-bolder">
                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
                                                    <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"/>
                                                </svg>
                                            </span>
                                            documentation
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class='separator separator-dashed my-5'></div>
                            <div class="d-flex">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="5" id="kt_modal_move_to_folder_5"/>
                                    <label class="form-check-label" for="kt_modal_move_to_folder_5">
                                        <div class="fw-bolder">
                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
                                                    <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"/>
                                                </svg>
                                            </span>
                                            layouts
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class='separator separator-dashed my-5'></div>
                            <div class="d-flex">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="6" id="kt_modal_move_to_folder_6"/>
                                    <label class="form-check-label" for="kt_modal_move_to_folder_6">
                                        <div class="fw-bolder">
                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
                                                    <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"/>
                                                </svg>
                                            </span>
                                            modals
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class='separator separator-dashed my-5'></div>
                            <div class="d-flex">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="7" id="kt_modal_move_to_folder_7"/>
                                    <label class="form-check-label" for="kt_modal_move_to_folder_7">
                                        <div class="fw-bolder">
                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
																			<path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"/>
																		</svg>
																	</span>
                                            <!--end::Svg Icon-->authentication
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class='separator separator-dashed my-5'></div>
                            <div class="d-flex">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="8" id="kt_modal_move_to_folder_8"/>
                                    <label class="form-check-label" for="kt_modal_move_to_folder_8">
                                        <div class="fw-bolder">
                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
                                                    <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"/>
                                                </svg>
                                            </span>
                                            dashboards
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class='separator separator-dashed my-5'></div>
                            <div class="d-flex">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="9" id="kt_modal_move_to_folder_9"/>
                                    <label class="form-check-label" for="kt_modal_move_to_folder_9">
                                        <div class="fw-bolder">
                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
                                                    <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"/>
                                                </svg>
                                            </span>
                                            pages
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-center mt-12">
                            <button type="button" class="btn btn-primary" id="kt_modal_move_to_folder_submit">
                                <span class="indicator-label">Save</span>
                                <span class="indicator-progress">Please wait...<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @section('scripts')

        <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <script>
            var sitePath = "{{ route('home') }}";
            var getFolders = "{{ route('admin.get_folder') }}";
            var createFolder = "{{ route('admin.create_folder')}}";
            var deleteFolder = "{{ route('admin.delete_folder')}}";
            var currentFolder = "{{ $folderId }}"
        </script>
        <script src="{{ asset('assets/js/custom/apps/file-manager/list.js') }}"></script>

    @endsection

    @section('styles')
        <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    @endsection
</div>
