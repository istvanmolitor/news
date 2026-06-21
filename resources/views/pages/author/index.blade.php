@extends('theme::layouts.left-sidebar')

@section('content')
  <div class="relative rounded-2xl overflow-hidden mb-8" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 60%, #2563eb22 100%);">
    <div class="absolute inset-0 opacity-10" style="background: url('https://picsum.photos/seed/authors-bg/1200/300') center/cover;"></div>
    <div class="relative px-8 py-10">
      <div class="flex items-center gap-3 mb-2">
        <div class="w-1 h-8 bg-blue-500 rounded-full"></div>
        <span class="text-blue-400 text-xs font-bold uppercase tracking-widest">Szerzők</span>
      </div>
      <h1 class="text-3xl sm:text-4xl font-black text-white leading-tight">Szerkesztőségünk</h1>
      <p class="text-slate-400 mt-2 text-sm max-w-lg">Ismerd meg újságíróinkat és szerkesztőinket, akik naponta hozzák a legfrissebb híreket.</p>
      <div class="flex items-center gap-4 mt-4 text-xs text-slate-500">
        <span class="flex items-center gap-1.5">
          <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
          {{ $authors->count() }} szerző
        </span>
      </div>
    </div>
  </div>

  @if($authors->isEmpty())
    <div class="text-center py-16 text-slate-400 bg-white rounded-2xl border border-slate-100">
      <p class="text-lg">Nincsenek szerzők.</p>
    </div>
  @else
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      @foreach($authors as $author)
        <a href="{{ route('news.author.show', $author->slug) }}"
           class="group bg-white rounded-2xl border border-slate-100 p-5 hover:shadow-lg hover:border-slate-200 transition-all duration-300 flex gap-4">

          @if($author->profile_url)
            <img src="{{ $author->profile_url }}" alt="{{ $author->name }}"
                 class="w-16 h-16 rounded-xl object-cover flex-shrink-0">
          @else
            @php
              $initials = collect(explode(' ', $author->name))->map(fn($w) => strtoupper(substr($w, 0, 1)))->take(2)->join('');
            @endphp
            <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-700 flex items-center justify-center text-white text-xl font-black flex-shrink-0">
              {{ $initials }}
            </div>
          @endif

          <div class="flex-1 min-w-0">
            <h3 class="font-black text-slate-900 group-hover:text-red-600 transition-colors truncate">{{ $author->name }}</h3>
            @if($author->position)
              <p class="text-slate-500 text-sm truncate">{{ $author->position }}</p>
            @endif
            @if($author->bio)
              <p class="text-slate-400 text-xs mt-1 leading-relaxed"
                 style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
                {{ $author->bio }}
              </p>
            @endif
            <div class="flex items-center gap-2 mt-2 text-xs text-slate-400">
              <span>{{ $author->posts_count }} megjelent cikk</span>
              <span class="ml-auto text-slate-300 group-hover:text-red-400 transition-colors">→</span>
            </div>
          </div>
        </a>
      @endforeach
    </div>
  @endif
@endsection

@section('sidebar')
  @include('news::partials.sidebar.trending')
  @include('news::partials.sidebar.newsletter')
  @include('news::partials.sidebar.ad')
@endsection
