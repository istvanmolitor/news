@if(isset($post) && $post->relationLoaded('keywords') && $post->getRelation('keywords')->isNotEmpty())
    <div class="mt-6 pt-6 border-t border-slate-200">
        <div class="flex flex-wrap items-center gap-2">
            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider mr-1">Kulcsszavak:</span>
            @foreach($post->getRelation('keywords') as $keyword)
                <a href="{{ route('cms.tag.show', $keyword->slug) }}"
                   class="inline-flex items-center gap-1 px-3 py-1 bg-slate-100 hover:bg-red-50 hover:text-red-700 text-slate-600 text-xs font-medium rounded-full transition-colors">
                    <span class="text-slate-400">#</span>{{ $keyword->name }}
                </a>
            @endforeach
        </div>
    </div>
@endif
