<div class="module mb-5">
    <div class="row mb-2">
        <div class="col">
            <div class="name d-flex align-items-center bg-gray-200 border border-gray-300 gap-2 z-index-3">
                <button type="button" class="btn btn-sm btn-active-light-danger btn-icon"
                        wire:click="deleteRow({{ $row->id }})"><i class="las la-times"></i></button>
                <span>ردیف</span>
                <button type="button" class="btn btn-sm btn-active-light-primary btn-icon"
                        wire:click="showSizes()"><i class="las la-ellipsis-h"></i></button>
            </div>
        </div>
        <div class="col d-flex justify-content-end">
            <div class="sizes align-items-center bg-gray-200 border border-gray-300 gap-2 z-index-3 ml-0 {{ $size_option ? 'active': ''}}" id="size_container_$row->id">
                @foreach($sizes_buttons as $size)
                    <button class="btn btn-icon btn-sm {{ $row->size == $size['name'] ? 'btn-primary disabled svg-icon-white' : 'btn-active-light-primary' }}" type="button"
                            wire:click="changeSize('{{ $size['name'] }}')">
                        <span class="svg-icon svg-icon-primary ">{!! $size['icon']!!}</span>
                    </button>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">

        @switch($row->size)
            @case(1)
            <div class="col">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 1])
            </div>
            @break
            @case('2_2')
            <div class="col">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 1])
            </div>
            <div class="col">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 2])
            </div>
            @break
            @case(3)
            <div class="col">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 1])
            </div>
            <div class="col">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 2])
            </div>
            <div class="col">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 3])
            </div>
            @break
            @case('4')
            <div class="col">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 1])
            </div>
            <div class="col">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 2])
            </div>
            <div class="col">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 3])
            </div>
            <div class="col">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 4])
            </div>
            @break
            @case('2_1')
            <div class="col-4">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 1])
            </div>
            <div class="col-8">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 2])
            </div>
            @break
            @case('1_2')
            <div class="col-8">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 1])
            </div>
            <div class="col-4">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 2])
            </div>
            @break
            @case('3_1')
            <div class="col-3">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 1])
            </div>
            <div class="col-9">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 2])
            </div>
            @break
            @case('1_3')
            <div class="col-9">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 1])
            </div>
            <div class="col-3">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 2])
            </div>
            @break
            @case('2_1_1')
            <div class="col-3">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 1])
            </div>
            <div class="col-3">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 2])
            </div>
            <div class="col-6">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 3])
            </div>
            @break
            @case('1_1_2')
            <div class="col-6">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 1])
            </div>
            <div class="col-3">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 2])
            </div>
            <div class="col-3">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 3])
            </div>
            @break
            @case('1_2_1')
            <div class="col-3">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 1])
            </div>
            <div class="col-6">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 2])
            </div>
            <div class="col-3">
                @livewire('backend.pagemaker.module-content', ['row'=> $row->id, 'part' => 3])
            </div>
            @break
        @endswitch
    </div>
</div>
