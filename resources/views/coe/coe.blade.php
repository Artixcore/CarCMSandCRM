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
          <h1 data-aos="fade-up">Renew COE Car Loan Online</h1>
          <form>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Vehicle Plate No.">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Mobile No.">
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

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Why Choose Us?</h2>
          <h5> Best COE Financing Options with Genie Financial Services! </h5>
        </div>

        <div class="row content">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
            <ul>
              <li><i class="ri-check-double-line"></i> <b> $350m+ in loans underwritten </b></li>
              <li><i class="ri-check-double-line"></i> <b>Member of Hire Purchase Association, Finance and Leasing Association of Singapore.</b></li>
              <li><i class="ri-check-double-line"></i> <b>25+ year of industry experience</b>.</li>
              <li><i class="ri-check-double-line"></i> <b>Flexible car loan options.</b></li>
              <li><i class="ri-check-double-line"></i> <b>Partners with all major financial providers.</b></li>
              <li><i class="ri-check-double-line"></i> <b>Low-interest car loan rates.</b></li>
            </ul>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Just 1 Day To Get COE Car Loan In Singapore</h2>
          <h5> Enjoy a fast and hassle-free service with low-interest rates and full paperwork settlement when you get a COE renewal loan from us! </h5>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">From 2.88%
                Interest rate</a></h4>
              {{-- <p class="description">Our 4.9/5 stars on both Facebook and Google Review can't be wrong. We also transact the most number of cars in Singapore, handling an average of 500 cases each month.</p> --}}
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">1 Day
                Loan approval</a></h4>
              {{-- <p class="description">We remain neutral to assist both parties to reach a mutually satisfactory transaction. Any disputes or disagreements will be mediated to ensure fairness and transparency.</p> --}}
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Up to 7 years
                Loan tenure</a></h4>
              {{-- <p class="description">We will oversee the entire vehicle ownership transfer process from start to finish. From bank loans to paperwork settlement, we ensure a seamless transfer for both buyer and seller.</p> --}}
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
            <div class="centerize">
              <div class="faq">
              
                <details>
                  <summary>Q1: How long does it take to get a loan to renew my COE online?</summary>
                  <p>
                    Traditionally, renewing COE loan in Singapore will take a few days. But with our sister company, Genie Financial Services, your loan can be approved in just 1 day!
                    <br/> If you decide to get your loan from our financial partners, loan approval will take about 2 - 3 days.
                </p>
                </details>
                <details>
                <summary>Q2: Who are your partnering banks?</summary>
                <p>
                  We are currently working with several partners such as DBS, OCBC and Maybank to bring a whole range of services to our customers. 
                  <br/>These include loans for pre-owned cars, new cars and more.</p>
                </details>
                <details>
                  <summary>Q3: What do I have to prepare for my loan application?</summary>
                  <p>
                    The documents required for your loan are:
                    <br/>1. Loan Application Form (Information of Hirer + Employment Details + Signature)
                    <br/>2. Copy of NRIC (Front & Back)
                    <br/>3. Income Documents
                    <br/>4. Last 2 years Notices of Assessment
                    <br/>5. Latest 12 Months CPF Contribution Statement or 3 month Bank Statement if self-employed
                    <br/>6. Copy of Enquire PARF/COE Rebate for Registered Vehicle
                    7. An additional Vehicle Sales Agreement
                </p></details>
                <details>
                <summary>Q4: What do I have to do for my loan application?</summary>
                  <p>
                    3 Steps to get a COE car loan with Genie!
                  <br/> 1. Fill out a simple form with your details.
                  <br/> 2. Submit all required documents via email to loans@genie.sg or fax it to +65 6715 1519
                  <br/> 3. After submitting your documents, it will only take 1 day to have your loan approved. 
                  <br/>Our team of experienced financing experts will then facilitate the entire process and handle all the paperwork for you!
                  </p>
                </details>
                <details>
                <summary>Q5: How much does it cost to process my loan?</summary>
                <p> The processing fee for your loan application is between $350 to $400.</p>
                </details>
                          </div>
            </div>
          </div>
        </section><!-- End F.A.Q Section -->
    
    
  </main><!-- End #main -->

 
@endsection
