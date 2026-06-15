<div class="bg-white rounded-xl overflow-hidden">
  <div class="px-4 py-3 border-b border-slate-100">
    <span class="text-slate-900 text-sm font-bold uppercase tracking-wider">Gyors hírek</span>
  </div>
  <div class="divide-y divide-slate-100">
    @foreach([
      ['14:23', 'text-red-500',    'Tűz ütött ki egy debreceni ipari csarnokban, a tűzoltók dolgoznak.'],
      ['13:51', 'text-slate-400',  'Az Országgyűlés elfogadta a klímavédelmi törvény módosítását.'],
      ['13:14', 'text-slate-400',  'Súlyos közlekedési baleset az M7-esen, az autópálya lezárva.'],
      ['12:48', 'text-slate-400',  'Magyar labdarúgó-válogatott 3:1-re legyőzte Ausztriát a Nations League-ben.'],
      ['11:33', 'text-slate-400',  'Az egészségügyi miniszter bejelentette az orvosi béremelés ütemtervét.'],
    ] as [$time, $timeClass, $text])
      <div class="px-4 py-3 group cursor-pointer hover:bg-slate-50 transition-colors flex gap-2 items-start">
        <span class="{{ $timeClass }} text-xs font-bold flex-shrink-0 mt-0.5">{{ $time }}</span>
        <p class="text-slate-700 text-xs leading-relaxed group-hover:text-red-600 transition-colors">{{ $text }}</p>
      </div>
    @endforeach
  </div>
  <div class="px-4 py-3 border-t border-slate-100">
    <a href="#" class="text-red-600 text-xs font-semibold hover:underline">Összes gyors hír →</a>
  </div>
</div>
