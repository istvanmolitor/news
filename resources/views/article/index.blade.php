@extends('news::layouts.news')

@section('content')

@php
$articles = [
  ['seed'=>'a01','cat'=>'Belföld',  'catClass'=>'bg-red-600',    'grad'=>'from-blue-800 to-slate-900',    'title'=>'Orbán Viktor és Szijjártó Péter tárgyalt az uniós csúcson – a részletek',                        'lead'=>'A miniszterelnök Brüsszelben részt vett a rendkívüli EU-csúcson, ahol a migrációs válságról, a keleti határszakasz megerősítéséről és a tagállami hozzájárulásokról tárgyaltak.', 'author'=>'Kovács Péter',  'initials'=>'KP', 'time'=>'14 perce',  'min'=>7,  'views'=>'28 400', 'comments'=>341],
  ['seed'=>'a02','cat'=>'Gazdaság', 'catClass'=>'bg-emerald-600', 'grad'=>'from-emerald-700 to-teal-900',  'title'=>'Az MNB kamatot csökkentett – mit jelent ez a lakáshitelekre?',                                     'lead'=>'A Magyar Nemzeti Bank a piaci várakozásoknak megfelelően 25 bázisponttal csökkentette az alapkamatot 6,5%-ra. Az elemzők szerint a folyamat folytatódhat az év hátralévő részében.', 'author'=>'Barna Eszter',  'initials'=>'BE', 'time'=>'1 órája',   'min'=>5,  'views'=>'19 210', 'comments'=>128],
  ['seed'=>'a03','cat'=>'Politika', 'catClass'=>'bg-purple-600',  'grad'=>'from-purple-800 to-indigo-900', 'title'=>'Parlamenti frakciót alapít a Tisza Párt – Magyar Péter bejelentette a részleteket',               'lead'=>'A közelmúltban bejegyzett párt 12 képviselővel hoz létre önálló frakciót az Országgyűlésben. Az alakuló ülést jövő hétre tűzték ki.','author'=>'Fekete Ádám',  'initials'=>'FÁ','time'=>'2 órája',   'min'=>4,  'views'=>'31 780', 'comments'=>512],
  ['seed'=>'a04','cat'=>'Külföld',  'catClass'=>'bg-indigo-600',  'grad'=>'from-indigo-700 to-blue-900',   'title'=>'Az ukrán-orosz tűzszüneti tárgyalások: Washington is asztalhoz ülne',                             'lead'=>'Az amerikai külügyminisztérium megerősítette, hogy közvetítőként is szerepet vállalna a béketárgyalásokon, amennyiben mindkét fél hozzájárul.','author'=>'Nagy Katalin','initials'=>'NK','time'=>'3 órája',   'min'=>6,  'views'=>'14 520', 'comments'=>87],
  ['seed'=>'a05','cat'=>'Tech',     'catClass'=>'bg-cyan-600',    'grad'=>'from-cyan-700 to-blue-900',     'title'=>'OpenAI bemutatta a GPT-5-öt – ezek a legfontosabb újítások',                                      'lead'=>'Az új modell multimodális képességei és gyorsasága minden korábbi verziót felülmúl. A GPT-5 már képes valós idejű videóelemzésre is.','author'=>'Tóth Bence',   'initials'=>'TB','time'=>'5 órája',   'min'=>8,  'views'=>'42 100', 'comments'=>634],
  ['seed'=>'a06','cat'=>'Sport',    'catClass'=>'bg-orange-500',  'grad'=>'from-orange-700 to-red-900',    'title'=>'Fucsovics Márton negyeddöntőbe jutott Wimbledonban – legyőzte a 3. kiemelt játékost',             'lead'=>'A magyar teniszező karrierje egyik legnagyobb győzelmét aratta, miután két óra 47 perces meccsen verte a világ harmadik legjobb teniszezőjét.','author'=>'Varga László', 'initials'=>'VL','time'=>'6 órája',   'min'=>3,  'views'=>'23 890', 'comments'=>289],
  ['seed'=>'a07','cat'=>'Kultúra',  'catClass'=>'bg-pink-600',    'grad'=>'from-pink-700 to-rose-900',     'title'=>'Nemes Jeles László új filmje elnyerte a Velencei Oroszlán-díjat',                                 'lead'=>'A Velencei Filmfesztiválon az Arany Oroszlánt a rendező legújabb, „Utolsó naplemente" c. alkotása kapta, amelyet a közönség és a kritikusok egyaránt ünnepelnek.','author'=>'Szabó Dóra',  'initials'=>'SD','time'=>'Tegnap',    'min'=>5,  'views'=>'9 730', 'comments'=>74],
  ['seed'=>'a08','cat'=>'Belföld',  'catClass'=>'bg-red-600',     'grad'=>'from-slate-600 to-slate-900',   'title'=>'Balaton körüli vasútvonal korszerűsítése: 2028-ra meghosszabbodnának a vonatok',                   'lead'=>'A MÁV bejelentette, hogy a balatoni vasút-rekonstrukció második üteme jövőre megkezdődik, és emelt sebességű közlekedés válik lehetővé.','author'=>'Horváth Anna', 'initials'=>'HA','time'=>'Tegnap',    'min'=>4,  'views'=>'7 450', 'comments'=>43],
];
$featured = array_shift($articles);
@endphp

