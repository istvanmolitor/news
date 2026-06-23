<header class="bg-white border-b border-slate-200">
  <div class="max-w-screen-xl mx-auto px-4 py-4">
    <div class="flex items-center justify-between gap-4">

      {{-- Logo --}}
      <a href="/" class="flex items-center gap-3 flex-shrink-0">
        <div class="w-12 h-12 bg-red-600 rounded-lg flex items-center justify-center">
          <span class="text-white text-2xl font-black leading-none">H</span>
        </div>
        <div>
          <div class="text-2xl font-black text-slate-900 tracking-tight leading-none">
            HÍREK<span class="text-red-600">24</span>
          </div>
          <div class="text-xs text-slate-500 tracking-widest uppercase">Független Hírportál</div>
        </div>
      </a>

      {{-- Keresősáv --}}
      <form action="{{ route('news.search') }}" method="GET" class="hidden md:flex flex-1 max-w-md mx-8">
        <input
          type="text"
          name="q"
          placeholder="Keresés a hírportálon..."
          class="flex-1 border border-slate-300 rounded-l-lg px-4 py-2 text-sm focus:outline-none focus:border-red-400"
        >
        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-r-lg hover:bg-red-700 transition-colors" aria-label="Keresés">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
          </svg>
        </button>
      </form>

      {{-- Jobb oldali mutatók --}}
      <div class="flex items-center gap-4">
        <div class="hidden sm:flex items-center gap-2 bg-red-50 border border-red-200 rounded-lg px-3 py-2">
          <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
          <span class="text-red-700 text-xs font-semibold uppercase tracking-wide">Élő közvetítés</span>
        </div>
        <div class="hidden lg:flex flex-col text-right">
          <span class="text-xs text-slate-400">EUR/HUF</span>
          <span class="text-sm font-semibold text-slate-700">395,42 <span class="text-green-600 text-xs">▲ 0.3%</span></span>
        </div>
        <div class="hidden lg:flex flex-col text-right">
          <span class="text-xs text-slate-400">USD/HUF</span>
          <span class="text-sm font-semibold text-slate-700">362,18 <span class="text-red-500 text-xs">▼ 0.1%</span></span>
        </div>
      </div>

    </div>
  </div>
  @include('news::partials.nav')
</header>
