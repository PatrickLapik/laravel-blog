@if ($paginator->hasPages())
    <nav>
        <ul class="join">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled join-item btn btn-disabled" aria-disabled="true"><span>@lang('pagination.previous')</span></li>
            @else
                <li class="join-item btn btn-ghost"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="join-item btn btn-ghost"><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
            @else
                <li class="disabled join-item btn btn-disabled" aria-disabled="true"><span>@lang('pagination.next')</span></li>
            @endif
        </ul>
    </nav>
@endif
