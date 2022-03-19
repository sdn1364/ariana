<div class="fixed {{$status}} top-16 h-auto left-0 flex-col items-center w-full h-20 z-40">
    <div class="overflow-hidden relative w-fit h-16 shrink-0 mt-4 bg-{{$color}}-400 bg-primary-500 rounded-xl flex items-center justify-center shadow-lg shadow-{{$color}}-900/60">
        <div class="h-16 w-10 flex items-center justify-center text-white">
            <i class="{{$icon}} ri-lg"></i>
        </div>
        <p class="text-white">{{$content}}</p>
        <button wire:click="close()" class="h-16 w-10 flex items-center justify-center text-white ltr:ml-4 rtl:mr-4">
            <i class="ri-close-line ri-lg"></i>
        </button>
    </div>
</div>
