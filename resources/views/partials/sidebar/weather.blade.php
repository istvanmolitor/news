<div class="bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 rounded-xl text-white overflow-hidden">
  <div class="p-4">
    <div class="flex items-center justify-between mb-4">
      <div>
        <div class="text-blue-200 text-xs uppercase tracking-wider font-medium">Budapest időjárás</div>
        <div class="text-4xl font-black mt-1">24°</div>
        <div class="text-blue-200 text-sm mt-0.5">Részben felhős</div>
      </div>
      <div class="text-6xl opacity-80">⛅</div>
    </div>
    <div class="flex gap-4 text-xs text-blue-200">
      <span>💧 62%</span>
      <span>💨 12 km/h</span>
      <span>👁 10 km</span>
    </div>
  </div>
  <div class="border-t border-white/20 grid grid-cols-5 divide-x divide-white/20">
    @foreach([
      ['Hé', '🌤', '26°'],
      ['Ke', '🌧', '19°'],
      ['Sze','⛈', '17°'],
      ['Cs', '🌤', '22°'],
      ['Pé', '☀️', '28°'],
    ] as [$day, $icon, $temp])
      <div class="p-2 text-center">
        <div class="text-blue-200 text-xs">{{ $day }}</div>
        <div class="text-lg my-0.5">{{ $icon }}</div>
        <div class="text-white text-xs font-bold">{{ $temp }}</div>
      </div>
    @endforeach
  </div>
</div>
