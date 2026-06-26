@php
    $wordCount = str_word_count(strip_tags(collect($post->content)->pluck('settings.text')->implode(' ')));
    $readingMinutes = max(1, (int) ceil($wordCount / 200));
@endphp

<div class="border-y border-slate-200 py-3 my-5">
    <div class="flex flex-wrap items-center gap-x-5 gap-y-2 text-sm">

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

        {{-- Authors --}}
        @if($post->authors?->isNotEmpty())
            <div class="flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                <span class="text-slate-500">
                    @foreach($post->authors as $author)
                        <a href="{{ route('cms.author.show', $author->slug) }}"
                           class="font-semibold text-slate-700 hover:text-red-600 transition-colors">
                            {{ $author->name }}
                        </a>@if(!$loop->last), @endif
                    @endforeach
                </span>
            </div>
        @endif

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
</div>
