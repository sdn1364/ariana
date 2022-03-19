@props(['award'])

<div class="grid-item w-40 h-fit m-1 p-2 border border-primary-300 rounded flex flex-col justify-between">
    <img src="{{asset($award->getFirstMediaUrl())}}" alt="">
    <p class="text-primary-500 px-2 text-center mt-2 text-sm">
        {{$award->content}}
    </p>
    <p class="ss02 text-primary-300 text-center text-sm">
        {{app()->isLocale('fa') ? verta($award->date)->format('%d %B %Y') : Carbon\Carbon::createFromFormat('Y-m-d', $award->date)->format('d F Y')}}
    </p>
</div>
