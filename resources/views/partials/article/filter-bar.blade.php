<div class="flex items-center justify-between gap-4 mb-6 flex-wrap">
  <div class="flex items-center gap-2 flex-wrap">
    @foreach([
      ['Összes',        'bg-red-600 text-white'],
      ['Ma',            'bg-white text-slate-700 border border-slate-200'],
      ['Ezen a héten',  'bg-white text-slate-700 border border-slate-200'],
      ['Legnépszerűbb', 'bg-white text-slate-700 border border-slate-200'],
    ] as [$label, $cls])
      <button class="{{ $cls }} text-sm font-medium px-4 py-2 rounded-full hover:shadow-md transition-all">{{ $label }}</button>
    @endforeach
  </div>
  <div class="flex items-center gap-2">
    <span class="text-slate-500 text-sm">Rendezés:</span>
    <select class="text-sm border border-slate-200 rounded-lg px-3 py-2 bg-white text-slate-700 focus:outline-none focus:border-red-400">
      <option>Legfrissebb</option>
      <option>Legnépszerűbb</option>
      <option>Legtöbbet kommentált</option>
    </select>
  </div>
</div>
