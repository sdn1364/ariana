<div class="card card-flush card-shadow">
    <div class="card-header">
        <h3 class="card-title">صفحه ساز</h3>
    </div>
    <div class="card-body d-flex flex-column">

        <div class="preview-pane mb-10 rounded-2">
            @foreach($rows as $row)
                <livewire:backend.pagemaker.module :row="$row" :wire:key="$row->id">
            @endforeach
        </div>
        <button class="w-100 h-80px btn btn-secondary" type="button" wire:click="addRow({{ $page_id }})">
            <i class="fa fa-plus fa-2x"></i>
        </button>
    </div>
</div>
