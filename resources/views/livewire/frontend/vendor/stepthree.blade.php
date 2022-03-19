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
            ">01</li>
            <li class="ss02 w-10 h-10 rounded-full bg-primary-500 flex items-center justify-center text-secondary-500 font-bold mx-10
            relative before:absolute before:h-2 before:w-20 before:bg-primary-500 ltr:before:left-full
            ">02</li>
            <li class="ss02 w-10 h-10 rounded-full bg-primary-500 flex items-center justify-center text-secondary-500 font-bold mx-10">03</li>
        </ul>
        <h2 class="text-primary-500 font-bold text-xl mb-20">Required documents to participate in the tender as a <span class="text-secondary-500">{{$tenderApplication->type}}</span> :</h2>

        <form action="" wire:submit.prevent="save()">
            <div class="grid grid-cols-1">
                <x-frontend.input.group label="{{__('tender_apply')['offer']}}" :error="$errors->first('offer')">
                    <x-frontend.input.file model="offer" name="offer" fileName="{{$offerName}}"></x-frontend.input.file>
                </x-frontend.input.group>
            </div>
            <div class="flex items-center justify-center mt-5">
                <button type="submit"wire:loading.attr="disabled" disabled wire:target="offer" class="px-5 py-3 disabled:bg-secondary-200 disabled:cursor-not-allowed bg-secondary-500 rounded-lg text-white font-bold text-xl">{{__('send')}}</button>
            </div>
        </form>

    </div>
</div>
