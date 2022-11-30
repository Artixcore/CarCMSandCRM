@extends('admin.master')

@section('content')
<div class="container py-4">
    <div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">SL.</th>
                <th scope="col">Car Company</th>
                <th scope="col">Car Model</th>
                <th scope="col">Car Type</th>
                <th scope="col">User Name</th>
                <th scope="col">User Mobile No.</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

                @php
                    $insurance = App\Warrenty::paginate(5);
                @endphp

        @foreach ($insurance as $key=> $item)
        <tr>
            <td> {{$insurance->firstItem()+$key}} </td>
            <td> {{$item->car_company}} </td>
            <td> {{$item->car_model }} </td>
            <td> {{$item->car_type }} </td>
            <td> {{$item->your_name }} </td>
            <td> {{$item->mobile_no}}</td>
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