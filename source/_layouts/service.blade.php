@extends('_layouts.site')
@section('body')
  <div class="container">
    <h2>{{ $page->title }}</h2>
    <p>{{ $page->description }}</p>
  </div>
@endsection
