<section>
  <div class="flex items-center gap-3 mb-4">
    <div class="w-1 h-6 bg-red-600 rounded-full"></div>
    <h2 class="text-lg font-black text-slate-900 uppercase tracking-wider">Belföld</h2>
    <div class="flex-1 h-px bg-slate-200"></div>
    <a href="#" class="text-red-600 text-sm font-medium hover:underline">Összes →</a>
  </div>

  {{-- Kártya sor --}}
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

    <div class="bg-white rounded-xl overflow-hidden group cursor-pointer hover:shadow-lg transition-shadow">
      <div class="h-44 relative overflow-hidden bg-gradient-to-br from-blue-500 to-slate-700">
        <div class="absolute inset-0 opacity-70" style="background:url('https://picsum.photos/seed/bf1/400/250') center/cover;"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
        <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-2 py-0.5 rounded uppercase">Belföld</span>
      </div>
      <div class="p-4">
        <h3 class="text-slate-900 font-bold leading-tight mb-2 group-hover:text-red-600 transition-colors">
          Új parkolási rendszer indul Budapesten szeptembertől – mire számítsunk?
        </h3>
        <p class="text-slate-500 text-sm" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
          A fővárosi önkormányzat bejelentette, hogy a fizetős parkolás rendszerét teljesen megújítják az ősz folyamán.
        </p>
        <div class="flex items-center gap-2 mt-3 text-xs text-slate-400">
          <span>3 órája</span><span>·</span><span>3 perc</span>
          <span>·</span>
          <span class="flex items-center gap-1">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
            342
          </span>
        </div>
      </div>
    </div>

    <div class="bg-white rounded-xl overflow-hidden group cursor-pointer hover:shadow-lg transition-shadow">
      <div class="h-44 relative overflow-hidden bg-gradient-to-br from-green-600 to-emerald-800">
        <div class="absolute inset-0 opacity-70" style="background:url('https://picsum.photos/seed/bf2/400/250') center/cover;"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
        <span class="absolute top-3 left-3 bg-green-600 text-white text-xs font-bold px-2 py-0.5 rounded uppercase">Oktatás</span>
      </div>
      <div class="p-4">
        <h3 class="text-slate-900 font-bold leading-tight mb-2 group-hover:text-red-600 transition-colors">
          Felvételi változások 2026: ezek az újítások érintik majd a diákokat
        </h3>
        <p class="text-slate-500 text-sm" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
          Az oktatási minisztérium közzétette a következő tanév felvételi eljárásának módosításait.
        </p>
        <div class="flex items-center gap-2 mt-3 text-xs text-slate-400">
          <span>5 órája</span><span>·</span><span>5 perc</span>
          <span>·</span>
          <span class="flex items-center gap-1">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
            891
          </span>
        </div>
      </div>
    </div>

  </div>

  {{-- Lista sor --}}
  <div class="mt-4 bg-white rounded-xl divide-y divide-slate-100 overflow-hidden">

    @foreach([
      ['bg-gradient-to-br from-slate-400 to-slate-600', 'bf-l1', 'text-red-600', 'Egészség',       'Kórházi várólisták csökkentek – az egészségügyi reform első eredményei',     '7 órája', '3'],
      ['bg-gradient-to-br from-yellow-400 to-orange-500','bf-l2','text-orange-600','Infrastruktúra','M3-as metró teljes felújítása: kész az ütemterv, 2027-re végeznek',           '9 órája', '2'],
      ['bg-gradient-to-br from-teal-400 to-cyan-600',   'bf-l3', 'text-teal-600',   'Környezet',    'Balaton-felvidéki szőlőültetvényeket pusztított el a jégeső',               'Tegnap',  '4'],
    ] as [$bg, $seed, $labelClass, $label, $title, $time, $min])
      <div class="flex gap-3 p-4 group cursor-pointer hover:bg-slate-50 transition-colors">
        <div class="w-16 h-16 rounded-lg flex-shrink-0 relative {{ $bg }}">
          <div class="absolute inset-0 rounded-lg opacity-70" style="background:url('https://picsum.photos/seed/{{ $seed }}/80/80') center/cover;"></div>
        </div>
        <div class="flex-1">
          <span class="{{ $labelClass }} text-xs font-bold uppercase">{{ $label }}</span>
          <h4 class="text-slate-900 text-sm font-semibold mt-0.5 group-hover:text-red-600 transition-colors leading-tight">{{ $title }}</h4>
          <div class="text-slate-400 text-xs mt-1">{{ $time }} · {{ $min }} perc</div>
        </div>
      </div>
    @endforeach

  </div>
</section>
