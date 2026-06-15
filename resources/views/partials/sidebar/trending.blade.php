<div class="bg-white rounded-xl overflow-hidden">
  <div class="bg-slate-900 px-4 py-3 flex items-center gap-2">
    <svg class="w-4 h-4 text-red-400" fill="currentColor" viewBox="0 0 24 24">
      <path d="M13.5 2c-5.621 0-10.211 4.443-10.475 10h-3.025l5 6.625 5-6.625h-2.975c.257-3.351 3.06-6 6.475-6 3.584 0 6.5 2.916 6.5 6.5s-2.916 6.5-6.5 6.5c-1.863 0-3.542-.793-4.728-2.053l-2.427 3.216c1.877 1.754 4.389 2.837 7.155 2.837 5.79 0 10.5-4.71 10.5-10.5s-4.71-10.5-10.5-10.5z"/>
    </svg>
    <span class="text-white text-sm font-bold uppercase tracking-wider">Trending</span>
  </div>
  <div class="divide-y divide-slate-100">
    @foreach([
      ['1', 'text-red-100',  'Orbán Viktor bejelentette: jövő évtől megszűnik a 13. havi nyugdíj',              '32 890'],
      ['2', 'text-red-200',  'A Tisza Párt parlamenti frakciót alapít az előrehozott választások előtt',         '28 541'],
      ['3', 'text-red-300',  'Véget ért a Fradi BL-kalandja: kiestek a csoportkörben',                          '21 304'],
      ['4', 'text-slate-200','Benzinárak: újabb 20 forintos emelés jön a héten',                                 '18 762'],
      ['5', 'text-slate-200','Megszűnik a leghíresebb balatoni étterem – 40 éves történet véget ér',            '15 091'],
    ] as [$num, $numClass, $title, $readers])
      <div class="flex items-center gap-3 p-3 group cursor-pointer hover:bg-slate-50 transition-colors">
        <span class="text-2xl font-black {{ $numClass }} w-8 text-center leading-none flex-shrink-0">{{ $num }}</span>
        <div class="flex-1">
          <p class="text-slate-800 text-sm font-semibold group-hover:text-red-600 transition-colors leading-tight">{{ $title }}</p>
          <span class="text-slate-400 text-xs">{{ $readers }} olvasó</span>
        </div>
      </div>
    @endforeach
  </div>
</div>
