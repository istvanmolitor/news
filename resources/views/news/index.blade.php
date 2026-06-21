@extends('news::layouts.app')

@section('content')

@php
$breaking = [
  ['cat'=>'Belföld',  'cls'=>'bg-red-600',    'title'=>'Rendkívüli kormányülést hívtak össze az energiaválság kezelésére'],
  ['cat'=>'Külföld',  'cls'=>'bg-indigo-600',  'title'=>'NATO-csúcs: közös nyilatkozatban ítélték el a kibertámadásokat'],
  ['cat'=>'Gazdaság', 'cls'=>'bg-emerald-600', 'title'=>'A forint erősödött, az euró 390 alá esett – elemzők magyaráznak'],
];

$featured = [
  'seed'=>'f01','grad'=>'from-blue-900 to-slate-900',
  'cat'=>'Belföld','cls'=>'bg-red-600',
  'title'=>'Kormányváltás után: az első száz nap mérlege – merre tart Magyarország?',
  'lead'=>'A koalíciós kormány megalakulása óta száz nap telt el. Elemzők vegyes képet festenek a gazdasági mutatókról, a külpolitika terén érezhető a változás, míg a belpolitikai feszültségek egyelőre nem csillapodtak.',
  'author'=>'Kovács Péter','init'=>'KP','time'=>'14 perce','min'=>8,'views'=>'28 400','comments'=>341,
];

$top3 = [
  ['seed'=>'t01','grad'=>'from-purple-800 to-indigo-900','cat'=>'Politika','cls'=>'bg-purple-600',
   'title'=>'Parlamenti frakciót alapít a Tisza Párt','lead'=>'A közelmúltban bejegyzett párt 12 képviselővel hoz létre önálló frakciót az Országgyűlésben.',
   'author'=>'Fekete Ádám','init'=>'FÁ','time'=>'2 órája','min'=>4,'views'=>'31 780','comments'=>512],
  ['seed'=>'t02','grad'=>'from-cyan-700 to-blue-900','cat'=>'Tech','cls'=>'bg-cyan-600',
   'title'=>'OpenAI bemutatta a GPT-5-öt – a legfontosabb újítások','lead'=>'Az új modell multimodális képességei és gyorsasága minden korábbi verziót felülmúl. Valós idejű videóelemzés is lehetséges.',
   'author'=>'Tóth Bence','init'=>'TB','time'=>'5 órája','min'=>8,'views'=>'42 100','comments'=>634],
  ['seed'=>'t03','grad'=>'from-orange-700 to-red-900','cat'=>'Sport','cls'=>'bg-orange-500',
   'title'=>'Fucsovics negyeddöntőbe jutott Wimbledonban','lead'=>'A magyar teniszező karrierje egyik legnagyobb győzelmét aratta, miután két óra 47 perces meccsen verte a világ 3. legjobb teniszezőjét.',
   'author'=>'Varga László','init'=>'VL','time'=>'6 órája','min'=>3,'views'=>'23 890','comments'=>289],
];

$categories = [
  ['id'=>'belfold', 'label'=>'Belföld',  'cls'=>'text-red-600    border-red-600',    'dot'=>'bg-red-600'],
  ['id'=>'kulfold', 'label'=>'Külföld',  'cls'=>'text-indigo-600 border-indigo-600', 'dot'=>'bg-indigo-600'],
  ['id'=>'gazdasag','label'=>'Gazdaság', 'cls'=>'text-emerald-600 border-emerald-600','dot'=>'bg-emerald-600'],
  ['id'=>'tech',    'label'=>'Tech',     'cls'=>'text-cyan-600   border-cyan-600',   'dot'=>'bg-cyan-600'],
  ['id'=>'sport',   'label'=>'Sport',    'cls'=>'text-orange-500 border-orange-500', 'dot'=>'bg-orange-500'],
  ['id'=>'kultura', 'label'=>'Kultúra',  'cls'=>'text-pink-600   border-pink-600',   'dot'=>'bg-pink-600'],
];