{{-- KATEGÓRIA FEJLÉC --}}
<div class="relative rounded-2xl overflow-hidden mb-8" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 60%, #7c3aed22 100%);">
  <div class="absolute inset-0 opacity-10" style="background: url('https://picsum.photos/seed/catbg/1200/300') center/cover;"></div>
  <div class="relative px-8 py-10 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
    <div>
      <div class="flex items-center gap-3 mb-2">
        <div class="w-1 h-8 bg-red-500 rounded-full"></div>
        <span class="text-red-400 text-xs font-bold uppercase tracking-widest">Rovat</span>
      </div>
      <h1 class="text-3xl sm:text-4xl font-black text-white leading-tight">Belföld</h1>
      <p class="text-slate-400 mt-2 text-sm max-w-lg">Magyarország legfrissebb belföldi hírei – politika, közélet, infrastruktúra, egészségügy és minden, ami itthon történik.</p>
      <div class="flex items-center gap-4 mt-4 text-xs text-slate-500">
        <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 bg-red-500 rounded-full animate-pulse"></span> 1 248 cikk</span>
        <span>·</span>
        <span>Frissítve: 14 perce</span>
      </div>
    </div>
    <div class="flex flex-col gap-2 flex-shrink-0">
      <div class="bg-slate-800/80 rounded-xl px-4 py-3 text-center">
        <div class="text-2xl font-black text-white">48</div>
        <div class="text-slate-400 text-xs">cikk ma</div>
      </div>
    </div>
  </div>
</div>

{{-- SZŰRŐ SÁV --}}
<div class="flex items-center justify-between gap-4 mb-6 flex-wrap">
  <div class="flex items-center gap-2 flex-wrap">
    @foreach([['Összes','bg-red-600 text-white'],['Ma','bg-white text-slate-700 border border-slate-200'],['Ezen a héten','bg-white text-slate-700 border border-slate-200'],['Legnépszerűbb','bg-white text-slate-700 border border-slate-200']] as [$label, $cls])
      <button class="{{ $cls }} text-sm font-medium px-4 py-2 rounded-full hover:shadow-md transition-all">{{ $label }}</button>
    @endforeach
  </div>
  <div class="flex items-center gap-2">
    <span class="text-slate-500 text-sm">Rendezés:</span>
    <select class="text-sm border border-slate-200 rounded-lg px-3 py-2 bg-white text-slate-700 focus:outline-none focus:border-red-400">
      <option>Legfrissebb</option>
      <option>Legnépszerűbb</option>
      <option>Legtöbbet kommentált</option>
    </select>
  </div>
</div>

