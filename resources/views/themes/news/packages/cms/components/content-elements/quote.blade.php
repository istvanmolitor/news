@php
    $quote  = $settings['quote']  ?? '';
    $author = $settings['author'] ?? '';
@endphp

<figure class="my-8 bg-slate-50 border-l-4 border-red-600 px-6 py-5 relative">
    {{-- Opening quote mark --}}
    <div class="absolute top-3 right-4 text-slate-200 text-6xl font-serif leading-none select-none" aria-hidden="true">&rdquo;</div>

    <blockquote class="relative z-10 text-lg md:text-xl font-semibold text-slate-800 leading-relaxed italic">
        {{ $quote }}
    </blockquote>

    @if($author)
        <figcaption class="mt-3 flex items-center gap-2 text-sm text-slate-500 not-italic">
            <span class="w-6 h-px bg-red-500 inline-block"></span>
            <cite class="font-semibold text-slate-700 not-italic">{{ $author }}</cite>
        </figcaption>
    @endif
</figure>
