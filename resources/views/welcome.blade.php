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
          <h1 data-aos="fade-up">Simplifying Vehicle Ownership through Smart Solutions</h1>
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
          <h2>What We Can Do For You</h2>
        </div>

        <div class="row content">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="150">
            <ul>
              <li><i class="ri-check-double-line"></i> <b>Car Loans</b> We help buyers apply for car loans and settle any outstanding loans for sellers.</li>
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

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="assets/img/counts-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
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
            <div class="centerize">
              <div class="faq">
              
                <details>
                  <summary>How will my car be sold?</summary>
                  <p>
                    When you sell your car through Us, you'll enjoy a hassle-free car selling experience with no hidden fees.
                    <br/>
      Here’s how it works:
      <br/>
      Step 1 After verifying your details, we will put your car up on Singapore's largest car auction network of over 1,000 trusted dealers.
      <br/>
      Step 2 Our trusted network of dealers will then bid for your car. In just 24hrs, you will be notified of the highest bid that was received.
      <br/>
      Step 3 If you are happy with the offer, we will help schedule a viewing/inspection together with the dealer.
      <br/>
      But if the offer doesn’t meet your expectations, no pressure. You can choose not to sell your car and walk away, penalty-free!
      <br/>
      Our Car Auctions are conducted on weekdays from 10am to 4pm, and you’ll be guaranteed the best price every day.
      <br/>
      Are you a Car Dealer?
      <br/>
      If you are interested in joining our dealer network, please email us  </p>
                </details>
                <details>
                  <summary>Where will the viewing take place?</summary>
                  <p>
                    The viewing and inspection of your car will take place at either:
      <br/>
      1) Carro Lounge
      28 Sin Ming Lane, #01-134 Midview City, Singapore, 573972
      <br/>
      2) Carro Care Workshop
      160 Sin Ming Drive, #03-05 Sin Ming AutoCity, Singapore 575722</p>
                </details>
                <details>
                  <summary>Does we do engine overhauls?</summary>
                  <p>
                    Hello there! Our Care Workshop does offer engine overhaul services. However, this depends on the particular car's make and model! If you need car maintenance help, our expert mechanics will assist you every step of the way.
                  </p>
                 </details>
            
              </div>
            </div>
          </div>
        </section><!-- End F.A.Q Section -->
    
    



  </main><!-- End #main -->

 
@endsection
