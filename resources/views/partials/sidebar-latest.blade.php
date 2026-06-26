@php
    $latestPosts = collect();
    try {
        if (class_exists(\Molitor\Cms\Models\Post::class)) {
            $latestPosts = \Molitor\Cms\Models\Post::query()
                ->where('is_published', true)
                ->latest('published_at')
                ->limit(5)
                ->get(['title', 'slug', 'lead', 'main_image_url', 'published_at', 'created_at']);
        }
    } catch (\Throwable) {}
@endphp

<div class="bg-white border border-slate-200 rounded overflow-hidden mb-6">
    <div class="bg-slate-900 px-4 py-3 flex items-center gap-2">
        <div class="w-1 h-4 bg-red-600 rounded"></div>
        <h3 class="text-white text-sm font-bold uppercase tracking-wider">Legújabb hírek</h3>
    </div>

    <div class="divide-y divide-slate-100">
        @forelse($latestPosts as $i => $post)
            <a href="{{ route('cms.post.show', $post->slug) }}" class="flex gap-3 p-4 hover:bg-slate-50 transition-colors group">
                @if($post->main_image_url)
                    <img src="{{ $post->main_image_url }}" alt="{{ $post->title }}"
                         class="w-16 h-16 object-cover rounded shrink-0 group-hover:opacity-90 transition-opacity">
                @else
                    <div class="w-16 h-16 bg-slate-100 flex items-center justify-center rounded shrink-0">
                        <span class="text-xl font-black text-slate-300">{{ $i + 1 }}</span>
                    </div>
                @endif
                <div class="min-w-0">
                    <p class="text-sm font-semibold text-slate-800 group-hover:text-red-600 transition-colors line-clamp-2 leading-snug">
                        {{ $post->title }}
                    </p>
                    <time class="text-xs text-slate-400 mt-1 block">
                        {{ ($post->published_at ?? $post->created_at)?->diffForHumans() }}
                    </time>
                </div>
            </a>
        @empty
            <p class="px-4 py-6 text-sm text-slate-400 text-center italic">Nincsenek elérhető hírek.</p>
        @endforelse
    </div>
</div>
