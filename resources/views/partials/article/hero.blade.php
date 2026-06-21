<div class="relative w-full overflow-hidden" style="height: 560px;">

  <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-blue-950 to-slate-900">
    @if($post->main_image_url)
      <div class="absolute inset-0 opacity-55" style="background: url('{{ $post->main_image_url }}') center/cover;"></div>
    @endif
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
  </div>

  {{-- Olvasási progress bar --}}
  <div class="absolute top-0 left-0 right-0 h-0.5 bg-white/10 z-10">
    <div class="h-full bg-red-500 transition-all duration-150" style="width: 0%" id="reading-progress"></div>
  </div>

  <div class="absolute bottom-0 left-0 right-0 max-w-screen-xl mx-auto px-4 pb-10">
    <div class="max-w-3xl">

      <nav class="flex items-center gap-2 text-xs text-white/50 mb-5">
        <a href="/" class="hover:text-white transition-colors">Főoldal</a>
        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        @if($post->postGroups->isNotEmpty())
          <a href="#" class="hover:text-white transition-colors">{{ $post->postGroups->first()->name }}</a>
          <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        @endif
        <span class="text-white/40 truncate max-w-xs">{{ Str::limit($post->title, 40) }}</span>
      </nav>

      @if($post->postGroups->isNotEmpty())
        <div class="flex items-center gap-2 mb-4 flex-wrap">
          <span class="bg-red-600 text-white text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider">{{ $post->postGroups->first()->name }}</span>
          @foreach($post->postGroups->skip(1) as $group)
            <span class="bg-white/15 text-white text-xs font-medium px-3 py-1.5 rounded-full backdrop-blur-sm">{{ $group->name }}</span>
          @endforeach
        </div>
      @endif

      <h1 class="text-white text-3xl sm:text-4xl lg:text-5xl font-black leading-tight mb-4">
        {{ $post->title }}
      </h1>

      <div class="flex items-center gap-4 text-white/70 text-sm flex-wrap">
        @foreach($post->authors as $author)
          <div class="flex items-center gap-2">
            <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white text-xs font-bold">
              {{ collect(explode(' ', $author->name))->map(fn($w) => strtoupper($w[0] ?? ''))->take(2)->implode('') }}
            </div>
            <span><strong class="text-white">{{ $author->name }}</strong></span>
          </div>
          @if(!$loop->last)<span class="text-white/40">·</span>@endif
        @endforeach
        @if($post->authors->isNotEmpty())<span class="text-white/40">·</span>@endif
        <span>{{ $post->created_at->translatedFormat('Y. F j.') }}</span>
        @if($post->updated_at->gt($post->created_at->addMinutes(5)))
          <span class="text-white/40">·</span>
          <span class="bg-orange-500/90 text-white text-xs font-bold px-3 py-1.5 rounded-full">● Frissítve: {{ $post->updated_at->diffForHumans() }}</span>
        @endif
      </div>

    </div>
  </div>

</div>
