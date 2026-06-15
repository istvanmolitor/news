<section class="mt-14">
  <div class="flex items-center gap-3 mb-6">
    <div class="w-1 h-6 bg-red-600 rounded-full"></div>
    <h2 class="text-xl font-black text-slate-900 uppercase tracking-wider">Kapcsolódó cikkek</h2>
    <div class="flex-1 h-px bg-slate-200"></div>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
    @foreach([
      ['rc1','from-blue-700 to-indigo-900',   'bg-blue-600',  'Belföld',  'Az ellenzék reagált a kormány 100 napos értékelésére',         'Fekete Ádám', 'FÁ', '5 perce'],
      ['rc2','from-emerald-700 to-teal-900',  'bg-emerald-600','Gazdaság', 'Gazdasági mérleg: infláció, kamat, és az euró-árfolyam',        'Barna Eszter','BE', '2 órája'],
      ['rc3','from-purple-700 to-violet-900', 'bg-purple-600', 'Politika', 'A koalíciós egyezség részletei – mit ígértek a pártok egymásnak?','Horváth Anna','HA','1 napja'],
    ] as [$seed, $grad, $catClass, $cat, $title, $author, $init, $time])
      <a href="#" class="group bg-white rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300">
        <div class="h-44 relative overflow-hidden bg-gradient-to-br {{ $grad }}">
          <div class="absolute inset-0 opacity-65" style="background: url('https://picsum.photos/seed/{{ $seed }}/400/250') center/cover;"></div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
          <span class="{{ $catClass }} absolute top-3 left-3 text-white text-xs font-bold px-2.5 py-0.5 rounded-full">{{ $cat }}</span>
        </div>
        <div class="p-4">
          <h3 class="text-slate-900 font-bold leading-tight group-hover:text-red-600 transition-colors mb-3" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
            {{ $title }}
          </h3>
          <div class="flex items-center justify-between text-xs text-slate-400">
            <div class="flex items-center gap-2">
              <div class="w-6 h-6 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 font-bold">{{ $init }}</div>
              <span>{{ $author }}</span>
            </div>
            <span>{{ $time }}</span>
          </div>
        </div>
      </a>
    @endforeach
  </div>
</section>
