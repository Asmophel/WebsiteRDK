@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Donasi</h2>
            </div>
            <div class="pull-right">
                @can('product-create')
                <a class="btn btn-success" href="{{ route('donasi.create') }}"> Tambahkan Donasi</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>nominal</th>
            <th>Tanggal Donasi</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($donasis as $donasi)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $donasi->nominal }}</td>
            <td>{{ $donasi->tanggal_donasi }}</td>
            <td>{{ $donasi->keterangan }}</td>
	        <td>
                <form action="{{ route('donasi.destroy',$donasi->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('donasi.show',$donasi->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('donasi.edit',$donasi->id) }}">Edit</a>


                    @csrf
                    @method('DELETE')
                    @can('product-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $donasis->links() !!}


<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection