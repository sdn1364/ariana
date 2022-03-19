<div class="flex items-center gap-1">
    <input class="appearance-none rounded-full h-5 w-5 border border-primary-500 bg-white focus:outline-none cursor-pointer flex items-center justify-center
                                        checked:relative checked:before:absolute checked:before:w-3 checked:before:h-3 checked:before:bg-green-500 checked:before:rounded-full
                                        " type="radio" {{$attributes}} x-bind:id="radio">
    <label class="inline-block text-primary-500" x-bind:for="radio">{{$slot}}</label>
</div>
