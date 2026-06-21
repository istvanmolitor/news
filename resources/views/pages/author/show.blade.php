@extends('theme::layouts.right-sidebar')

@section('content')
  {{-- Szerző profil --}}
  <div class="bg-gradient-to-br from-slate-50 to-white border border-slate-200 rounded-2xl p-6 sm:p-8 mb-8">
    <div class="flex gap-6 flex-col sm:flex-row">

      @if($author->profile_url)
        <img src="{{ $author->profile_url }}" alt="{{ $author->name }}"
             class="w-24 h-24 rounded-2xl object-cover flex-shrink-0">
      @else
        @php
          $initials = collect(explode(' ', $author->name))->map(fn($w) => strtoupper(substr($w, 0, 1)))->take(2)->join('');
        @endphp
        <div class="w-24 h-24 rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-700 flex items-center justify-center text-white text-3xl font-black flex-shrink-0">
          {{ $initials }}
        </div>
      @endif

      <div class="flex-1 min-w-0">
        <div class="flex items-start justify-between gap-3 flex-wrap">
          <div>
            <h1 class="text-2xl font-black text-slate-900">{{ $author->name }}</h1>
            @if($author->nickname)
              <p class="text-slate-400 text-sm">{{ $author->nickname }}</p>
            @endif
            @if($author->position)
              <p class="text-slate-500 text-sm mt-0.5">{{ $author->position }}</p>
            @endif
          </div>
          <a href="{{ route('news.authors') }}"
             class="text-xs text-slate-400 hover:text-slate-600 transition-colors flex-shrink-0">
            ← Összes szerző
          </a>
        </div>

        @if($author->bio)
          <p class="text-slate-600 text-sm leading-relaxed mt-3">{{ $author->bio }}</p>
        @endif

        <div class="flex items-center gap-4 mt-3 text-xs text-slate-400">
          <span>{{ $posts->total() }} megjelent cikk</span>
          @if($author->email)
            <span>·</span>
            <a href="mailto:{{ $author->email }}" class="text-blue-600 hover:underline">{{ $author->email }}</a>
          @endif
        </div>
      </div>
    </div>
  </div>

  {{-- Cikkek --}}
  <h2 class="text-xl font-black text-slate-900 mb-4">
    Cikkei
    <span class="text-slate-400 font-normal text-base">({{ $posts->total() }})</span>
  </h2>

  @if($posts->isEmpty())
    <div class="text-center py-16 text-slate-400 bg-white rounded-2xl border border-slate-100">
      <p class="text-lg">Még nincsenek megjelent cikkek.</p>
    </div>
  @else
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      @foreach($posts as $post)
        <a href="{{ route('news.show', $post->slug) }}"
           class="group bg-white rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300 flex flex-col border border-slate-100">

          @if($post->main_image_url)
            <div class="h-44 relative overflow-hidden">
              <img src="{{ $post->main_image_url }}" alt="{{ $post->title }}"
                   class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
              <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
            </div>
          @else
            <div class="h-44 bg-gradient-to-br from-slate-600 to-slate-900 flex items-center justify-center">
              <svg class="w-12 h-12 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
              </svg>
            </div>
          @endif

          <div class="p-4 flex flex-col flex-1">
            <h3 class="text-slate-900 font-bold leading-tight mb-2 group-hover:text-red-600 transition-colors flex-1"
                style="display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">
              {{ $post->title }}
            </h3>
            @if($post->lead)
              <p class="text-slate-500 text-xs leading-relaxed mb-3"
                 style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
                {{ $post->lead }}
              </p>
            @endif
            <div class="flex items-center justify-between pt-3 border-t border-slate-100 mt-auto text-xs text-slate-400">
              <span>{{ $post->created_at->diffForHumans() }}</span>
            </div>
          </div>
        </a>
      @endforeach
    </div>

    @if($posts->hasPages())
      <div class="mt-8">
        {{ $posts->links() }}
      </div>
    @endif
  @endif
@endsection

@section('sidebar')
  <div class="sticky top-20">
    @include('news::partials.sidebar.trending')
    @include('news::partials.sidebar.newsletter')
    @include('news::partials.sidebar.ad')
  </div>
@endsection
