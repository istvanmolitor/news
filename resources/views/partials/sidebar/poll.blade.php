<div class="bg-white rounded-xl overflow-hidden">
  <div class="bg-gradient-to-r from-indigo-700 to-purple-700 px-4 py-3 flex items-center gap-2">
    <svg class="w-4 h-4 text-indigo-200" fill="currentColor" viewBox="0 0 24 24">
      <path d="M9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4zm2.5 2.1h-15v-14.2h15v14.2zm0-16.1h-15c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2v-14c0-1.1-.9-2-2-2z"/>
    </svg>
    <span class="text-white text-sm font-bold uppercase tracking-wider">Napi szavazás</span>
  </div>
  <div class="p-4">
    <p class="text-slate-800 text-sm font-semibold mb-4">
      Ön szerint kellene-e kötelező szavazást bevezetni Magyarországon?
    </p>
    <div class="space-y-2.5">
      @foreach([
        ['Igen, kötelező legyen',    38, 'bg-indigo-500'],
        ['Nem, maradjon önkéntes',  52, 'bg-red-500'],
        ['Nem tudom',               10, 'bg-slate-400'],
      ] as [$label, $pct, $barClass])
        <div>
          <div class="flex justify-between text-xs text-slate-600 mb-1">
            <span>{{ $label }}</span>
            <span class="font-bold">{{ $pct }}%</span>
          </div>
          <div class="h-2 bg-slate-100 rounded-full">
            <div class="h-full {{ $barClass }} rounded-full" style="width:{{ $pct }}%"></div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="text-slate-400 text-xs mt-3 flex justify-between">
      <span>12 482 szavazat</span>
      <span>Még 2 nap</span>
    </div>
    <div class="mt-3 flex gap-2">
      <button class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold py-2 rounded-lg transition-colors">
        Szavazok
      </button>
      <button class="flex-1 border border-slate-200 hover:bg-slate-50 text-slate-600 text-xs font-semibold py-2 rounded-lg transition-colors">
        Eredmény
      </button>
    </div>
  </div>
</div>
