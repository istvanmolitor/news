<article class="group flex gap-4 bg-white border border-slate-200 hover:border-slate-300 hover:shadow-sm p-4 transition-all">
    @if($page->main_image_url)
        <a href="{{ route('cms.page.show', $page->slug) }}" class="shrink-0 block overflow-hidden w-24 h-24 bg-slate-100">
            <img src="{{ $page->main_image_url }}" alt="{{ $page->title }}"
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        </a>
    @endif
    <div class="flex flex-col justify-center min-w-0">
        <h3 class="font-bold text-slate-900 group-hover:text-red-600 transition-colors leading-snug mb-1">
            <a href="{{ route('cms.page.show', $page->slug) }}">{{ $page->title }}</a>
        </h3>
        @if($page->lead)
            <p class="text-slate-500 text-sm line-clamp-2">{{ $page->lead }}</p>
        @endif
        <a href="{{ route('cms.page.show', $page->slug) }}"
           class="inline-flex items-center gap-1 mt-2 text-xs font-bold text-red-600 hover:text-red-700 transition-colors">
            Tovább
            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
            </svg>
        </a>
    </div>
</article>
