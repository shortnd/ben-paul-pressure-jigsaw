@extends('_layouts.inner')
@section('body')
  @yield('content')
  @forelse ($services as $service)
    <div class="service">
      @if ($service->post_img)
        <div class="img-wrap">
          <img src="{{$service->post_img}}" alt="{{$service->post_img_alt}}"  />
        </div>
      @endif
      <div class="about-service">
        <div class="title">
          <h2>{{ $service->title }}</h2>
        </div><!--/.title-->
        <div class="description">
          <p>
            {{ str_limit(strip_tags($service->getContent()), $limit = 150, $end ="...") }}
          </p>
        </div>
        <a href="{{$service->getPath()}}">View Service</a>
      </div>
    </div>
  @empty
    <h2>No {{$page->title}}</h2>
  @endforelse
@endsection
