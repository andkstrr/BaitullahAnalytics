@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">

            {{-- Previous --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled"><span class="page-link">&lsaquo;</span></li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&lsaquo;</a>
                </li>
            @endif

            {{-- Always show first 2 pages --}}
            @for ($i = 1; $i <= 2; $i++)
                @if ($i <= $paginator->lastPage())
                    <li class="page-item {{ $paginator->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                    </li>
                @endif
            @endfor

            {{-- Ellipsis after first 2 pages --}}
            @if ($paginator->currentPage() > 5)
                <li class="page-item disabled"><span class="page-link">...</span></li>
            @endif

            {{-- Dynamic middle pages (current-1, current, current+1) --}}
            @for ($i = $paginator->currentPage() - 1; $i <= $paginator->currentPage() + 1; $i++)
                @if ($i > 2 && $i < $paginator->lastPage() - 1)
                    <li class="page-item {{ $paginator->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                    </li>
                @endif
            @endfor

            {{-- Ellipsis before last 2 pages --}}
            @if ($paginator->currentPage() < $paginator->lastPage() - 3)
                <li class="page-item disabled"><span class="page-link">...</span></li>
            @endif

            {{-- Last 2 pages --}}
            @for ($i = $paginator->lastPage() - 1; $i <= $paginator->lastPage(); $i++)
                @if ($i > 2)
                    <li class="page-item {{ $paginator->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                    </li>
                @endif
            @endfor

            {{-- Next --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled"><span class="page-link">&rsaquo;</span></li>
            @endif
        </ul>
    </nav>
@endif
