<div class="grid grid-cols-1 lg:grid-cols-12 gap-4 mb-2">

  {{-- Fő kiemelt cikk --}}
  <div class="lg:col-span-7 relative rounded-xl overflow-hidden group cursor-pointer" style="min-height: 420px;">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-slate-800 to-slate-900">
      <div class="absolute inset-0 opacity-50" style="background: url('https://picsum.photos/seed/hero1/800/500') center/cover no-repeat;"></div>
    </div>
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
    <span class="absolute top-4 left-4 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded uppercase tracking-wider">Kiemelt</span>
    <div class="absolute bottom-0 left-0 right-0 p-6">
      <div class="text-red-400 text-xs font-semibold uppercase tracking-wider mb-2">Belföld · 12 perce</div>
      <h2 class="text-white text-2xl lg:text-3xl font-black leading-tight mb-3 group-hover:text-red-200 transition-colors">
        Kormányváltás után: az első száz nap mérlege – merre tart Magyarország?
      </h2>
      <p class="text-slate-300 text-sm leading-relaxed mb-4 hidden sm:block" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
        A koalíciós kormány megalakulása óta száz nap telt el. Elemzők értékelik az eddigi teljesítményt, a gazdasági mutatók vegyes képet mutatnak, míg a társadalmi közhangulat fokozatosan stabilizálódik.
      </p>
      <div class="flex items-center gap-3 text-slate-400 text-xs">
        <div class="flex items-center gap-1.5">
          <div class="w-6 h-6 rounded-full bg-slate-600 flex items-center justify-center text-white text-xs font-bold">KP</div>
          <span>Kovács Péter</span>
        </div>
        <span>·</span><span>8 perc olvasás</span>
        <span>·</span>
        <span class="flex items-center gap-1">
          <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
          </svg>
          1 284
        </span>
      </div>
    </div>
  </div>

  {{-- Másodlagos hírek --}}
  <div class="lg:col-span-5 grid grid-rows-3 gap-4">

    <div class="bg-white rounded-xl overflow-hidden flex group cursor-pointer hover:shadow-md transition-shadow">
      <div class="w-28 flex-shrink-0 relative bg-gradient-to-br from-emerald-600 to-teal-800" style="min-height:110px;">
        <div class="absolute inset-0 opacity-60" style="background:url('https://picsum.photos/seed/hero2/200/150') center/cover;"></div>
      </div>
      <div class="flex-1 p-3 flex flex-col justify-between">
        <div>
          <span class="text-emerald-600 text-xs font-bold uppercase tracking-wide">Gazdaság</span>
          <h3 class="text-slate-900 text-sm font-bold mt-1 leading-tight group-hover:text-red-600 transition-colors">Az MNB inflációs jelentése: tartósan 3% alatt maradhat az áremelkedés üteme</h3>
        </div>
        <div class="text-slate-400 text-xs">45 perce · 4 perc</div>
      </div>
    </div>

    <div class="bg-white rounded-xl overflow-hidden flex group cursor-pointer hover:shadow-md transition-shadow">
      <div class="w-28 flex-shrink-0 relative bg-gradient-to-br from-purple-600 to-indigo-800" style="min-height:110px;">
        <div class="absolute inset-0 opacity-60" style="background:url('https://picsum.photos/seed/hero3/200/150') center/cover;"></div>
      </div>
      <div class="flex-1 p-3 flex flex-col justify-between">
        <div>
          <span class="text-purple-600 text-xs font-bold uppercase tracking-wide">Külföld</span>
          <h3 class="text-slate-900 text-sm font-bold mt-1 leading-tight group-hover:text-red-600 transition-colors">Párizsi merénylet: európai biztonsági szervek rendkívüli egyeztetést tartottak</h3>
        </div>
        <div class="text-slate-400 text-xs">1 órája · 6 perc</div>
      </div>
    </div>

    <div class="bg-white rounded-xl overflow-hidden flex group cursor-pointer hover:shadow-md transition-shadow">
      <div class="w-28 flex-shrink-0 relative bg-gradient-to-br from-orange-500 to-red-700" style="min-height:110px;">
        <div class="absolute inset-0 opacity-60" style="background:url('https://picsum.photos/seed/hero4/200/150') center/cover;"></div>
      </div>
      <div class="flex-1 p-3 flex flex-col justify-between">
        <div>
          <span class="text-orange-600 text-xs font-bold uppercase tracking-wide">Sport</span>
          <h3 class="text-slate-900 text-sm font-bold mt-1 leading-tight group-hover:text-red-600 transition-colors">BL-döntő: Real Madrid legyőzte a Manchester Cityt – rekordnegyedik egymást követő cím</h3>
        </div>
        <div class="text-slate-400 text-xs">2 órája · 5 perc</div>
      </div>
    </div>

  </div>
</div>
