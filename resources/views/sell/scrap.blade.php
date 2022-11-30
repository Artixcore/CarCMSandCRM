@extends('layouts.app')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">


    <div class="container py-4">
      <div class="row"> 
        <div class="col-lg-6 pt-5 py-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Singapore’s BEST Scrap/Export Car Platform</h1>
          @if ($message = Session::get('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          <form method="POST" action="{{url('car-sell-post')}}" enctype="multipart/form-data"> 
            @csrf
      
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="vehicle plate no" name="vehicle_plate_no">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Mileage" name="mileage">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Ask Price" name="ask_price">
                </div>
              </div>

              <div class="row mt-3">
                <div class="col">
                  <label>
                    Transmission
                  </label>
                </div>
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" name="transmission" type="checkbox" value="Automatic" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Automatic
                    </label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" name="transmission" type="checkbox" value="Manual" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                     Manual
                    </label>
                  </div>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col">
                  <label>
                    Purchase From
                  </label>
                </div>
                <div class="col">

                  <div class="form-check">
                    <input class="form-check-input" name="purchase_from" type="checkbox" value="Authorized Agent" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Authorized Agent
                    </label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" name="purchase_from" type="checkbox" value="Parallet Importer" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Parallet Importer
                    </label>
                  </div>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col">
                  <label>
                    Accident Free
                  </label>
                </div>
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" name="accident_free" type="checkbox" value="Yes" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Yes
                    </label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" name="accident_free" type="checkbox" value="Yes" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Yes
                    </label>
                  </div>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col">
                  <textarea type="text" class="form-control" placeholder="Condition." name="condition"></textarea>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <input type="file" type="image/*" class="form-control" name="images[]" multiple>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <select class="form-control" name="owner_id_type">
                    <option value="Business (e.g. 51234567M)">Business (e.g. 51234567M)</option>
                    <option value="Club/Association/Organisation (e.g. T08PQ1234A)">Club/Association/Organisation (e.g. T08PQ1234A)</option>
                    <option value="Company (e.g. 198912345K)">Company (e.g. 198912345K)</option>
                    <option value="Foreign Company (e.g. T08FC1234A)">Foreign Company (e.g. T08FC1234A)</option>
                    <option value="Foreign Identification Number (e.g. F/G1234567N)">Foreign Identification Number (e.g. F/G1234567N)</option>
                    <option value="Foreign Passport (e.g. 12345678)">Foreign Passport (e.g. 12345678)</option>
                    <option value="Government (e.g. T08GA1234A)">Government (e.g. T08GA1234A)</option>
                    <option value="Limited Liability Partnership (e.g. T08LL1234A)">Limited Liability Partnership (e.g. T08LL1234A)</option>
                    <option value="Limited Partnership (e.g. T08LP1234A)">Limited Partnership (e.g. T08LP1234A)</option>
                    <option value="Malaysia NRIC (e.g. 200312345678)">Malaysia NRIC (e.g. 200312345678)</option>
                    <option value="Professional (e.g. T08PQ1234A)">Professional (e.g. T08PQ1234A)</option>
                    <option selected="selected" value="Singapore NRIC (e.g. S1234567D)">Singapore NRIC (e.g. S1234567D)</option>
                    <option value="Statutory Board (e.g. T08GB1234A)">Statutory Board (e.g. T08GB1234A)</option>
                  </select>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Owner ID No." name="owner_id_no">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Owner Name" name="owner_name">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Owner Mobile No" name="owner_mobile_no">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Owner Email" name="owner_email">
                </div>
              </div>
              </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
       
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{ asset('car/main.png')}}" class="img-fluid animated" alt="">
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



  </main><!-- End #main -->

 
@endsection
