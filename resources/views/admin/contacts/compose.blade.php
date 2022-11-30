@extends('admin.master')

@section('content')
<div class="container py-4">
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                    <form action="{{url('compose-mail')}}" method="POST"> 
                      @csrf
                      <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                      </div>
                      <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                      </div>
                      <div class="mb-3">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                      </div>
                      <div class="mb-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                      </div>
                      <button class="btn btn-outline-success" type="submit">Send Message</button>
                    </form>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection
