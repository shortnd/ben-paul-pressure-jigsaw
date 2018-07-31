@extends('_layouts.site')
@section('body')
  <div class="container">
    <h2>{{ $page->title }}</h2>
    @if ($page->post_img)
      <img src="{{ $page->assets_prefix }}{{ $page->post_img }}" alt="{{ $page->post_img_alt }}">
    @endif
    <p>{{ $page->description }}</p>
  </div>
@endsection
