@extends('template.navbar')

@section('content')

<div class="container-fluid">
            <div class="row">
                <!-- personal info-->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title">Edit Informasi Kegaitan</h2>
                        </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="{{ route('posts.update',$post->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Nama Kegiatan</label>
                                        <div class="form-group">
                                            <input type="text" name="title" value="{{ $post->title }}" placeholder="Title" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Deskripsi Kegiatan</label>
                                        <div class="form-group">
                                            <textarea class="form-control" name="content" placeholder="Content" style="height:150px" >{{ $post->content }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Tipe Kegiatan</label>
                                        <div class="form-group">
                                            <input type="text" name="tipe" value="{{ $post->tipe }}" placeholder="Tipe" class="form-control">    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Atur Tanggal Kegiatan :</label>
                                        <input type="date" name="waktu_acara" value="{{ $post->waktu_acara }}" placeholder="waktu_acara">    
                                    </div>
                                </div>
                                {{-- <input type="file" id="photos" name="photos[]" placeholder="Choose photos" multiple="multiple" required> --}}
                
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" name="photos[]" id="photos" placeholder="Choose photos" multiple="multiple" required>
                                    </div>
            
                                    @error('photos')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div> --}}
                                {{-- <div class="card"> 
                                    <style>
                                        .images-preview-div img
                                        {
                                            padding: 10px;
                                            max-width: 100px;
                                        }
                                    </style> 
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
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
                                        {{-- </div>
                                    </div> --}}
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                            <div class="clearfix"></div>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
                {{-- <input type="file" id="photos" name="photos[]" placeholder="Choose photos" multiple="multiple" required>
                <button type="submit" class="btn btn-primary pull-right">Simpan</button> --}}
                <!-- end of data -->
                <!-- tabel -->
            </div>
</div>
@endsection