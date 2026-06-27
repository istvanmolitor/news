@php
    $todayHu = \Carbon\Carbon::now()->locale('hu')->isoFormat('YYYY. MMMM D., dddd');
@endphp

<header class="bg-white shadow-sm">
    {{-- Top info bar --}}
    <div class="bg-slate-900 text-slate-300 text-xs py-2 border-b border-slate-800">
        <div class="container mx-auto px-4 flex items-center justify-between gap-4">
            <span class="hidden sm:inline font-medium text-slate-400">{{ $todayHu }}</span>

            {{-- Breaking news ticker --}}
            @include('news::partials.breaking-news')

            {{-- Social links --}}
            <div class="hidden lg:flex items-center gap-4 shrink-0">
                <a href="#" class="hover:text-white transition-colors" aria-label="Facebook">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="#" class="hover:text-white transition-colors" aria-label="Twitter/X">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                <a href="#" class="hover:text-white transition-colors" aria-label="YouTube">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
                <div class="w-px h-3 bg-slate-700"></div>
                <a href="#" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-xs font-semibold uppercase tracking-wide transition-colors">
                    Feliratkozás
                </a>
            </div>
        </div>
    </div>

    {{-- Main header: Logo + Search --}}
    <div class="border-b border-slate-200">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between gap-6">
            {{-- Logo --}}
            <a href="/" class="flex items-center gap-3 shrink-0 group">
                <div class="w-10 h-10 bg-red-600 flex items-center justify-center rounded-sm group-hover:bg-red-700 transition-colors">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/>
                    </svg>
                </div>
                <div>
                    <span class="text-2xl font-black text-slate-900 tracking-tighter uppercase leading-none block">
                        {{ config('app.name', 'Hírportál') }}
                    </span>
                    <span class="text-xs text-slate-500 font-medium tracking-widest uppercase">Hírek &bull; Elemzések &bull; Vélemények</span>
                </div>
            </a>

            {{-- Centered tagline (hidden on smaller screens) --}}
            <div class="hidden xl:flex flex-1 justify-center">
                <p class="text-xs text-slate-400 italic text-center max-w-sm">
                    A legfrissebb hírek, mélyreható elemzések és független vélemények egy helyen.
                </p>
            </div>

            {{-- Search + actions --}}
            <div class="flex items-center gap-3">
                <x-theme::template view="layouts.partials.search" />
                <button
                    type="button"
                    onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                    class="lg:hidden p-2 text-slate-600 hover:text-red-600 transition-colors"
                    aria-label="Menü megnyitása"
                >
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Category navigation bar --}}
    <div class="bg-slate-900 text-white">
        <div class="container mx-auto px-4">
            <x-theme::template view="layouts.partials.menu" />
        </div>
    </div>

    {{-- Mobile navigation --}}
    <x-theme::template view="layouts.partials.mobile-menu" />

    {{-- Custom header section (yield) --}}
    @hasSection('header')
        <div class="border-t border-slate-100">
            @yield('header')
        </div>
    @endif
</header>
