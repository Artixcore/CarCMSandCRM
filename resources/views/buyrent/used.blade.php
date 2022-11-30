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
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{ asset('public/car/main.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= More Services Section ======= -->
    <section id="more-services" class="more-services">
      <div class="container">
        <div class="row">
          @php
            $allcars = App\CarSell::paginate(4);
          @endphp
        @foreach ($allcars as $key => $cars)
        {{-- @foreach (App\CarSell::paginate(4) as $key => $cars) --}}
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card">

              @foreach($allcars as $image)
                  <?php foreach (json_decode($image->images)as $picture) { ?>
                      <img src="{{ asset('public/asset/cars/'.$picture) }}" class="d-block w-100">
                 
                      <?php break;} ?>

              @endforeach

              <div class="card-body">
                <h5 class="card-title"><a href="{{url('cars')}}/{{$cars->model_name}}">{{$cars->model_name}}</a></h5>
                <p class="card-text">{{ $cars->description }}</p>
                <div class="read-more"><a href="#"> {{$cars->price}} </a></div>
              </div>
            </div>
        </div>
        @endforeach 
        </div>
      </div>
    </section><!-- End More Services Section -->

    
 
    <!-- ======= F.A.Q Section ======= -->
    <section id="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Frequently Asked Questions</h2>
        </div>
        <div class="centerize">
          <div class="faq">
          
            <details>
              <summary>Can I view the car first before making an offer?</summary>
              <p>We can only arrange for a viewing after the owner accepts your offer.</p>
            </details>
            <details>
              <summary>What is a minimum bid increment?</summary>
              <p>The minimum bid increment has to be $500 more than the previous offer.</p>
            </details>
            <details>
              <summary>What happens after I have made an offer? Am I obligated to purchase the car?</summary>
              <p>We will contact you to confirm your offer and to answer any questions you may have. We will then relay your offer to the seller. If the seller is keen, we will set an appointment for you to view the vehicle. There is no legal obligation to purchase the car. If the buyer retracts their offer without a valid reason, we will ban the buyer from our platform.</p>
            </details>
            <details>
            <summary>I'm not satisfied with the condition of the car after viewing. Can I retract or revise my offer?</summary>
              <p>If the condition of the vehicle does not meet the description in the listing, a lower offer can be negotiated. If the buyer retracts or revises their offer without a valid reason, we will ban the buyer from our platform.</p>
            </details>
            <details>
            <summary>Do I have to pay a purchase fee when buying a car from US?</summary>
            <p>Yes. A small purchase fee will be charged if you successfully purchase a pre-owned car from us.</p>
            </details>
            <details>
            <summary>Will I be protected under Lemon Law?</summary>
            <p>Lemon Law does not cover purchases from direct owners. For a greater peace of mind, we recommend sending the car for an evaluation first. Motorist has partnered VFIT by VICOM to assist car buyers with their car evaluation requests. VFIT will provide a complete vehicle report after the evaluation. Please inform us if you are interested in a car evaluation.</p>
            </details>
            <details>
            <summary>May I apply for a loan to purchase a used car?</summary>
            <p>Yes, you can. We offer flexible and competitive loan options (bank and in-house) for your used car purchase. We can also assist you with your motor insurance policy. If you require a loan or insurance for your car, simply let us know.</p>
            </details>
            <details>
            <summary>What if I have a car to trade-in/that I need to sell first?</summary>
            <p>We will put your car through our in-housing bidding system to help you find the highest price for your vehicle. Once the bidding is complete, we will deliver the highest offer for your car. You can use that amount to offset your purchase.</p>
            </details>
          </div>
        </div>
      </div>
    </section><!-- End F.A.Q Section -->


  </main><!-- End #main -->

 
@endsection
