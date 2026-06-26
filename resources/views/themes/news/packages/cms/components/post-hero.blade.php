<div class="relative overflow-hidden bg-slate-900" style="min-height: 480px;">
    @if($post->main_image_url)
        <img
            src="{{ $post->main_image_url }}"
            alt="{{ $post->title }}"
            class="absolute inset-0 w-full h-full object-cover opacity-60"
        >
    @endif
    {{-- Gradient overlay --}}
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/10"></div>

    {{-- Content --}}
    <div class="relative z-10 container mx-auto px-4 flex flex-col justify-end py-12" style="min-height: 480px;">
        {{-- Category + meta row --}}
        <div class="flex flex-wrap items-center gap-3 mb-4">
            @if($post->postGroups?->isNotEmpty())
                <a href="{{ route('cms.post-group.show', $post->postGroups->first()->slug) }}"
                   class="bg-red-600 hover:bg-red-700 text-white text-xs font-bold px-3 py-1 uppercase tracking-wider transition-colors">
                    {{ $post->postGroups->first()->name }}
                </a>
            @endif
            <time class="text-xs text-slate-300 font-medium">
                {{ ($post->published_at ?? $post->created_at)?->isoFormat('YYYY. MMMM D.') }}
            </time>
            @if($post->authors?->isNotEmpty())
                <span class="text-slate-400 text-xs">&bull;</span>
                <span class="text-xs text-slate-300">
                    {{ $post->authors->pluck('name')->implode(', ') }}
                </span>
            @endif
        </div>

        {{-- Title --}}
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-black text-white leading-tight mb-4 max-w-4xl">
            {{ $post->title }}
        </h1>

        {{-- Lead --}}
        @if($post->lead)
            <p class="text-slate-300 text-lg leading-relaxed max-w-3xl mb-6">{{ $post->lead }}</p>
        @endif

        {{-- Read more --}}
        <div>
            <a href="{{ route('cms.post.show', $post->slug) }}"
               class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white font-bold px-5 py-2.5 text-sm uppercase tracking-wide transition-colors">
                Elolvasom
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</div>
