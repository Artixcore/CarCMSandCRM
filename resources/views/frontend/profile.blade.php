@extends('layouts.app')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row"> 
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Simplifying Vehicle Ownership through Smart Solutions</h1>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{ asset('user')}}/{{ Auth::user()->avatar }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
 
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="#" data-bs-toggle="modal" data-bs-target="#carsell">Sell your Car</a></h4>
              <p class="description">Sell your Car with us with a Big Price.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

  
  </main><!-- End #main -->


<!-- Modal -->
<div class="modal fade" id="carsell" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Car Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="{{url('car-sell-post')}}" enctype="multipart/form-data">
      @csrf

      <div class="modal-body">
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
            <select name="transmission" class="form-control">
              <option selected>Transmission</option>
              <option value="Automatic">Automatic</option>
              <option value="Manula">Manual</option>
            </select>
          </div>
          <div class="col">
            <select name="purchase_from" class="form-control">
              <option selected>Purchase From</option>
              <option value="Authorized Agent">Authorized Agent</option>
              <option value="Parallet Importer">Parallet Importer</option>
            </select>
          </div>
          <div class="col">
            <select name="accident_free" class="form-control">
              <option selected>Accident Free</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
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
            <input type="text" class="form-control" placeholder="Owner ID Type" name="owner_id_type">
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
  </div>
</div> 
@endsection
