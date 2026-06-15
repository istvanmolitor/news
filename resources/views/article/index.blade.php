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

@include('news::partials.article.category-header')

@include('news::partials.article.filter-bar')

@include('news::partials.article.featured-card')

{{-- FŐ RÁCS: cikkek + oldalsáv --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

  <div class="lg:col-span-2">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      @foreach($articles as $article)
        @include('news::partials.article.article-card')
      @endforeach
    </div>

    @include('news::partials.article.load-more')
  </div>

  <aside class="space-y-6">
    @include('news::partials.sidebar.quick-news')
    @include('news::partials.sidebar.trending')
    @include('news::partials.sidebar.newsletter')
    @include('news::partials.sidebar.ad')
  </aside>

</div>

@endsection