$stream = [
  ['seed'=>'s01','cat'=>'Belföld',  'cls'=>'bg-red-600',    'grad'=>'from-blue-800 to-slate-900',
   'title'=>'Orbán Viktor és Szijjártó Péter tárgyalt az uniós csúcson',
   'lead'=>'A miniszterelnök Brüsszelben részt vett a rendkívüli EU-csúcson, ahol a migrációs válságról, a keleti határszakasz megerősítéséről és a tagállami hozzájárulásokról tárgyaltak.',
   'author'=>'Kovács Péter','init'=>'KP','time'=>'14 perce','min'=>7,'views'=>'28 400','comments'=>341],
  ['seed'=>'s02','cat'=>'Gazdaság', 'cls'=>'bg-emerald-600','grad'=>'from-emerald-700 to-teal-900',
   'title'=>'Az MNB kamatot csökkentett – mit jelent ez a lakáshitelekre?',
   'lead'=>'A Magyar Nemzeti Bank a piaci várakozásoknak megfelelően 25 bázisponttal csökkentette az alapkamatot 6,5%-ra. Az elemzők szerint a folyamat folytatódhat az év hátralévő részében.',
   'author'=>'Barna Eszter','init'=>'BE','time'=>'1 órája','min'=>5,'views'=>'19 210','comments'=>128],
  ['seed'=>'s03','cat'=>'Külföld',  'cls'=>'bg-indigo-600', 'grad'=>'from-indigo-700 to-blue-900',
   'title'=>'Az ukrán-orosz tűzszüneti tárgyalások: Washington is asztalhoz ülne',
   'lead'=>'Az amerikai külügyminisztérium megerősítette, hogy közvetítőként is szerepet vállalna a béketárgyalásokon, amennyiben mindkét fél hozzájárul a részvételéhez.',
   'author'=>'Nagy Katalin','init'=>'NK','time'=>'3 órája','min'=>6,'views'=>'14 520','comments'=>87],
  ['seed'=>'s04','cat'=>'Kultúra',  'cls'=>'bg-pink-600',   'grad'=>'from-pink-700 to-rose-900',
   'title'=>'Nemes Jeles László új filmje elnyerte a Velencei Oroszlán-díjat',
   'lead'=>'A Velencei Filmfesztiválon az Arany Oroszlánt a rendező legújabb, „Utolsó naplemente" c. alkotása kapta, amelyet a közönség és a kritikusok egyaránt ünnepelnek.',
   'author'=>'Szabó Dóra','init'=>'SD','time'=>'Tegnap','min'=>5,'views'=>'9 730','comments'=>74],
  ['seed'=>'s05','cat'=>'Tech',     'cls'=>'bg-cyan-600',   'grad'=>'from-cyan-700 to-blue-900',
   'title'=>'Magyar startupok rekordot döntöttek: 1,4 milliárd eurós tőkebevonás 2026-ban',
   'lead'=>'A hazai tech ökoszisztéma robbanásszerű növekedést mutat – a tavalyi évhez képest megduplázódott a kockázati tőke beáramlása, elsősorban a fintech és az AI szektorban.',
   'author'=>'Tóth Bence','init'=>'TB','time'=>'Tegnap','min'=>6,'views'=>'11 200','comments'=>93],
  ['seed'=>'s06','cat'=>'Sport',    'cls'=>'bg-orange-500', 'grad'=>'from-orange-700 to-red-900',
   'title'=>'Hosszú Katinka visszatér a versenyúszáshoz – ő maga erősítette meg',
   'lead'=>'A háromszoros olimpiai bajnok úszó a saját Instagram-oldalán jelentette be, hogy újra versenyszerűen edzeni kezd és célba vette a 2028-as Los Angeles-i olimpiát.',
   'author'=>'Varga László','init'=>'VL','time'=>'2 napja','min'=>4,'views'=>'38 700','comments'=>1247],
  ['seed'=>'s07','cat'=>'Belföld',  'cls'=>'bg-red-600',   'grad'=>'from-slate-600 to-slate-900',
   'title'=>'Balaton körüli vasútvonal korszerűsítése: 2028-ra meghosszabbodnának a vonatok',
   'lead'=>'A MÁV bejelentette, hogy a balatoni vasút-rekonstrukció második üteme jövőre megkezdődik, és emelt sebességű közlekedés válik lehetővé a teljes vonal mentén.',
   'author'=>'Horváth Anna','init'=>'HA','time'=>'2 napja','min'=>4,'views'=>'7 450','comments'=>43],
  ['seed'=>'s08','cat'=>'Gazdaság', 'cls'=>'bg-emerald-600','grad'=>'from-emerald-800 to-green-900',
   'title'=>'Ingatlanpiac 2026: árak, trendek és mire számíthatunk az őszi szezonban',
   'lead'=>'Az ingatlan.com legfrissebb elemzése szerint a budapesti lakásárak stagnálnak, míg a Balatonnál és a vidéki városokban folytatódik a drágulás. Mit mutat a kínálat?',
   'author'=>'Molnár Edit','init'=>'ME','time'=>'3 napja','min'=>9,'views'=>'22 600','comments'=>184],
];

