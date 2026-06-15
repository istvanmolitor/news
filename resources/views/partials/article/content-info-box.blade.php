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