{{-- KIEMELT CIKK --}}
<a href="#" class="group block bg-white rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 mb-6">
  <div class="flex flex-col lg:flex-row">
    <div class="lg:w-2/5 h-64 lg:h-auto relative bg-gradient-to-br {{ $featured['grad'] }} flex-shrink-0">
      <div class="absolute inset-0 opacity-60" style="background: url('https://picsum.photos/seed/{{ $featured['seed'] }}/700/450') center/cover;"></div>
      <div class="absolute inset-0 bg-gradient-to-r from-transparent via-transparent to-black/20"></div>
      <div class="absolute top-4 left-4 flex items-center gap-2">
        <span class="{{ $featured['catClass'] }} text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">{{ $featured['cat'] }}</span>
        <span class="bg-black/60 text-white text-xs px-2 py-1 rounded-full">★ Kiemelt</span>
      </div>
    </div>
    <div class="flex-1 p-7 flex flex-col justify-between">
      <div>
        <h2 class="text-slate-900 text-2xl font-black leading-tight mb-3 group-hover:text-red-600 transition-colors">
          {{ $featured['title'] }}
        </h2>
        <p class="text-slate-500 leading-relaxed text-sm">{{ $featured['lead'] }}</p>
      </div>
      <div class="flex items-center justify-between mt-6 pt-4 border-t border-slate-100">
        <div class="flex items-center gap-3">
          <div class="w-9 h-9 rounded-full bg-gradient-to-br from-slate-600 to-slate-800 flex items-center justify-center text-white text-xs font-bold flex-shrink-0">{{ $featured['initials'] }}</div>
          <div>
            <div class="text-slate-800 text-sm font-semibold">{{ $featured['author'] }}</div>
            <div class="text-slate-400 text-xs">{{ $featured['time'] }} · {{ $featured['min'] }} perc olvasás</div>
          </div>
        </div>
        <div class="flex items-center gap-4 text-slate-400 text-xs">
          <span class="flex items-center gap-1"><svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg> {{ $featured['views'] }}</span>
          <span class="flex items-center gap-1"><svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg> {{ $featured['comments'] }}</span>
        </div>
      </div>
    </div>
  </div>
</a>

{{-- FŐ RÁCS: cikkek + oldalsáv --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

  {{-- CIKK RÁCS (2/3) --}}
  <div class="lg:col-span-2">

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      @foreach($articles as $article)
        <a href="#" class="group bg-white rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300 flex flex-col cursor-pointer">
          <div class="h-44 relative overflow-hidden bg-gradient-to-br {{ $article['grad'] }}">
            <div class="absolute inset-0 opacity-65" style="background: url('https://picsum.photos/seed/{{ $article['seed'] }}/400/250') center/cover;"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
            <span class="{{ $article['catClass'] }} absolute top-3 left-3 text-white text-xs font-bold px-2.5 py-0.5 rounded-full uppercase tracking-wide">{{ $article['cat'] }}</span>
          </div>
          <div class="p-4 flex flex-col flex-1">
            <h3 class="text-slate-900 font-bold leading-tight mb-2 group-hover:text-red-600 transition-colors flex-1" style="display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">
              {{ $article['title'] }}
            </h3>
            <p class="text-slate-500 text-xs leading-relaxed mb-3" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
              {{ $article['lead'] }}
            </p>
            <div class="flex items-center justify-between pt-3 border-t border-slate-100 mt-auto">
              <div class="flex items-center gap-2">
                <div class="w-6 h-6 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 text-xs font-bold flex-shrink-0">{{ $article['initials'] }}</div>
                <span class="text-slate-500 text-xs">{{ $article['author'] }}</span>
              </div>
              <div class="flex items-center gap-3 text-slate-400 text-xs">
                <span>{{ $article['time'] }}</span>
                <span class="flex items-center gap-0.5">
                  <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                  {{ $article['comments'] }}
                </span>
              </div>
            </div>
          </div>
        </a>
      @endforeach
    </div>

    {{-- TOVÁBB TÖLTÉS --}}
    <div class="text-center mt-8">
      <button class="inline-flex items-center gap-3 bg-white border-2 border-slate-200 hover:border-red-400 text-slate-700 hover:text-red-600 font-semibold px-8 py-3.5 rounded-xl transition-all duration-200 group">
        <svg class="w-4 h-4 group-hover:translate-y-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        Tovább töltés
        <span class="text-xs font-normal text-slate-400 group-hover:text-red-400">(még 1 192 cikk)</span>
      </button>
    </div>

  </div>

  {{-- OLDALSÁV (1/3) --}}
  <aside class="space-y-6">

    {{-- Gyors hírek --}}
    @include('news::partials.sidebar.quick-news')

    {{-- Trend --}}
    @include('news::partials.sidebar.trending')

    {{-- Hírlevél widget --}}
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

  </aside>
</div>

@endsection
