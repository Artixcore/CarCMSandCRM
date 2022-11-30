@extends('layouts.app')
@section('content')
@foreach ($cars as $car)

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row"> 
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">{{$car->model_name}}</h1>

        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          @foreach($cars as $image)
          <?php foreach (json_decode($image->images)as $picture) { ?>
              <img src="{{ asset('public/asset/cars/'.$picture) }}" class="img-fluid animated" alt="">
         
              <?php break;} ?>
          @endforeach
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
          <div class="container">
    
            <div class="section-title" data-aos="fade-up">
              <h2>{{$car->model_name}}</h2>
            </div>
    
            <div class="row content">
              <div class="col-lg-7" data-aos="fade-up" data-aos-delay="150">
                <ul>
                  <li><i class="ri-check-double-line"></i> <b>Registration Date:</b> {{$car->registration_date}}.</li>
                  <li><i class="ri-check-double-line"></i> <b>Ownership:</b> {{$car->ownership}}.</li>
                  <li><i class="ri-check-double-line"></i> <b>Mileage:</b> {{$car->mileage}}.</li>
                  <li><i class="ri-check-double-line"></i> <b>Vehicle Scheme:</b> {{$car->vehicle_scheme}}.</li>
                </ul>
              </div>
              <div class="col-lg-5 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <h5>Description:</h5>
                <p><b>
                   {{ $car->description }}
                </b>
                </p>
              </div>
            </div>
    
          </div>
        </section><!-- End About Us Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Photos</h2>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">



          @foreach($cars as $image)
          <?php foreach (json_decode($image->images)as $picture) { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('public/asset/cars/'.$picture) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="{{ asset('public/asset/cars/'.$picture) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->



  </main><!-- End #main -->

   
@endforeach
@endsection
