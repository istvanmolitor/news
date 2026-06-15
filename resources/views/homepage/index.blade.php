@extends('news::layouts.news')

@section('content')
  @include('news::partials.hero')

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
    <div class="lg:col-span-2 space-y-8">
      @include('news::partials.section-belfold')
      @include('news::partials.section-kulfold')
      @include('news::partials.section-gazdasag')
    </div>
    @include('news::partials.sidebar')
  </div>

  @include('news::partials.section-sport')
  @include('news::partials.section-tech-kultura')
  @include('news::partials.section-video')
@endsection
