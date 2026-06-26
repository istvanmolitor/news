@props(['paginator'])

@if($paginator->hasPages())
<nav class="mt-8 border-t border-slate-200 pt-6" aria-label="{{ __('Lapozó') }}">
    <div class="flex flex-col sm:flex-row items-center justify-between gap-4">

        {{-- Count info --}}
        <p class="text-sm text-slate-500 order-2 sm:order-1">
            <span class="font-semibold text-slate-700">{{ $paginator->firstItem() }}–{{ $paginator->lastItem() }}</span>
            / {{ $paginator->total() }} cikk
        </p>

        {{-- Page buttons --}}
        <div class="flex items-center gap-1 order-1 sm:order-2">

            {{-- First + Prev --}}
            @if(!$paginator->onFirstPage())
                <a href="{{ $paginator->url(1) }}"
                   class="flex items-center justify-center w-9 h-9 border border-slate-200 text-slate-500 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition-colors text-xs"
                   aria-label="Első oldal">
                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"/>
                    </svg>
                </a>
                <a href="{{ $paginator->previousPageUrl() }}"
                   class="flex items-center justify-center w-9 h-9 border border-slate-200 text-slate-500 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition-colors"
                   rel="prev" aria-label="Előző oldal">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/>
                    </svg>
                </a>
            @endif

            {{-- Page numbers --}}
            @foreach($paginator->getUrlRange(
                max(1, $paginator->currentPage() - 2),
                min($paginator->lastPage(), $paginator->currentPage() + 2)
            ) as $page => $url)
                @if($page === $paginator->currentPage())
                    <span class="flex items-center justify-center w-9 h-9 bg-red-600 text-white border border-red-600 text-sm font-bold">
                        {{ $page }}
                    </span>
                @else
                    <a href="{{ $url }}"
                       class="flex items-center justify-center w-9 h-9 border border-slate-200 text-slate-600 hover:bg-red-600 hover:text-white hover:border-red-600 transition-colors text-sm">
                        {{ $page }}
                    </a>
                @endif
            @endforeach

            {{-- Next + Last --}}
            @if($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                   class="flex items-center justify-center w-9 h-9 border border-slate-200 text-slate-500 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition-colors"
                   rel="next" aria-label="Következő oldal">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="{{ $paginator->url($paginator->lastPage()) }}"
                   class="flex items-center justify-center w-9 h-9 border border-slate-200 text-slate-500 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition-colors text-xs"
                   aria-label="Utolsó oldal">
                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 5l7 7-7 7M5 5l7 7-7 7"/>
                    </svg>
                </a>
            @endif
        </div>
    </div>
</nav>
@endif
