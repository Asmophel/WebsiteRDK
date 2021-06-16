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
                            <h2 class="card-title">Tambah Data Keuangan</h2>
                        </div>
                        <div class="card-body">
                            <form encype='mutipart/form-data' action="{{ route('keuangan.store') }}" method="POST">
                                @csrf
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Keterangan:</strong>
                                        <input type="text" name="Keterangan" class="form-control" placeholder="Keterangan">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Jumlah:</strong>
                                        <input type="number" name="Jumlah" class="form-control" placeholder="Jumlah">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Alur</label>
                                        <br>
                                        {{-- <div class="col-md-4 inputGroupContainer"> --}}
                                            {{-- <div class="input-group"> --}}
                                                {{-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> --}}
                                        <input type="radio" id="Alur" name="Alur" value="Masuk">
                                        <label for="masuk">Masuk</label>
                                        <br>
                                        <input type="radio" id="Alur" name="Alur" value="Keluar">
                                        <label for="keluar">Keluar</label>
                                        <br>
                                            {{-- </div> --}}
                                        {{-- </div> --}}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tanggal:</strong>
                                        <input type="date" name="Tanggal" placeholder="Tanggal">    
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