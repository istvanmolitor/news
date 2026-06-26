@php
    $breakingItems = collect();
    try {
        if (class_exists(\Molitor\Cms\Models\Post::class)) {
            $breakingItems = \Molitor\Cms\Models\Post::query()
                ->where('is_published', true)
                ->latest('published_at')
                ->limit(5)
                ->get(['title', 'slug']);
        }
    } catch (\Throwable) {}
@endphp

<div class="hidden sm:flex items-center gap-3 flex-1 min-w-0 overflow-hidden">
    <span class="shrink-0 bg-red-600 text-white text-xs font-bold px-2.5 py-0.5 uppercase tracking-wider rounded-sm animate-pulse">
        Friss
    </span>

    @if($breakingItems->isNotEmpty())
        <div class="relative overflow-hidden flex-1">
            <div class="news-ticker flex gap-12 whitespace-nowrap"
                 style="animation: ticker 40s linear infinite;"
                 onmouseenter="this.style.animationPlayState='paused'"
                 onmouseleave="this.style.animationPlayState='running'">
                @foreach($breakingItems as $item)
                    <a href="{{ route('cms.post.show', $item->slug) }}"
                       class="text-xs text-slate-300 hover:text-white transition-colors">
                        {{ $item->title }}
                    </a>
                @endforeach
                @foreach($breakingItems as $item)
                    <a href="{{ route('cms.post.show', $item->slug) }}"
                       class="text-xs text-slate-300 hover:text-white transition-colors">
                        {{ $item->title }}
                    </a>
                @endforeach
            </div>
        </div>
    @else
        <span class="text-xs text-slate-400 italic">Nincs friss hír éppen</span>
    @endif
</div>

<style>
@keyframes ticker {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
.news-ticker { display: inline-flex; }
</style>
