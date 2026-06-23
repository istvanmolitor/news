<nav class="bg-slate-900 sticky top-0 z-50 shadow-lg">
  <div class="max-w-screen-xl mx-auto px-4">
    <div class="flex items-center overflow-x-auto">
      <a href="/" class="text-white text-sm font-semibold px-4 py-3.5 bg-red-600 border-b-2 border-red-400 whitespace-nowrap flex-shrink-0">
        FŐOLDAL
      </a>
      @foreach(menu('main') as $menuItem)
        <a href="{{ $menuItem->getUrl() }}"
           class="text-slate-300 hover:text-white text-sm font-medium px-4 py-3.5 hover:bg-slate-800 transition-colors whitespace-nowrap flex-shrink-0 border-b-2 {{ $menuItem->isActive() ? 'border-red-500 text-white' : 'border-transparent' }}">
          {{ strtoupper($menuItem->getLabel()) }}
        </a>
      @endforeach
      <a href="#" class="text-yellow-400 hover:text-yellow-300 text-sm font-medium px-4 py-3.5 hover:bg-slate-800 transition-colors whitespace-nowrap flex-shrink-0 border-b-2 border-transparent hover:border-yellow-400">
        PRÉMIUM ★
      </a>
    </div>
  </div>
</nav>
