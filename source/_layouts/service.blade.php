@extends('_layouts.inner')
@section('body')
    @if ($page->post_img)
      <img src="{{ $page->post_img }}" alt="{{ $page->post_img_alt }}">
    @endif
    @yield('content')
@endsection
