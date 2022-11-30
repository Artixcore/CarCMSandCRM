@extends('admin.master')

@section('content')
<div class="container py-4">
<div class="card">
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{url('admin/save-car')}}">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-3">
                <label>Image</label>
                <input type="file" class="form-control-file" name="images[]" title="Image" multiple>
              </div>
              <div class="form-group col-md-3">
                <label>Car Model Name</label>
                <input type="text" class="form-control" name="model_name" placeholder="Car Model Name">
              </div>
              <div class="form-group col-md-3">
                <label>Registration Date</label>
                <input type="text" class="form-control" name="registration_date" placeholder="Registration Date">
              </div>
              <div class="form-group col-md-3">
                <label>Ownership</label>
                <input type="text" class="form-control" name="ownership" placeholder="Ownership">
              </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-4">
                  <label>Mileage</label>
                  <input type="text" class="form-control" name="mileage" placeholder="Mileage">
                </div>
                <div class="form-group col-md-4">
                  <label>Vehicle Scheme</label>
                  <input type="text" class="form-control" name="vehicle_scheme" placeholder="Vehicle Scheme">
                </div>
                <div class="form-group col-md-4">
                  <label>COE</label>
                  <input type="text" class="form-control" name="coe" placeholder="COE ">
                </div>
            </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                          <label>OMV</label>
                          <input type="text" class="form-control" placeholder="OMV" name="omv">
                        </div>
                        <div class="form-group col-md-3">
                          <label>ARF</label>
                          <input type="text" class="form-control" name="arf" placeholder="ARF">
                        </div>
                        <div class="form-group col-md-3">
                          <label>Minimum Parf</label>
                          <input type="text" class="form-control" name="minimum_parf" placeholder="Minimum Parf">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Paper Value</label>
                            <input type="text" class="form-control" name="paper_value" placeholder="Paper Value">
                          </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                              <label>Road Tax Expiry Data</label>
                              <input type="text" class="form-control" name="road_tax_expiry_data" placeholder="Road Tax Expiry Data">
                            </div>
                            <div class="form-group col-md-4">
                              <label>Vehicle Code</label>
                              <input type="text" class="form-control" name="vehicle_code" placeholder="Vehicle Code">
                            </div>
                            <div class="form-group col-md-4">
                              <label>Manufacturing Year</label>
                              <input type="text" class="form-control" name="manufacturing_year" placeholder="Manufacturing Year">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                  <label>Primary Color</label>
                                  <input type="text" name="primary_color" placeholder="Primary Color" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                  <label>Transmission</label>
                                  <input type="text" class="form-control" name="transmission" placeholder="Transmission">
                                </div>
                                <div class="form-group col-md-4">
                                  <label>Fuel Type</label>
                                  <input type="text" class="form-control" name="fuel_type" placeholder="Fuel Type">
                                </div>
                            </div>
                           
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                      <label>Engine Capacity</label>
                                      <input type="text" class="form-control" name="engine_capacity" placeholder="Engine Capacity">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label>Power</label>
                                      <input type="text" class="form-control" name="power" placeholder="Power">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label>Vehicle Attachment</label>
                                      <input type="text" class="form-control" name="vehicle_attachment" placeholder="Ownership">
                                    </div>
                                </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                      <label>Features</label>
                                      <textarea type="text" class="form-control" placeholder="Features" name="features"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Accessories</label>
                                      <textarea type="text" class="form-control" name="accessories" placeholder="Accessories"></textarea>
                                    </div>
                                </div> 
                                <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <label>Description</label>
                                          <textarea type="text" class="form-control" name="description" placeholder="Description"></textarea>
                                        </div>
                                    </div>   
                                    <div class="form-row">
                                      <div class="form-group col-md-12">
                                        <label>Price</label>
                                        <input type="text" class="form-control" name="price" placeholder="Price">
                                      </div>
                                  </div>                                             
            <button type="submit" class="btn btn-outline-success">Save</button>
          </form>
    </div>
</div>
</div>



@endsection