$miniNews = [
  ['time'=>'08:14','cat'=>'Belföld','cls'=>'text-red-500',  'title'=>'Orbán Viktor fogadta a finn külügyminisztert'],
  ['time'=>'08:41','cat'=>'Világ',  'cls'=>'text-indigo-500','title'=>'Trump megkegyelmezett 12 szövetségi fogvatartottnak'],
  ['time'=>'09:03','cat'=>'Gazdaság','cls'=>'text-emerald-600','title'=>'Az OTP részvények megugrása meglepte a piacokat'],
  ['time'=>'09:22','cat'=>'Tech',   'cls'=>'text-cyan-600', 'title'=>'Az Apple bejelentette az iPhone 18 megjelenési dátumát'],
  ['time'=>'09:47','cat'=>'Sport',  'cls'=>'text-orange-500','title'=>'Fucsovics Márton: „Wimbledon után pihenőre megyek"'],
  ['time'=>'10:15','cat'=>'Kultúra','cls'=>'text-pink-600', 'title'=>'Újabb Petőfi-kéziratot találtak egy pozsonyi aukción'],
  ['time'=>'10:32','cat'=>'Belföld','cls'=>'text-red-500',  'title'=>'Budapest–Bécs autópálya: vége az útdíj-mentességnek'],
  ['time'=>'11:01','cat'=>'Világ',  'cls'=>'text-indigo-500','title'=>'Izraeli–palesztin megállapodás előkészítéséről tárgyaltak Kairóban'],
];
@endphp

{{-- ═══════════════ OLDAL FEJLÉC ═══════════════ --}}
<div class="relative rounded-2xl overflow-hidden mb-8" style="min-height:180px;background:linear-gradient(135deg,#0f172a 0%,#1e3a5f 60%,#0f172a 100%);">
  <div class="absolute inset-0 opacity-10" style="background:url('https://picsum.photos/seed/newshero/1400/300') center/cover;"></div>
  <div class="absolute inset-0" style="background:linear-gradient(to right,rgba(15,23,42,0.95) 0%,rgba(15,23,42,0.7) 60%,rgba(15,23,42,0.3) 100%);"></div>

  <div class="relative px-8 py-10 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
    <div>
      <div class="flex items-center gap-3 mb-3">
        <div class="w-1 h-8 bg-red-500 rounded-full"></div>
        <span class="text-red-400 text-xs font-bold uppercase tracking-widest">Hírek24</span>
      </div>
      <h1 class="text-3xl sm:text-4xl font-black text-white leading-tight">Legfrissebb hírek</h1>
      <p class="text-slate-400 mt-2 text-sm max-w-xl">Minden ami itthon és a nagyvilágban történik – percről percre, rovatok szerint szűrve.</p>
    </div>

    {{-- Kategória szűrő chipek --}}
    <div class="flex flex-wrap gap-2 flex-shrink-0">
      <button class="bg-red-600 text-white text-xs font-bold px-3.5 py-1.5 rounded-full">Összes</button>
      @foreach($categories as $c)
        <button class="bg-white/10 hover:bg-white/20 text-white text-xs font-medium px-3.5 py-1.5 rounded-full transition-colors backdrop-blur-sm">
          {{ $c['label'] }}
        </button>
      @endforeach
    </div>
  </div>

  {{-- Statisztika sáv --}}
  <div class="relative border-t border-white/10 px-8 py-3 flex items-center gap-6 text-xs text-slate-400">
    <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 bg-red-500 rounded-full animate-pulse"></span>Élő szerkesztés</span>
    <span>·</span>
    <span>12 840 cikk</span>
    <span>·</span>
    <span>Frissítve: most</span>
    <span class="ml-auto flex items-center gap-4">
      <button class="hover:text-white transition-colors flex items-center gap-1.5">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h10"/></svg>
        Lista
      </button>
      <button class="hover:text-white transition-colors flex items-center gap-1.5">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
        Rács
      </button>
    </span>
  </div>
