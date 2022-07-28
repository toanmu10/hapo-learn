{{-- <nav>
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                <span aria-hidden="true"><i class="fa-solid fa-arrow-left-long"></i></span>
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
        <li class="page-item">
            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                <span aria-hidden="true"><i class="fa-solid fa-arrow-right-long"></i></span>
            </a>
        </li>
    </ul>
</nav> --}}
@if ($paginator->hasPages())
<nav>
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        {{-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <span aria-hidden="true">&lsaquo;</span>
        </li> --}}
        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                <span aria-hidden="true"><i class="fa-solid fa-arrow-left-long"></i></span>
            </a>
        </li>
        @else
        {{-- <li>
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                aria-label="@lang('pagination.previous')">&lsaquo;</a>
        </li> --}}
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                aria-label="@lang('pagination.previous')">
                <span aria-hidden="true"><i class="fa-solid fa-arrow-left-long"></i></span>
            </a>
        </li>
        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
        @endif
        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        {{-- <li class="active" aria-current="page"><span>{{ $page }}</span></li> --}}
        <li class="page-item active" aria-current="page"><a class="page-link" href="javascript: void(0);">{{ $page
                }}</a></li>
        @else
        {{-- <li><a href="{{ $url }}">{{ $page }}</a></li> --}}
        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        {{-- <li>
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
        </li> --}}
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                aria-label="@lang('pagination.next')">
                <span aria-hidden="true"><i class="fa-solid fa-arrow-right-long"></i></span>
            </a>
        </li>
        @else
        {{-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
            <span aria-hidden="true">&rsaquo;</span>
        </li> --}}
        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                <span aria-hidden="true"><i class="fa-solid fa-arrow-right-long"></i></span>
            </a>
        </li>
        @endif
    </ul>
</nav>
@endif
