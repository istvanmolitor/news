<section class="mt-10">
  <div class="flex items-center gap-3 mb-5">
    <div class="w-1 h-6 bg-red-600 rounded-full"></div>
    <h2 class="text-lg font-black text-slate-900 uppercase tracking-wider">Videó</h2>
    <div class="flex-1 h-px bg-slate-200"></div>
    <a href="#" class="text-red-600 text-sm font-medium hover:underline">Összes →</a>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

    {{-- Nagy kiemelt videó --}}
    <div class="sm:col-span-2 bg-slate-900 rounded-xl overflow-hidden group cursor-pointer">
      <div class="relative" style="padding-top:56.25%;">
        <div class="absolute inset-0">
          <div class="absolute inset-0 opacity-50" style="background:url('https://picsum.photos/seed/v1/700/400') center/cover;"></div>
          <div class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-colors flex items-center justify-center">
            <div class="w-16 h-16 rounded-full bg-red-600 flex items-center justify-center group-hover:scale-110 transition-transform shadow-2xl">
              <svg class="w-7 h-7 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
            </div>
          </div>
          <span class="absolute bottom-3 right-3 bg-black/70 text-white text-xs px-2 py-0.5 rounded">12:34</span>
        </div>
      </div>
      <div class="p-4">
        <span class="text-red-400 text-xs font-bold uppercase">Interjú</span>
        <h3 class="text-white font-bold mt-1 group-hover:text-red-300 transition-colors">
          Magyar Péter exkluzív interjúja: „Csak a választók dönthetnek" – a teljes felvétel
        </h3>
        <div class="text-slate-400 text-xs mt-2">Tegnap · 120 ezer megtekintés</div>
      </div>
    </div>

    {{-- Két kis videó --}}
    <div class="space-y-4">
      @foreach([
        ['v2', '5:21',  'A hét legjobb sportpillanatai – összefoglaló',                      '2 napja · 48 ezer megtekintés'],
        ['v3', '8:47',  'Pénzügyi tanácsok: hogyan védd meg a megtakarításaidat az infláció ellen?', '3 napja · 31 ezer megtekintés'],
      ] as [$seed, $dur, $title, $meta])
        <div class="bg-slate-900 rounded-xl overflow-hidden group cursor-pointer">
          <div class="relative" style="padding-top:56.25%;">
            <div class="absolute inset-0">
              <div class="absolute inset-0 opacity-50" style="background:url('https://picsum.photos/seed/{{ $seed }}/350/200') center/cover;"></div>
              <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                <div class="w-10 h-10 rounded-full bg-red-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                  <svg class="w-5 h-5 text-white ml-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                </div>
              </div>
              <span class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-1.5 py-0.5 rounded">{{ $dur }}</span>
            </div>
          </div>
          <div class="p-3">
            <h4 class="text-white text-xs font-bold group-hover:text-red-300 transition-colors">{{ $title }}</h4>
            <div class="text-slate-500 text-xs mt-1">{{ $meta }}</div>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section>
