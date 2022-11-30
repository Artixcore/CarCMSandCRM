@extends('layouts.app')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row"> 
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Get the lowest loan interest rate for COE renewal</h1>
          <form method="POST" action="{{ url('save-coe') }}">
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
          <img src="{{ asset('car/main.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Get Your COE Renewal Loan in 4 Simple Steps</h2>
        </div>

        <div class="row content"> 
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="150">
            <ul>
              <li><i class="ri-check-double-line"></i> <b>Submit Your Details</b> Provide us with the required details from <b><a href="https://vrl.lta.gov.sg/lta/vrl/action/pubfunc?ID=EnquireRebateBeforeDeReg">LTA</a></b> to extract the basic information of your car.</li>
              <li><i class="ri-check-double-line"></i> <b>Motor Insurance</b> We help buyers apply for motor insurance and refund the balance for sellers.</li>
              <li><i class="ri-check-double-line"></i> <b>Payments</b> We facilitate the payment process to ensure a smooth and transparent transaction.</li>
              <li><i class="ri-check-double-line"></i> <b>Ownership Transfer</b> We oversee the entire LTA vehicle transfer process to prevent any hiccups.</li>
            </ul>
          </div>
          <div class="col-lg-5 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p><b>
                We will handle all the necessary paperwork for both buyer and seller. Just send us the completed Sales & Purchase Agreement, and we’ll settle the rest. We help both parties with loans, insurance, payments and LTA ownership transfer.
            </b>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

</main><!-- End #main -->
@endsection