</div>

{{-- ═══════════════ FRISS HÍREK SÁV ═══════════════ --}}
<div class="bg-white rounded-xl border border-slate-100 p-4 mb-8">
  <div class="flex items-center gap-3 mb-4">
    <span class="bg-red-600 text-white text-xs font-black px-2.5 py-1 rounded-md uppercase tracking-wider">Ma</span>
    <h2 class="font-black text-slate-900 text-base">Legfrissebb</h2>
    <div class="flex-1 h-px bg-slate-100"></div>
    <span class="text-slate-400 text-xs">{{ now()->format('Y. m. d., H:i') }}</span>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 divide-y sm:divide-y-0 sm:divide-x divide-slate-100 gap-0">
    @foreach($miniNews as $i => $item)
      @if($i < 4)
        <a href="{{ route('news.show') }}" class="group flex items-start gap-3 p-3 hover:bg-slate-50 rounded-lg transition-colors">
          <span class="text-slate-400 text-xs font-mono mt-0.5 flex-shrink-0">{{ $item['time'] }}</span>
          <div>
            <span class="{{ $item['cls'] }} text-xs font-bold uppercase tracking-wide">{{ $item['cat'] }}</span>
            <p class="text-slate-800 text-xs font-semibold leading-tight mt-0.5 group-hover:text-red-600 transition-colors" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">{{ $item['title'] }}</p>
          </div>
        </a>
      @endif
    @endforeach
  </div>
</div>

{{-- ═══════════════ BREAKING HÍREK CSÍK ═══════════════ --}}
<div class="flex gap-3 flex-wrap mb-8">
  @foreach($breaking as $b)
    <a href="{{ route('news.show') }}" class="group flex-1 min-w-64 bg-white border border-slate-100 hover:border-red-300 hover:shadow-md rounded-xl p-4 transition-all flex items-start gap-3">
      <div class="w-2 h-2 rounded-full mt-1.5 flex-shrink-0 bg-red-500 animate-pulse"></div>
      <div>
        <span class="text-xs font-bold {{ $b['cls'] }} text-white px-2 py-0.5 rounded-md mr-2">{{ $b['cat'] }}</span>
        <p class="text-slate-800 text-sm font-semibold leading-snug mt-1.5 group-hover:text-red-600 transition-colors">{{ $b['title'] }}</p>
      </div>
    </a>
  @endforeach
</div>

