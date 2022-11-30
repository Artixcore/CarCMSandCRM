@extends('admin.master')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"> <!-- Button trigger modal -->
                    <a href="{{ url('admin/new') }}">
                      Add New Car
                    </a> </div>
                <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Image</th>
                    <th scope="col">Model</th>
                    <th scope="col">Price</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach (App\CarSell::paginate() as $item)
                
                  <tr>
                    <th scope="row">1</th>
                    <td>
                      <img src="{{asset('asset/cars', $item->images[1])}}">
                    </td>
                    <td>{{ $item->model_name }}</td>
                    <td>{{ $item->model_name }}</td>
                    <td>Edit</td>
                    <td>Delete</td>
                  </tr>

                @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </div>

    </div>
</div>

@endsection
