<a href="#" class="group bg-white rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300 flex flex-col cursor-pointer">
  <div class="h-44 relative overflow-hidden bg-gradient-to-br {{ $article['grad'] }}">
    <div class="absolute inset-0 opacity-65" style="background: url('https://picsum.photos/seed/{{ $article['seed'] }}/400/250') center/cover;"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
    <span class="{{ $article['catClass'] }} absolute top-3 left-3 text-white text-xs font-bold px-2.5 py-0.5 rounded-full uppercase tracking-wide">{{ $article['cat'] }}</span>
  </div>
  <div class="p-4 flex flex-col flex-1">
    <h3 class="text-slate-900 font-bold leading-tight mb-2 group-hover:text-red-600 transition-colors flex-1" style="display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">
      {{ $article['title'] }}
    </h3>
    <p class="text-slate-500 text-xs leading-relaxed mb-3" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
      {{ $article['lead'] }}
    </p>
    <div class="flex items-center justify-between pt-3 border-t border-slate-100 mt-auto">
      <div class="flex items-center gap-2">
        <div class="w-6 h-6 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 text-xs font-bold flex-shrink-0">{{ $article['initials'] }}</div>
        <span class="text-slate-500 text-xs">{{ $article['author'] }}</span>
      </div>
      <div class="flex items-center gap-3 text-slate-400 text-xs">
        <span>{{ $article['time'] }}</span>
        <span class="flex items-center gap-0.5">
          <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
          {{ $article['comments'] }}
        </span>
      </div>
    </div>
  </div>
</a>
