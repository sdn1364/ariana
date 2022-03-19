
<ul class="nav nab-tabs nav-line-tabs mb-5 fs-6 ">
    @foreach($languages as $lang)
        <li class="nav-item">
            <a href="#tsa_tab_pane_{{$lang->id}}" class="nav-link position-relative {{$loop->first? 'active' : ''}}" data-bs-toggle="tab">
                {{ getLanguageName($lang) }}
                @if($errors->has(getLocale($lang).'_title') || $errors->has(getLocale($lang).'_content'))
                    <i class="ri-error-warning-fill text-danger mr-2 position-absolute top-0 -left-4 "></i>
                @endif
            </a>
        </li>
    @endforeach
</ul>
<div class="tab-content bg-gray-100 p-5 rounded-4">
    {{ $slot }}
</div>
