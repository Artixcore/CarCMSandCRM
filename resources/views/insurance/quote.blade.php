@extends('layouts.app')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row"> 
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Find the best car insurance coverage at the most affordable price</h1>
      
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{ asset('public/car/main.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

 
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Receive an accurate quote</h2>
          <p>Your insurance quotation will be obtained from our panel of insurers. Please ensure the information provided is accurate for a seamless process. Providing false information to receive a lower premium may result in the cancellation of the policy.</p> 
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ $message }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
      <form action="{{url('full-insurance')}}" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-3">
            <div class="mb-3">
              <label class="form-label">Owner's ID Type</label>
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
            <div class="mb-3">
              <label class="form-label">Owner's ID No.</label>
              <input type="text" class="form-control" name="owner_id_no" placeholder="Owner ID No.">
            </div>
            <div class="mb-3">
              <label class="form-label">Owner's Name</label>
              <input type="text" class="form-control" name="name" placeholder="Owner Name">
            </div>
            <div class="mb-3">
              <label class="form-label">Owner's Mobile No.</label>
              <input type="text" class="form-control" name="mobile" placeholder="Owner Mobile No.">
            </div>
            <div class="mb-3">
              <label class="form-label">Owner's Email</label>
              <input type="text" class="form-control" name="email" placeholder="Owner's Email">
            </div>
          </div>

          <div class="col-md-3">
            <div class="mb-3">
              <label class="form-label">Owner's Vehicle Plate No.</label>
              <input type="text" class="form-control" name="vehicle_plate_no" placeholder="Owner's Vehicle Plate No.">
            </div>
            <div class="mb-3">
              <label class="form-label">Insurance Coverage</label>
              <input type="text" class="form-control" name="insurance_coverage" placeholder="Insurance Coverage">
            </div>
            <div class="mb-3">
              <label class="form-label">Renewal NDC</label>
              <input type="text" class="form-control" name="renewal_ndc" placeholder="Renewal NDC">
            </div>
            <div class="mb-3">
              <label class="form-label">Current Insurance</label>
              <input type="text" class="form-control" name="current_insurance" placeholder="Current Insurance">
            </div>
            <div class="mb-3">
              <label class="form-label">Current Renewal Premium</label>
              <input type="text" class="form-control" name="current_renewal_premium" placeholder="Current Renewal Premium">
            </div>
          </div>

          <div class="col-md-3">
            <div class="mb-3">
              <label class="form-label">Driver's Name</label>
              <input type="text" class="form-control" name="driver_name" placeholder="Driver's Name">
            </div>
            <div class="mb-3">
              <label class="form-label">Driver's ID No</label>
              <input type="text" class="form-control" name="driver_id_no" placeholder="Driver ID No.">
            </div>
            <div class="mb-3">
              <label class="form-label">Driver's Date of Birth</label>
              <input type="date" class="form-control" name="driver_date_of_birth" placeholder="Driver's Date of Birth">
            </div>
            <div class="mb-3">
              <label class="form-label">Driver's License Pass Date</label>
              <input type="text" class="form-control" name="driver_license_pass_date" placeholder="Driver's License Pass Date">
            </div>
            <div class="mb-3">
              <label class="form-label">Driver's Gender</label>
              {{-- <input type="text" class="form-control" name="driver_gender" placeholder="Driver's Gender"> --}}
              <select name="driver_gender" class="form-control">
                <option selected>Select One.</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label class="form-label">Driver's Marital Status</label>
              <input type="text" class="form-control" name="driver_marital_status" placeholder="Driver's Marital Status">
            </div>
            <div class="mb-3">
              <label class="form-label">Driver's Occupation</label>
              <input type="text" class="form-control" name="driver_occupation" placeholder="Driver's Occupation">
            </div>
            <div class="mb-3">
              <label class="form-label">Driver's Nationality</label>
              <input type="text" class="form-control" name="driver_nationality" placeholder="Driver's Nationality">
            </div>
            <div class="mb-3">
              <label class="form-label">Driver's Relation</label>
              <input type="text" class="form-control" name="driver_relationship" placeholder="Driver Relation">
            </div>
          </div>
  
          <div class="col-md-3">
            <div class="mb-3">
              <label class="form-label">Owner's Date of Birth</label>
              <input type="date" class="form-control" name="date_of_birth" placeholder="Owner's Date of Birth">
            </div>
            <div class="mb-3">
              <label class="form-label">Owner's License Passing Date</label>
              <input type="date" class="form-control" name="license_pass_date" placeholder="Owner's License Passing Date">
            </div>
            <div class="mb-3">
              <label class="form-label">Owner's Gender</label>
              <select name="gender" class="form-control">
                <option selected>Select One.</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Owner's Marital Status</label>
              <input type="text" class="form-control" name="marital_status" placeholder="Owner's Marital Status">
            </div>
          </div>
          
        </div>
        <button class="btn btn-outline-success btn-lg" type="submit" style="float: right;">Save</button>
      </form>
      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
@endsection
