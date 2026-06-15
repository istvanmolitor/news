<section>
  <div class="flex items-center gap-3 mb-4">
    <div class="w-1 h-6 bg-purple-600 rounded-full"></div>
    <h2 class="text-lg font-black text-slate-900 uppercase tracking-wider">Külföld</h2>
    <div class="flex-1 h-px bg-slate-200"></div>
    <a href="#" class="text-purple-600 text-sm font-medium hover:underline">Összes →</a>
  </div>

  {{-- Nagy kiemelt cikk --}}
  <div class="bg-white rounded-xl overflow-hidden group cursor-pointer hover:shadow-lg transition-shadow mb-4">
    <div class="flex flex-col sm:flex-row">
      <div class="sm:w-72 h-48 sm:h-auto flex-shrink-0 relative bg-gradient-to-br from-purple-700 to-indigo-900">
        <div class="absolute inset-0 opacity-60" style="background:url('https://picsum.photos/seed/kf1/400/300') center/cover;"></div>
      </div>
      <div class="p-5 flex flex-col justify-between">
        <div>
          <span class="text-purple-600 text-xs font-bold uppercase tracking-wide">USA · Választások</span>
          <h3 class="text-slate-900 font-bold text-lg leading-tight mt-2 mb-3 group-hover:text-red-600 transition-colors">
            Az amerikai elnökválasztás kampánya: ki nyeri a döntő csatát?
          </h3>
          <p class="text-slate-500 text-sm" style="display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">
            Az előválasztási szezon lezárultával mind a két párt jelöltje megkezdte az általános kampányt. A közvéleménykutatások szoros versenyt jeleznek a kulcsállamokban.
          </p>
        </div>
        <div class="flex items-center gap-3 mt-4 text-xs text-slate-400">
          <div class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center text-purple-700 font-bold text-xs">NK</div>
          <span>Nagy Katalin</span><span>·</span><span>2 órája</span><span>·</span><span>7 perc</span>
        </div>
      </div>
    </div>
  </div>

  {{-- Kis kártya sor --}}
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    @foreach([
      ['from-red-800 to-rose-900',    'kf2', 'text-red-600',    'Oroszország', 'Moszkva újabb szankciókat hirdetett meg az EU ellen',           '4 órája'],
      ['from-yellow-600 to-amber-800','kf3', 'text-yellow-600', 'Közel-Kelet', 'Humanitárius segélykonvoj ért Gázába a tűzszünet alatt',        '6 órája'],
      ['from-blue-700 to-cyan-900',   'kf4', 'text-blue-600',   'EU',          'Brüsszel: új AI-szabályozás lép életbe 2026 januárjától',       '8 órája'],
    ] as [$grad, $seed, $labelClass, $label, $title, $time])
      <div class="bg-white rounded-xl overflow-hidden group cursor-pointer hover:shadow-md transition-shadow">
        <div class="h-32 relative overflow-hidden bg-gradient-to-br {{ $grad }}">
          <div class="absolute inset-0 opacity-60" style="background:url('https://picsum.photos/seed/{{ $seed }}/250/150') center/cover;"></div>
        </div>
        <div class="p-3">
          <span class="{{ $labelClass }} text-xs font-bold uppercase">{{ $label }}</span>
          <h4 class="text-slate-900 text-sm font-bold mt-1 leading-tight group-hover:text-red-600 transition-colors">{{ $title }}</h4>
          <div class="text-slate-400 text-xs mt-2">{{ $time }}</div>
        </div>
      </div>
    @endforeach
  </div>
</section>
