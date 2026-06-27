<footer class="bg-slate-900 text-slate-300">

    {{-- Newsletter section --}}
    <div class="bg-red-600">
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h3 class="text-white text-xl font-bold mb-1">Iratkozzon fel hírlevelünkre</h3>
                    <p class="text-red-100 text-sm">Naponta egyszer összefoglaljuk a legfontosabb híreket.</p>
                </div>
                <form class="flex gap-2 w-full md:w-auto">
                    <input
                        type="email"
                        placeholder="E-mail cím"
                        class="flex-1 md:w-72 px-4 py-2.5 rounded text-slate-900 text-sm placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-white"
                    >
                    <button
                        type="submit"
                        class="bg-slate-900 hover:bg-slate-800 text-white px-5 py-2.5 rounded text-sm font-semibold transition-colors whitespace-nowrap"
                    >
                        Feliratkozás
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Footer main content --}}
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- Brand --}}
            <div class="lg:col-span-1">
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 bg-red-600 flex items-center justify-center rounded-sm">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/>
                        </svg>
                    </div>
                    <span class="text-white text-lg font-black uppercase tracking-tight">{{ config('app.name', 'Hírportál') }}</span>
                </div>
                <p class="text-sm text-slate-400 leading-relaxed mb-6">
                    Független hírforrás, amely elkötelezett a pontos, pártatlan tájékoztatás iránt. Naponta frissülő hírek, elemzések és vélemények.
                </p>
                <div class="flex items-center gap-3">
                    <a href="#" class="w-8 h-8 bg-slate-800 hover:bg-red-600 flex items-center justify-center rounded transition-colors" aria-label="Facebook">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="w-8 h-8 bg-slate-800 hover:bg-red-600 flex items-center justify-center rounded transition-colors" aria-label="Twitter/X">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    <a href="#" class="w-8 h-8 bg-slate-800 hover:bg-red-600 flex items-center justify-center rounded transition-colors" aria-label="YouTube">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <a href="#" class="w-8 h-8 bg-slate-800 hover:bg-red-600 flex items-center justify-center rounded transition-colors" aria-label="Instagram">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Rovatjaink --}}
            <div>
                <h4 class="text-white text-sm font-bold uppercase tracking-wider mb-5 pb-2 border-b border-slate-700">Rovatjaink</h4>
                @php($footerMenuItems = app(\Molitor\Menu\Services\MenuManager::class)->build('footer')->getMenuItems())
                <ul class="space-y-2.5">
                    @forelse($footerMenuItems as $item)
                        <li>
                            <a href="{{ $item->getUrl() ?? '#' }}" class="text-sm text-slate-400 hover:text-red-400 transition-colors flex items-center gap-2">
                                <span class="w-1 h-1 bg-red-600 rounded-full inline-block"></span>
                                {{ $item->getLabel() }}
                            </a>
                        </li>
                    @empty
                        @foreach(['Belföld', 'Külföld', 'Gazdaság', 'Sport', 'Kultúra', 'Tech'] as $cat)
                            <li>
                                <a href="#" class="text-sm text-slate-400 hover:text-red-400 transition-colors flex items-center gap-2">
                                    <span class="w-1 h-1 bg-red-600 rounded-full inline-block"></span>
                                    {{ $cat }}
                                </a>
                            </li>
                        @endforeach
                    @endforelse
                </ul>
            </div>

            {{-- Hasznos linkek --}}
            <div>
                <h4 class="text-white text-sm font-bold uppercase tracking-wider mb-5 pb-2 border-b border-slate-700">Hasznos linkek</h4>
                <ul class="space-y-2.5">
                    @foreach(['Rólunk', 'Szerkesztőség', 'Hirdetés', 'Kapcsolat', 'Impresszum', 'Adatvédelem', 'GYIK'] as $link)
                        <li>
                            <a href="#" class="text-sm text-slate-400 hover:text-red-400 transition-colors flex items-center gap-2">
                                <span class="w-1 h-1 bg-red-600 rounded-full inline-block"></span>
                                {{ $link }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Kapcsolat --}}
            <div>
                <h4 class="text-white text-sm font-bold uppercase tracking-wider mb-5 pb-2 border-b border-slate-700">Kapcsolat</h4>
                <ul class="space-y-4 text-sm text-slate-400">
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-red-500 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>1000 Budapest, Hírlap utca 1.</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-red-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:szerkesztoseg@example.com" class="hover:text-red-400 transition-colors">szerkesztoseg@example.com</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-red-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="tel:+3612345678" class="hover:text-red-400 transition-colors">+36 1 234 5678</a>
                    </li>
                </ul>

                {{-- RSS feed --}}
                <div class="mt-6 pt-6 border-t border-slate-700">
                    <a href="#" class="inline-flex items-center gap-2 text-sm text-slate-400 hover:text-orange-400 transition-colors">
                        <svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.18 15.64a2.18 2.18 0 012.18 2.18C8.36 19.01 7.38 20 6.18 20C4.98 20 4 19.01 4 17.82a2.18 2.18 0 012.18-2.18M4 4.44A15.56 15.56 0 0119.56 20h-2.83A12.73 12.73 0 004 7.27V4.44m0 5.66a9.9 9.9 0 019.9 9.9h-2.83A7.07 7.07 0 004 12.93V10.1z"/>
                        </svg>
                        RSS hírcsatorna
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Custom footer yield --}}
    @hasSection('footer')
        <div class="border-t border-slate-800 bg-slate-800/50">
            @yield('footer')
        </div>
    @endif

    {{-- Bottom bar --}}
    <div class="border-t border-slate-800">
        <div class="container mx-auto px-4 py-4 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-slate-500">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Hírportál') }}. Minden jog fenntartva.</p>
            <div class="flex items-center gap-4">
                <a href="#" class="hover:text-slate-300 transition-colors">Adatvédelem</a>
                <a href="#" class="hover:text-slate-300 transition-colors">Sütik</a>
                <a href="#" class="hover:text-slate-300 transition-colors">Impresszum</a>
            </div>
        </div>
    </div>
</footer>
