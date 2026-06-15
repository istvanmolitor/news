<section>
  <div class="flex items-center gap-3 mb-4">
    <div class="w-1 h-6 bg-emerald-600 rounded-full"></div>
    <h2 class="text-lg font-black text-slate-900 uppercase tracking-wider">Gazdaság</h2>
    <div class="flex-1 h-px bg-slate-200"></div>
    <a href="#" class="text-emerald-600 text-sm font-medium hover:underline">Összes →</a>
  </div>

  <div class="bg-white rounded-xl overflow-hidden">

    {{-- Részvényticker sáv --}}
    <div class="bg-slate-900 px-4 py-2 flex items-center gap-6 overflow-x-auto">
      @foreach([
        ['BUX',     '72 145', '▲ 1.24%', 'text-green-400'],
        ['OTP',     '18 250', '▲ 0.87%', 'text-green-400'],
        ['MOL',     '2 945',  '▼ 0.31%', 'text-red-400'],
        ['RICHTER', '8 620',  '▲ 2.15%', 'text-green-400'],
        ['ARANY',   '$2 318', '▲ 0.55%', 'text-green-400'],
      ] as [$ticker, $price, $change, $changeClass])
        <div class="flex items-center gap-2 flex-shrink-0">
          <span class="text-slate-400 text-xs">{{ $ticker }}</span>
          <span class="text-white text-sm font-bold">{{ $price }}</span>
          <span class="{{ $changeClass }} text-xs">{{ $change }}</span>
        </div>
      @endforeach
    </div>

    {{-- Cikk lista --}}
    <div class="divide-y divide-slate-100">
      @foreach([
        ['from-emerald-500 to-teal-700',   'g1', 'text-emerald-600', 'Ingatlanpiac', 'Budapest-ingatlanárak: 8%-os emelkedés az első félévben a belső kerületekben', '5 órája', '4 perc'],
        ['from-blue-500 to-indigo-700',    'g2', 'text-blue-600',    'Bankrendszer', 'OTP rekordnyereséget ért el 2025-ben – 900 milliárd forint felett',           '7 órája', '3 perc'],
        ['from-orange-500 to-amber-700',   'g3', 'text-orange-600',  'Munkapiac',    'Minimálbér-emelés hatása a kkv szektorra: ez változik január 1-jétől',         'Tegnap',  '5 perc'],
      ] as [$grad, $seed, $labelClass, $label, $title, $time, $min])
        <div class="flex gap-4 p-4 group cursor-pointer hover:bg-slate-50 transition-colors">
          <div class="w-20 h-20 rounded-lg flex-shrink-0 relative bg-gradient-to-br {{ $grad }}">
            <div class="absolute inset-0 rounded-lg opacity-70" style="background:url('https://picsum.photos/seed/{{ $seed }}/100/100') center/cover;"></div>
          </div>
          <div class="flex-1">
            <span class="{{ $labelClass }} text-xs font-bold uppercase">{{ $label }}</span>
            <h4 class="text-slate-900 font-semibold mt-0.5 group-hover:text-red-600 transition-colors leading-tight">{{ $title }}</h4>
            <div class="text-slate-400 text-xs mt-1.5">{{ $time }} · {{ $min }}</div>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section>
