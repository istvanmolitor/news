@extends($layout)

@section('page-top')
  @include('news::partials.article.hero')
@endsection

@section('content')

  <article>

    @include('news::partials.article.meta-bar')

    {{-- CIKK SZÖVEG --}}
    <div class="text-slate-700 leading-relaxed space-y-6">

      <p class="text-lg sm:text-xl font-medium text-slate-800 leading-relaxed pl-5 border-l-4 border-red-600 bg-red-50/50 py-3 pr-4 rounded-r-xl">
        A koalíciós kormány megalakulása óta száz nap telt el. Elemzők értékelik az eddigi teljesítményt, a gazdasági mutatók vegyes képet mutatnak, a külpolitika terén érezhető a változás, míg a belpolitikai feszültségek egyelőre nem csillapodtak.
      </p>

      <p>
        Az új kormány 2026. március 7-én tette le a hivatali esküt, és megkezdte az átállást a négypárti koalíció irányítása alatt. Az első száz nap – amelyet politológusok és elemzők általában az egyik legmeghatározóbb időszaknak tartanak egy kormányzati ciklus egészére nézve – vegyes képet mutat mind a gazdaságpolitika, mind a szociális intézkedések terén.
      </p>

      <p>
        A legjelentősebb strukturális változás az <strong>Energiaügyi Minisztérium létrehozása</strong> volt, amely az eddigi széttagolt hatásköröket egységes irányítás alá vonja. Az energiaárak stabilizálása az egyik legfontosabb kormányzati prioritásként jelent meg, és az erre szánt intézkedések értékelése már most vitákat vált ki a szakértők között.
      </p>

      @include('news::partials.article.content-key-facts')

      <p>
        A gazdaságpolitika terén a legélesebb vita a minimálbér-emelés körül bontakozott ki. A kormány által tervezett <strong>15%-os emelés</strong> – amely 2026 szeptemberétől lépne életbe – a kkv szövetség szerint veszélyeztetheti egyes kis- és középvállalkozások versenyképességét, míg a szakszervezetek a lépést üdvözlik, de kevésnek tartják.
      </p>

      @include('news::partials.article.content-pull-quote')

      <p>
        A külpolitika terén az új kormány pragmatikus és kiszámítható hozzáállást ígért Brüsszel felé. Az uniós kohéziós alapokból érkező forrásokhoz szükséges jogállamisági feltételek teljesítésének folyamatát újraindították, és a tárgyalások – az előző ciklus stagnálása után – ismét élénkülni látszanak.
      </p>

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

      @include('news::partials.article.content-info-box')

      <p>
        Az egészségügy – évtizedes neuralgikus pont – az egyik legambiciózusabb reformcsomag célterülete lett. Az orvosok bérének emelése már megkezdődött, az ügyeleti rendszer átalakítása júliustól indul, a kórházi adósságok rendezésére pedig egy kétéves konszolidációs tervet dolgoztak ki.
      </p>

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

    @include('news::partials.article.tags')
    @include('news::partials.article.reactions')
    @include('news::partials.article.author-bio')
    @include('news::partials.article.comments')

  </article>

@endsection

@section('sidebar')
  <div class="sticky top-20">
      @include('news::partials.article.sidebar-stats')
      @include('news::partials.article.sidebar-related')
      @include('news::partials.sidebar.ad')
      @include('news::partials.sidebar.trending')
    </div>
@endsection

@section('content-bottom')
  @include('news::partials.article.related-grid')
@endsection

@section('script')
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