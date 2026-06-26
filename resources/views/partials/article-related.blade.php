@php
    $relatedPosts = collect();
    try {
        if (isset($post) && class_exists(\Molitor\Cms\Models\Post::class)) {
            $groupIds = $post->postGroups?->pluck('id') ?? collect();
            $relatedPosts = \Molitor\Cms\Models\Post::query()
                ->where('is_published', true)
                ->where('id', '!=', $post->id)
                ->when($groupIds->isNotEmpty(), fn($q) =>
                    $q->whereHas('postGroups', fn($g) => $g->whereIn('post_groups.id', $groupIds))
                )
                ->latest('published_at')
                ->limit(3)
                ->get(['id', 'title', 'slug', 'lead', 'main_image_url', 'published_at', 'created_at']);
        }
    } catch (\Throwable) {}
@endphp

@if($relatedPosts->isNotEmpty())
    <div class="mt-10 pt-8 border-t-4 border-slate-900">
        <h3 class="text-lg font-black text-slate-900 uppercase tracking-tight mb-6 flex items-center gap-2">
            <div class="w-1 h-5 bg-red-600 rounded"></div>
            Kapcsolódó cikkek
        </h3>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
            @foreach($relatedPosts as $related)
                <a href="{{ route('cms.post.show', $related->slug) }}" class="group block">
                    <div class="overflow-hidden rounded mb-3 bg-slate-100">
                        @if($related->main_image_url)
                            <img src="{{ $related->main_image_url }}" alt="{{ $related->title }}"
                                 class="w-full h-36 object-cover group-hover:scale-105 transition-transform duration-300">
                        @else
                            <div class="w-full h-36 bg-slate-200 flex items-center justify-center">
                                <svg class="w-8 h-8 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        @endif
                    </div>
                    <p class="text-sm font-bold text-slate-800 group-hover:text-red-600 transition-colors leading-snug line-clamp-3">
                        {{ $related->title }}
                    </p>
                    <time class="text-xs text-slate-400 mt-1.5 block">
                        {{ ($related->published_at ?? $related->created_at)?->diffForHumans() }}
                    </time>
                </a>
            @endforeach
        </div>
    </div>
@endif
