@extends('admin.master')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach (App\Contact::paginate() as $item)
                
                  <tr>
                    <th scope="row">1</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->subject }}</td>
                    <td>{{ $item->message }}</td>
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
