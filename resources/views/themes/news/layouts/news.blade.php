@extends('theme::layouts.base')

@section('body')
<style>
  @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
  .news-ticker { display: inline-flex; animation: marquee 40s linear infinite; white-space: nowrap; }
  .news-ticker:hover { animation-play-state: paused; }
  .news-ticker-wrap { overflow: hidden; }
</style>

<div class="min-h-screen bg-slate-100 font-sans">

  @include('news::partials.top-bar')
  <x-theme::component view="layouts.partials.header" />
  
  @include('news::partials.ticker')

  @hasSection('hero')
    @yield('hero')
  @endif

  <main class="max-w-screen-xl mx-auto px-4 py-6">
    @yield('content')
  </main>

  @include('news::partials.newsletter')
  <x-theme::component view="layouts.partials.footer" />

</div>
@endsection
