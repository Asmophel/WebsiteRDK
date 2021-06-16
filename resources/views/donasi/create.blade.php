@extends('template.navbar')


@section('content')


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

    <div class="container-fluid">    
        


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title">Tambah Donasi</h2>
                        </div>
                        <div class="card-body">
                            <form encype='mutipart/form-data' action="{{ route('donasi.store') }}" method="POST">
                                @csrf
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nominal:</strong>
                                        <input type="number" name="nominal" class="form-control" placeholder="nominal">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Keterangan:</strong>
                                        <textarea class="form-control" style="height:150px" name="keterangan" placeholder="keterangan"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tanggal Donasi:</strong>
                                        <input type="date" name="tanggal_donasi" placeholder="tanggal_donasi">    
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>

<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection