@extends('news::layouts.app')

@section('content')
  @include('news::partials.section-belfold')
  @include('news::partials.section-kulfold')
  @include('news::partials.section-gazdasag')
  @include('news::partials.section-sport')
  @include('news::partials.section-tech-kultura')
  @include('news::partials.section-video')
@endsection

@section('sidebar')
  @include('news::partials.sidebar')
@endsection


@section('page-top')
  @include('news::partials.hero')
@endsection