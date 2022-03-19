<div>
    @section('title', __('vendor'))

    <x-header-component :title="__('vendor')" :small="true"
                        :image="asset('images/headers/vendor-header.png')"
                        :breadcrumb="[
                            __('vendor'),
                            $tender->title
                        ]"
    ></x-header-component>
    <div class="container py-20">

        <h2 class="text-primary-500 font-bold text-xl mb-20">Required documents to participate in the tender as a <span class="text-secondary-500">{{$tender->type}}</span> :</h2>

        @if($tender->type == 'manufacturer')
            <form action="" wire.submit.prevent="save_Producer()">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <x-tw-input label="Bank Guarantee" type="file" name="bank" model="bank"></x-tw-input>
                    <x-tw-input label="Machinery capability" type="file" name="machinery" model="machinery"></x-tw-input>
                    <x-tw-input label="Company registration documents" type="file" name="registration" model="registration"></x-tw-input>
                    <x-tw-input label="Good executive record" type="file" name="executive_record" model="executive_record"></x-tw-input>
                    <x-tw-input label="The latest official ads" type="file" name="ads" model="ads"></x-tw-input>
                    <x-tw-input label="Product introduction brochure" type="file" name="product-Intro" model="product-Intro"></x-tw-input>
                    <x-tw-input label="Certificates of competence" type="file" name="competence" model="competence"></x-tw-input>
                    <x-tw-input label="production capacity" type="file" name="capacity" model="capacity"></x-tw-input>
                    <x-tw-input label="company's information" type="file" name="company_info" model="company_info"></x-tw-input>
                    <x-tw-input label="Organizational Chart" type="file" name="chart" model="chart"></x-tw-input>
                    <x-tw-input label="Records" type="file" name="records" model="records"></x-tw-input>
                    <x-tw-input label="Information required by the company" type="file" name="info" model="info"></x-tw-input>
                    <x-tw-input label="Standard approvals and certifications" type="file" name="certificate" model="certificate"></x-tw-input>
                    <x-tw-input label="Products name" type="file" name="product_name" model="product_name"></x-tw-input>
                </div>
                <div class="my-20">
                    <div class="flex items-center">
                        <input class="appearance-none rounded h-5 w-5 border border-primary-500 bg-white focus:outline-none cursor-pointer flex items-center justify-center
                                        checked:relative checked:before:absolute checked:before:w-3 checked:before:h-3 checked:before:bg-green-500 checked:before:rounded-sm
                                        " type="checkbox" name="inlineRadioOptions" id="checkbox" value="option2">
                        <label class=" font-bold  text-lg inline-block text-primary-500 ltr:ml-5 rtl:mr-5" for="checkbox">Confirm the above information</label>
                    </div>
                    @error('confirm' )
                    <span class="text-sm text-red-500 font-light" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="grid grid-cols-1 gap-5">
                    <x-tw-input label="Technical offer" type="file" name="product_name" model="offer"></x-tw-input>
                    <x-tw-input label="Price offer" type="file" name="product_name" model="offer"></x-tw-input>
                </div>

                <div class="flex items-center">
                    <button type="submit" class="bg-secondary-500 hover:bg-secondary-600 rounded-xl py-4 px-20 font-bold text-white text-xl mx-auto my-10">{{ __('send')}}</button>
                </div>
            </form>
        @else
            <form action="" wire.submit.prevent="save_Producer()">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <x-tw-input label="Bank Guarantee" type="file" name="bank" model="bank"></x-tw-input>
                    <x-tw-input label="Ability in planning and Project Control" type="file" name="planning" model="planning"></x-tw-input>
                    <x-tw-input label="Company registration documents" type="file" name="registration" model="registration"></x-tw-input>
                    <x-tw-input label="Good executive record" type="file" name="executive_record" model="executive_record"></x-tw-input>
                    <x-tw-input label="The latest official ads" type="file" name="ad" model="ad"></x-tw-input>
                    <x-tw-input label="Proposed method of project implementation" type="file" name="implementation" model="implementation"></x-tw-input>
                    <x-tw-input label="Certificates of competence" type="file" name="competence" model="competence"></x-tw-input>
                    <x-tw-input label="Schedule" type="file" name="schedule" model="schedule"></x-tw-input>
                    <x-tw-input label="company's information" type="file" name="company_info" model="company_info"></x-tw-input>
                    <x-tw-input label="How to supply materials" type="file" name="material" model="material"></x-tw-input>
                    <x-tw-input label="Records" type="file" name="material" model="records"></x-tw-input>
                    <x-tw-input label="Organizational Chart" type="file" name="chart" model="chart"></x-tw-input>
                    <x-tw-input label="Standard approvals and certifications" type="file" name="certificate" model="certificate"></x-tw-input>
                    <x-tw-input label="Project experiences" type="file" name="experience" model="experience"></x-tw-input>
                    <x-tw-input label="Machinery capability " type="file" name="machinery" model="machinery"></x-tw-input>
                    <x-tw-input label="Documentation and reporting" type="file" name="documentation" model="documentation"></x-tw-input>
                    <x-tw-input label="affordability" type="file" name="affordability" model="affordability"></x-tw-input>
                    <x-tw-input label="Information required by the company" type="file" name="info" model="info"></x-tw-input>
                    <x-tw-input label="Adequacy of technical staff" type="file" name="staff" model="staff"></x-tw-input>
                </div>
                <div class="my-20">
                    <div class="flex items-center">
                        <input class="appearance-none rounded h-5 w-5 border border-primary-500 bg-white focus:outline-none cursor-pointer flex items-center justify-center
                                        checked:relative checked:before:absolute checked:before:w-3 checked:before:h-3 checked:before:bg-green-500 checked:before:rounded-sm
                                        " type="checkbox" name="inlineRadioOptions" id="checkbox" value="option2">
                        <label class=" font-bold  text-lg inline-block text-primary-500 ltr:ml-5 rtl:mr-5" for="checkbox">Confirm the above information</label>
                    </div>
                    @error('confirm' )
                        <span class="text-sm text-red-500 font-light" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="grid grid-cols-1 gap-5">
                    <x-tw-input label="Technical offer" type="file" name="product_name" model="offer"></x-tw-input>
                    <x-tw-input label="Price offer" type="file" name="product_name" model="offer"></x-tw-input>
                </div>

                <div class="flex items-center">
                    <button type="submit" class="bg-secondary-500 hover:bg-secondary-600 rounded-xl py-4 px-20 font-bold text-white text-xl mx-auto my-10">{{ __('send')}}</button>
                </div>
            </form>
        @endif
    </div>


    @section('scripts')

    @endsection


</div>
