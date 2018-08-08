@extends('_layouts.inner')
@section('body')
  <h3>{{$page->date}}</h3>
  <hr />
  @if ($page->before_after_pic)
    <div class="before-and-after">
      <img src="{{$page->assets_prefix}}{{$page->before_after_pic}}" alt="{{$page->before_after_pic_desc}}">
    </div><!--/.before-and-after-->
  @endif
  @yield('content')
  @if ($page->getNext() && $page->getPrevious())
    <a class="prev" href="{{ $page->getPrevious()->getPath() }}">{{ $page->getPrevious()->title }}</a>
    <a class="next" href="{{ $page->getNext()->getPath() }}">{{ $page->getNext()->title }}</a>
  @elseif ($page->getNext())
    <a class="next" href="{{ $page->getNext()->getPath() }}">{{ $page->getNext()->title }}</a>
  @elseif ($page->getPrevious())
    <a class="prev" href="{{ $page->getPrevious()->getPath() }}">{{ $page->getPrevious()->title }}</a>
  @endif
@endsection
