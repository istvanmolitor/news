@php
  $authorName = $article->authors->first()?->name ?? 'Szerkesztőség';
  $authorInitials = collect(explode(' ', $authorName))->map(fn($w) => mb_substr($w, 0, 1))->take(2)->implode('');
  $categoryName = $article->postGroups->first()?->name ?? 'Hírek';
  $imageUrl = $article->main_image_url ?? 'https://picsum.photos/seed/' . $article->id . '/400/250';
@endphp
<a href="{{ route('news.show', $article->slug) }}" class="group bg-white rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300 flex flex-col cursor-pointer">
  <div class="h-44 relative overflow-hidden bg-slate-800">
    <div class="absolute inset-0 opacity-65" style="background: url('{{ $imageUrl }}') center/cover;"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
    <span class="bg-red-600 absolute top-3 left-3 text-white text-xs font-bold px-2.5 py-0.5 rounded-full uppercase tracking-wide">{{ $categoryName }}</span>
  </div>
  <div class="p-4 flex flex-col flex-1">
    <h3 class="text-slate-900 font-bold leading-tight mb-2 group-hover:text-red-600 transition-colors flex-1" style="display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">
      {{ $article->title }}
    </h3>
    <p class="text-slate-500 text-xs leading-relaxed mb-3" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
      {{ $article->lead }}
    </p>
    <div class="flex items-center justify-between pt-3 border-t border-slate-100 mt-auto">
      <div class="flex items-center gap-2">
        <div class="w-6 h-6 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 text-xs font-bold flex-shrink-0">{{ $authorInitials }}</div>
        <span class="text-slate-500 text-xs">{{ $authorName }}</span>
      </div>
      <span class="text-slate-400 text-xs">{{ $article->created_at->diffForHumans() }}</span>
    </div>
  </div>
</a>
