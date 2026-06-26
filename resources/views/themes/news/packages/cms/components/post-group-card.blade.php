<a href="{{ route('cms.post-group.show', $postGroup->slug) }}"
   class="group relative block overflow-hidden bg-slate-900 border border-slate-200 hover:border-red-500 transition-colors"
   style="min-height: 200px;">

    {{-- Background image --}}
    @if($postGroup->main_image_url)
        <img src="{{ $postGroup->main_image_url }}" alt="{{ $postGroup->name }}"
             class="absolute inset-0 w-full h-full object-cover opacity-40 group-hover:opacity-50 group-hover:scale-105 transition-all duration-500">
    @endif

    {{-- Gradient overlay --}}
    <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-black/30"></div>

    {{-- Red accent line top --}}
    <div class="absolute top-0 left-0 right-0 h-1 bg-red-600 group-hover:bg-red-500 transition-colors"></div>

    {{-- Content --}}
    <div class="relative z-10 flex flex-col justify-end h-full p-5" style="min-height: 200px;">
        <span class="text-xs font-bold text-red-400 uppercase tracking-widest mb-1">Rovat</span>
        <h3 class="text-xl font-black text-white uppercase tracking-tight leading-tight group-hover:text-slate-200 transition-colors">
            {{ $postGroup->name }}
        </h3>
        @if($postGroup->lead ?? $postGroup->description ?? null)
            <p class="text-slate-400 text-xs mt-1.5 line-clamp-2">
                {{ $postGroup->lead ?? $postGroup->description }}
            </p>
        @endif
        <div class="flex items-center gap-1 mt-3 text-xs text-red-400 font-semibold group-hover:gap-2 transition-all">
            Hírek böngészése
            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
            </svg>
        </div>
    </div>
</a>
