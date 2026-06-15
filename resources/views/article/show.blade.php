@extends('news::layouts.news')

{{-- TELJES SZÉLESSÉGŰ HERO --}}
@section('hero')
<div class="relative w-full overflow-hidden" style="height: 560px;">

  {{-- Háttérkép --}}
  <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-blue-950 to-slate-900">
    <div class="absolute inset-0 opacity-55" style="background: url('https://picsum.photos/seed/article-hero/1400/600') center/cover;"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
  </div>

  {{-- Olvasási progress bar --}}
  <div class="absolute top-0 left-0 right-0 h-0.5 bg-white/10 z-10">
    <div class="h-full bg-red-500 transition-all duration-150" style="width: 0%" id="reading-progress"></div>
  </div>

  {{-- Tartalom --}}
  <div class="absolute bottom-0 left-0 right-0 max-w-screen-xl mx-auto px-4 pb-10">
    <div class="max-w-3xl">

      {{-- Breadcrumb --}}
      <nav class="flex items-center gap-2 text-xs text-white/50 mb-5">
        <a href="/" class="hover:text-white transition-colors">Főoldal</a>
        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <a href="#" class="hover:text-white transition-colors">Belföld</a>
        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <span class="text-white/40 truncate max-w-xs">Kormányváltás után...</span>
      </nav>

      {{-- Badges --}}
      <div class="flex items-center gap-2 mb-4 flex-wrap">
        <span class="bg-red-600 text-white text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider">Belföld</span>
        <span class="bg-white/15 text-white text-xs font-medium px-3 py-1.5 rounded-full backdrop-blur-sm">Politika</span>
        <span class="bg-orange-500/90 text-white text-xs font-bold px-3 py-1.5 rounded-full animate-pulse">● Frissítve: 14 perce</span>
      </div>

      {{-- Cím --}}
      <h1 class="text-white text-3xl sm:text-4xl lg:text-5xl font-black leading-tight mb-4">
        Kormányváltás után: az első száz nap mérlege – merre tart Magyarország?
      </h1>

      {{-- Meta --}}
      <div class="flex items-center gap-4 text-white/70 text-sm">
        <div class="flex items-center gap-2">
          <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white text-xs font-bold">KP</div>
          <span><strong class="text-white">Kovács Péter</strong></span>
        </div>
        <span class="text-white/40">·</span>
        <span>2026. június 15.</span>
        <span class="text-white/40">·</span>
        <span class="flex items-center gap-1.5">
          <svg class="w-4 h-4 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          8 perc olvasás
        </span>
      </div>

    </div>
  </div>

</div>
@endsection

{{-- CIKK TARTALOM --}}
@section('content')

