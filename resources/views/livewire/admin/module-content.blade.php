<div class="moduleContent bg-gray-100 border-gray-300 border w-100 z-index-1">
    @foreach($elements as $element)
        @if($element->part == $part)
            @switch($element->type)
                @case('text')
                    @livewire('backend.pagemaker.elements.pm-text', ['element'=>$element->id])
                @break
                @case('title')
                    @livewire('backend.pagemaker.elements.pm-title',['element'=>$element->id])
                @break
                @case('photo')
                    @livewire('backend.pagemaker.elements.pm-photo',['element'=>$element->id])
                @break
                @case('timeline')
                    @livewire('backend.pagemaker.elements.pm-history',['element'=>$element->id])
                @break
            @endswitch
        @endif
    @endforeach
    <button class=" h-50px btn btn-sm btn-secondary m-2" type="button"

            data-bs-toggle="modal" data-bs-target="#modules_{{ $part }}_{{$row->id}}">
        <i class="fa fa-plus fa-2x"></i> {{$row->id}}
    </button>

    <div class="modal fade" tabindex="-1" id="modules_{{ $part }}_{{$row->id}}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">اضافه کردن ماژول</h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm  btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"/>
                                <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"/>
                            </svg>
                        </span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">

                    <div class="border rounded-2 w-100 p-5 mb-5">
                        <p class="text-muted mb-5">ماژول‌های محتوی</p>
                        <button wire:click="addElement('text')" type="button" class="btn btn-secondary btn-sm mb-2" data-bs-dismiss="modal"><span class="svg-icon svg-icon-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M10 10V9C10 8.4 10.4 8 11 8H21C21.6 8 22 8.4 22 9V10C22 10.6 21.6 11 21 11H11C10.4 11 10 10.6 10 10ZM3 6H21C21.6 6 22 5.6 22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6Z" fill="black"/>
                                <path opacity="0.3" d="M2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16H3C2.4 16 2 15.6 2 15ZM11 21H21C21.6 21 22 20.6 22 20V19C22 18.4 21.6 18 21 18H11C10.4 18 10 18.4 10 19V20C10 20.6 10.4 21 11 21Z" fill="black"/>
                                </svg>
                            </span>متن
                        </button>
                        <button wire:click="addElement('title')" type="button" class="btn btn-secondary btn-sm mb-2" data-bs-dismiss="modal"><span class="svg-icon svg-icon-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M18.5 5.20007H14.2V19.5C14.2 20.3 14 20.9 13.7 21.3C13.3 21.7 12.9 21.9 12.3 21.9C11.7 21.9 11.2 21.7 10.9 21.3C10.6 20.9 10.3 20.3 10.3 19.5V5.20007H6C5.3 5.20007 4.8 5.10005 4.5 4.80005C4.2 4.50005 4 4.09998 4 3.59998C4 3.09998 4.2 2.70002 4.5 2.40002C4.8 2.10002 5.3 2 6 2H18.7C19.4 2 19.9 2.2 20.2 2.5C20.5 2.8 20.7 3.20007 20.7 3.70007C20.7 4.20007 20.5 4.60002 20.2 4.90002C19.7 5.00002 19.2 5.20007 18.5 5.20007Z" fill="black"/>
                                </svg>
                            </span>عنوان
                        </button>
                        <button wire:click="addElement('photo')" type="button" class="btn btn-secondary btn-sm mb-2" data-bs-dismiss="modal"><span class="svg-icon svg-icon-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="black"/>
                            <path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="black"/>
                            </svg>
                            </span>عکس تکی
                        </button>
                        <button wire:click="addElement('slide')" type="button" class="btn btn-secondary btn-sm mb-2" data-bs-dismiss="modal"><span class="svg-icon svg-icon-muted">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 10.57"><defs><style>.cls-1 {
                                            isolation: isolate;
                                            opacity: 0.3;
                                        }</style></defs><path class="cls-1" d="M-6.28,5.37v9.26a.62.62,0,0,1-.66.66h-1l-5-5a.65.65,0,0,0-.93,0l-5,5a.71.71,0,0,1-.66-.66V5.37a.63.63,0,0,1,.66-.66h11.9A.62.62,0,0,1-6.28,5.37ZM-15.86,6.7a1,1,0,0,0-1,1,1,1,0,0,0,1,1,1,1,0,0,0,1-1A1,1,0,0,0-15.86,6.7Z" transform="translate(22.89 -4.71)"/><path d="M-8.19,8.68a.64.64,0,0,0-.93,0l-4.63,4.62H-19.5v1.33a.63.63,0,0,0,.66.66h11.9a.62.62,0,0,0,.66-.66v-4Z" transform="translate(22.89 -4.71)"/><path d="M-22.74,9.74l2-1.13v2.78l-2-1.13A.3.3,0,0,1-22.74,9.74Z" transform="translate(22.89 -4.71)"/><path d="M-3,9.74-5,8.61v2.78l2-1.13A.3.3,0,0,0-3,9.74Z" transform="translate(22.89 -4.71)"/></svg>
                            </span>اسلاید عکس
                        </button>
                        <button wire:click="addElement('contentSlide')" type="button" class="btn btn-secondary btn-sm mb-2" data-bs-dismiss="modal"><span class="svg-icon svg-icon-muted">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14.71"><defs><style>.cls-1 {
                                            isolation: isolate;
                                            opacity: 0.3;
                                        }</style></defs><path d="M.15,9.74l2-1.13v2.78l-2-1.13A.3.3,0,0,1,.15,9.74Z" transform="translate(0 -2.64)"/><path d="M19.85,9.74l-2-1.13v2.78l2-1.13A.3.3,0,0,0,19.85,9.74Z" transform="translate(0 -2.64)"/><path class="cls-1" d="M16.61,3.31v9.25a.62.62,0,0,1-.66.66H15l-5-5A.62.62,0,0,0,9,8.2l-5,5a.71.71,0,0,1-.66-.66V3.31a.63.63,0,0,1,.66-.67H16A.63.63,0,0,1,16.61,3.31ZM7,4.63a1,1,0,0,0-1,1,1,1,0,0,0,2,0A1,1,0,0,0,7,4.63Z" transform="translate(0 -2.64)"/><path d="M14.69,6.61a.64.64,0,0,0-.92,0L9.14,11.24H3.39v1.32a.62.62,0,0,0,.66.66H16a.62.62,0,0,0,.66-.66v-4Z" transform="translate(0 -2.64)"/><rect class="cls-1" x="3.39" y="11.23" width="13.21" height="3.48" rx="0.7"/></svg>
                            </span>اسلاید عکس و محتوی
                        </button>
                        <button wire:click="addElement('iconText')" type="button" class="btn btn-secondary btn-sm mb-2" data-bs-dismiss="modal"><span class="svg-icon svg-icon-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M17 10H11C10.4 10 10 9.6 10 9V8C10 7.4 10.4 7 11 7H17C17.6 7 18 7.4 18 8V9C18 9.6 17.6 10 17 10ZM22 4V3C22 2.4 21.6 2 21 2H11C10.4 2 10 2.4 10 3V4C10 4.6 10.4 5 11 5H21C21.6 5 22 4.6 22 4ZM22 15V14C22 13.4 21.6 13 21 13H11C10.4 13 10 13.4 10 14V15C10 15.6 10.4 16 11 16H21C21.6 16 22 15.6 22 15ZM18 20V19C18 18.4 17.6 18 17 18H11C10.4 18 10 18.4 10 19V20C10 20.6 10.4 21 11 21H17C17.6 21 18 20.6 18 20Z" fill="black"/>
                                    <path d="M8 5C8 6.7 6.7 8 5 8C3.3 8 2 6.7 2 5C2 3.3 3.3 2 5 2C6.7 2 8 3.3 8 5ZM5 4C4.4 4 4 4.4 4 5C4 5.6 4.4 6 5 6C5.6 6 6 5.6 6 5C6 4.4 5.6 4 5 4ZM8 16C8 17.7 6.7 19 5 19C3.3 19 2 17.7 2 16C2 14.3 3.3 13 5 13C6.7 13 8 14.3 8 16ZM5 15C4.4 15 4 15.4 4 16C4 16.6 4.4 17 5 17C5.6 17 6 16.6 6 16C6 15.4 5.6 15 5 15Z" fill="black"/>
                                </svg>
                            </span>جمله و آیکون
                        </button>
                        <button wire:click="addElement('link')" type="button" class="btn btn-secondary btn-sm mb-2" data-bs-dismiss="modal"><span class="svg-icon svg-icon-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3"
                                      d="M18.4 5.59998C18.7766 5.9772 18.9881 6.48846 18.9881 7.02148C18.9881 7.55451 18.7766 8.06577 18.4 8.44299L14.843 12C14.466 12.377 13.9547 12.5887 13.4215 12.5887C12.8883 12.5887 12.377 12.377 12 12C11.623 11.623 11.4112 11.1117 11.4112 10.5785C11.4112 10.0453 11.623 9.53399 12 9.15698L15.553 5.604C15.9302 5.22741 16.4415 5.01587 16.9745 5.01587C17.5075 5.01587 18.0188 5.22741 18.396 5.604L18.4 5.59998ZM20.528 3.47205C20.0614 3.00535 19.5074 2.63503 18.8977 2.38245C18.288 2.12987 17.6344 1.99988 16.9745 1.99988C16.3145 1.99988 15.661 2.12987 15.0513 2.38245C14.4416 2.63503 13.8876 3.00535 13.421 3.47205L9.86801 7.02502C9.40136 7.49168 9.03118 8.04568 8.77863 8.6554C8.52608 9.26511 8.39609 9.91855 8.39609 10.5785C8.39609 11.2384 8.52608 11.8919 8.77863 12.5016C9.03118 13.1113 9.40136 13.6653 9.86801 14.132C10.3347 14.5986 10.8886 14.9688 11.4984 15.2213C12.1081 15.4739 12.7616 15.6039 13.4215 15.6039C14.0815 15.6039 14.7349 15.4739 15.3446 15.2213C15.9543 14.9688 16.5084 14.5986 16.975 14.132L20.528 10.579C20.9947 10.1124 21.3649 9.55844 21.6175 8.94873C21.8701 8.33902 22.0001 7.68547 22.0001 7.02551C22.0001 6.36555 21.8701 5.71201 21.6175 5.10229C21.3649 4.49258 20.9947 3.93867 20.528 3.47205Z"
                                      fill="black"/>
                                <path d="M14.132 9.86804C13.6421 9.37931 13.0561 8.99749 12.411 8.74695L12 9.15698C11.6234 9.53421 11.4119 10.0455 11.4119 10.5785C11.4119 11.1115 11.6234 11.6228 12 12C12.3766 12.3772 12.5881 12.8885 12.5881 13.4215C12.5881 13.9545 12.3766 14.4658 12 14.843L8.44699 18.396C8.06999 18.773 7.55868 18.9849 7.02551 18.9849C6.49235 18.9849 5.98101 18.773 5.604 18.396C5.227 18.019 5.0152 17.5077 5.0152 16.9745C5.0152 16.4413 5.227 15.93 5.604 15.553L8.74701 12.411C8.28705 11.233 8.28705 9.92498 8.74701 8.74695C8.10159 8.99737 7.5152 9.37919 7.02499 9.86804L3.47198 13.421C2.52954 14.3635 2.00009 15.6417 2.00009 16.9745C2.00009 18.3073 2.52957 19.5855 3.47202 20.528C4.41446 21.4704 5.69269 21.9999 7.02551 21.9999C8.35833 21.9999 9.63656 21.4704 10.579 20.528L14.132 16.975C14.5987 16.5084 14.9689 15.9544 15.2215 15.3447C15.4741 14.735 15.6041 14.0815 15.6041 13.4215C15.6041 12.7615 15.4741 12.108 15.2215 11.4983C14.9689 10.8886 14.5987 10.3347 14.132 9.86804Z"
                                      fill="black"/>
                                </svg>
                            </span>لینک
                        </button>
                    </div>
                    <div class="border rounded-2 w-100 p-5 mb-5">
                        <p class="text-muted mb-5">ماژول‌های رابطه</p>
                        <button wire:click="addElement('staff')" type="button" class="btn btn-secondary btn-sm mb-2" data-bs-dismiss="modal"><span class="svg-icon svg-icon-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black"/>
                                    <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black"/>
                                </svg>
                            </span>کارمندان
                        </button>
                        <button wire:click="addElement('timeline',{{$row->id}})" type="button" class="btn btn-secondary btn-sm mb-2" data-bs-dismiss="modal"><span class="svg-icon svg-icon-muted"></span>تایم‌لاین</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
