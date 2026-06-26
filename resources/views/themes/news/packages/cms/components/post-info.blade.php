@php
    $wordCount = str_word_count(strip_tags(collect($post->content)->pluck('settings.text')->implode(' ')));
    $readingMinutes = max(1, (int) ceil($wordCount / 200));
@endphp

<div class="border-y border-slate-200 py-3 my-5">
    <div class="flex flex-wrap items-center gap-x-5 gap-y-2 text-sm">

        {{-- Authors --}}
        @if($post->authors?->isNotEmpty())
            <div class="flex items-center gap-2">
                @foreach($post->authors as $author)
                    <a href="{{ route('cms.author.show', $author->slug) }}"
                       class="flex items-center gap-1.5 font-semibold text-slate-700 hover:text-red-600 transition-colors">
                        @if($author->profile_url)
                            <img src="{{ $author->profile_url }}" alt="{{ $author->name }}"
                                 class="w-6 h-6 rounded-full object-cover object-top">
                        @else
                            <span class="w-6 h-6 rounded-full bg-slate-200 flex items-center justify-center">
                                <svg class="w-3.5 h-3.5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </span>
                        @endif
                        {{ $author->name }}
                    </a>@if(!$loop->last)<span class="text-slate-300">&bull;</span>@endif
                @endforeach
            </div>
        @endif

        {{-- Date --}}
        <div class="flex items-center gap-1.5 text-slate-500">
            <svg class="w-3.5 h-3.5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <time datetime="{{ ($post->published_at ?? $post->created_at)?->toIso8601String() }}">
                {{ ($post->published_at ?? $post->created_at)?->isoFormat('YYYY. MMMM D., HH:mm') }}
            </time>
        </div>

        {{-- Reading time --}}
        <div class="flex items-center gap-1.5 text-slate-500">
            <svg class="w-3.5 h-3.5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span>{{ $readingMinutes }} perc olvasás</span>
        </div>

        {{-- Categories --}}
        @if($post->postGroups?->isNotEmpty())
            <div class="flex flex-wrap items-center gap-1.5 ml-auto">
                @foreach($post->postGroups as $group)
                    <a href="{{ route('cms.post-group.show', $group->slug) }}"
                       class="bg-red-50 text-red-600 hover:bg-red-600 hover:text-white border border-red-200 hover:border-red-600 text-xs font-bold px-2.5 py-0.5 uppercase tracking-wide transition-colors">
                        {{ $group->name }}
                    </a>
                @endforeach
            </div>
        @endif
    </div>

    {{-- Keywords --}}
    @if($post->relationLoaded('keywords') && $post->getRelation('keywords')->isNotEmpty())
        <div class="flex flex-wrap items-center gap-1.5 pt-2.5 mt-2.5 border-t border-slate-100 text-sm">
            <svg class="w-3.5 h-3.5 text-slate-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
            </svg>
            @foreach($post->getRelation('keywords') as $keyword)
                <a href="{{ route('cms.tag.show', $keyword->slug) }}"
                   class="text-xs text-slate-500 bg-slate-100 hover:bg-slate-200 px-2 py-0.5 transition-colors">
                    {{ $keyword->name }}
                </a>
            @endforeach
        </div>
    @endif
</div>
