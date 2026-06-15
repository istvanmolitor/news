<a href="#" class="group block bg-white rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 mb-6">
  <div class="flex flex-col lg:flex-row">
    <div class="lg:w-2/5 h-64 lg:h-auto relative bg-gradient-to-br {{ $featured['grad'] }} flex-shrink-0">
      <div class="absolute inset-0 opacity-60" style="background: url('https://picsum.photos/seed/{{ $featured['seed'] }}/700/450') center/cover;"></div>
      <div class="absolute inset-0 bg-gradient-to-r from-transparent via-transparent to-black/20"></div>
      <div class="absolute top-4 left-4 flex items-center gap-2">
        <span class="{{ $featured['catClass'] }} text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">{{ $featured['cat'] }}</span>
        <span class="bg-black/60 text-white text-xs px-2 py-1 rounded-full">★ Kiemelt</span>
      </div>
    </div>
    <div class="flex-1 p-7 flex flex-col justify-between">
      <div>
        <h2 class="text-slate-900 text-2xl font-black leading-tight mb-3 group-hover:text-red-600 transition-colors">
          {{ $featured['title'] }}
        </h2>
        <p class="text-slate-500 leading-relaxed text-sm">{{ $featured['lead'] }}</p>
      </div>
      <div class="flex items-center justify-between mt-6 pt-4 border-t border-slate-100">
        <div class="flex items-center gap-3">
          <div class="w-9 h-9 rounded-full bg-gradient-to-br from-slate-600 to-slate-800 flex items-center justify-center text-white text-xs font-bold flex-shrink-0">{{ $featured['initials'] }}</div>
          <div>
            <div class="text-slate-800 text-sm font-semibold">{{ $featured['author'] }}</div>
            <div class="text-slate-400 text-xs">{{ $featured['time'] }} · {{ $featured['min'] }} perc olvasás</div>
          </div>
        </div>
        <div class="flex items-center gap-4 text-slate-400 text-xs">
          <span class="flex items-center gap-1">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
            {{ $featured['views'] }}
          </span>
          <span class="flex items-center gap-1">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
            {{ $featured['comments'] }}
          </span>
        </div>
      </div>
    </div>
  </div>
</a>
