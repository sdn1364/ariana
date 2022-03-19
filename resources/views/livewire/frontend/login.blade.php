<div>
    @section('title', __('login'))

    <x-frontend.header-component :title="__('login')" :small="true"
                        :image="asset('images/headers/login-header.png')"
    ></x-frontend.header-component>

    <div class="container py-10" x-data="{login: true}">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <div>
                <form wire:submit.prevent="login()" x-show="login">
                    <div class="flex flex-col space-y-5">

                        <div class="flex flex-col space-y-2">
                            <label for="" class="w-fit text-primary-500 font-medium text-lg relative ltr:pr-1 rtl:pl-1
                            before:absolute before:w-1.5 before:h-1.5 before:rounded-full before:top-0 ltr:before:left-full rtl:before:right-full
                            before:bg-red-500">{{__('email')}}</label>

                            <input type="text" class="h-12 w-full border border-primary-500 px-5 rounded-lg @error( 'email') border-red-500 @enderror"
                                   name="email" wire:model.defer="emailLogin"
                                   value="{{ old('email') }}" placeholder="{{__('email')}}">
                            @error('email')
                            <span class="text-light text-sm text-red-500" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="flex flex-col space-y-2">
                            <label for="" class="w-fit text-primary-500 font-medium text-lg relative ltr:pr-1 rtl:pl-1
                            before:absolute before:w-1.5 before:h-1.5 before:rounded-full before:top-0 ltr:before:left-full rtl:before:right-full
                            before:bg-red-500">{{__('password')}}</label>

                            <input type="password" class="h-12 w-full border border-primary-500 px-5 rounded-lg @error( 'password') border-red-500 @enderror"
                                   name="password" wire:model.defer="passwordLogin"
                                   value="{{ old('password') }}" placeholder="{{__('password')}}">
                            @error('password')
                            <span class="text-light text-sm text-red-500" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="flex justify-center mt-10">
                            <button type="submit" class="px-12 py-4 rounded-lg bg-secondary-500 hover:bg-secondary-600 text-white text-lg font-bold w-fit flex items-center justify-center space-x-2 rtl:space-x-reverse"><span>{{__('login')}}</span>  <i class="ri-loader-4-line animate-spin {{ $isLoading ? '': 'hidden'}}"></i></button>
                        </div>
                    </div>
                </form>

                <form wire:submit.prevent="register()" x-show="!login">
                    <div class="flex flex-col space-y-5">
                        <div class="flex flex-col space-y-2">
                            <label for="" class="w-fit text-primary-500 font-medium text-lg relative ltr:pr-1 rtl:pl-1
                            before:absolute before:w-1.5 before:h-1.5 before:rounded-full before:top-0 ltr:before:left-full rtl:before:right-full
                            before:bg-red-500">{{__('full_name')}}</label>

                            <input type="text" class="h-12 w-full border border-primary-500 px-5 rounded-lg @error( 'name') border-red-500 @enderror"
                                   name="name" wire:model.defer="name"
                                   value="{{ old('name') }}" placeholder="{{__('full_name')}}">
                            @error('name')
                            <span class="text-light text-sm text-red-500" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="" class="w-fit text-primary-500 font-medium text-lg relative ltr:pr-1 rtl:pl-1
                            before:absolute before:w-1.5 before:h-1.5 before:rounded-full before:top-0 ltr:before:left-full rtl:before:right-full
                            before:bg-red-500">{{__('email')}}</label>

                            <input type="text" class="h-12 w-full border border-primary-500 px-5 rounded-lg @error( 'email') border-red-500 @enderror"
                                   name="email" wire:model.defer="email"
                                   value="{{ old('email') }}" placeholder="{{__('email')}}">
                            @error('email')
                            <span class="text-light text-sm text-red-500" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="flex flex-col space-y-2">
                            <label for="" class="w-fit text-primary-500 font-medium text-lg relative ltr:pr-1 rtl:pl-1
                            before:absolute before:w-1.5 before:h-1.5 before:rounded-full before:top-0 ltr:before:left-full rtl:before:right-full
                            before:bg-red-500">{{__('password')}}</label>

                            <input type="password" class="h-12 w-full border border-primary-500 px-5 rounded-lg @error( 'password') border-red-500 @enderror"
                                   name="password" wire:model.defer="password"
                                   value="{{ old('password') }}" placeholder="{{__('password')}}">
                            @error('password')
                            <span class="text-light text-sm text-red-500" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="" class="w-fit text-primary-500 font-medium text-lg relative ltr:pr-1 rtl:pl-1
                            before:absolute before:w-1.5 before:h-1.5 before:rounded-full before:top-0 ltr:before:left-full rtl:before:right-full
                            before:bg-red-500">{{__('password_confirmation')}}</label>

                            <input type="password" class="h-12 w-full border border-primary-500 px-5 rounded-lg @error( 'password_confirmation') border-red-500 @enderror"
                                   name="password_confirmation" wire:model.defer="password_confirmation"
                                   value="{{ old('password_confirmation') }}" placeholder="{{__('password_confirmation')}}">
                            @error('password')
                            <span class="text-light text-sm text-red-500" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="" class="w-fit text-primary-500 font-medium text-lg relative ltr:pr-1 rtl:pl-1
                            before:absolute before:w-1.5 before:h-1.5 before:rounded-full before:top-0 ltr:before:left-full rtl:before:right-full
                            before:bg-red-500">{{__('company')}}</label>

                            <input type="text" class="h-12 w-full border border-primary-500 px-5 rounded-lg @error( 'company') border-red-500 @enderror"
                                   name="company" wire:model.defer="company"
                                   value="{{ old('company') }}" placeholder="{{__('company')}}">
                            @error('company')
                            <span class="text-light text-sm text-red-500" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="flex justify-center mt-10">
                            <button type="submit" class="px-12 py-4 rounded-lg bg-secondary-500 hover:bg-secondary-600 text-white text-lg font-bold w-fit  flex items-center justify-center space-x-2 rtl:space-x-reverse"><span>{{__('register')}}</span> <i class="ri-loader-4-line animate-spin {{ $isLoading ? '': 'hidden'}}"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="flex justify-center h-fit order-first md:order-last lg:col-start-3 md:justify-end">
                <div class="w-auto h-auto rounded-full border-2 border-primary-500 flex">
                    <a href="#" @click.prevent="login = true"  class="px-8 py-2 font-medium rounded-full " :class="login ? 'bg-primary-500 text-white':'text-primary-500 bg-white'">{{__('login')}}</a>
                    <a href="#" @click.prevent="login = false" class="px-7 py-2 font-medium rounded-full " :class="login ? 'bg-white text-primary-500':'text-white bg-primary-500'">{{__('register')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
