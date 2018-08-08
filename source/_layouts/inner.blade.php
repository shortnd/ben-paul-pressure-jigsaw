<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
          @if ($page->title){{ $page->title }} |@endif Benjamin Paul Pressure Washing
        </title>
        <meta name="description" content="{{$page->description}}">
        <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/plugins/owl.carousel/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="/assets/css/layout.css">
        <script src="/assets/js/main.js"></script>
        <script src="https://identity.netlify.com/v1/netlify-identity-widget.js"></script>
    </head>
    <body id="inner">
        @include('_components.headerAndNav')
        <section id="slider">
          <ul class="bxslider">
            @if ($page->slides)
              @foreach ($page->slides as $slide)
                <li style="background:url('{{$page->assets_prefix}}{{ $slide }}') center no-repeat;background-size:cover"></li>
              @endforeach
            @endif
          </ul>
          <div class="slider-caption">
            <div class="container text-center">
              <h2>{{ $page->title }}</h2>
            </div><!--/.container.text-center-->
          </div><!--/.slider-caption-->
          <div id="slider-overlay"></div>
        </section><!--/#slider-->
        <div class="container">
          <main tabindex="-1" id="main">
            @yield('body')
          </main><!--/#page-->
        </div>
        @include('_components.footer')
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/plugins/jquery.bxslider/jquery.bxslider.min.js"></script>
        <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/js/scripts.js"></script>
    </body>
</html>
