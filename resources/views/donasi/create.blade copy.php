@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('keuangan.index') }}"> Back</a>
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


    <form encype='mutipart/form-data' action="{{ route('donasi.store') }}" method="POST">
    	@csrf


         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Nominal:</strong>
		            <input type="number" name="nominal" class="form-control" placeholder="nominal">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Donasi:</strong>
                    <input type="date" name="tanggal_donasi" placeholder="tanggal_donasi">    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan:</strong>
                    <textarea class="form-control" style="height:150px" name="keterangan" placeholder="keterangan"></textarea>
                </div>
            </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
        </div>

    </form>


<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection