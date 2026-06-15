<div class="bg-slate-900 text-white rounded-2xl p-6 my-8">
  <div class="flex items-center gap-3 mb-5">
    <div class="w-8 h-8 bg-red-600 rounded-lg flex items-center justify-center flex-shrink-0">
      <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
    </div>
    <h3 class="font-black text-lg tracking-tight">Az első 100 nap kulcsszámai</h3>
  </div>
  <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
    @foreach([
      ['14','elfogadott törvény','text-green-400'],
      ['3,1%','inflációs ráta','text-yellow-400'],
      ['6,5%','MNB alapkamat','text-blue-400'],
      ['48%','kormányzati elégedettség','text-red-400'],
    ] as [$num, $label, $cls])
      <div class="bg-white/10 rounded-xl p-4 text-center">
        <div class="text-2xl font-black {{ $cls }} mb-1">{{ $num }}</div>
        <div class="text-slate-400 text-xs leading-tight">{{ $label }}</div>
      </div>
    @endforeach
  </div>
</div>
