@extends('admin.master')

@section('content')
<div class="container py-4">
    <div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile No.</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              @php
                $loan = App\Loan::orderBy('id', 'DESC')->get();
              @endphp

        @foreach ($loan as $key=> $item)
        <tr>
            <td> {{$item->your_name}} </td>
            <td> {{$item->mobile_no}}</td>
            <td> {{$item->email }} </td>
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