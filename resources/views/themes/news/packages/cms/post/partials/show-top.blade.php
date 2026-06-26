@if(isset($post))
<div class="bg-slate-50 border-b border-slate-200 py-3">
    <div class="container mx-auto px-4">
        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-1.5 text-xs text-slate-500" aria-label="Navigáció">
            <a href="/" class="hover:text-red-600 transition-colors">Főoldal</a>
            @if($post->postGroups?->isNotEmpty())
                @php($firstGroup = $post->postGroups->first())
                <svg class="w-3 h-3 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <a href="{{ route('cms.post-group.show', $firstGroup->slug) }}"
                   class="hover:text-red-600 transition-colors font-medium text-red-600">
                    {{ $firstGroup->name }}
                </a>
                <svg class="w-3 h-3 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            @endif
            <span class="text-slate-400 line-clamp-1 max-w-xs">{{ $post->title }}</span>
        </nav>
    </div>
</div>
@endif
