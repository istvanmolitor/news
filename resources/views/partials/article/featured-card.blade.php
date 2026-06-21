@php
  $authorName = $featured->authors->first()?->name ?? 'Szerkesztőség';
  $authorInitials = collect(explode(' ', $authorName))->map(fn($w) => mb_substr($w, 0, 1))->take(2)->implode('');
  $categoryName = $featured->postGroups->first()?->name ?? 'Hírek';
  $imageUrl = $featured->main_image_url ?? 'https://picsum.photos/seed/' . $featured->id . '/700/450';
@endphp
<a href="{{ route('news.show', $featured->slug) }}" class="group block bg-white rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 mb-6">
  <div class="flex flex-col lg:flex-row">
    <div class="lg:w-2/5 h-64 lg:h-auto relative bg-slate-800 flex-shrink-0">
      <div class="absolute inset-0 opacity-60" style="background: url('{{ $imageUrl }}') center/cover;"></div>
      <div class="absolute inset-0 bg-gradient-to-r from-transparent via-transparent to-black/20"></div>
      <div class="absolute top-4 left-4 flex items-center gap-2">
        <span class="bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">{{ $categoryName }}</span>
        <span class="bg-black/60 text-white text-xs px-2 py-1 rounded-full">★ Kiemelt</span>
      </div>
    </div>
    <div class="flex-1 p-7 flex flex-col justify-between">
      <div>
        <h2 class="text-slate-900 text-2xl font-black leading-tight mb-3 group-hover:text-red-600 transition-colors">
          {{ $featured->title }}
        </h2>
        <p class="text-slate-500 leading-relaxed text-sm">{{ $featured->lead }}</p>
      </div>
      <div class="flex items-center mt-6 pt-4 border-t border-slate-100">
        <div class="w-9 h-9 rounded-full bg-gradient-to-br from-slate-600 to-slate-800 flex items-center justify-center text-white text-xs font-bold flex-shrink-0">{{ $authorInitials }}</div>
        <div class="ml-3">
          <div class="text-slate-800 text-sm font-semibold">{{ $authorName }}</div>
          <div class="text-slate-400 text-xs">{{ $featured->created_at->diffForHumans() }}</div>
        </div>
      </div>
    </div>
  </div>
</a>
