<div>
    <x-frontend.header-component :title="__('innovation')" :small="true"
                        :image="asset('images/headers/innovation-header.png')"
    ></x-frontend.header-component>
    <div class="container pt-10">
        <form wire:submit.prevent="save()">
            <div class="grid grid-cols-2 gap-y-5 gap-x-20">
                <x-frontend.input.group label="{{ __('innovation_apply')['title'] }}" :required="true" :error="$errors->first('title')">
                    <x-frontend.input.text wire:model.defer="title" name="title" placeholder="{{ __('innovation_apply')['title.ph'] }}" ></x-frontend.input.text>
                </x-frontend.input.group>
                <x-frontend.input.group label="{{ __('innovation_apply')['fullname'] }}" :required="true" :error="$errors->first('fullname')">
                    <x-frontend.input.text wire:model.defer="fullname" name="fullname" placeholder="{{ __('innovation_apply')['fullname.ph'] }}" ></x-frontend.input.text>
                </x-frontend.input.group>
                <x-frontend.input.group label="{{ __('innovation_apply')['organizational_title'] }}" :required="true" :error="$errors->first('organizational_title')">
                    <x-frontend.input.text wire:model.defer="organizational_title" name="organizational_title" placeholder="{{ __('innovation_apply')['organizational_title.ph'] }}" ></x-frontend.input.text>
                </x-frontend.input.group>
                <x-frontend.input.group label="{!! __('innovation_apply')['company_name'] !!}" :required="true" :error="$errors->first('company_name')">
                    <x-frontend.input.text wire:model.defer="company_name" name="company_name" placeholder="{{ __('innovation_apply')['company_name.ph'] }}" ></x-frontend.input.text>
                </x-frontend.input.group>
                <x-frontend.input.group label="{!! __('innovation_apply')['email'] !!}" :required="true" :error="$errors->first('email')">
                    <x-frontend.input.text wire:model.defer="email" name="email" placeholder="{{ __('innovation_apply')['email.ph'] }}" ></x-frontend.input.text>
                </x-frontend.input.group>
                <x-frontend.input.group label="{!! __('innovation_apply')['phone_number'] !!}" :required="true" :error="$errors->first('phone_number')">
                    <x-frontend.input.text wire:model.defer="phone_number" name="phone_number" placeholder="{{ __('innovation_apply')['phone_number.ph'] }}" ></x-frontend.input.text>
                </x-frontend.input.group>
                <x-frontend.input.group label="{!! __('innovation_apply')['field'] !!}" :required="true" :error="$errors->first('field')">
                    <x-frontend.input.text wire:model.defer="field" name="field" placeholder="{{ __('innovation_apply')['field.ph'] }}" ></x-frontend.input.text>
                </x-frontend.input.group>
                <x-frontend.input.group label="{!! __('innovation_apply')['usage'] !!}" :required="true" :error="$errors->first('usage')">
                    <x-frontend.input.text wire:model.defer="usage" name="usage" placeholder="{{ __('innovation_apply')['usage.ph'] }}" ></x-frontend.input.text>
                </x-frontend.input.group>
                <div class="col-span-2">
                    <x-frontend.input.group label="{!! __('innovation_apply')['explanation'] !!}" :required="true" :error="$errors->first('explanation')">
                        <x-frontend.input.textarea rows="5" wire:model="explanation" name="explanation" placeholder="{{ __('innovation_apply')['explanation.ph'] }}" ></x-frontend.input.textarea>
                    </x-frontend.input.group>
                </div>
                <x-frontend.input.group label="{!! __('innovation_apply')['sample_toggle'] !!}"  :error="$errors->first('sample_toggle')">
                    <div class="flex items-center space-x-10 rtl:space-x-reverse h-12">
                        <x-frontend.input.radio name="sample_toggle" >{{__('innovation_apply')['yes']}}</x-frontend.input.radio>
                        <x-frontend.input.radio name="sample_toggle" >{{__('innovation_apply')['no']}}</x-frontend.input.radio>
                    </div>
                </x-frontend.input.group>
                <x-frontend.input.group label="{!! __('innovation_apply')['sample'] !!}"  :error="$errors->first('sample')">
                    <x-frontend.input.text wire:model.defer="sample" name="sample" placeholder="{{ __('innovation_apply')['sample.ph'] }}" ></x-frontend.input.text>
                </x-frontend.input.group>
                <div class="col-span-2">
                    <x-frontend.input.group label="{!! __('innovation_apply')['description'] !!}" :required="true" :error="$errors->first('description')">
                        <x-frontend.input.textarea rows="5"  wire:model.defer="description" name="description" placeholder="{{ __('innovation_apply')['description.ph'] }}" ></x-frontend.input.textarea>
                    </x-frontend.input.group>
                </div>
                <div class="col-span-2">
                    <x-frontend.input.group label="{!! __('innovation_apply')['conditions'] !!}" :required="true" :error="$errors->first('conditions')">
                        <x-frontend.input.textarea rows="5"  wire:model.defer="conditions" name="conditions" placeholder="{{ __('innovation_apply')['conditions.ph'] }}" ></x-frontend.input.textarea>
                    </x-frontend.input.group>
                </div>
                <div class="col-span-2">
                    <x-frontend.input.group label="{!! __('innovation_apply')['benefits'] !!}" :required="true" :error="$errors->first('benefits')">
                        <x-frontend.input.textarea rows="5"  wire:model.defer="benefits" name="benefits" placeholder="{{ __('innovation_apply')['benefits.ph'] }}" ></x-frontend.input.textarea>
                    </x-frontend.input.group>
                </div>
                <div class="col-span-2">
                    <x-frontend.input.group label="{!! __('innovation_apply')['obstacles'] !!}" :required="true" :error="$errors->first('obstacles')">
                        <x-frontend.input.textarea rows="5"  wire:model.defer="obstacles" name="obstacles" placeholder="{{ __('innovation_apply')['obstacles.ph'] }}" ></x-frontend.input.textarea>
                    </x-frontend.input.group>
                </div>
            </div>
            <div class="flex items-center">
                <button type="submit" class="bg-secondary-500 hover:bg-secondary-600 rounded-xl py-4 px-20 font-bold text-white text-xl mx-auto my-10">{{ __('send')}}</button>
            </div>
        </form>
    </div>
</div>
