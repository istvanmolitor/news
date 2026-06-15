<footer class="bg-slate-900 text-slate-400">
  <div class="max-w-screen-xl mx-auto px-4 py-12">
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

      {{-- Brand --}}
      <div class="col-span-2 md:col-span-3 lg:col-span-1">
        <a href="/" class="flex items-center gap-2 mb-4">
          <div class="w-10 h-10 bg-red-600 rounded-lg flex items-center justify-center flex-shrink-0">
            <span class="text-white text-xl font-black leading-none">H</span>
          </div>
          <div>
            <div class="text-white text-lg font-black leading-tight">HÍREK<span class="text-red-500">24</span></div>
            <div class="text-xs text-slate-500 tracking-wide">Független Hírportál</div>
          </div>
        </a>
        <p class="text-slate-500 text-sm leading-relaxed mb-4">
          Magyarország vezető független hírportálja. Tényalapú, pártatlan újságírás 2008 óta.
        </p>
        <div class="flex items-center gap-2">
          @foreach([
            ['Facebook', 'M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z'],
            ['X/Twitter','M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z'],
            ['YouTube',  'M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z'],
          ] as [$label, $path])
            <a href="#" class="w-8 h-8 rounded-lg bg-slate-800 hover:bg-red-600 flex items-center justify-center transition-colors" aria-label="{{ $label }}">
              <svg class="w-4 h-4 text-slate-400" fill="currentColor" viewBox="0 0 24 24"><path d="{{ $path }}"/></svg>
            </a>
          @endforeach
        </div>
      </div>

      {{-- Rovatok --}}
      <div>
        <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">Rovatok</h4>
        <ul class="space-y-2 text-sm">
          @foreach(['Belföld','Külföld','Gazdaság','Politika','Sport','Kultúra','Tech','Vélemény'] as $item)
            <li><a href="#" class="hover:text-white transition-colors">{{ $item }}</a></li>
          @endforeach
        </ul>
      </div>

      {{-- Rólunk --}}
      <div>
        <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">Rólunk</h4>
        <ul class="space-y-2 text-sm">
          @foreach(['Szerkesztőség','Újságíróink','Kapcsolat','Hirdetés','Sajtószoba','Állásajánlatok'] as $item)
            <li><a href="#" class="hover:text-white transition-colors">{{ $item }}</a></li>
          @endforeach
        </ul>
      </div>

      {{-- Előfizetés --}}
      <div>
        <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">Előfizetés</h4>
        <ul class="space-y-2 text-sm">
          @foreach(['Prémium csomag','Diák kedvezmény','Céges előfizetés','Hírlevél','RSS feed','Podcast'] as $item)
            <li><a href="#" class="hover:text-white transition-colors">{{ $item }}</a></li>
          @endforeach
        </ul>
      </div>

      {{-- Appok --}}
      <div>
        <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">Letöltés</h4>
        <div class="space-y-3">
          <a href="#" class="flex items-center gap-3 bg-slate-800 hover:bg-slate-700 rounded-xl px-4 py-3 transition-colors">
            <svg class="w-6 h-6 text-slate-300 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
              <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
            </svg>
            <div>
              <div class="text-slate-400 text-xs">Letöltés</div>
              <div class="text-white text-sm font-semibold">App Store</div>
            </div>
          </a>
          <a href="#" class="flex items-center gap-3 bg-slate-800 hover:bg-slate-700 rounded-xl px-4 py-3 transition-colors">
            <svg class="w-6 h-6 text-slate-300 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
              <path d="M3.18 23.76c.3.17.67.19 1.01.02l12.44-6.53-2.94-2.95-10.51 9.46zm-1.63-19.2c-.05.17-.09.36-.09.55v17.78c0 .19.04.37.1.54l.09.09 9.96-9.96v-.22L1.55 4.47l-.01.09zM20.42 10.7l-2.52-1.32-3.32 3.33 3.32 3.33 2.54-1.33c.72-.38 1.2-.99 1.2-1.66 0-.66-.48-1.28-1.22-1.35zM4.19.24L16.63 6.77l-2.94 2.94L3.18.24c.33-.17.7-.16 1.01 0z"/>
            </svg>
            <div>
              <div class="text-slate-400 text-xs">Letöltés</div>
              <div class="text-white text-sm font-semibold">Google Play</div>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>

  {{-- Copyright sáv --}}
  <div class="border-t border-slate-800">
    <div class="max-w-screen-xl mx-auto px-4 py-4 flex flex-col sm:flex-row items-center justify-between gap-3">
      <div class="text-slate-600 text-xs">© {{ date('Y') }} Hírek24 Kft. Minden jog fenntartva.</div>
      <div class="flex items-center gap-4 text-xs">
        @foreach(['Adatvédelem','Felhasználási feltételek','Cookie-k','ÁSZF'] as $link)
          <a href="#" class="text-slate-600 hover:text-slate-400 transition-colors">{{ $link }}</a>
        @endforeach
      </div>
    </div>
  </div>
</footer>
