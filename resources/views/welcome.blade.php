





<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>BEXER</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('theme/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{asset('theme/slick.css')}}">
  <!-- fontawesome -->
  <link rel="stylesheet" href="{{asset('theme/font-awesome.min.css')}}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{asset('theme/animate.css')}}">
  <!-- aos -->
  <link rel="stylesheet" href="{{asset('theme/aos.css')}}">
  <!-- venobox popup -->
  <link rel="stylesheet" href="{{asset('theme/venobox.css')}}">
  <!-- chart js -->
  <script src="{{asset('theme/Chart.bundle.js')}}"></script>

  <!-- Main Stylesheet -->
  <link href="{{asset('theme/style.css')}}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="{{asset('themeimage/favicon.png')}}" type="image/x-icon">

</head>

<body>
  <!-- preloader start -->
  <div class="preloader">
    <div class="spin"></div>
  </div>
  <!-- preloader end -->

<!-- header -->
<header>
  <!-- top header -->
  {{-- <div class="top-header bg-secondary  py-2 pt-2 pb-1 py-2">
    <div class="container">
      <div class="row align-items-center">
        <!-- social icons -->
        <div class=" col-md-6 text-center text-md-left">
          <span class="text-white">Connect With Us:</span>
          <ul class="list-inline d-inline-block">
            <li class="list-inline-item"><a class="text-white d-inline-block p-2" href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a class="text-white d-inline-block p-2" href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a class="text-white d-inline-block p-2" href="#"><i class="fa fa-rss"></i></a></li>
            <li class="list-inline-item"><a class="text-white d-inline-block p-2" href="#"><i class="fa fa-google"></i></a></li>
            <li class="list-inline-item"><a class="text-white d-inline-block p-2" href="#"><i class="fa fa-vimeo"></i></a></li>
          </ul>
        </div>
        <!-- mail and phone -->
        <div class=" col-md-6 text-md-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item mx-0 border-right border-secondary"><a class="text-white d-inline-block px-lg-3 px-2" href="mailto:info@bexar.com">info@bexar.com</a></li>
            <li class="list-inline-item mx-0"><a class="text-white d-inline-block px-lg-3 px-2" href="callto:1234565523">Call Us Now: <span class="text-primary">123 456 5523</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- /top header -->

  <!-- navigation -->
  <div class="navigation bg-white position-relative">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="{{route('site')}}"><img class="img-fluid" src="{{asset('themeimage/logo.png')}}" alt="Bexar"></a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center pb-lg-0" id="navigation">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Home
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="index.html">Homepage 1</a>
                <a class="dropdown-item" href="homepage-2.html">Homepage 2</a>
                <a class="dropdown-item" href="homepage-3.html">Homepage 3</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                About Us
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="about.html">About Us 1</a>
                <a class="dropdown-item" href="about-2.html">About Us 2</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                blog
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="blog.html">Blog</a>
                <a class="dropdown-item" href="blog-2.html">Blog Sidebar</a>
                <a class="dropdown-item" href="blog-single.html">Blog Details</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Pages
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="team.html">Team</a>
                <a class="dropdown-item" href="project.html">Case Study</a>
                <a class="dropdown-item" href="project-single.html">Project Details</a>
                <a class="dropdown-item" href="service.html">Service 1</a>
                <a class="dropdown-item" href="service-2.html">Service 2</a>
                <a class="dropdown-item" href="service-single.html">Service Details</a>
              </div>
            </li>
            {{-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Shortcode
              </a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="components/buttons.html">Buttons</a>
                  <a class="dropdown-item" href="components/icons.html">Icons</a>
                  <a class="dropdown-item" href="components/typography.html">Typography</a>
                  <a class="dropdown-item" href="components/accordions.html">Accordions</a>
                  <a class="dropdown-item" href="components/blog-contents.html">Blog Contents</a>
                  <a class="dropdown-item" href="components/service-contents.html">Service Contents</a>
                  <a class="dropdown-item" href="components/team-contents.html">Team Contents</a>
              </div>
            </li> --}}
          </ul>
          <!-- search -->
          <div class="search px-4 pb-3 pb-lg-0">
            <button id="searchOpen" class="search-btn"><i class="fa fa-search text-dark"></i></button>
            <div class="search-wrapper">
              <form action="#">
                <input class="search-box form-control" id="search" type="search" placeholder="Type & Hit Enter...">
              </form>
              <button id="searchClose" class="search-close"><i class="fa fa-close text-dark"></i></button>
            </div>
          </div>

          @if (Route::has('login'))
          <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
              @auth
              <a href="{{ url('/home') }}" class="btn btn-primary hover-ripple">Home</a>
                  {{-- <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a> --}}
              @else
              <a href="{{ route('login') }}" class="btn btn-primary hover-ripple">Login</a>
                  {{-- <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a> --}}
          
                  @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="btn btn-primary hover-ripple">Register</a>
                     {{-- <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a> --}}
                  @endif
              @endauth
          </div>
          @endif



          <!-- get start btn -->
          {{-- <a href="service.html" class="btn btn-primary hover-ripple">get started</a> --}}
        </div>
      </nav>
    </div>
  </div>
  <!-- /navigation -->
</header>
<!-- /header -->

<!-- slider -->
<section>
  <div class="hero-slider">
    @foreach($Sliders as $Slider)
    <!-- slider item -->
    <div class="hero-slider-item bg-cover hero-section" data-background="{{asset($Slider->image)}}">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">
            <h4 class="mb-0 letter-spacing">{{$Slider->short_text}}</h4>
            <h1 class="mb-4">{{$Slider->title}}</h1>
            <p class="mb-5">{{$Slider->text}}</p>
            <a href="{{$Slider->button_link}}" class="btn btn-primary-outline" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".4">{{$Slider->button_name}}</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>
<!-- /slider -->

<!-- banner feature -->
<section class="translate-top">
  <div class="container">
    <div class="row">
      <!-- feature item -->
<div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
  <div class="bg-white py-5 px-4 text-center box-shadow transition hover-bg-dark active">
    <div class="icon-bg mb-4 water-wave">
      <i class="fa fa-diamond icon text-primary"></i>
    </div>
    <h4 class="mb-4">Business Solution</h4>
    <p>Lorem ipsum dolor sit amet constur adipelit sed.</p>
  </div>
</div>
<!-- feature item -->
<div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
  <div class="bg-white py-5 px-4 text-center box-shadow transition hover-bg-dark">
    <div class="icon-bg mb-4 water-wave">
      <i class="fa fa-bar-chart icon text-primary"></i>
    </div>
    <h4 class="mb-4">Market Research</h4>
    <p>Lorem ipsum dolor sit amet constur adipelit sed.</p>
  </div>
</div>
<!-- feature item -->
<div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
  <div class="bg-white py-5 px-4 text-center box-shadow transition hover-bg-dark">
    <div class="icon-bg mb-4 water-wave">
      <i class="fa fa-lightbulb-o icon text-primary"></i>
    </div>
    <h4 class="mb-4">Business Strategy</h4>
    <p>Lorem ipsum dolor sit amet constur adipelit sed.</p>
  </div>
</div>
<!-- feature item -->
<div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
  <div class="bg-white py-5 px-4 text-center box-shadow transition hover-bg-dark">
    <div class="icon-bg mb-4 water-wave">
      <i class="fa fa-dashboard icon text-primary"></i>
    </div>
    <h4 class="mb-4">Speed Optimization</h4>
    <p>Lorem ipsum dolor sit amet constur adipelit sed.</p>
  </div>
</div>
    </div>
  </div>
</section>
<!-- /banner feature -->

<!-- about us -->
<section class="section pt-0">
  <div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-md-5 bg-contain" data-background="{{asset('themeimage/about-us-bg.png')}}">
      <!-- about us image -->
      <img class="img-fluid w-100" src="{{asset('themeimage/about-us.png')}}" alt="About Image">
    </div>
    <div class="col-md-6">
      <span class="section-title-border"></span>
      <p class="subtitle">About Us</p>
      <h2 class="section-title">We Are Dynamic Team and Business Agency</h2>
      <p class="mb-5">Excepteur sint occaecat cupidatat non proident sunt iculpa qui officia deserunt mollit anim est.
        laborum sed perspiciatis unde omnis natus error sit voluptatem accusantium.</p>
      <a href="service.html" class="btn btn-primary hover-ripple">more service</a>
    </div>
  </div>
</div>
</section>
<!-- /about us -->

<!-- funfacts -->
<section class="funfacts">
  <div class="container">
    <div class="row bg-secondary p-5">
      <!-- funfacts item -->
<div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
  <div class="d-flex align-items-center">
    <i class="fa fa-bullseye icon-lg mr-3 text-primary"></i>
    <div>
      <h3 class="text-white mb-0"><span class="count" data-count="50">0</span>+</h3>
      <span class="text-white">Projects Done</span>
    </div>
  </div>
</div>
<!-- funfacts item -->
<div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
  <div class="d-flex align-items-center">
    <i class="fa fa-calendar icon-lg mr-3 text-primary"></i>
    <div>
      <h3 class="text-white mb-0"><span class="count" data-count="25">0</span>+</h3>
      <span class="text-white">Years Experience</span>
    </div>
  </div>
</div>
<!-- funfacts item -->
<div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
  <div class="d-flex align-items-center">
    <i class="fa fa-trophy icon-lg mr-3 text-primary"></i>
    <div>
      <h3 class="text-white mb-0"><span class="count" data-count="250">0</span>+</h3>
      <span class="text-white">Awards Win</span>
    </div>
  </div>
</div>
<!-- funfacts item -->
<div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
  <div class="d-flex align-items-center">
    <i class="fa fa-smile-o icon-lg mr-3 text-primary"></i>
    <div>
      <h3 class="text-white mb-0"><span class="count" data-count="500">0</span>+</h3>
      <span class="text-white">Happy Coustomers</span>
    </div>
  </div>
</div>
    </div>
  </div>
</section>
<!-- /funfacts -->


<!-- feature -->
<section class="section">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-lg-4 offset-lg-2 order-lg-1 order-2">
        <span class="section-title-border"></span>
        <p class="subtitle">Why Choose Us</p>
        <h2 class="section-title">Why They Choose Bexar</h2>
        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius tempor incididunt ut labore.</p>
        <!-- feature item -->
        <ul class="list-unstyled">
          <li class="d-flex align-items-center mb-5">
            <div class="text-center mr-4">
              <div class="icon-bg water-wave"><i class="fa fa-snowflake-o icon text-primary"></i></div>
            </div>
            <div>
              <h4>Creative Design</h4>
              Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia.
            </div>
          </li>
          <!-- feature item -->
          <li class="d-flex align-items-center mb-5">
            <div class="text-center mr-4">
              <div class="icon-bg water-wave"><i class="fa fa-code icon text-primary"></i></div>
            </div>
            <div>
              <h4>Pixel Perfect Coding</h4>
              Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia.
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-5 pr-lg-0 order-lg-2 order-1 mb-5 mb-lg-0">
        <div class="feature-img-bg box-shadow">
          <img class="img-fluid w-100" src="{{asset('themeimage/feature.jpg')}}" alt="feature-image">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /feature -->

<!-- service -->
<section class="bg-gray-white">
  <div class="section bg-secondary section-bottom-lg">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <span class="section-title-border border-center"></span>
          <p class="subtitle">Best Service</p>
          <h2 class="section-title text-white">Service We Provide</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="service-wrapper">
    <div class="container">
      <div class="row">
        <!-- service-item -->
<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
  <div class="card border-0 rounded-0 box-shadow">
    <img class="card-img-top rounded-0" src="{{asset('themeimage/service-1.jpg')}}" alt="Card image cap">
    <div class="card-body position-relative">
      <i class="card-icon fa fa-bar-chart"></i>
      <h4><a href="service-single.html" class="text-dark">Market Analysis</a></h4>
      <p class="card-text">Lorem ipsum dolor sit amet, consecte tur adipis elit sed eiusmod.</p>
      <a href="service-single.html" class="btn btn-secondary btn-arrow">Read More</a>
    </div>
  </div>
</div>
<!-- service-item -->
<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
  <div class="card border-0 rounded-0 box-shadow">
    <img class="card-img-top rounded-0" src="{{asset('themeimage/service-2.jpg')}}" alt="Card image cap">
    <div class="card-body position-relative">
      <i class="card-icon fa fa-handshake-o"></i>
      <h4><a href="service-single.html" class="text-dark">Business Consulting</a></h4>
      <p class="card-text">Lorem ipsum dolor sit amet, consecte tur adipis elit sed eiusmod.</p>
      <a href="service-single.html" class="btn btn-secondary btn-arrow">Read More</a>
    </div>
  </div>
</div>
<!-- service-item -->
<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
  <div class="card border-0 rounded-0 box-shadow">
    <img class="card-img-top rounded-0" src="{{asset('themeimage/service-3.jpg')}}" alt="Card image cap">
    <div class="card-body position-relative">
      <i class="card-icon fa fa-briefcase"></i>
      <h4><a href="service-single.html" class="text-dark">Invesment Planning</a></h4>
      <p class="card-text">Lorem ipsum dolor sit amet, consecte tur adipis elit sed eiusmod.</p>
      <a href="service-single.html" class="btn btn-secondary btn-arrow">Read More</a>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</section>
<!-- /service -->

<!-- team -->
<section class="section pt-0 bg-gray-white">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <span class="section-title-border border-center"></span>
        <p class="subtitle">Our Team</p>
        <h2 class="section-title">We Are Dynamic Team and<br>Business Agency</h2>
      </div>
    </div>
    <div class="row">
      <!-- team member -->
<div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
  <div class="team-member text-center">
    <div class="team-member-img position-relative mb-5">
      <img class="img-fluid w-100" src="{{asset('themeimage/team-1.jpg')}}" alt="team-member">
      <div class="hover-icon py-4">
        <ul class="list-inline social-icon">
          <li class="list-inline-item">
            <a href="#" class="hover-ripple ripple-white"><i class="fa fa-facebook"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="hover-ripple ripple-white"><i class="fa fa-twitter"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="hover-ripple ripple-white"><i class="fa fa-linkedin"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="hover-ripple ripple-white"><i class="fa fa-pinterest"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <h4><a href="team-single.html" class="text-dark">MONICA HELLEONA</a></h4>
    <span>Designer</span>
  </div>
</div>
<!-- team member -->
<div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
  <div class="team-member text-center">
    <div class="team-member-img position-relative mb-5">
      <img class="img-fluid w-100" src="{{asset('themeimage/team-2.jpg')}}" alt="team-member">
      <div class="hover-icon py-4">
        <ul class="list-inline social-icon">
          <li class="list-inline-item">
            <a href="#" class="hover-ripple ripple-white"><i class="fa fa-facebook"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="hover-ripple ripple-white"><i class="fa fa-twitter"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="hover-ripple ripple-white"><i class="fa fa-linkedin"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="hover-ripple ripple-white"><i class="fa fa-pinterest"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <h4><a href="team-single.html" class="text-dark">ALEX 
 Monatinmo</a></h4>
    <span>Project Manager</span>
  </div>
</div>
<!-- team member -->
<div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
  <div class="team-member text-center">
    <div class="team-member-img position-relative mb-5">
      <img class="img-fluid w-100" src="{{asset('themeimage/team-3.jpg')}}" alt="team-member">
      <div class="hover-icon py-4">
        <ul class="list-inline social-icon">
          <li class="list-inline-item">
            <a href="#" class="hover-ripple ripple-white"><i class="fa fa-facebook"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="hover-ripple ripple-white"><i class="fa fa-twitter"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="hover-ripple ripple-white"><i class="fa fa-linkedin"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="hover-ripple ripple-white"><i class="fa fa-pinterest"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <h4><a href="team-single.html" class="text-dark">JENNIFER GARNER</a></h4>
    <span>Developer</span>
  </div>
</div>
    </div>
  </div>
</section>
<!-- /team -->

<!-- case study -->
<section class="section pt-0">
  <div class="pb-4 bg-gray-white">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <span class="section-title-border"></span>
          <p class="subtitle">Case Study</p>
          <h2>Bexar Case Studies</h2>
        </div>
        <div class="col-md-4 text-right align-self-end d-md-block d-sm-none">
          <a href="project.html" class="btn btn-primary mb-3 hover-ripple">more projects</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid px-0">
    <div class="row no-gutters">
      <!-- project-item -->
<div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
  <div class="project-item">
    <div class="position-relative mb-4 overflow-hidden">
      <img src="{{asset('themeimage/project-1.jpg')}}" alt="project thumb" class="img-fluid w-100">
      <div class="hover-overlay">
        <a href="{{asset('themeimage/project-1.jpg')}}" class="venobox"><i class="uni-plus"></i></a>
      </div>
    </div>
    <!-- project-info -->
    <div class="ml-4">
      <h6 class="text-primary">Business Solution</h6>
      <h4><a href="project-single.html" class="text-dark">Art Institute of Chicago</a></h4>
    </div>
  </div>
</div>
<!-- project-item -->
<div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
  <div class="project-item">
    <div class="position-relative mb-4 overflow-hidden">
      <img src="{{asset('themeimage/project-2.jpg')}}" alt="project thumb" class="img-fluid w-100">
      <div class="hover-overlay">
        <a href="{{asset('themeimage/project-2.jpg')}}" class="venobox"><i class="uni-plus"></i></a>
      </div>
    </div>
    <!-- project-info -->
    <div class="ml-4">
      <h6 class="text-primary">Digital Marketing</h6>
      <h4><a href="project-single.html" class="text-dark">Essential Looks Trend Report</a></h4>
    </div>
  </div>
</div>
<!-- project-item -->
<div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
  <div class="project-item">
    <div class="position-relative mb-4 overflow-hidden">
      <img src="{{asset('themeimage/project-3.jpg')}}" alt="project thumb" class="img-fluid w-100">
      <div class="hover-overlay">
        <a href="{{asset('themeimage/project-3.jpg')}}" class="venobox"><i class="uni-plus"></i></a>
      </div>
    </div>
    <!-- project-info -->
    <div class="ml-4">
      <h6 class="text-primary">Finacial Analytsis</h6>
      <h4><a href="project-single.html" class="text-dark">Carpe Diem Santorini</a></h4>
    </div>
  </div>
</div>
<!-- project-item -->
<div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
  <div class="project-item">
    <div class="position-relative mb-4 overflow-hidden">
      <img src="{{asset('themeimage/project-4.jpg')}}" alt="project thumb" class="img-fluid w-100">
      <div class="hover-overlay">
        <a href="{{asset('themeimage/project-4.jpg')}}" class="venobox"><i class="uni-plus"></i></a>
      </div>
    </div>
    <!-- project-info -->
    <div class="ml-4">
      <h6 class="text-primary">Marketing Strategy</h6>
      <h4><a href="project-single.html" class="text-dark">Celebrate with Stoli</a></h4>
    </div>
  </div>
</div>
    </div>
    <div class="text-center d-block d-md-none">
      <a href="project.html" class="btn btn-primary mb-3 hover-ripple">more projects</a>
    </div>
  </div>
</section>
<!-- /case study -->

<!-- testimonial -->
<section class="section bg-gray bg-dots">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <span class="section-title-border border-center"></span>
        <p class="subtitle">Testimonials</p>
        <h2 class="section-title">What Clients Are Say?</h2>
      </div>
      <div class="col-10 mx-auto">
        <div class="testimonial-slider">
          <!-- slider-item -->
          <div class="text-center">
            <img class="img-fluid box-shadow rounded-circle mb-5 d-inline-block" src="{{asset('themeimage/client-1.jpg')}}"
              alt="client">
            <div class="bg-quote text-center pt-md-4" data-dot-image="images/testimonial/client-2.jpg">
              <p class="font-italic mb-5 h5 text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                eiusmod tempor incididunt ut labore dolore magna aliqua.enim ad minim veniam.quis nostrud exercitation
                ullamco laboris nis aliquip ex ea commodo consequat. duis aute irure dolor in reprehen.</p>
              <h4>Dominic Allen</h4>
              <span class="text-primary">Designer</span>
            </div>
          </div>
          <!-- slider-item -->
          <div class="text-center">
            <img class="img-fluid box-shadow rounded-circle mb-5 d-inline-block" src="{{asset('themeimage/client-2.jpg')}}"
              alt="client">
            <div class="bg-quote text-center pt-md-4" data-dot-image="images/testimonial/client-2.jpg">
              <p class="font-italic mb-5 h5 text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                eiusmod tempor incididunt ut labore dolore magna aliqua.enim ad minim veniam.quis nostrud exercitation
                ullamco laboris nis aliquip ex ea commodo consequat. duis aute irure dolor in reprehen.</p>
              <h4>Alex Pitt</h4>
              <span class="text-primary">Designer</span>
            </div>
          </div>
          <!-- slider-item -->
          <div class="text-center">
            <img class="img-fluid box-shadow rounded-circle mb-5 d-inline-block" src="{{asset('themeimage/client-3.jpg')}}"
              alt="client">
            <div class="bg-quote text-center pt-md-4" data-dot-image="images/testimonial/client-2.jpg">
              <p class="font-italic mb-5 h5 text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                eiusmod tempor incididunt ut labore dolore magna aliqua.enim ad minim veniam.quis nostrud exercitation
                ullamco laboris nis aliquip ex ea commodo consequat. duis aute irure dolor in reprehen.</p>
              <h4>KOBERT WONKOMOLI</h4>
              <span class="text-primary">Designer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /testimonial -->

<!-- call to action -->
<section class="section overlay-secondary bg-fixed" data-background="images/testimonial/cta-lg.jpg'">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-10 col-11 text-center mx-auto">
        <h2 class="section-title text-white">Bexar give the smart solution for your business</h2>
        <a href="contact.html" class="btn btn-primary hover-ripple">get an quote</a>
      </div>
    </div>
  </div>
</section>
<!-- /call to action -->

<!-- blog -->
<section class="section bg-gray-white position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <span class="section-title-border"></span>
        <p class="subtitle">Latest News</p>
        <h2 class="section-title">Learn From Bexar</h2>
      </div>
    </div>
    <div class="row">
      <!-- blog post -->
<div class="col-lg-4 col-sm-6 mb-lg-0 mb-4">
  <article class="card border-0 rounded-0 position-relative box-shadow zindex-1">
    <div class="card-type">Article</div>
    <img class="card-img-top rounded-0" src="{{asset('themeimage/post-1.jpg')}}" alt="blog-thumb">
    <div class="card-body">
      <div class="card-meta text-uppercase mb-2">by <strong class="text-dark">admin</strong>/ on <strong class="text-dark">1
          Sep, 2018</strong></div>
      <h4 class="card-title"><a href="blog-single.html" class="text-dark">elit duied aiusmod tempor did labore dolory</a></h4>
      <span class="section-title-border"></span>
      <p class="card-text">Excepteur sint ocacat cupidatat non proi dent sunt in culpa qui officia deserunt.
        mollit anim id est laborum. sed ut pers piciatis unde omnis iste natus error. sit voluptatem.</p>
    </div>
  </article>
</div>
<!-- blog post -->
<div class="col-lg-4 col-sm-6 mb-lg-0 mb-4">
  <article class="card border-0 rounded-0 position-relative box-shadow zindex-1">
    <div class="card-type">Article</div>
    <img class="card-img-top rounded-0" src="{{asset('themeimage/post-2.jpg')}}" alt="blog-thumb">
    <div class="card-body">
      <div class="card-meta text-uppercase mb-2">by <strong class="text-dark">admin</strong>/ on <strong class="text-dark">2
          Sep, 2018</strong></div>
      <h4 class="card-title"><a href="blog-single.html" class="text-dark">elit duied aiusmod tempor did labore dolory</a></h4>
      <span class="section-title-border"></span>
      <p class="card-text">Excepteur sint ocacat cupidatat non proi dent sunt in culpa qui officia deserunt.
        mollit anim id est laborum. sed ut pers piciatis unde omnis iste natus error. sit voluptatem.</p>
    </div>
  </article>
</div>
<!-- blog post -->
<div class="col-lg-4 col-sm-6 mb-lg-0 mb-4">
  <article class="card border-0 rounded-0 position-relative box-shadow zindex-1">
    <div class="card-type">Article</div>
    <img class="card-img-top rounded-0" src="{{asset('themeimage/post-3.jpg')}}" alt="blog-thumb">
    <div class="card-body">
      <div class="card-meta text-uppercase mb-2">by <strong class="text-dark">admin</strong>/ on <strong class="text-dark">3
          Sep, 2018</strong></div>
      <h4 class="card-title"><a href="blog-single.html" class="text-dark">elit duied aiusmod tempor did labore dolory</a></h4>
      <span class="section-title-border"></span>
      <p class="card-text">Excepteur sint ocacat cupidatat non proi dent sunt in culpa qui officia deserunt.
        mollit anim id est laborum. sed ut pers piciatis unde omnis iste natus error. sit voluptatem.</p>
    </div>
  </article>
</div>
    </div>
  </div>
  <!-- background shapes -->
  <img class="img-fluid blog-shape-left" src="{{asset('themeimage/blog-bg-left.png')}}" alt="">
  <img class="img-fluid blog-shape-right" src="{{asset('themeimage/blog-bg-right.png')}}" alt="">
</section>
<!-- /blog -->

<!-- footer -->
<footer>
  <!-- main footer -->
  <div class="section bg-secondary">
    <div class="container">
      <div class="row justify-content-between">
        <!-- footer content -->
        <div class="col-lg-5 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="mb-4 d-inline-block" href="index.html"><img class="img-fluid" src="{{asset('themeimage/logo-alt.png')}}" alt="Bexar"></a>
          <p class="text-light">Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut
            labore dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamaboris nisi ut aliquip.exea
            commodo consequat. Duis aute irure dolor in reprehenderit.</p>
          <p class="text-light mb-5">Deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
            error sit voluptatem.</p>
          <h4 class="text-white mb-4">Follow Us On</h4>
          <!-- social links -->
          <ul class="list-inline social-icon-alt">
            <li class="list-inline-item">
              <a class="hover-ripple" href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="hover-ripple" href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="hover-ripple" href="#"><i class="fa fa-linkedin"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="hover-ripple" href="#"><i class="fa fa-pinterest"></i></a>
            </li>
          </ul>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <!-- service list -->
            <div class="col-6 mb-5">
              <h4 class="text-white mb-4">Services</h4>
              <ul class="list-styled">
                <li class="mb-3 text-light"><a class="text-light d-block" href="about.html">Company History</a></li>
                <li class="mb-3 text-light"><a class="text-light d-block" href="about.html">About Us</a></li>
                <li class="mb-3 text-light"><a class="text-light d-block" href="contact.html">Contact Us</a></li>
                <li class="mb-3 text-light"><a class="text-light d-block" href="service.html">Services</a></li>
                <li class="mb-3 text-light"><a class="text-light d-block" href="privacy-policy.html">Privacy Policy</a></li>
              </ul>
            </div>
            <!-- contact info -->
            <div class="col-6 mb-5">
              <h4 class="text-white mb-4">Contact Info</h4>
              <ul class="list-unstyled">
                <li class="text-light mb-3">9567 Turner Trace Apt. 466 North Willie, BC C3G8A4</li>
                <li class="text-light mb-3">+21 123 456 5523 </li>
                <li class="text-light mb-3">info@bexar.com</li>
              </ul>
            </div>
            <!-- newsletter -->
            <div class="col-12">
              <h4 class="text-white mb-4">Subscribe Newsletter</h4>
              <form action="#">
                <div class="position-relative">
                  <input type="email" class="form-control border-0 text-white newsletter-form" id="newsletter" name="newsletter"
                    placeholder="Enter your email">
                  <button type="submit" class="btn btn-primary btn-subscribe">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="bg-secondary-darken py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
          <p class="mb-0 text-white"><span class="text-primary">Bexar</span> &copy; <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> All Right Reserved</p>
        </div>
        <div class="col-md-6 text-center text-md-right">
          <ul class="list-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block px-3 text-white border-right" href="terms-conditions.html">Terms of Service</a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block px-3 text-white" href="privacy-policy.html">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{asset('theme/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('theme/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{asset('theme/slick.min.js')}}"></script>
<!-- aos -->
<script src="{{asset('theme/aos.js')}}"></script>
<!-- venobox popup -->
<script src="{{asset('theme/venobox.min.js')}}"></script>
<!-- Modernizer -->
<script src="{{asset('theme/modernizr.min.js')}}"></script>
<!-- filter -->
<script src="{{asset('theme/Jquery.filterizer.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="{{asset('theme/gmap.js')}}"></script>

<!-- Main Script -->
<script src="{{asset('theme/script.js')}}"></script>

</body>
</html>