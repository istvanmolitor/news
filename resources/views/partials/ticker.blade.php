@php
$items = [
    'Rendkívüli EU-csúcstalálkozót hívtak össze Brüsszelben a migrációs válság kezelésére',
    'A Magyar Nemzeti Bank 25 bázispontos kamatcsökkentést hajtott végre',
    'Rekordot döntött a Balaton vízszintje az idei nyári szezonban',
    'Kijevi tűzszüneti tárgyalások: újabb fordulat a békefolyamatban',
    'A BKK bejelentette az éjszakai járatok bővítését Budapesten',
];
@endphp

<div class="bg-red-600 py-2">
  <div class="max-w-screen-xl mx-auto px-4 flex items-center gap-3">
    <div class="bg-white text-red-600 text-xs font-black px-3 py-1 rounded flex-shrink-0 uppercase tracking-wider">
      FRISS
    </div>
    <div class="news-ticker-wrap flex-1">
      <div class="news-ticker text-white text-sm font-medium">
        {{-- Duplikálva a folyamatos görgetéshez --}}
        @foreach([...$items, ...$items] as $item)
          <span class="px-8">{{ $item }}</span>
          <span class="text-red-300 px-2">◆</span>
        @endforeach
      </div>
    </div>
  </div>
</div>
