<div class="mt-10">
  <div class="flex items-center justify-between mb-6">
    <h3 class="font-black text-xl text-slate-900">Hozzászólások <span class="text-slate-400 font-normal text-base ml-1">(341)</span></h3>
    <select class="text-sm border border-slate-200 rounded-lg px-3 py-2 bg-white text-slate-600 focus:outline-none">
      <option>Legfrissebb</option>
      <option>Legjobb</option>
    </select>
  </div>

  {{-- Hozzászólás írás --}}
  <div class="flex gap-3 mb-8">
    <div class="w-9 h-9 rounded-full bg-slate-200 flex items-center justify-center text-slate-500 flex-shrink-0">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
    </div>
    <div class="flex-1">
      <textarea
        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm resize-none focus:outline-none focus:border-red-400 text-slate-700 bg-white"
        rows="3"
        placeholder="Írj hozzászólást... (Bejelentkezés szükséges)"
      ></textarea>
      <div class="flex justify-between items-center mt-2">
        <span class="text-slate-400 text-xs">Kérjük, tartsd be a <a href="#" class="text-red-600 hover:underline">közösségi szabályokat</a>!</span>
        <button class="bg-red-600 hover:bg-red-700 text-white text-xs font-bold px-4 py-2 rounded-lg transition-colors">Küldés</button>
      </div>
    </div>
  </div>

  {{-- Hozzászólás lista --}}
  <div class="space-y-5">
    @foreach([
      ['SB','Szabó Béla','szabo.bela','4 perce','Nagyon részletes és kiegyensúlyozott összefoglaló. Végre egy cikk, ami nem csak az egyik oldalt mutatja be. A gazdasági adatoknál különösen jó lett volna az összevetés a korábbi időszakkal.','24','2'],
      ['MK','Molnár Kata','m.kata','18 perce','Az egészségügyi reform részéről azért hiányolom a konkrét intézkedések listáját. Általánosságban mindig könnyű dicsérni, de a részletek a lényeg.','37','5'],
      ['TG','Tóth Gábor','gtoth42','1 órája','Érdekes perspektíva, de azért nem árt megemlíteni, hogy a 100 nap sok-e vagy kevés egy ilyen mélyreható elemzéshez. Szerintem még korai a végső ítélet.','12','1'],
    ] as [$initials, $name, $handle, $time, $comment, $likes, $replies])
      <div class="bg-white rounded-xl p-5 border border-slate-100 hover:border-slate-200 transition-colors">
        <div class="flex items-start gap-3">
          <div class="w-9 h-9 rounded-full bg-gradient-to-br from-slate-500 to-slate-700 flex items-center justify-center text-white text-xs font-bold flex-shrink-0">{{ $initials }}</div>
          <div class="flex-1">
            <div class="flex items-center gap-2 flex-wrap">
              <span class="font-bold text-slate-900 text-sm">{{ $name }}</span>
              <span class="text-slate-400 text-xs">@{{ $handle }}</span>
              <span class="text-slate-300 text-xs">·</span>
              <span class="text-slate-400 text-xs">{{ $time }}</span>
            </div>
            <p class="text-slate-600 text-sm leading-relaxed mt-2">{{ $comment }}</p>
            <div class="flex items-center gap-4 mt-3 text-xs text-slate-400">
              <button class="flex items-center gap-1 hover:text-green-600 transition-colors">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>
                {{ $likes }}
              </button>
              <button class="flex items-center gap-1 hover:text-red-600 transition-colors">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14H5.236a2 2 0 01-1.789-2.894l3.5-7A2 2 0 018.736 3h4.018c.163 0 .326.02.485.06L17 4m-7 10v2a2 2 0 002 2h.095c.5 0 .905-.405.905-.905 0-.714.211-1.412.608-2.006L17 13V4m-7 10h2m5-10h2a2 2 0 012 2v6a2 2 0 01-2 2h-2.5"/></svg>
              </button>
              <button class="hover:text-blue-600 transition-colors">↩ Válasz ({{ $replies }})</button>
              <button class="ml-auto hover:text-red-600 transition-colors">Jelentés</button>
            </div>
          </div>
        </div>
      </div>
    @endforeach

    <button class="w-full py-3 text-sm font-semibold text-red-600 hover:text-red-700 border border-red-200 hover:border-red-400 rounded-xl transition-colors">
      Összes hozzászólás betöltése (338 további) →
    </button>
  </div>
</div>
