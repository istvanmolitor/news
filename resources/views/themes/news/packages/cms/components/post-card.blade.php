<article class="group flex flex-col bg-white border border-slate-200 hover:border-slate-300 hover:shadow-md transition-all duration-200 overflow-hidden">

    {{-- Thumbnail --}}
    <a href="{{ route('cms.post.show', $post->slug) }}" class="block overflow-hidden shrink-0 bg-slate-100" style="aspect-ratio: 16/9;">
        @if($post->main_image_url)
            <img
                src="{{ $post->main_image_url }}"
                alt="{{ $post->title }}"
                loading="lazy"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
            >
        @else
            <div class="w-full h-full flex items-center justify-center bg-slate-100">
                <svg class="w-10 h-10 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
            </div>
        @endif
    </a>

    {{-- Content --}}
    <div class="flex flex-col flex-1 p-4">

        {{-- Category badge + date --}}
        <div class="flex items-center justify-between mb-2.5">
            @if($post->postGroups?->isNotEmpty())
                <a href="{{ route('cms.post-group.show', $post->postGroups->first()->slug) }}"
                   class="text-xs font-bold text-red-600 uppercase tracking-wider hover:text-red-700 transition-colors">
                    {{ $post->postGroups->first()->name }}
                </a>
            @else
                <span></span>
            @endif
            <time class="text-xs text-slate-400" datetime="{{ ($post->published_at ?? $post->created_at)?->toIso8601String() }}">
                {{ ($post->published_at ?? $post->created_at)?->diffForHumans() }}
            </time>
        </div>

        {{-- Title --}}
        <h3 class="font-bold text-slate-900 text-base leading-snug mb-2 group-hover:text-red-600 transition-colors line-clamp-3 flex-1">
            <a href="{{ route('cms.post.show', $post->slug) }}">{{ $post->title }}</a>
        </h3>

        {{-- Lead --}}
        @if($post->lead)
            <p class="text-slate-500 text-sm leading-relaxed line-clamp-2 mb-3">{{ $post->lead }}</p>
        @endif

        {{-- Footer: author + read more --}}
        <div class="flex items-center justify-between mt-auto pt-3 border-t border-slate-100">
            @if($post->authors?->isNotEmpty())
                <span class="text-xs text-slate-500 truncate mr-2">
                    {{ $post->authors->pluck('name')->implode(', ') }}
                </span>
            @else
                <span></span>
            @endif
            <a href="{{ route('cms.post.show', $post->slug) }}"
               class="shrink-0 text-xs font-bold text-red-600 hover:text-red-700 transition-colors flex items-center gap-1">
                Tovább
                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</article>
