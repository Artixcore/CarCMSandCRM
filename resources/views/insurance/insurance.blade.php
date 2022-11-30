@extends('layouts.app')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row"> 
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Find the best car insurance coverage at the most affordable price</h1>
          <form method="POST" action="{{url('save-insurance')}}">
            @csrf
            <div class="mb-3">
              <input type="text" class="form-control" name="vehicle_no" placeholder="Vehicle Plate No.">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="your_name" placeholder="Your Name">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="mobile_no" placeholder="Mobile No.">
            </div>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
          </form>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{ asset('public/car/main.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients clients">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ asset('assets/img/clients/client-1.png')}}" class="img-fluid" alt="" data-aos="zoom-in">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ asset('assets/img/clients/client-2.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ asset('assets/img/clients/client-3.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ asset('assets/img/clients/client-4.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ asset('assets/img/clients/client-5.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ asset('assets/img/clients/client-6.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500">
          </div>

        </div>

      </div>
    </section>
    <!-- End Clients Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Get Your Motor Insurance in 3 Simple Steps</h2>
        </div>

        <div class="row content">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
            <ul>
              <li><i class="ri-check-double-line"></i> <b>Submit Your Details</b> Provide us with the required details from <b><a href="https://vrl.lta.gov.sg/lta/vrl/action/pubfunc?ID=EnquireRebateBeforeDeReg">LTA</a></b> to extract the basic information of your car.</li>
              <li><i class="ri-check-double-line"></i> <b>Receive Quotes in 24 Hours</b> After sourcing from our insurance partners, we will provide you with the most affordable plan.</li>
              <li><i class="ri-check-double-line"></i> <b>Purchase Insurance</b> Make payment online and we will purchase your selected plan on your behalf.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">
          {{-- <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="assets/img/counts-img.svg" alt="" class="img-fluid">
          </div> --}}

          <div class="col-xl-12 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-3 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Happy Clients</strong> </p>
                  </div>
                </div>

                <div class="col-md-3 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="850" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Served</strong> </p>
                  </div>
                </div>

                <div class="col-md-3 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Years of experience</strong></p>
                  </div>
                </div>

                <div class="col-md-3 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Certified Automotive Partners</strong> </p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>
    <!-- End Counts Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Why Should You Get Insured With Us?</h2>
          {{-- <p>We Provide </p> --}}
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Singapore's Most Trusted Platform</a></h4>
              <p class="description">Our 4.9/5 stars on both Facebook and Google Review can’t be wrong. We handle over $100,000 worth of insurance premiums each month</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">0% Interest Free Instalments</a></h4>
              <p class="description">Enjoy 0% interest free instalments when you renew your motor insurance with us. Both 6 and 12 month instalment plans are available.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Seamless and Convenient</a></h4>
              <p class="description">Instead of asking different insurance companies for quotes, we help you select the best and most affordable motor insurance for your driving needs.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Transparent and Flexible</a></h4>
              <p class="description">We understand if you have doubts. That is why we made it our promise to never force a sale on our customers. If you are uncertain and require more time to decide, simply let us know!</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


  </main><!-- End #main -->
@endsection
