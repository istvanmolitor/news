<div class="bg-slate-900 text-slate-400 text-xs py-1.5">
  <div class="max-w-screen-xl mx-auto px-4 flex items-center justify-between">
    <div class="flex items-center gap-4">
      <span>{{ now()->translatedFormat('Y. F j., l') }}</span>
      <span class="hidden sm:inline text-slate-700">|</span>
      <span class="hidden sm:flex items-center gap-1">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
        </svg>
        Budapest: 24°C, részben felhős
      </span>
    </div>
    <div class="flex items-center gap-3">
      <a href="#" class="hover:text-white transition-colors" aria-label="Facebook">
        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
        </svg>
      </a>
      <a href="#" class="hover:text-white transition-colors" aria-label="X / Twitter">
        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
        </svg>
      </a>
      <span class="text-slate-700">|</span>
      <a href="#" class="hover:text-white transition-colors">Belépés</a>
      <a href="#" class="bg-red-600 hover:bg-red-700 text-white px-2.5 py-1 rounded text-xs font-medium transition-colors">Előfizetés</a>
    </div>
  </div>
</div>
