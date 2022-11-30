<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta content="Admin Panel with Laravel" name="description">
    <meta content="admin panel" name="keywords">
    @yield('meta')
    <!-- Scripts -->
 
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('style_css')
    <!-- Styles -->
      <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

</head>
<body>
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
      <h1><a href="/">{{ config('app.name', 'Laravel') }}</a></h1>
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{url('buy')}}"><span>Buy</span></a></li>

        <li><a href="{{url('sell')}}"><span>Sell</span></a></li>

        <li><a href="{{url('insurance')}}"><span>Insurance</span></a></li>
 
        <li class="dropdown"><a href="{{url('finance')}}"><span>Finance</span></a>
          {{-- <ul>
            <li><a href="{{ url('used-car') }}">Used Car</a></li>
            <li><a href="{{ url('coe-renewal') }}">CEO renewal</a></li>
          </ul> --}}
        </li>
          <li class="dropdown"><a href="{{url('about-us')}}"><span>About Us</span></a></li>
       
          <li class="dropdown"><a href="{{url('/')}}/#contact"><span>Contact Us</span></a></li>
        @guest
  <li>
      <a href="{{ route('login') }}">{{ __('Login') }}</a>
  </li>
  @if (Route::has('register'))
      <li>
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      </li>
  @endif 
@else
<li class="dropdown"><a href="#"><span>Manu</span> <i class="bi bi-chevron-down"></i></a>
  <ul>
          @can('manage-users')
          @if (Auth::user()->urole == 'admin')
          <li>  <a href="{{ route('admin.users.index') }}">
              Admin
          </a>
          @elseif (Auth::user()->urole == 'superadmin')
         <a href="{{ route('superadmin.users.index') }}">
              Superadmin
          </a></li>
          @else
          LOL
          @endif
          @endcan
         <li> <a href="{{ url('profile') }}/{{Auth::user()->name}}">Profile </a></li>
      <li>    <a href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
  </li>
</ul>
</li>
@endguest
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header>
<!-- End Header -->



 
    @yield('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3>MetroCar</h3>
              {{-- <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p> --}}
              <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="ri-map-pin-line"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div>
                <i class="ri-mail-send-line"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="ri-phone-line"></i>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="{{url('contact-us')}}" method="POST"> 
              @csrf
              <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>
              <div class="mb-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <button class="btn btn-outline-success" type="submit">Send Message</button>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

     <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Al Raji Co.</strong>. All Rights Reserved
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="{{url('/')}}" class="scrollto">Home</a>
            <a href="{{url('about-us')}}" class="scrollto">About</a>
            <a href="{{url('privacy')}}">Privacy Policy</a>
            <a href="{{url('terms')}}">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
    @yield('footer_js')
    <a href="https://wa.me/+8801725458735" title="WhatsApp" target="_blank" class="back-to-top d-flex align-items-center justify-content-center" style="color: rgb(84, 233, 176); background-color:rgb(29, 173, 101);"><i class="fab fa-whatsapp-square fa-3x"></i></a>
    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
