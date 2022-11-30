@extends('admin.master')

@section('content')
<div class="container py-4">
    <div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">SL.</th>
                <th scope="col">Owner ID Type</th>
                <th scope="col">Owner ID No.</th>
                <th scope="col">Owner Name</th>
                <th scope="col">Owner Mobile No.</th>
                <th scope="col">Owner Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              @php
                $loan = App\CarInput::paginate(5);
              @endphp

        @foreach ($loan as $key=> $item)
        <tr>
            <td> {{$loan->firstItem()+$key}} </td>
            <td> {{$item->owner_id_type}} </td>
            <td> {{$item->owner_id_no}} </td>
            <td> {{$item->owner_name}} </td>
            <td> {{$item->owner_mobile_no}} </td>
            <td> {{$item->owner_email}} </td>
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