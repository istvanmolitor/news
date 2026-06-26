@php
    $items     = method_exists($posts, 'getCollection') ? $posts->getCollection() : collect($posts);
    $featured  = $items->first();
    $secondary = $items->slice(1, 2)->values();
    $rest      = $items->slice(3)->values();
@endphp

@if($items->isEmpty())
    <p class="text-slate-400 italic text-sm py-6 text-center">Nincsenek megjelenítendő cikkek.</p>
@else

{{-- Featured row: 1 large + 2 medium --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-px bg-slate-200 border border-slate-200 mb-px">

    {{-- Featured (large) --}}
    @if($featured)
    <article class="group lg:col-span-2 bg-white relative overflow-hidden" style="min-height: 360px;">
        <a href="{{ route('cms.post.show', $featured->slug) }}" class="block h-full">
            @if($featured->main_image_url)
                <img src="{{ $featured->main_image_url }}" alt="{{ $featured->title }}"
                     class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:opacity-70 group-hover:scale-105 transition-all duration-500">
            @endif
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
            <div class="relative z-10 flex flex-col justify-end h-full p-6" style="min-height: 360px;">
                @if($featured->postGroups?->isNotEmpty())
                    <span class="inline-block bg-red-600 text-white text-xs font-bold px-2 py-0.5 uppercase tracking-wider mb-2 w-fit">
                        {{ $featured->postGroups->first()->name }}
                    </span>
                @endif
                <h2 class="text-xl md:text-2xl font-black text-white leading-tight mb-2 group-hover:text-slate-200 transition-colors">
                    {{ $featured->title }}
                </h2>
                @if($featured->lead)
                    <p class="text-slate-300 text-sm line-clamp-2 mb-3">{{ $featured->lead }}</p>
                @endif
                <div class="flex items-center gap-3 text-xs text-slate-400">
                    @if($featured->authors?->isNotEmpty())
                        <span class="text-slate-300">{{ $featured->authors->pluck('name')->implode(', ') }}</span>
                        <span>&bull;</span>
                    @endif
                    <time>{{ ($featured->published_at ?? $featured->created_at)?->diffForHumans() }}</time>
                </div>
            </div>
        </a>
    </article>
    @endif

    {{-- Two secondary posts stacked --}}
    <div class="flex flex-col gap-px">
        @foreach($secondary as $post)
        <article class="group bg-white flex-1 relative overflow-hidden" style="min-height: 178px;">
            <a href="{{ route('cms.post.show', $post->slug) }}" class="block h-full">
                @if($post->main_image_url)
                    <img src="{{ $post->main_image_url }}" alt="{{ $post->title }}"
                         class="absolute inset-0 w-full h-full object-cover opacity-75 group-hover:opacity-60 group-hover:scale-105 transition-all duration-500">
                @endif
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
                <div class="relative z-10 flex flex-col justify-end h-full p-4" style="min-height: 178px;">
                    @if($post->postGroups?->isNotEmpty())
                        <span class="text-xs font-bold text-red-400 uppercase tracking-wider mb-1">
                            {{ $post->postGroups->first()->name }}
                        </span>
                    @endif
                    <h3 class="text-sm font-bold text-white leading-tight line-clamp-2 group-hover:text-slate-200 transition-colors">
                        {{ $post->title }}
                    </h3>
                    <time class="text-xs text-slate-400 mt-1">
                        {{ ($post->published_at ?? $post->created_at)?->diffForHumans() }}
                    </time>
                </div>
            </a>
        </article>
        @endforeach
    </div>
</div>

{{-- Rest: standard grid --}}
@if($rest->isNotEmpty())
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-px bg-slate-200 border border-slate-200 border-t-0">
        @foreach($rest as $post)
            <x-cms::post-card :post="$post" />
        @endforeach
    </div>
@endif

@endif
