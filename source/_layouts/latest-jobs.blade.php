@extends('_layouts.site')
@section('body')
  <div class="container">
    <h2>{{$page->title}}</h2>
    <h3>{{$page->date}}</h3>
    <hr />
    <img src="../../{{$page->before_pic}}" alt="{{$page->before_after_pic_desc}}">
    <img src="../../{{$page->after_pic}}" alt="{{$page->before_after_pic_desc}}" />
    <p>
      {{$page->description}}
    </p>
    @if ($page->getNext() && $page->getPrevious())
      <a href="{{ $page->getPrevious()->getPath() }}">{{ $page->getPrevious()->title }}</a>
      <a href="{{ $page->getNext()->getPath() }}">{{ $page->getNext()->title }}</a>
    @elseif ($page->getNext())
      <a href="{{ $page->getNext()->getPath() }}">{{ $page->getNext()->title }}</a>
    @elseif ($page->getPrevious())
      <a href="{{ $page->getPrevious()->getPath() }}">{{ $page->getPrevious()->title }}</a>
    @endif
  </div><!--/.container-->
@endsection
