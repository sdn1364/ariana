<div class="flex items-center space-x-2 rtl:space-x-reverse"
     x-data
     x-id="['checkbox']
">
    <input class="appearance-none rounded h-5 w-5 border border-primary-500 bg-white focus:outline-none cursor-pointer flex items-center justify-center
                                        checked:relative checked:before:absolute checked:before:w-3 checked:before:h-3 checked:before:bg-green-500 checked:before:rounded
                                        " type="checkbox" {{$attributes}} x-bind:id="$id('checkbox')">
    <label class="inline-block font-bold text-primary-500 cursor-pointer" x-bind:for="$id('checkbox')">{{$slot}}</label>
</div>
