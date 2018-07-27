@extends('_layouts.site')
@section('body')
    <section id="slider">
      <ul class="bxslider">
        <li style="background:url('/assets/images/slide-1.jpg') center no-repeat;background-size:cover;"></li>
      </ul>
      <div class="slider-caption">
        <div class="container text-center">
          <h2>Benjamin Pauls Pressure Washing</h2>
          <h3>Servicing St. Clair Shore, Grosse Point, Harper Woods, Sterling Hights and More...</h3>
        </div><!--/.container.text-center-->
      </div><!--/.slider-caption-->
    </section><!--/#slider-->
    <section class="mission-statement">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus illo eaque reprehenderit, tempora similique corporis ipsum? Expedita exercitationem inventore nihil. Ullam totam sit eum tempore quae sunt dolores, consectetur quisquam.
            </p>
          </div><!--/.col-md-8-->
          <div class="col-md-4">
            <h2>Contact Me</h2>
          </div><!--/.col-md-4-->
        </div><!--/.row-->
      </div><!--/.contaienr-->
    </section><!--/.mission-statement-->
    <section class="latest-jobs-before-and-afters">
      <div class="container">
        <h2 class="text-center">Latest Jobs</h2>
        <div class="latest-jobs">
          <div class="latest-job">
            <div class="before-after-imgs clearfix">
              <div class="img" style="background:url('/assets/images/dirt.jpg') center no-repeat;background-size:cover"></div>
              <div class="img" style="background:url('/assets/images/water-clean.jpg') center no-repeat;background-size:cover"></div>
            </div><!--/.before-after-imgs.clearfix-->
            <div class="text clearfix">
              <h3>Job Name</h3>
              <p>
                Small quick summary of the job. Something that you would like to share quickly
              </p>
              <a href="#">Read More</a>
            </div><!--/.text.clearfix-->
          </div><!--/.latest-job-->
          <div class="latest-job">
            <div class="before-after-imgs clearfix">
              <div class="img" style="background:url('/assets/images/dirt.jpg') center no-repeat;background-size:cover"></div>
              <div class="img" style="background:url('/assets/images/water-clean.jpg') center no-repeat;background-size:cover"></div>
            </div><!--/.before-after-imgs.clearfix-->
            <div class="text clearfix">
              <h3>Job Name</h3>
              <p>
                Small quick summary of the job. Something that you would like to share quickly
              </p>
              <a href="#">Read More</a>
            </div><!--/.text.clearfix-->
          </div><!--/.latest-job-->
          <div class="latest-job">
            <div class="before-after-imgs clearfix">
              <div class="img" style="background:url('/assets/images/dirt.jpg') center no-repeat;background-size:cover"></div>
              <div class="img" style="background:url('/assets/images/water-clean.jpg') center no-repeat;background-size:cover"></div>
            </div><!--/.before-after-imgs.clearfix-->
            <div class="text clearfix">
              <h3>Job Name</h3>
              <p>
                Small quick summary of the job. Something that you would like to share quickly
              </p>
              <a href="#">Read More</a>
            </div><!--/.text.clearfix-->
          </div><!--/.latest-job-->
        </div><!--/.latest-jobs-->
        <div class="text-center">
          <a href="#" class="btn">View All Jobs</a>
        </div><!--/.text-center-->
      </div><!--/.container-->
    </section><!--/.latest-jobs-before-and-afters-->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6 copyright">
            <span>&copy; Copyright Benjamin Pauls 2018</span>
          </div><!--/.col-md-6-->
          <div class="col-md-6 link-back-login text-right">
            <span id="shortnd">Developed &amp Designed by <a href="https://shortnd.design" target="_blank">Collin O.</a></span> | <a href="#">Login</a>
          </div><!--/.col-md-6.link-back-login.text-right-->
        </div><!--/.row-->
      </div><!--/.container-->
    </footer>
@endsection
