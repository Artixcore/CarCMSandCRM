@extends('admin.master')

@section('content')
<div class="container py-4">
    <div class="card-body">
        <form method="post" action="#" enctype="multipart/form-data"> 
            @csrf
            <div class="form-group">
                <textarea class="form-control" id="summary-ckeditor" name="wysiwyg-editor"></textarea>
            </div>
        </form>
    </div>
</div>
@endsection 
@section('footer_js')
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor', {
        filebrowserUploadUrl: "{{url('admin/upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    </script>
@endsection