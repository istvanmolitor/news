@php
    $searchRoute = collect(['news.search', 'cms.search', 'search'])
        ->first(fn($r) => \Illuminate\Support\Facades\Route::has($r));
    $searchAction = $searchRoute ? route($searchRoute) : '/search';
    $searchQuery = request()->string('search')->value();
@endphp

<form action="{{ $searchAction }}" method="GET" role="search" class="flex items-center">
    <div class="relative">
        <input
            type="search"
            name="search"
            value="{{ $searchQuery }}"
            placeholder="Keresés a hírekben..."
            aria-label="Keresés"
            class="w-48 sm:w-64 pl-4 pr-10 py-2 text-sm border border-slate-200 rounded-full bg-slate-50 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent focus:bg-white transition"
        >
        <button
            type="submit"
            class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-red-600 transition-colors"
            aria-label="Keresés indítása"
        >
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
        </button>
    </div>
</form>
