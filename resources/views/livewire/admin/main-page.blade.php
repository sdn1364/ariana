<div>
    @section('admin-title', 'امکانات صفحه اصلی')

    @section('admin-page-title', 'امکانات صفحه اصلی')
    @section('admin-page-description', 'لیست امکانات صفحه اصلی را در این صفحه می‌توانید مدیریت کنید')

    @section('admin-page-toolbar')

        <a href="{{route('admin.slides.create')}}" class="btn btn-sm btn-primary">اسلاید جدید</a>
        <a href="{{route('admin.quicklinks.create')}}" class="btn btn-sm btn-primary">لینک جدید</a>

    @endsection
    @php
        $propertiesSlide =[
                'headers' => [
                                0 => [
                                        'name' => 'نام',
                                        'field' => 'title'
                                    ],
                               ],
                'model' => 'App\Models\slides\Slide',
                'searchable'=>['title'],
                'route'=> 'slides'
        ];
        $propertiesLink =[
                'headers' => [
                                0 => [
                                        'name' => 'عنوان',
                                        'field' => 'title'
                                    ],
                               ],
                'model' => 'App\Models\quicklinks\Quicklink',
                'searchable'=>['title'],
                'route'=> 'quicklinks'
        ];
    @endphp
    <div class="mb-5">
        @livewire('backend.datatable',$propertiesSlide)
    </div>
    <div class="mb-5">
        @livewire('backend.home.history')
    </div>
    <div class="mb-5">
        @livewire('backend.datatable',$propertiesLink)
    </div>
    <div class="mb-5">
        @livewire('backend.personnel')
    </div>
</div>
