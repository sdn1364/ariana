<div>
    @section('title', __('vendor'))

    <x-frontend.header-component :title="__('vendor')" :small="true"
                                 :image="asset('images/headers/vendor-header.png')"
                                 :breadcrumb="[
                            __('vendor'),
                            $tenderApplication->title
                        ]"
    ></x-frontend.header-component>
    <div class="container pb-20">
        <ul class="flex flex-row justify-center items-center px-4 mb-10">
            <li class="ss02 w-10 h-10 rounded-full bg-primary-500 flex items-center justify-center text-secondary-500 font-bold mx-10
            relative before:absolute before:h-2 before:w-24 before:bg-primary-500 ltr:before:left-full
            ">01
            </li>
            <li class="ss02 w-10 h-10 rounded-full bg-primary-500 flex items-center justify-center text-secondary-500 font-bold mx-10
            relative before:absolute before:h-2 before:w-20 before:bg-gray-300 ltr:before:left-full
            ">02
            </li>
            <li class="ss02 w-10 h-10 rounded-full bg-gray-300 flex items-center justify-center text-white font-bold mx-10">03</li>
        </ul>
        <h2 class="text-primary-500 font-bold text-xl mb-20">Required documents to participate in the tender as a <span class="text-secondary-500">{{$tenderApplication->type}}</span> :</h2>
        @if($tenderApplication->type == 'constructor')
            <form action="" wire:submit.prevent="saveConst()" x-data="{ confirmed: false }">
                <div class="grid gird-cols-1 md:grid-cols-2">

                    <div>
                        <x-frontend.input.group label="{{__('tender_apply')['registration']}}" :error="$errors->first('registration')">
                            <x-frontend.input.file model="registration" name="registration" fileName="{{$registrationName}}"></x-frontend.input.file>
                        </x-frontend.input.group>
                    </div>

                    <div>
                        <x-frontend.input.group label="{{__('tender_apply')['executive_record']}}" :error="$errors->first('executiveRecord')">
                            <x-frontend.input.file model="executiveRecord" name="executiveRecord" fileName="{{$executiveRecordName}}"></x-frontend.input.file>
                        </x-frontend.input.group>
                    </div>

                    <div>
                        <x-frontend.input.group label="{{__('tender_apply')['ads']}}" :error="$errors->first('ads')">
                            <x-frontend.input.file model="ads" name="ads" fileName="{{$adsName}}"></x-frontend.input.file>
                        </x-frontend.input.group>
                    </div>

                    <div>
                        <x-frontend.input.group label="{{__('tender_apply')['machinery']}}" :error="$errors->first('machinery')">
                            <x-frontend.input.file model="machinery" name="machinery" fileName="{{$machineryName}}"></x-frontend.input.file>
                        </x-frontend.input.group>
                    </div>

                    <div>
                        <x-frontend.input.group label="{!! __('tender_apply')['company_info']!!}" :error="$errors->first('companyInfo')">
                            <x-frontend.input.file model="companyInfo" name="companyInfo" fileName="{{$companyInfoName}}"></x-frontend.input.file>
                        </x-frontend.input.group>
                    </div>

                    <div>
                        <x-frontend.input.group label="{{__('tender_apply')['certifications']}}" :error="$errors->first('certificate')">
                            <x-frontend.input.file model="certificate" name="certificate" fileName="{{$certificateName}}"></x-frontend.input.file>
                        </x-frontend.input.group>
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <x-frontend.input.group :error="$errors->first('confirm')">
                            <x-frontend.input.checkbox x-model="confirmed">{{__('tender_apply')['confirm']}}</x-frontend.input.checkbox>
                        </x-frontend.input.group>

                    </div>
                </div>
                <div class="flex items-center justify-end mt-5">
                    <button type="submit" x-bind:disabled="!confirmed"
                            class="disabled:bg-secondary-200 disabled:cursor-not-allowed px-5 py-3 bg-secondary-500 rounded-lg text-white font-bold text-xl">Next Step
                    </button>
                </div>
            </form>
        @else
            <form action="" wire:submit.prevent="saveMan()">
                <div class="grid grid-cols-1 md:col-span-2">
                    <div>
                        <x-frontend.input.group label="{{__('tender_apply')['registration']}}" :error="$errors->first('registration')">
                            <x-frontend.input.file model="registration" name="registration" fileName="{{$registrationName}}"></x-frontend.input.file>
                        </x-frontend.input.group>
                    </div>

                    <div>
                        <x-frontend.input.group label="{{__('tender_apply')['product_name']}}" :error="$errors->first('product')">
                            <x-frontend.input.file model="product" name="product" fileName="{{$productName}}"></x-frontend.input.file>
                        </x-frontend.input.group>
                    </div>

                    <div>
                        <x-frontend.input.group label="{{__('tender_apply')['ads']}}" :error="$errors->first('ads')">
                            <x-frontend.input.file model="ads" name="ads" fileName="{{$adsName}}"></x-frontend.input.file>
                        </x-frontend.input.group>
                    </div>

                    <div>
                        <x-frontend.input.group label="{{__('tender_apply')['capacity']}}" :error="$errors->first('capacity')">
                            <x-frontend.input.file model="capacity" name="capacity" fileName="{{$capacityName}}"></x-frontend.input.file>
                        </x-frontend.input.group>
                    </div>

                    <div>
                        <x-frontend.input.group label="{!! __('tender_apply')['company_info']!!}" :error="$errors->first('companyInfo')">
                            <x-frontend.input.file model="companyInfo" name="companyInfo" fileName="{{$companyInfoName}}"></x-frontend.input.file>
                        </x-frontend.input.group>
                    </div>

                    <div>
                        <x-frontend.input.group label="{{__('tender_apply')['certifications']}}" :error="$errors->first('certificate')">
                            <x-frontend.input.file model="certificate" name="certificate" fileName="{{$certificateName}}"></x-frontend.input.file>
                        </x-frontend.input.group>
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <x-frontend.input.group :error="$errors->first('confirm')">
                            <x-frontend.input.checkbox x-model="confirmed">{{__('tender_apply')['confirm']}}</x-frontend.input.checkbox>
                        </x-frontend.input.group>
                    </div>
                </div>
                <div class="flex items-center justify-center mt-5">
                    <button type="submit" x-bind:disabled="!confirmed"
                            class="disabled:bg-secondary-200 disabled:cursor-not-allowed px-5 py-3 bg-secondary-500 rounded-lg text-white font-bold text-xl">{{__('send')}}</button>
                    <a href=""></a>
                </div>
            </form>
        @endif

    </div>
</div>
