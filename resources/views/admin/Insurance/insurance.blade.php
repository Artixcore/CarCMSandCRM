@extends('admin.master')

@section('content')
<div class="container py-4">
    <div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
              <tr>
                 <th scope="col">SL.</th>
                 <th scope="col">Name</th>
                <th scope="col">Vehicle Plate No.</th>
                <th scope="col">Mobile No.</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

                @php
                    $insurance = App\Insurance::paginate(5);
                @endphp

        @foreach ($insurance as $key=> $item)
        <tr>
            <td> {{$insurance->firstItem()+$key}} </td> 
            <td> {{$item->driver_name}} </td>
            <td> {{$item->vehicle_plate_no }} </td>
            <td> {{$item->mobile}}</td>
            <td>
            
            </td>
        </tr>
        @endforeach
            </tbody>
          </table>
    </div>
    </div>
</div>   
@endsection     