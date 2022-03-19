<div>
    @section('title', __('career'))

    <x-frontend.header-component :title="__('career')" :small="true"
                        :image="asset('images/headers/career-header.png')"
                        :breadcrumb="[
                            __('career'), $career->title, __('apply')
                        ]"
    ></x-frontend.header-component>

    <div class="container py-10">
        <div class="grid grid-cols-1 md:grid-cols-5 xl:grid-cols-7 2xl:grid-cols-3 gap-3">
            <div class="md:col-start-2 lg:col-start-2 xl:col-start-3 2xl:col-start-2 md:col-span-3 xl:col-span-3 2xl:col-span-1">

                <h2 class="text-primary-500 font-bold text-2xl">{{ __('personal_info') }}</h2>

                <p class="text-sm text-primary-300 mb-10">{{__('about_you')}}</p>
                <form wire:submit.prevent="save()">
                    <div class="grid grid-cols-1 gap-5 2xl:gap-5">

                        <x-frontend.input.group label="{{__('full_name')}}" :required="true" :error="$errors->first('fullname')">
                            <x-frontend.input.text wire:model.defer="fullname" name="fullname" placeholder="{{__('full_name')}}" ></x-frontend.input.text>
                        </x-frontend.input.group>
                        <x-frontend.input.group label="{{__('email')}}" :required="true" :error="$errors->first('email')">
                            <x-frontend.input.text wire:model.defer="email" name="email" placeholder="{{__('email')}}" ></x-frontend.input.text>
                        </x-frontend.input.group>
                        <x-frontend.input.group label="{{__('phone_number')}}" :required="true" :error="$errors->first('phone')">
                            <x-frontend.input.text wire:model.defer="phone" name="email" placeholder="{{__('phone_number')}}" ></x-frontend.input.text>
                        </x-frontend.input.group>

                        <div class="flex flex-col">
                            <h2 class="text-primary-500 font-bold text-2xl mt-5">{{ __('resume') }}</h2>
                            <p class="text-sm text-primary-300 mb-7">{{__('upload_cv')}}</p>
                            <div class="flex flex-col md:flex-row items-center space-y-3 md:space-y-0 md:space-x-10 rtl:space-x-reverse ">
                                <label class="bank flex items-center justify-center w-full md:w-fit px-7 py-5 text-primary-500 bg-gradient-to-t from-primary-200 rounded-lg border border-primary-500 cursor-pointer hover:from-primary-300">
                                    <span class="text-sm">{{__('file_select')}}</span>
                                    <input wire:model.defer="resume" type='file' name="resume" class="hidden"/>
                                </label>
                                <p class="text-sm text-primary-500">{{ $fileName ? $fileName :__('resume_accept')}}</p>
                                <div wire:loading wire:target="resume" class="animate-bounce text-primary-500"><i class="ri-upload-line ri-lg "></i></div>
                            </div>
                            <div>
                                @error('resume')
                                    <span class="text-light text-sm text-red-500" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex justify-center mt-10">
                            <button type="submit" wire:loading.attr="disabled" wire:target="resume" disabled class="px-12 py-4 rounded-lg disabled:cursor-not-allowed disabled:bg-secondary-200 bg-secondary-500 hover:bg-secondary-600 text-white text-lg font-bold w-fit justify-self-center">{{__('submit')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
