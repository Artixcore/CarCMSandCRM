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
                $sells = App\Sell::paginate(5);
              @endphp 
        @foreach ($sells as $key=> $item)
        <tr>
            <td> {{$sells->firstItem()+$key}} </td>
            <td> {{$item->your_name}} </td>
            <td> {{$item->vehicle_no }} </td>
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