<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

  {{-- ═══════════════════ CIKK TÖRZS (8 col) ═══════════════════ --}}
  <article class="lg:col-span-8">

    {{-- META SÁV --}}
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 py-5 border-b border-slate-200 mb-8">

      <div class="flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500 to-indigo-700 flex items-center justify-center text-white font-black text-sm flex-shrink-0">KP</div>
        <div>
          <div class="font-bold text-slate-900 text-sm">Kovács Péter</div>
          <div class="text-slate-400 text-xs">Belpolitikai szerkesztő · Hírek24</div>
          <div class="flex items-center gap-3 mt-1 text-xs text-slate-500">
            <span>Közzétéve: 2026. jún. 15. 08:32</span>
            <span class="text-slate-300">·</span>
            <span>Frissítve: 14:18</span>
          </div>
        </div>
      </div>

      {{-- Megosztás gombok --}}
      <div class="flex items-center gap-2 flex-shrink-0">
        <span class="text-slate-400 text-xs mr-1 hidden sm:inline">Megosztás:</span>
        @foreach([
          ['Facebook', 'bg-blue-600 hover:bg-blue-700', 'M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z'],
          ['X',        'bg-slate-900 hover:bg-black',   'M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z'],
          ['WhatsApp', 'bg-green-500 hover:bg-green-600','M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z'],
        ] as [$label, $cls, $path])
          <button class="{{ $cls }} text-white rounded-lg p-2 transition-colors" title="{{ $label }}">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="{{ $path }}"/></svg>
          </button>
        @endforeach
        <button class="bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-lg p-2 transition-colors" title="Hivatkozás másolása">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
        </button>
        <button class="bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-lg p-2 transition-colors" title="Nyomtatás">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/></svg>
        </button>
      </div>

    </div>

    {{-- CIKK SZÖVEG --}}
    <div class="text-slate-700 leading-relaxed space-y-6">

      {{-- Lead bekezdés --}}
      <p class="text-lg sm:text-xl font-medium text-slate-800 leading-relaxed pl-5 border-l-4 border-red-600 bg-red-50/50 py-3 pr-4 rounded-r-xl">
        A koalíciós kormány megalakulása óta száz nap telt el. Elemzők értékelik az eddigi teljesítményt, a gazdasági mutatók vegyes képet mutatnak, a külpolitika terén érezhető a változás, míg a belpolitikai feszültségek egyelőre nem csillapodtak.
      </p>

      <p>
        Az új kormány 2026. március 7-én tette le a hivatali esküt, és megkezdte az átállást a négypárti koalíció irányítása alatt. Az első száz nap – amelyet politológusok és elemzők általában az egyik legmeghatározóbb időszaknak tartanak egy kormányzati ciklus egészére nézve – vegyes képet mutat mind a gazdaságpolitika, mind a szociális intézkedések terén.
      </p>

      <p>
        A legjelentősebb strukturális változás az <strong>Energiaügyi Minisztérium létrehozása</strong> volt, amely az eddigi széttagolt hatásköröket egységes irányítás alá vonja. Az energiaárak stabilizálása az egyik legfontosabb kormányzati prioritásként jelent meg, és az erre szánt intézkedések értékelése már most vitákat vált ki a szakértők között.
      </p>

      {{-- Kiemelő doboz – Kulcstények --}}
      <div class="bg-slate-900 text-white rounded-2xl p-6 my-8">
        <div class="flex items-center gap-3 mb-5">
          <div class="w-8 h-8 bg-red-600 rounded-lg flex items-center justify-center flex-shrink-0">
            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
          </div>
          <h3 class="font-black text-lg tracking-tight">Az első 100 nap kulcsszámai</h3>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
          @foreach([
            ['14','elfogadott törvény','text-green-400'],
            ['3,1%','inflációs ráta','text-yellow-400'],
            ['6,5%','MNB alapkamat','text-blue-400'],
            ['48%','kormányzati elégedettség','text-red-400'],
          ] as [$num, $label, $cls])
            <div class="bg-white/10 rounded-xl p-4 text-center">
              <div class="text-2xl font-black {{ $cls }} mb-1">{{ $num }}</div>
              <div class="text-slate-400 text-xs leading-tight">{{ $label }}</div>
            </div>
          @endforeach
        </div>
      </div>

      <p>
        A gazdaságpolitika terén a legélesebb vita a minimálbér-emelés körül bontakozott ki. A kormány által tervezett <strong>15%-os emelés</strong> – amely 2026 szeptemberétől lépne életbe – a kkv szövetség szerint veszélyeztetheti egyes kis- és középvállalkozások versenyképességét, míg a szakszervezetek a lépést üdvözlik, de kevésnek tartják.
      </p>

      {{-- Idézet / Pull quote --}}
      <blockquote class="relative border-0 my-8">
        <div class="absolute -top-2 -left-2 text-red-200 text-8xl font-serif leading-none select-none">"</div>
        <div class="bg-gradient-to-br from-slate-50 to-white border border-slate-200 rounded-2xl p-7 pl-8 relative z-10 shadow-sm">
          <p class="text-slate-800 text-xl font-medium leading-relaxed italic">
            Az első száz nap azt mutatja, hogy a koalíció képes az együttműködésre, de a valódi próbatétel a nehéz döntések idején jön el – és azok még hátra vannak.
          </p>
          <footer class="mt-4 flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-slate-600 to-slate-800 flex items-center justify-center text-white text-xs font-bold flex-shrink-0">MJ</div>
            <div>
              <div class="font-bold text-slate-900 text-sm">Dr. Mérei János</div>
              <div class="text-slate-500 text-xs">Politológus, ELTE</div>
            </div>
          </footer>
        </div>
      </blockquote>

      <p>
        A külpolitika terén az új kormány pragmatikus és kiszámítható hozzáállást ígért Brüsszel felé. Az uniós kohéziós alapokból érkező forrásokhoz szükséges jogállamisági feltételek teljesítésének folyamatát újraindították, és a tárgyalások – az előző ciklus stagnálása után – ismét élénkülni látszanak.
      </p>

      {{-- Kép, képaláírással --}}
      <figure class="my-8 -mx-0">
        <div class="relative h-80 rounded-2xl overflow-hidden bg-gradient-to-br from-slate-700 to-slate-900">
          <div class="absolute inset-0 opacity-70" style="background: url('https://picsum.photos/seed/article-img1/800/400') center/cover;"></div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
        </div>
        <figcaption class="mt-3 flex items-start gap-2 text-xs text-slate-500">
          <svg class="w-3.5 h-3.5 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          A koalíciós kormány első sajtókonferenciája a Parlamentben, 2026. március 8-án. (Fotó: MTI / Kovács Attila)
        </figcaption>
      </figure>

      <p>
        A szociálpolitika terén a legtöbb vitát a <strong>lakhatási program</strong> kavarta. A kormány által tervezett szociális bérlakás-program keretében 25 000 új bérlakást hoznának létre öt év alatt, amelyek piaci ár alatti bérleti díjon lennének elérhetők a rászoruló családok számára. A program finanszírozási hátterét az ellenzéki pártok kétségbe vonják.
      </p>

      {{-- Info kiemelő doboz --}}
      <div class="border-l-4 border-blue-500 bg-blue-50 rounded-r-2xl p-5 my-6">
        <div class="flex items-start gap-3">
          <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <div>
            <h4 class="font-bold text-blue-900 text-sm mb-2">Mire figyeljünk a következő 100 napban?</h4>
            <ul class="text-blue-800 text-sm space-y-1.5">
              @foreach([
                'Az EU-forrástárgyalások következő fordulója (szeptember)',
                'A 2027-es költségvetési törvény benyújtásának határideje (október 15.)',
                'Az egészségügyi reform első végrehajtási fázisa',
                'Önkormányzati választások előkészítése',
              ] as $item)
                <li class="flex items-start gap-2"><svg class="w-3.5 h-3.5 text-blue-500 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>{{ $item }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>

      <p>
        Az egészségügy – évtizedes neuralgikus pont – az egyik legambiciózusabb reformcsomag célterülete lett. Az orvosok bérének emelése már megkezdődött, az ügyeleti rendszer átalakítása júliustól indul, a kórházi adósságok rendezésére pedig egy kétéves konszolidációs tervet dolgoztak ki.
      </p>

      {{-- Második kép --}}
      <figure class="my-8">
        <div class="grid grid-cols-2 gap-3">
          <div class="relative h-52 rounded-xl overflow-hidden bg-gradient-to-br from-emerald-700 to-teal-900">
            <div class="absolute inset-0 opacity-70" style="background: url('https://picsum.photos/seed/article-img2/400/300') center/cover;"></div>
          </div>
          <div class="relative h-52 rounded-xl overflow-hidden bg-gradient-to-br from-blue-700 to-indigo-900">
            <div class="absolute inset-0 opacity-70" style="background: url('https://picsum.photos/seed/article-img3/400/300') center/cover;"></div>
          </div>
        </div>
        <figcaption class="mt-2 text-xs text-slate-500 text-center">
          Balra: az újonnan átadott debreceni kórházi szárny. Jobbra: az energiaügyi minisztérium épülete Budapesten. (Fotók: MTI)
        </figcaption>
      </figure>

      <p>
        Összességében az első száz nap azt mutatja, hogy a koalíció – dacára a belső feszültségeknek és a megszokottnál élénkebb vitáknak – képes a kormányzásra. A valódi kérdés az marad, hogy a következő ezer napban mennyire maradnak meg a kezdeti lendület és az együttműködési készség.
      </p>

    </div>

    {{-- TAGELŐK --}}
    <div class="flex flex-wrap gap-2 mt-10 pt-8 border-t border-slate-200">
      <span class="text-slate-500 text-sm font-medium mr-1">Témák:</span>
      @foreach(['Kormány','Koalíció','100 nap','Belföld','Politika','Gazdaság','Egészségügy','Lakhatás'] as $tag)
        <a href="#" class="bg-slate-100 hover:bg-red-600 hover:text-white text-slate-600 text-xs font-medium px-3 py-1.5 rounded-full transition-colors">
          #{{ $tag }}
        </a>
      @endforeach
    </div>

    {{-- REAKCIÓK --}}
    <div class="flex flex-wrap items-center gap-3 mt-8 py-6 border-t border-b border-slate-200">
      <span class="text-slate-500 text-sm font-medium">Tetszett a cikk?</span>
      <button class="flex items-center gap-2 bg-green-50 hover:bg-green-100 text-green-700 border border-green-200 rounded-full px-4 py-2 text-sm font-medium transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>
        Igen · <strong>1 284</strong>
      </button>
      <button class="flex items-center gap-2 bg-slate-50 hover:bg-slate-100 text-slate-600 border border-slate-200 rounded-full px-4 py-2 text-sm font-medium transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14H5.236a2 2 0 01-1.789-2.894l3.5-7A2 2 0 018.736 3h4.018c.163 0 .326.02.485.06L17 4m-7 10v2a2 2 0 002 2h.095c.5 0 .905-.405.905-.905 0-.714.211-1.412.608-2.006L17 13V4m-7 10h2m5-10h2a2 2 0 012 2v6a2 2 0 01-2 2h-2.5"/></svg>
        Nem · <strong>89</strong>
      </button>
      <div class="ml-auto flex items-center gap-3 text-slate-400 text-sm">
        <span class="flex items-center gap-1.5">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
          28 400
        </span>
        <span class="flex items-center gap-1.5">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
          341 hozzászólás
        </span>
      </div>
    </div>

    {{-- SZERZŐ BIO --}}
    <div class="bg-gradient-to-br from-slate-50 to-white border border-slate-200 rounded-2xl p-6 mt-8 flex gap-5">
      <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-700 flex items-center justify-center text-white text-2xl font-black flex-shrink-0">KP</div>
      <div class="flex-1">
        <div class="flex items-start justify-between gap-3 flex-wrap">
          <div>
            <h4 class="font-black text-slate-900 text-lg">Kovács Péter</h4>
            <p class="text-slate-500 text-sm">Belpolitikai szerkesztő · Hírek24 (2014 –)</p>
          </div>
          <button class="flex-shrink-0 bg-red-600 hover:bg-red-700 text-white text-xs font-bold px-4 py-2 rounded-lg transition-colors">
            + Követés
          </button>
        </div>
        <p class="text-slate-600 text-sm leading-relaxed mt-3">
          Kovács Péter 12 éve tudósít a magyar belpolitika eseményeiről. Korábban az Európai Parlament akkreditált újságírója volt, jelenleg a Hírek24 fő politikai elemzője.
        </p>
        <div class="flex items-center gap-3 mt-3 text-xs text-slate-400">
          <span>312 cikk</span>
          <span>·</span>
          <span>1 284 követő</span>
          <a href="#" class="ml-auto text-blue-600 hover:underline font-medium">Összes cikke →</a>
        </div>
      </div>
    </div>

    {{-- HOZZÁSZÓLÁSOK --}}
    <div class="mt-10">
      <div class="flex items-center justify-between mb-6">
        <h3 class="font-black text-xl text-slate-900">Hozzászólások <span class="text-slate-400 font-normal text-base ml-1">(341)</span></h3>
        <select class="text-sm border border-slate-200 rounded-lg px-3 py-2 bg-white text-slate-600 focus:outline-none">
          <option>Legfrissebb</option>
          <option>Legjobb</option>
        </select>
      </div>

      {{-- Hozzászólás írás --}}
      <div class="flex gap-3 mb-8">
        <div class="w-9 h-9 rounded-full bg-slate-200 flex items-center justify-center text-slate-500 flex-shrink-0">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
        </div>
        <div class="flex-1">
          <textarea
            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm resize-none focus:outline-none focus:border-red-400 text-slate-700 bg-white"
            rows="3"
            placeholder="Írj hozzászólást... (Bejelentkezés szükséges)"
          ></textarea>
          <div class="flex justify-between items-center mt-2">
            <span class="text-slate-400 text-xs">Kérjük, tartsd be a <a href="#" class="text-red-600 hover:underline">közösségi szabályokat</a>!</span>
            <button class="bg-red-600 hover:bg-red-700 text-white text-xs font-bold px-4 py-2 rounded-lg transition-colors">Küldés</button>
          </div>
        </div>
      </div>

      {{-- Hozzászólás lista --}}
      <div class="space-y-5">
        @foreach([
          ['SB','Szabó Béla','szabo.bela','4 perce','Nagyon részletes és kiegyensúlyozott összefoglaló. Végre egy cikk, ami nem csak az egyik oldalt mutatja be. A gazdasági adatoknál különösen jó lett volna az összevetés a korábbi időszakkal.','24','2'],
          ['MK','Molnár Kata','m.kata','18 perce','Az egészségügyi reform részéről azért hiányolom a konkrét intézkedések listáját. Általánosságban mindig könnyű dicsérni, de a részletek a lényeg.','37','5'],
          ['TG','Tóth Gábor','gtoth42','1 órája','Érdekes perspektíva, de azért nem árt megemlíteni, hogy a 100 nap sok-e vagy kevés egy ilyen mélyreható elemzéshez. Szerintem még korai a végső ítélet.','12','1'],
        ] as [$initials, $name, $handle, $time, $comment, $likes, $replies])
          <div class="bg-white rounded-xl p-5 border border-slate-100 hover:border-slate-200 transition-colors">
            <div class="flex items-start gap-3">
              <div class="w-9 h-9 rounded-full bg-gradient-to-br from-slate-500 to-slate-700 flex items-center justify-center text-white text-xs font-bold flex-shrink-0">{{ $initials }}</div>
              <div class="flex-1">
                <div class="flex items-center gap-2 flex-wrap">
                  <span class="font-bold text-slate-900 text-sm">{{ $name }}</span>
                  <span class="text-slate-400 text-xs">@{{ $handle }}</span>
                  <span class="text-slate-300 text-xs">·</span>
                  <span class="text-slate-400 text-xs">{{ $time }}</span>
                </div>
                <p class="text-slate-600 text-sm leading-relaxed mt-2">{{ $comment }}</p>
                <div class="flex items-center gap-4 mt-3 text-xs text-slate-400">
                  <button class="flex items-center gap-1 hover:text-green-600 transition-colors">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>
                    {{ $likes }}
                  </button>
                  <button class="flex items-center gap-1 hover:text-red-600 transition-colors">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14H5.236a2 2 0 01-1.789-2.894l3.5-7A2 2 0 018.736 3h4.018c.163 0 .326.02.485.06L17 4m-7 10v2a2 2 0 002 2h.095c.5 0 .905-.405.905-.905 0-.714.211-1.412.608-2.006L17 13V4m-7 10h2m5-10h2a2 2 0 012 2v6a2 2 0 01-2 2h-2.5"/></svg>
                  </button>
                  <button class="hover:text-blue-600 transition-colors">↩ Válasz ({{ $replies }})</button>
                  <button class="ml-auto hover:text-red-600 transition-colors">Jelentés</button>
                </div>
              </div>
            </div>
          </div>
        @endforeach

        <button class="w-full py-3 text-sm font-semibold text-red-600 hover:text-red-700 border border-red-200 hover:border-red-400 rounded-xl transition-colors">
          Összes hozzászólás betöltése (338 további) →
        </button>
      </div>
    </div>

  </article>

  {{-- ═══════════════════ OLDALSÁV (4 col, sticky) ═══════════════════ --}}
  <aside class="lg:col-span-4">
    <div class="sticky top-20 space-y-5">

      {{-- Statisztikák --}}
      <div class="bg-white rounded-xl p-5 border border-slate-100">
        <h4 class="text-sm font-bold text-slate-700 uppercase tracking-wider mb-4">Cikk statisztikák</h4>
        <div class="grid grid-cols-3 gap-3 text-center">
          <div class="bg-slate-50 rounded-lg p-3">
            <div class="text-xl font-black text-slate-900">28,4K</div>
            <div class="text-slate-400 text-xs mt-0.5">megtekintés</div>
          </div>
          <div class="bg-slate-50 rounded-lg p-3">
            <div class="text-xl font-black text-slate-900">341</div>
            <div class="text-slate-400 text-xs mt-0.5">hozzászólás</div>
          </div>
          <div class="bg-slate-50 rounded-lg p-3">
            <div class="text-xl font-black text-slate-900">1,2K</div>
            <div class="text-slate-400 text-xs mt-0.5">megosztás</div>
          </div>
        </div>
      </div>

      {{-- Kapcsolódó cikkek --}}
      <div class="bg-white rounded-xl overflow-hidden border border-slate-100">
        <div class="px-5 py-4 border-b border-slate-100">
          <h4 class="text-sm font-bold text-slate-700 uppercase tracking-wider">Kapcsolódó cikkek</h4>
        </div>
        <div class="divide-y divide-slate-100">
          @foreach([
            ['r1','from-blue-700 to-slate-900',   '5 perce',   'Az ellenzék reagált a kormány 100 napos értékelésére'],
            ['r2','from-emerald-700 to-teal-900',  '2 órája',   'Gazdasági mérleg: inflácó, kamat, és az euró-árfolyam alakulása'],
            ['r3','from-purple-700 to-indigo-900', '1 napja',   'A koalíciós egyezség részletei – mit ígértek egymásnak a pártok?'],
            ['r4','from-orange-700 to-red-900',    '3 napja',   'Az első 100 nap legjobb és legrosszabb döntései – elemzők értékelése'],
          ] as [$seed, $grad, $time, $title])
            <a href="#" class="flex gap-3 p-4 hover:bg-slate-50 transition-colors group">
              <div class="w-16 h-16 rounded-lg flex-shrink-0 relative bg-gradient-to-br {{ $grad }}">
                <div class="absolute inset-0 rounded-lg opacity-70" style="background: url('https://picsum.photos/seed/{{ $seed }}/80/80') center/cover;"></div>
              </div>
              <div class="flex-1">
                <p class="text-slate-800 text-xs font-semibold group-hover:text-red-600 transition-colors leading-tight">{{ $title }}</p>
                <span class="text-slate-400 text-xs mt-1.5 block">{{ $time }}</span>
              </div>
            </a>
          @endforeach
        </div>
      </div>

      {{-- Hirdetés --}}
      @include('news::partials.sidebar.ad')

      {{-- Legtöbbet olvasott --}}
      @include('news::partials.sidebar.trending')

    </div>
  </aside>

</div>

{{-- KAPCSOLÓDÓ CIKKEK GRID (alul, teljes szélesség) --}}
<section class="mt-14">
  <div class="flex items-center gap-3 mb-6">
    <div class="w-1 h-6 bg-red-600 rounded-full"></div>
    <h2 class="text-xl font-black text-slate-900 uppercase tracking-wider">Kapcsolódó cikkek</h2>
    <div class="flex-1 h-px bg-slate-200"></div>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
    @foreach([
      ['rc1','from-blue-700 to-indigo-900',   'bg-blue-600',  'Belföld',  'Az ellenzék reagált a kormány 100 napos értékelésére',         'Fekete Ádám', 'FÁ', '5 perce'],
      ['rc2','from-emerald-700 to-teal-900',  'bg-emerald-600','Gazdaság', 'Gazdasági mérleg: infláció, kamat, és az euró-árfolyam',        'Barna Eszter','BE', '2 órája'],
      ['rc3','from-purple-700 to-violet-900', 'bg-purple-600', 'Politika', 'A koalíciós egyezség részletei – mit ígértek a pártok egymásnak?','Horváth Anna','HA','1 napja'],
    ] as [$seed, $grad, $catClass, $cat, $title, $author, $init, $time])
      <a href="#" class="group bg-white rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300">
        <div class="h-44 relative overflow-hidden bg-gradient-to-br {{ $grad }}">
          <div class="absolute inset-0 opacity-65" style="background: url('https://picsum.photos/seed/{{ $seed }}/400/250') center/cover;"></div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
          <span class="{{ $catClass }} absolute top-3 left-3 text-white text-xs font-bold px-2.5 py-0.5 rounded-full">{{ $cat }}</span>
        </div>
        <div class="p-4">
          <h3 class="text-slate-900 font-bold leading-tight group-hover:text-red-600 transition-colors mb-3" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
            {{ $title }}
          </h3>
          <div class="flex items-center justify-between text-xs text-slate-400">
            <div class="flex items-center gap-2">
              <div class="w-6 h-6 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 font-bold">{{ $init }}</div>
              <span>{{ $author }}</span>
            </div>
            <span>{{ $time }}</span>
          </div>
        </div>
      </a>
    @endforeach
  </div>
</section>

<script>
  window.addEventListener('scroll', function() {
    const article = document.querySelector('article');
    if (!article) return;
    const rect = article.getBoundingClientRect();
    const total = article.offsetHeight;
    const scrolled = Math.max(0, -rect.top);
    const progress = Math.min(100, (scrolled / total) * 100);
    const bar = document.getElementById('reading-progress');
    if (bar) bar.style.width = progress + '%';
  });
</script>

@endsection
