@extends('_layouts.site')
@section('body')
  <section id="slider">
    <ul class="bxslider">
      @foreach ($page->slides as $slide)
        <li style="background:url('{{$page->assets_prefix}}{{ $slide }}') center no-repeat;background-size:cover"></li>
      @endforeach
    </ul>
    <div class="slider-caption">
      <div class="container text-center">
        <h2>{{ $page->slide_caption }}</h2>
        <h3>{{ $page->slide_sub_caption }}</h3>
      </div><!--/.container.text-center-->
    </div><!--/.slider-caption-->
    <div id="slider-overlay"></div>
  </section><!--/#slider-->
  <main id="main" tabindex="-1">
  <section class="mission-statement">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h2>Mission Statement</h2>
          <p>
            {{ $page->mission_statement }}
          </p>
        </div><!--/.col-md-8-->
        <div class="col-md-4 estimate">
          <h2>Estimate</h2>
          <a class="btn" href="/estimate">Estimate</a>
          <a class="btn" href="/contact">Contact</a>
        </div><!--/.col-md-4-->
      </div><!--/.row-->
    </div><!--/.contaienr-->
  </section><!--/.mission-statement-->
  <section class="latest-jobs-before-and-afters">
    <div class="container">
      <h2 class="text-center">Latest Jobs</h2>
      <div class="latest-jobs">
        @forelse ($latest_jobs->slice(0, 3) as $latest_job)
          <div class="latest-job">
            <div class="before-after-imgs clearfix">
              <div class="img" style="background:url('{{ $page->assets_prefix }}{{ $latest_job->before_pic }}') center no-repeat; background-size:cover"></div>
              <div class="img" style="background:url('{{ $page->assets_prefix }}{{ $latest_job->after_pic }}') center no-repeat; background-size:cover"></div>
            </div><!--/.before-after-imgs.clearfix-->
            <div class="text clearfix">
              <h3>{{$latest_job->title}}</h3>
              <p>{{ str_limit($latest_job->description, $limit = 100, $end = '...') }}</p>
              <a href="{{$latest_job->getPath()}}">Read More</a>
            </div>
          </div>
        @empty
          <h3>There are currently no jobs posted</h3>
        @endforelse
      </div>
      <div class="text-center">
        <a href="/latest-jobs" class="btn">View All Jobs</a>
      </div><!--/.text-center-->
    </div><!--/.container-->
  </section><!--/.latest-jobs-before-and-afters-->
</main>
@endsection
