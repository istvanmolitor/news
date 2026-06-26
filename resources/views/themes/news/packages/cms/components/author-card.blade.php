<a href="{{ route('cms.author.show', $author->slug) }}"
   class="group flex gap-4 bg-white border border-slate-200 hover:border-red-300 hover:shadow-sm p-4 transition-all">

    {{-- Avatar --}}
    @if($author->profile_url)
        <img src="{{ $author->profile_url }}" alt="{{ $author->name }}"
             class="w-16 h-16 object-cover shrink-0 rounded-none border-2 border-slate-200 group-hover:border-red-400 transition-colors">
    @else
        @php($initials = collect(explode(' ', $author->name))->map(fn($w) => mb_strtoupper(mb_substr($w, 0, 1)))->take(2)->join(''))
        <div class="w-16 h-16 shrink-0 bg-slate-900 flex items-center justify-center border-2 border-slate-700 group-hover:border-red-500 transition-colors">
            <span class="text-xl font-black text-white">{{ $initials }}</span>
        </div>
    @endif

    {{-- Info --}}
    <div class="flex-1 min-w-0">
        <div class="flex items-start justify-between gap-2">
            <div>
                <h3 class="font-bold text-slate-900 group-hover:text-red-600 transition-colors leading-tight">
                    {{ $author->name }}
                </h3>
                @if($author->position ?? false)
                    <p class="text-xs text-red-600 font-semibold uppercase tracking-wide mt-0.5">{{ $author->position }}</p>
                @endif
            </div>
            @if(isset($author->posts_count))
                <span class="shrink-0 text-xs bg-slate-100 text-slate-500 px-2 py-0.5 font-medium">
                    {{ $author->posts_count }} cikk
                </span>
            @endif
        </div>
        @if($author->bio ?? false)
            <p class="text-slate-500 text-xs mt-2 leading-relaxed line-clamp-2">{{ $author->bio }}</p>
        @endif
        <div class="flex items-center gap-1 mt-2 text-xs text-red-500 font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
            Cikkek megtekintése
            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
            </svg>
        </div>
    </div>
</a>