{{-- ═══════════════ FŐ TARTALOM + OLDALSÁV ═══════════════ --}}
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

  {{-- ═══ FŐOSZLOP (8 col) ═══ --}}
  <div class="lg:col-span-8 space-y-8">

    {{-- KIEMELT CIKK --}}
    <a href="{{ route('news.show') }}" class="group block bg-white rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300">
      <div class="flex flex-col md:flex-row">
        <div class="md:w-5/12 h-60 md:h-auto relative bg-gradient-to-br {{ $featured['grad'] }} flex-shrink-0 overflow-hidden">
          <div class="absolute inset-0 opacity-55" style="background:url('https://picsum.photos/seed/{{ $featured['seed'] }}/600/420') center/cover;"></div>
          <div class="absolute inset-0 bg-gradient-to-r from-transparent to-black/20"></div>
          <div class="absolute top-4 left-4 flex items-center gap-2">
            <span class="{{ $featured['cls'] }} text-white text-xs font-bold px-3 py-1 rounded-full uppercase">{{ $featured['cat'] }}</span>
            <span class="bg-black/60 backdrop-blur-sm text-white text-xs px-2 py-1 rounded-full">★ Kiemelt</span>
          </div>
          <div class="absolute bottom-4 left-4 right-4 flex gap-3 text-white/80 text-xs">
            <span class="flex items-center gap-1 bg-black/40 backdrop-blur-sm px-2 py-1 rounded-full">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
              {{ $featured['views'] }}
            </span>
            <span class="flex items-center gap-1 bg-black/40 backdrop-blur-sm px-2 py-1 rounded-full">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
              {{ $featured['comments'] }}
            </span>
          </div>
        </div>
        <div class="flex-1 p-7 flex flex-col justify-between">
          <div>
            <p class="text-slate-400 text-xs mb-2 flex items-center gap-2">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              {{ $featured['time'] }} · {{ $featured['min'] }} perc olvasás
            </p>
            <h2 class="text-slate-900 text-xl font-black leading-tight mb-3 group-hover:text-red-600 transition-colors">
              {{ $featured['title'] }}
            </h2>
            <p class="text-slate-500 text-sm leading-relaxed">{{ $featured['lead'] }}</p>
          </div>
          <div class="flex items-center gap-3 mt-6 pt-4 border-t border-slate-100">
            <div class="w-9 h-9 rounded-full bg-gradient-to-br from-slate-600 to-slate-800 flex items-center justify-center text-white text-xs font-bold flex-shrink-0">{{ $featured['init'] }}</div>
            <div>
              <div class="text-slate-800 text-sm font-semibold">{{ $featured['author'] }}</div>
              <div class="text-slate-400 text-xs">Belpolitikai szerkesztő</div>
            </div>
            <span class="ml-auto text-red-600 text-xs font-semibold group-hover:underline">Elolvasom →</span>
          </div>
        </div>
      </div>
    </a>

    {{-- TOP 3 KÁRTYÁK --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
      @foreach($top3 as $a)
        <a href="{{ route('news.show') }}" class="group bg-white rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300 flex flex-col">
          <div class="h-40 relative overflow-hidden bg-gradient-to-br {{ $a['grad'] }}">
            <div class="absolute inset-0 opacity-60" style="background:url('https://picsum.photos/seed/{{ $a['seed'] }}/400/220') center/cover;"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
            <span class="{{ $a['cls'] }} absolute top-3 left-3 text-white text-xs font-bold px-2.5 py-0.5 rounded-full">{{ $a['cat'] }}</span>
            <div class="absolute bottom-3 left-3 right-3 flex items-center gap-2 text-white/70 text-xs">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
              {{ $a['comments'] }}
              <span class="ml-auto">{{ $a['min'] }} perc</span>
            </div>
          </div>
          <div class="p-4 flex-1 flex flex-col">
            <h3 class="text-slate-900 text-sm font-bold leading-tight group-hover:text-red-600 transition-colors flex-1" style="display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">{{ $a['title'] }}</h3>
            <div class="flex items-center gap-2 mt-3 pt-3 border-t border-slate-100">
              <div class="w-5 h-5 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 text-xs font-bold flex-shrink-0">{{ $a['init'] }}</div>
              <span class="text-slate-400 text-xs truncate">{{ $a['author'] }}</span>
              <span class="text-slate-300 text-xs ml-auto flex-shrink-0">{{ $a['time'] }}</span>
            </div>
          </div>
        </a>
      @endforeach
    </div>

    {{-- SZŰRŐ SÁV --}}
    <div class="flex items-center justify-between gap-4 flex-wrap pt-2">
      <div class="flex items-center gap-2 flex-wrap">
        @foreach([['Összes','bg-slate-900 text-white'],['Ma','bg-white text-slate-700 border border-slate-200'],['Ezen a héten','bg-white text-slate-700 border border-slate-200'],['Legnépszerűbb','bg-white text-slate-700 border border-slate-200']] as [$l,$c])
          <button class="{{ $c }} text-xs font-semibold px-4 py-2 rounded-full hover:shadow-sm transition-all">{{ $l }}</button>
        @endforeach
      </div>
      <div class="flex items-center gap-2">
        <span class="text-slate-400 text-xs">Rendezés:</span>
        <select class="text-xs border border-slate-200 rounded-lg px-3 py-2 bg-white text-slate-700 focus:outline-none focus:border-red-400">
          <option>Legfrissebb</option>
          <option>Legnépszerűbb</option>
          <option>Legtöbbet kommentált</option>
        </select>
      </div>
    </div>

    {{-- CÍM --}}
    <div class="flex items-center gap-3">
      <div class="w-1 h-5 bg-slate-900 rounded-full"></div>
      <h2 class="font-black text-slate-900 uppercase tracking-wider text-sm">Cikk folyam</h2>
      <div class="flex-1 h-px bg-slate-200"></div>
    </div>

    {{-- CIKK FOLYAM --}}
    <div class="space-y-4">
      @foreach($stream as $i => $a)

        {{-- Ad insert --}}
        @if($i === 3)
          <div class="bg-gradient-to-r from-slate-800 to-slate-900 rounded-xl p-4 flex items-center justify-between gap-4">
            <div class="text-slate-500 text-xs uppercase tracking-widest">Hirdetés</div>
            <div class="flex-1 text-center">
              <div class="text-white font-bold text-sm">OTP Simple – banki ügyintézés appból</div>
              <div class="text-slate-400 text-xs mt-0.5">Nyisson számlát percek alatt, teljesen online.</div>
            </div>
            <button class="bg-red-600 hover:bg-red-700 text-white text-xs font-bold px-4 py-2 rounded-lg flex-shrink-0 transition-colors">Megnézem</button>
          </div>
        @endif

        <a href="{{ route('news.show') }}" class="group bg-white rounded-xl overflow-hidden hover:shadow-md transition-all duration-200 flex gap-0">
          <div class="w-36 sm:w-44 h-auto relative bg-gradient-to-br {{ $a['grad'] }} flex-shrink-0 overflow-hidden" style="min-height:120px;">
            <div class="absolute inset-0 opacity-65" style="background:url('https://picsum.photos/seed/{{ $a['seed'] }}/300/200') center/cover;"></div>
            <span class="{{ $a['cls'] }} absolute top-2 left-2 text-white text-xs font-bold px-2 py-0.5 rounded-full">{{ $a['cat'] }}</span>
          </div>
          <div class="flex-1 p-4 flex flex-col justify-between">
            <div>
              <h3 class="text-slate-900 font-bold text-sm leading-tight group-hover:text-red-600 transition-colors mb-1.5" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">{{ $a['title'] }}</h3>
              <p class="text-slate-500 text-xs leading-relaxed hidden sm:block" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">{{ $a['lead'] }}</p>
            </div>
            <div class="flex items-center gap-3 mt-3 text-xs text-slate-400">
              <div class="flex items-center gap-1.5">
                <div class="w-5 h-5 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 font-bold text-xs flex-shrink-0">{{ $a['init'] }}</div>
                <span class="hidden sm:inline">{{ $a['author'] }}</span>
              </div>
              <span class="text-slate-300">·</span>
              <span>{{ $a['time'] }}</span>
              <span class="text-slate-300">·</span>
              <span>{{ $a['min'] }} perc</span>
              <span class="ml-auto flex items-center gap-2">
                <span class="flex items-center gap-0.5">
                  <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                  {{ $a['views'] }}
                </span>
                <span class="flex items-center gap-0.5">
                  <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                  {{ $a['comments'] }}
                </span>
              </span>
            </div>
          </div>
        </a>

      @endforeach
    </div>

    {{-- LAPOZÓ --}}
    <div class="flex items-center justify-between bg-white rounded-xl border border-slate-100 p-4">
      <button disabled class="flex items-center gap-2 text-slate-300 text-sm font-semibold cursor-not-allowed">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        Előző
      </button>
      <div class="flex items-center gap-1">
        @foreach([1,2,3,'...',48,49,50] as $p)
          @if($p === '...')
            <span class="px-2 text-slate-300 text-sm">···</span>
          @elseif($p === 1)
            <button class="w-9 h-9 bg-red-600 text-white text-sm font-bold rounded-lg">{{ $p }}</button>
          @else
            <button class="w-9 h-9 bg-white hover:bg-slate-50 text-slate-600 text-sm rounded-lg border border-slate-200 transition-colors">{{ $p }}</button>
          @endif
        @endforeach
      </div>
      <button class="flex items-center gap-2 text-red-600 hover:text-red-700 text-sm font-semibold transition-colors">
        Következő
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
      </button>
    </div>

  </div>

  {{-- ═══ OLDALSÁV (4 col, sticky) ═══ --}}
  <aside class="lg:col-span-4">
    <div class="sticky top-20 space-y-5">

      {{-- Keresés --}}
      <div class="bg-white rounded-xl border border-slate-100 p-4">
        <div class="relative">
          <input type="search" placeholder="Keresés a cikkek között..." class="w-full bg-slate-50 border border-slate-200 rounded-lg pl-9 pr-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:border-red-400 focus:bg-white transition-colors">
          <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </div>
      </div>

      {{-- Rovatok --}}
      <div class="bg-white rounded-xl border border-slate-100 overflow-hidden">
        <div class="px-5 py-4 border-b border-slate-100">
          <h4 class="text-sm font-bold text-slate-700 uppercase tracking-wider">Rovatok</h4>
        </div>
        <div class="p-3 grid grid-cols-2 gap-2">
          @foreach($categories as $c)
            <a href="#" class="flex items-center gap-2.5 p-2.5 rounded-lg hover:bg-slate-50 transition-colors group">
              <div class="w-2 h-2 rounded-full flex-shrink-0 {{ $c['dot'] }}"></div>
              <span class="text-slate-700 text-sm font-medium group-hover:text-red-600 transition-colors">{{ $c['label'] }}</span>
            </a>
          @endforeach
        </div>
      </div>

      {{-- Ma délelőtt – mini folyam --}}
      <div class="bg-white rounded-xl border border-slate-100 overflow-hidden">
        <div class="px-5 py-4 border-b border-slate-100 flex items-center justify-between">
          <h4 class="text-sm font-bold text-slate-700 uppercase tracking-wider">Ma délelőtt</h4>
          <span class="text-slate-400 text-xs">{{ now()->format('H:i') }}</span>
        </div>
        <div class="divide-y divide-slate-50">
          @foreach($miniNews as $item)
            <a href="{{ route('news.show') }}" class="flex items-start gap-3 px-5 py-3 hover:bg-slate-50 transition-colors group">
              <span class="text-slate-400 text-xs font-mono mt-0.5 flex-shrink-0 w-10">{{ $item['time'] }}</span>
              <div class="flex-1">
                <span class="{{ $item['cls'] }} text-xs font-bold uppercase tracking-wide">{{ $item['cat'] }}</span>
                <p class="text-slate-700 text-xs font-medium leading-snug mt-0.5 group-hover:text-red-600 transition-colors" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">{{ $item['title'] }}</p>
              </div>
            </a>
          @endforeach
        </div>
      </div>

      {{-- Trending --}}
      @include('news::partials.sidebar.trending')

      {{-- Hírlevél --}}
      <div class="bg-gradient-to-br from-red-600 to-rose-700 rounded-xl p-5 text-white">
        <div class="flex items-center gap-2 mb-3">
          <svg class="w-5 h-5 text-red-200" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
          <span class="font-bold text-sm">Reggeli Hírlevél</span>
        </div>
        <p class="text-red-100 text-xs leading-relaxed mb-4">Iratkozz fel és minden reggel megkapod a nap legfontosabb híreit!</p>
        <input type="email" placeholder="E-mail cím" class="w-full px-3 py-2.5 rounded-lg text-slate-900 text-sm mb-2 focus:outline-none">
        <button class="w-full bg-white text-red-600 font-bold text-sm py-2.5 rounded-lg hover:bg-red-50 transition-colors">Feliratkozás →</button>
      </div>

      {{-- Hirdetés --}}
      @include('news::partials.sidebar.ad')

    </div>
  </aside>

</div>

@endsection
