<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-10">

  {{-- Tech --}}
  <section>
    <div class="flex items-center gap-3 mb-4">
      <div class="w-1 h-6 bg-cyan-500 rounded-full"></div>
      <h2 class="text-lg font-black text-slate-900 uppercase tracking-wider">Tech</h2>
      <div class="flex-1 h-px bg-slate-200"></div>
      <a href="#" class="text-cyan-600 text-sm font-medium hover:underline">Összes →</a>
    </div>
    <div class="space-y-3">
      @foreach([
        ['from-cyan-500 to-blue-700',    't1', 'text-cyan-600',    'AI',               'OpenAI bejelentette a GPT-5-öt: ezerszeres teljesítmény-ugrás',             '3 órája · 4 perc'],
        ['from-purple-600 to-violet-800','t2', 'text-purple-600',  'Kiberbiztonság',   'Hackertámadás érte a Magyar Posta rendszereit – adatszivárgás gyanúja',     '6 órája · 3 perc'],
        ['from-emerald-500 to-teal-700', 't3', 'text-emerald-600', 'Elektromos autó',  'Tesla Gigafactory Budapest: döntés még az idén várható a helyszínről',      'Tegnap · 6 perc'],
      ] as [$grad, $seed, $labelClass, $label, $title, $meta])
        <div class="bg-white rounded-xl overflow-hidden flex group cursor-pointer hover:shadow-md transition-shadow">
          <div class="w-24 h-24 flex-shrink-0 relative bg-gradient-to-br {{ $grad }}">
            <div class="absolute inset-0 opacity-60" style="background:url('https://picsum.photos/seed/{{ $seed }}/120/120') center/cover;"></div>
          </div>
          <div class="p-3 flex flex-col justify-between flex-1">
            <div>
              <span class="{{ $labelClass }} text-xs font-bold uppercase">{{ $label }}</span>
              <h4 class="text-slate-900 text-sm font-bold mt-0.5 group-hover:text-red-600 transition-colors leading-tight">{{ $title }}</h4>
            </div>
            <div class="text-slate-400 text-xs">{{ $meta }}</div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  {{-- Kultúra --}}
  <section>
    <div class="flex items-center gap-3 mb-4">
      <div class="w-1 h-6 bg-pink-500 rounded-full"></div>
      <h2 class="text-lg font-black text-slate-900 uppercase tracking-wider">Kultúra</h2>
      <div class="flex-1 h-px bg-slate-200"></div>
      <a href="#" class="text-pink-600 text-sm font-medium hover:underline">Összes →</a>
    </div>
    <div class="space-y-3">
      @foreach([
        ['from-pink-500 to-rose-700',   'k1', 'text-pink-600',   'Film',      'Nemes Jeles László új filmje Oscarra jelölt: világpremierje Velencében',      '1 napja · 5 perc'],
        ['from-amber-500 to-yellow-700','k2', 'text-amber-600',  'Zene',      'Sziget Fesztivál 2026: teljes lineup nyilvánosságra hozva – ezek jönnek',     '2 napja · 3 perc'],
        ['from-indigo-500 to-violet-700','k3','text-indigo-600', 'Irodalom',  'Magyar írónő nyerte a Booker Prize-t – nemzetközi elismerés',                 '3 napja · 7 perc'],
      ] as [$grad, $seed, $labelClass, $label, $title, $meta])
        <div class="bg-white rounded-xl overflow-hidden flex group cursor-pointer hover:shadow-md transition-shadow">
          <div class="w-24 h-24 flex-shrink-0 relative bg-gradient-to-br {{ $grad }}">
            <div class="absolute inset-0 opacity-60" style="background:url('https://picsum.photos/seed/{{ $seed }}/120/120') center/cover;"></div>
          </div>
          <div class="p-3 flex flex-col justify-between flex-1">
            <div>
              <span class="{{ $labelClass }} text-xs font-bold uppercase">{{ $label }}</span>
              <h4 class="text-slate-900 text-sm font-bold mt-0.5 group-hover:text-red-600 transition-colors leading-tight">{{ $title }}</h4>
            </div>
            <div class="text-slate-400 text-xs">{{ $meta }}</div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

</div>
