@extends('template')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script >
      $(function() {
      // Multiple images preview with JavaScript
      var previewImages = function(input, imgPreviewPlaceholder) {
          if (input.files) {
              var filesAmount = input.files.length;
              for (i = 0; i < filesAmount; i++) {
                  var reader = new FileReader();
                  reader.onload = function(event) {
                          $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                      }
                  reader.readAsDataURL(input.files[i]);
              }
          }
      };
          $('#photos').on('change', function() {
              previewImages(this, 'div.images-preview-div');
          });
      });
  </script>
  

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New Post</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('posts.index') }}"> Back</a>
        </div>
    </div>
</div>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<form enctype="multipart/form-data" action="{{ route('posts.store') }}" method="POST">
    @csrf
 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content:</strong>
                <textarea class="form-control" style="height:150px" name="content" placeholder="Content"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipe:</strong>
                <input type="text" name="tipe" class="form-control" placeholder="tipe">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Pelaksanaan:</strong>
                <input type="date" name="waktu_acara" placeholder="waktu_acara">    
            </div>
        </div>
        
        <div class="card"> 
            <style>
                .images-preview-div img
                {
                    padding: 10px;
                    max-width: 100px;
                }
            </style> 
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="file" name="photos[]" id="photos" placeholder="Choose photos" multiple="multiple" required>
                        </div>

                        @error('photos')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <div class="col-md-12">
                        <div class="mt-1 text-center">
                            <div class="images-preview-div"> </div>
                        </div>  
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection

