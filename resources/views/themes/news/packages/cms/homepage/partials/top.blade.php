@php
    $heroPost = null;
    $secondaryPosts = collect();
    try {
        if (class_exists(\Molitor\Cms\Models\Post::class)) {
            $recent = \Molitor\Cms\Models\Post::query()
                ->where('is_published', true)
                ->with(['authors', 'postGroups'])
                ->latest('published_at')
                ->limit(5)
                ->get();
            $heroPost = $recent->first();
            $secondaryPosts = $recent->skip(1)->take(4);
        }
    } catch (\Throwable) {}
@endphp

{{-- Homepage hero section --}}
@if($heroPost)
<section class="bg-slate-50 border-b border-slate-200">
    <div class="container mx-auto px-4 py-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- Main hero post --}}
            <div class="lg:col-span-2">
                <a href="{{ route('cms.post.show', $heroPost->slug) }}" class="group block relative overflow-hidden rounded-lg bg-slate-900" style="min-height: 400px;">
                    @if($heroPost->main_image_url)
                        <img src="{{ $heroPost->main_image_url }}" alt="{{ $heroPost->title }}"
                             class="absolute inset-0 w-full h-full object-cover opacity-70 group-hover:opacity-60 group-hover:scale-105 transition-all duration-500">
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                    <div class="relative z-10 flex flex-col justify-end h-full p-6 md:p-8" style="min-height: 400px;">
                        @if($heroPost->postGroups?->isNotEmpty())
                            <span class="inline-block bg-red-600 text-white text-xs font-bold px-2.5 py-1 uppercase tracking-wider rounded mb-3 w-fit">
                                {{ $heroPost->postGroups->first()->name }}
                            </span>
                        @endif
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-black text-white leading-tight mb-3 group-hover:text-slate-200 transition-colors">
                            {{ $heroPost->title }}
                        </h2>
                        @if($heroPost->lead)
                            <p class="text-slate-300 text-sm md:text-base line-clamp-2 mb-4">{{ $heroPost->lead }}</p>
                        @endif
                        <div class="flex items-center gap-3 text-xs text-slate-400">
                            @if($heroPost->authors?->isNotEmpty())
                                <span class="font-medium text-slate-300">{{ $heroPost->authors->pluck('name')->implode(', ') }}</span>
                                <span>&bull;</span>
                            @endif
                            <time>{{ ($heroPost->published_at ?? $heroPost->created_at)?->diffForHumans() }}</time>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Secondary posts --}}
            <div class="flex flex-col gap-4">
                @foreach($secondaryPosts as $post)
                    <a href="{{ route('cms.post.show', $post->slug) }}" class="flex gap-3 group bg-white rounded-lg border border-slate-200 hover:border-slate-300 hover:shadow-sm transition-all overflow-hidden">
                        <div class="w-24 shrink-0">
                            @if($post->main_image_url)
                                <img src="{{ $post->main_image_url }}" alt="{{ $post->title }}"
                                     class="w-full h-full object-cover group-hover:opacity-90 transition-opacity"
                                     style="min-height: 80px; max-height: 90px;">
                            @else
                                <div class="w-full bg-slate-100 flex items-center justify-center" style="min-height: 80px;">
                                    <svg class="w-5 h-5 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            @endif
                        </div>
                        <div class="p-3 min-w-0 flex flex-col justify-center">
                            @if($post->postGroups?->isNotEmpty())
                                <span class="text-xs font-bold text-red-600 uppercase tracking-wide mb-1">
                                    {{ $post->postGroups->first()->name }}
                                </span>
                            @endif
                            <h3 class="text-sm font-bold text-slate-800 group-hover:text-red-600 transition-colors line-clamp-2 leading-snug">
                                {{ $post->title }}
                            </h3>
                            <time class="text-xs text-slate-400 mt-1">
                                {{ ($post->published_at ?? $post->created_at)?->diffForHumans() }}
                            </time>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
    </div>
</section>
@endif
