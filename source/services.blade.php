@extends('_layouts.inner')
@section('body')
  <h2 class="text-center">Services</h2>
  @forelse ($services as $service)
    <div class="service">
      @if ($service->post_img)
        <div class="img-wrap">
          <img src="{{ $page->assets_prefix }}{{$service->post_img}}" alt="{{$service->post_img_alt}}"  />
        </div>
      @endif
      <div class="about-service">
        <div class="title">
          <h2>{{ $service->title }}</h2>
        </div><!--/.title-->
        <div class="description">
          <p>{{ str_limit($service->description, $limit=100, $end="...") }}</p>
        </div>
        <a href="{{ $service->getPath()}}">View Service</a>
      </div>
    </div>
  @empty
    <h2>No Services</h2>
  @endforelse
@endsection
