<div class="flex flex-wrap gap-2 mt-10 pt-8 border-t border-slate-200">
  <span class="text-slate-500 text-sm font-medium mr-1">Témák:</span>
  @foreach(['Kormány','Koalíció','100 nap','Belföld','Politika','Gazdaság','Egészségügy','Lakhatás'] as $tag)
    <a href="#" class="bg-slate-100 hover:bg-red-600 hover:text-white text-slate-600 text-xs font-medium px-3 py-1.5 rounded-full transition-colors">
      #{{ $tag }}
    </a>
  @endforeach
</div>
