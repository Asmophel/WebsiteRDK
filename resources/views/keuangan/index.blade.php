@extends('template.navbar')

@section('title')
  RDK ITS - Keuangan
@endsection

@section('content')
<div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title"><b>Keuangan</b></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>Keterangan</th>
                                        <th>Jumlah</th>
                                        <th>Alur</th>
                                        <th>Tanggal</th>
                                        <th width="280px">Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($keuangans as $keuangan)
                                        <tr>
                                            <td>{{ $keuangan->Keterangan }}</td>
                                            <td>{{ $keuangan->Jumlah }}</td>
                                            <td>{{ $keuangan->Alur }}</td>
                                            <td>{{ $keuangan->Tanggal }}</td>
                                            <td>
                                                <form action="{{ route('keuangan.destroy',$keuangan->id) }}" method="POST">
                                                    {{-- <a class="btn btn-info" href="{{ route('keuangan.show',$keuangan->id) }}">Show</a> --}}
                                                    @can('keuangan-edit')
                                                    <a class="btn btn-primary" href="{{ route('keuangan.edit',$keuangan->id) }}">Edit</a>
                                                    @endcan


                                                    @csrf
                                                    @method('DELETE')
                                                    @can('keuangan-delete')
                                                    <button type="submit" class="btn btn-warning">Delete</button>
                                                    @endcan
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>              
                <input type="button" onclick="window.location.href='/keuangan/create';" value="Tambah Data Keuangan" class="btn btn-primary centerbutton" />  
        </div>
@endsection