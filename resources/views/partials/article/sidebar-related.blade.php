<div class="bg-white rounded-xl overflow-hidden border border-slate-100">
  <div class="px-5 py-4 border-b border-slate-100">
    <h4 class="text-sm font-bold text-slate-700 uppercase tracking-wider">Kapcsolódó cikkek</h4>
  </div>
  <div class="divide-y divide-slate-100">
    @foreach([
      ['r1','from-blue-700 to-slate-900',   '5 perce',   'Az ellenzék reagált a kormány 100 napos értékelésére'],
      ['r2','from-emerald-700 to-teal-900',  '2 órája',   'Gazdasági mérleg: inflácó, kamat, és az euró-árfolyam alakulása'],
      ['r3','from-purple-700 to-indigo-900', '1 napja',   'A koalíciós egyezség részletei – mit ígértek egymásnak a pártok?'],
      ['r4','from-orange-700 to-red-900',    '3 napja',   'Az első 100 nap legjobb és legrosszabb döntései – elemzők értékelése'],
    ] as [$seed, $grad, $time, $title])
      <a href="#" class="flex gap-3 p-4 hover:bg-slate-50 transition-colors group">
        <div class="w-16 h-16 rounded-lg flex-shrink-0 relative bg-gradient-to-br {{ $grad }}">
          <div class="absolute inset-0 rounded-lg opacity-70" style="background: url('https://picsum.photos/seed/{{ $seed }}/80/80') center/cover;"></div>
        </div>
        <div class="flex-1">
          <p class="text-slate-800 text-xs font-semibold group-hover:text-red-600 transition-colors leading-tight">{{ $title }}</p>
          <span class="text-slate-400 text-xs mt-1.5 block">{{ $time }}</span>
        </div>
      </a>
    @endforeach
  </div>
</div>
