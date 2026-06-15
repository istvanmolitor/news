<section class="mt-10">
  <div class="flex items-center gap-3 mb-5">
    <div class="w-1 h-6 bg-orange-500 rounded-full"></div>
    <h2 class="text-lg font-black text-slate-900 uppercase tracking-wider">Sport</h2>
    <div class="flex-1 h-px bg-slate-200"></div>
    <a href="#" class="text-orange-500 text-sm font-medium hover:underline">Összes →</a>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    @foreach([
      ['from-green-700 to-emerald-900', 'sp1', 'Labdarúgás', 'Ferencváros: Dibusz Dénest eladják a Premier League-be?',          '2 órája'],
      ['from-yellow-600 to-orange-800', 'sp2', 'Tenisz',      'Fucsovics legyőzte Djokovicot Wimbledonban – óriási meglepetés',   '4 órája'],
      ['from-blue-700 to-slate-900',    'sp3', 'Úszás',       'Három arany az Eb-n – Milák ismét csúcsot döntött Rómában',        'Tegnap'],
      ['from-red-800 to-rose-900',      'sp4', 'F1',          'Magyar Nagydíj: Verstappen győz Hamiltonra, Norris harmadik',      'Tegnap'],
    ] as [$grad, $seed, $label, $title, $time])
      <div class="bg-white rounded-xl overflow-hidden group cursor-pointer hover:shadow-lg transition-shadow">
        <div class="h-36 relative overflow-hidden bg-gradient-to-br {{ $grad }}">
          <div class="absolute inset-0 opacity-60" style="background:url('https://picsum.photos/seed/{{ $seed }}/300/200') center/cover;"></div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
          <span class="absolute bottom-2 left-3 bg-orange-500 text-white text-xs font-bold px-2 py-0.5 rounded">{{ $label }}</span>
        </div>
        <div class="p-3">
          <h4 class="text-slate-900 text-sm font-bold leading-tight group-hover:text-red-600 transition-colors">{{ $title }}</h4>
          <div class="text-slate-400 text-xs mt-2">{{ $time }}</div>
        </div>
      </div>
    @endforeach
  </div>
</section>
