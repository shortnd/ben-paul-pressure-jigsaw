---
title: Latest Jobs
---
@extends('_layouts.inner')
@section('body')
  @forelse ($latest_jobs as $latest_job)
    <div class="latest_job">
      @if ($latest_job->before_after_pic)
        <div class="img-wrap">
          <div style="background:url('{{ $page->assets_prefix }}{{ $latest_job->before_after_pic }}') center no-repeat;background-size:cover"></div>
        </div>
      @endif
      <div class="text">
        <div class="title">
          <h2>{{ $latest_job->title }}</h2>
        </div><!--/.title-->
        <div class="description">
          <p>
            {{ str_limit(strip_tags($latest_job->getContent()), $limit = 150, $end ="...") }}
          </p>
        </div>
        <a href="{{ $latest_job->getPath()}}">View Service</a>
      </div>
    </div>
  @empty
    <h2>No {{$page->title}}</h2>
  @endforelse
@endsection
