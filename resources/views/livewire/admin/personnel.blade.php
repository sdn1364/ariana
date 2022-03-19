<div>
    <form action="" wire:submit.prevent="save(Object.fromEntries(new FormData($event.target)))">
        <div class="card card-flush">
            <div class="card-header">
                <h3 class="card-title">تعداد پرسنل <small>(نمایش در صفحه اصلی)</small></h3>
            </div>
            <div class="card-body">
                <x-backend.input.group label="تعداد پرسنل" :error="$errors->first('title')">
                    <x-backend.input.text :editing="$content" name="title"></x-backend.input.text>
                </x-backend.input.group>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-success">ذخیره</button>
            </div>
        </div>
    </form>
</div>
