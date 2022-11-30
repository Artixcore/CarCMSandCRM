@extends('layouts.app')
@section('style_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <style>
@import url("https://fonts.googleapis.com/css2?family=Bona+Nova&family=Lobster+Two&family=Ubuntu+Condensed&display=swap");
:root {
  --font1:"Bona Nova";
  --font2:"Ubuntu Condensed";
  --font3:"Lobster Two";
  font-size: 1.2rem;
}

* {
  box-sizing: border-box;
}

.centerize {
  display: grid;
  justify-items: center;
  min-height: calc(100vh - 128px); 
}

.faq {
  padding: 3rem;
  color: #333;
}

h1 {
  font-size: 2.5rem;
  font-weight: bold;
  margin-bottom: 2rem;
  font-family: var(--font1);
}

details {
  max-width: 28rem;
}

details > summary {
  padding: 8px;
  padding-left: 2.2rem;
  border: none;
  cursor: pointer;
  list-style-position: inside;
  border-bottom: 2px solid darkblue;
  position: relative;
  display: block;
  transition: all 1s;
  font-family: var(--font1);
}

details[open] > summary {
  color: skyblue;
  background-color: darkblue;
  border-bottom: 2px solid skyblue;
}

details > p {
  padding: 8px;
  border-bottom: 2px solid skyblue;
  line-height: 2rem;
  font-family: var(--font2);
}

summary:before {
  content: "";
  border-width: 0.4rem;
  border-style: solid;
  border-color: transparent transparent transparent darkblue;
  position: absolute;
  top: 0.6rem;
  left: 1rem;
  transform: rotate(0);
  transform-origin: 0.2rem 50%;
  transition: 0.25s transform ease;
}

details summary::-webkit-details-marker {
  display: none;
}

details[open] > summary:before {
  transform: rotate(90deg);
  border-color: transparent transparent transparent skyblue;
}


  </style>
@endsection

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row"> 
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Just 1 Day To Get COE Car Loan In Singapore</h1>
          <small>* Documents required: ID, Salary Proof, Sales & Purchase Agreement.<br/>
          We Will Contact you after Submit the Form.
          </small><br/> 
          @if ($message = Session::get('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
            <form method="POST" action="{{url('applied')}}">
              @csrf
            <div class="mb-3">
              <input type="text" name="your_name" class="form-control" placeholder="Your Name.">
            </div>
            <div class="mb-3">
              <input type="text" name="mobile_no" class="form-control" placeholder="Phone Number">
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <button type="submit" class="btn btn-outline-primary">Apply Now!</button>
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
          <h2>Why Choose Us?</h2>
          <p>Best Financing Options with Financial Services!</p>

        </div>

        <div class="row content">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="150">
            <ul>
              <li><i class="ri-check-double-line"></i> <b>From 2.88% Interest rate.</b> </li>
              <li><i class="ri-check-double-line"></i> <b>1 Day Loan approval.</b></li>
              <li><i class="ri-check-double-line"></i> <b>Up to 7 years Loan tenure.</b></li>
              <li><i class="ri-check-double-line"></i> <b>Member of Hire Purchase Association, Finance and Leasing Association of Singapore.</b></li>
            </ul>
          </div>
          <div class="col-lg-5 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p><b>
                Enjoy a fast and hassle-free service with low-interest rates and full paperwork settlement when you get a loan from us!
            </b>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Why Should You Choose Us?</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Singapore’s Most Trusted Platform</a></h4>
              <p class="description">Our 4.9/5 stars on both Facebook and Google Review can't be wrong. We also transact the most number of cars in Singapore, handling an average of 500 cases each month.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Safe and Secure</a></h4>
              <p class="description">We remain neutral to assist both parties to reach a mutually satisfactory transaction. Any disputes or disagreements will be mediated to ensure fairness and transparency.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Seamless and Convenient</a></h4>
              <p class="description">We will oversee the entire vehicle ownership transfer process from start to finish. From bank loans to paperwork settlement, we ensure a seamless transfer for both buyer and seller.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Flexible and Competitive Options</a></h4>
              <p class="description">We offer flexible and competitive loan options (bank and in-house) for your car purchase. We can even help you find a cheaper insurance policy from multiple insurers.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->




        <!-- ======= F.A.Q Section ======= -->
        <section id="faq">
          <div class="container">
    
            <div class="section-title" data-aos="fade-up">
              <h2>Frequently Asked Questions</h2>
            </div>
            <div class="container">
             <div class="card">
                <div class="card-header"> Q1: How long does it take to get a loan to renew? </div>
                <div class="card-body">
                    Traditionally, renewing COE loan in Singapore will take a few days. But with our sister company, Genie Financial Services, your loan can be approved in just 1 day!
                    If you decide to get your loan from our financial partners, loan approval will take about 2 - 3 days.
                </div>
             </div>
            <p></p>
            <div class="card">
                <div class="card-header"> Q2: Who are your partnering banks? </div>
                <div class="card-body">
                    We are currently working with several partners such as DBS, OCBC and Maybank to bring a whole range of services to our customers. These include loans for pre-owned cars, new cars and more.
                </div>
            </div>
            <p></p>
            <div class="card">
                <div class="card-header"> Q3: What do I have to prepare for my loan application? </div>
                <div class="card-body">
                    The documents required for your loan are:<br/>
                    * Loan Application Form (Information of Hirer + Employment Details + Signature).
                    * Copy of NRIC (Front & Back).<br/>
                    * Income Documents. <br/>
                    * Last 2 years Notices of Assessment.<br/>
                    * Latest 12 Months CPF Contribution Statement or 3 month Bank Statement if self-employed.<br/>
                    * Copy of Enquire PARF/COE Rebate for Registered Vehicle.<br/>
                    * An additional Vehicle Sales Agreement
                </div>
            </div>
            <p></p>
            <div class="card">
                <div class="card-header"> Q4: What do I have to do for my loan application? </div>
                <div class="card-body">
                    Fill out a simple form with your details. <br/>
                    * Submit all required documents via email <br/>
                    * After submitting your documents, it will only take 1 day to have your loan approved. Our team of experienced financing experts will then facilitate the entire process and handle all the paperwork for you!
                </div>
            </div>
            <p></p>
            <div class="card">
                <div class="card-header"> Q5: How much does it cost to process my loan? </div>
                <div class="card-body">
                    The processing fee for your loan application is between $350 to $400.
                </div>
            </div>
            </div>
          </div>
        </section><!-- End F.A.Q Section -->
    
    



  </main><!-- End #main -->

 
@endsection
