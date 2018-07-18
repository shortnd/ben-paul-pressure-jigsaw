<header id="header">
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="contact-info-wrapper">
          <a href="tel:+1{{ $page->telephone }}">{{ $page->telephone }}</a>
          <a href="mailto:{{$page->email}}">{{ $page->email }}</a>
          </div><!--/.contact-info-wrapper-->
        </div><!--/.col-md-6-->
        <div class="col-md-6 text-right">
          <a href="https://{{$page->facebook_link}}" target="_blank"><i class="fa fa-facebook"></i><span class="sr-only">facebook link</span></a>
        </div><!--/.col-md-6.text-right-->
      </div><!--/.row-->
    </div><!--/.container-->
  </div><!--/.top-bar-->
  <div class="bottom-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="/" id="logo">
            <h1>Benjamin Paul's</h1>
            <h2>Pressure Washing</h2>
          </a><!--/#logo-->
        </div><!--/.col-md-3-->
        <div class="col-md-9">
          <div class="text-right">
            <nav>
              <ul id="nav">
                <li>
                  <a href="/">Home</a>
                </li>
                <li>
                  <a href="/about">About</a>
                </li>
                <li>
                  <a href="/services">Services</a>
                </li>
                <li>
                  <a href="/contact">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
        </div><!--/.col-md-9-->
      </div><!--/.row-->
    </div><!--/.container-->
  </div><!--/.bottom-bar-->
</header><!--/#header-->