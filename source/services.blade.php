@extends('_layouts.inner')
@section('body')
  @forelse ($services as $service)
    <div class="service">
      <div class="title">
        <h2>{{ $service->title }}</h2>
      </div><!--/.title-->
      <div class="description">
        <p>{{ $service->description_short }}</p>
      </div>
      <a href="{{ $service->getPath()}}">View Service</a>
    </div>
  @empty
    <h2>No Services</h2>
  @endforelse
@endsection
