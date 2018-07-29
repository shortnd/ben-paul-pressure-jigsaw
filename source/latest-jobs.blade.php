@extends('_layouts.site')
@section('body')
  <div class="container">
    <ul>
      @forelse ($latest_jobs as $latest_job)
        <li>
          {{$latest_job->title}}
          <a href="{{$latest_job->getPath()}}">View Job</a>
        </li>
      @empty
        <h2 class="no-jobs">Currenly No Jobs Posted</h2>
      @endforelse
    </ul>
  </div>
@endsection
