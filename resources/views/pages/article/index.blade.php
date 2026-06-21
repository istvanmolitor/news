@extends('theme::layouts.left-sidebar')

@section('content')

  @php
    $items = collect($posts->items());
    $featured = ($posts->currentPage() === 1 && $items->isNotEmpty()) ? $items->shift() : null;
    $articles = $items;
  @endphp

  @include('news::partials.article.category-header')

  @include('news::partials.article.filter-bar')

  @if($featured)
    @include('news::partials.article.featured-card')
  @endif

  <div class="lg:col-span-2">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      @foreach($articles as $article)
        @include('news::partials.article.article-card')
      @endforeach
    </div>

    @include('news::partials.article.load-more')
  </div>
@endsection


@section('sidebar')
  @include('news::partials.sidebar.quick-news')
  @include('news::partials.sidebar.trending')
  @include('news::partials.sidebar.newsletter')
  @include('news::partials.sidebar.ad')
@endsection
