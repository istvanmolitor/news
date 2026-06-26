@if($author->profile_url)

    {{-- Hero: nagy profilképpel --}}
    <div class="relative bg-slate-900 overflow-hidden mb-8">

        {{-- Elmosott háttér --}}
        <div class="absolute inset-0 opacity-15"
             style="background-image: url('{{ $author->profile_url }}'); background-size: cover; background-position: center top; filter: blur(24px); transform: scale(1.15);">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/85 to-slate-900/40"></div>

        {{-- Piros leszorítás alul --}}
        <div class="absolute bottom-0 left-0 right-0 h-1 bg-red-600 z-10"></div>

        <div class="relative z-10 container mx-auto px-4 py-12 sm:py-16 lg:py-20">
            <div class="flex flex-col sm:flex-row gap-8 sm:gap-12 items-center sm:items-start">

                {{-- Profilkép --}}
                <div class="shrink-0 flex flex-col items-center sm:items-start gap-3">
                    <img src="{{ $author->profile_url }}"
                         alt="{{ $author->name }}"
                         class="w-44 h-44 sm:w-52 sm:h-52 lg:w-60 lg:h-60 object-cover border-4 border-red-600 shadow-2xl">
                    @isset($author->posts_count)
                        <span class="bg-red-600 text-white text-xs font-bold px-3 py-1 uppercase tracking-widest">
                            {{ $author->posts_count }} cikk
                        </span>
                    @endisset
                </div>

                {{-- Adatok --}}
                <div class="flex-1 min-w-0 text-center sm:text-left">

                    <a href="{{ route('cms.author.index') }}"
                       class="inline-flex items-center gap-1.5 text-xs text-slate-400 hover:text-red-500 transition-colors uppercase tracking-widest font-medium mb-5">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Összes szerző
                    </a>

                    @if($author->position)
                        <p class="text-red-500 text-xs font-bold uppercase tracking-[0.2em] mb-2">
                            {{ $author->position }}
                        </p>
                    @endif

                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white leading-tight mb-3">
                        {{ $author->name }}
                    </h1>

                    @if($author->nickname ?? false)
                        <p class="text-slate-400 text-sm mb-4">{{ $author->nickname }}</p>
                    @endif

                    @if($author->bio ?? false)
                        <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-2xl mt-4">
                            {{ $author->bio }}
                        </p>
                    @endif

                    @if($author->email ?? false)
                        <div class="mt-5">
                            <a href="mailto:{{ $author->email }}"
                               class="inline-flex items-center gap-2 text-sm text-red-400 hover:text-red-300 transition-colors font-medium">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                {{ $author->email }}
                            </a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

@else

    {{-- Kártya: profilkép nélkül, nagy monogrammal --}}
    <div class="bg-slate-900 border-l-4 border-red-600 mb-8">
        <div class="container mx-auto px-4 py-12 sm:py-16">
            <div class="flex flex-col sm:flex-row gap-8 sm:gap-12 items-center sm:items-start">

                {{-- Monogram --}}
                <div class="shrink-0 flex flex-col items-center sm:items-start gap-3">
                    <div class="w-44 h-44 sm:w-52 sm:h-52 bg-slate-800 border-2 border-slate-700 flex items-center justify-center">
                        <span class="text-5xl sm:text-6xl font-black text-white tracking-tight select-none">
                            {{ $initials() }}
                        </span>
                    </div>
                    @isset($author->posts_count)
                        <span class="bg-red-600 text-white text-xs font-bold px-3 py-1 uppercase tracking-widest">
                            {{ $author->posts_count }} cikk
                        </span>
                    @endisset
                </div>

                {{-- Adatok --}}
                <div class="flex-1 min-w-0 text-center sm:text-left">

                    <a href="{{ route('cms.author.index') }}"
                       class="inline-flex items-center gap-1.5 text-xs text-slate-400 hover:text-red-500 transition-colors uppercase tracking-widest font-medium mb-5">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Összes szerző
                    </a>

                    @if($author->position ?? false)
                        <p class="text-red-500 text-xs font-bold uppercase tracking-[0.2em] mb-2">
                            {{ $author->position }}
                        </p>
                    @endif

                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white leading-tight mb-3">
                        {{ $author->name }}
                    </h1>

                    @if($author->nickname ?? false)
                        <p class="text-slate-400 text-sm mb-4">{{ $author->nickname }}</p>
                    @endif

                    @if($author->bio ?? false)
                        <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-2xl mt-4">
                            {{ $author->bio }}
                        </p>
                    @endif

                    @if($author->email ?? false)
                        <div class="mt-5">
                            <a href="mailto:{{ $author->email }}"
                               class="inline-flex items-center gap-2 text-sm text-red-400 hover:text-red-300 transition-colors font-medium">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                {{ $author->email }}
                            </a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

@endif
