@php
    $categories = collect();
    try {
        if (class_exists(\Molitor\Cms\Models\PostGroup::class)) {
            $categories = \Molitor\Cms\Models\PostGroup::query()
                ->withCount(['posts' => fn($q) => $q->where('is_published', true)])
                ->orderByDesc('posts_count')
                ->limit(8)
                ->get(['name', 'slug']);
        }
    } catch (\Throwable) {}
@endphp

<div class="bg-white border border-slate-200 rounded overflow-hidden mb-6">
    <div class="bg-slate-900 px-4 py-3 flex items-center gap-2">
        <div class="w-1 h-4 bg-red-600 rounded"></div>
        <h3 class="text-white text-sm font-bold uppercase tracking-wider">Rovatok</h3>
    </div>

    <div class="p-4">
        @forelse($categories as $category)
            <a href="{{ route('cms.post-group.show', $category->slug) }}"
               class="flex items-center justify-between py-2 border-b border-slate-100 last:border-0 group">
                <span class="text-sm text-slate-700 group-hover:text-red-600 transition-colors font-medium">
                    {{ $category->name }}
                </span>
                <span class="text-xs text-slate-400 bg-slate-100 group-hover:bg-red-50 group-hover:text-red-600 px-2 py-0.5 rounded-full font-medium transition-colors">
                    {{ $category->posts_count ?? 0 }}
                </span>
            </a>
        @empty
            <p class="text-sm text-slate-400 text-center italic py-4">Nincsenek rovatok.</p>
        @endforelse
    </div>
</div>
