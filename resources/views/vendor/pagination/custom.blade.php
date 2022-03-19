@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item previous disabled"><a class="page-link"><i class="fa fa-angle-right"></i></a></li>
        @else
            <li class="page-item"><a class="page-link" href="{{ $paginator->url(1) }}" rel="prev"><i class="fa fa-angle-double-right"></i></a></li>
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-angle-right"></i></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page === $paginator->currentPage())
                        <li class="active page-item"><a class="page-link">{{ $page }}</a></li>
                    @elseif (($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2)
                     || $page === $paginator->lastPage())
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @elseif ($page === $paginator->lastPage()-1)
                        <li class="disabled page-item"><a class="page-link"><i class="fa fa-ellipsis-h"></i></a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa fa-angle-left"></i></a></li>
            <li class="page-item"><a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}" rel="next"><i class="fa fa-angle-double-left"></i></a></li>
        @else
            <li class="disabled page-item next"><a class="page-link"><i class="fa fa-angle-left"></i></a></li>
        @endif
    </ul>@endif
