@extends('template.navbar')

@section('title')
  RDK ITS - Pendaftaran Akun
@endsection

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<input type="button" onclick="window.location.href='/amal/addamalyaumi';" value="Tambah Progress Ibadah" class="btn btn-primary centerbutton" />  
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
          <div class="card-header card-header-primary">
              <h4 class="card-title"><b>Progress Ibadah</b></h4>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  {{-- <table class="table">
                      <thead class=" text-primary">
                          <th>Tanggal</th>
                          <th>Nama</th>
                          <th></th>
                      </thead>
                      <tbody>
                        @foreach ($amal->user as $amal)
                          <tr>
                              @foreach ($amal->user as $user)
                              <td>{{ $user->pivot->Tanggal_amalyaumi }}</td>
                              <td>{{ $user->name }}</td>
                              @endforeach
                          </tr>
                        @endforeach
                      </tbody>
                  </table> --}}
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <th>Action</th>
                    </thead>
                    @foreach ($test as $ayumi)
                    {{-- @foreach ($amal as $ayumi) --}}
                    <tr>
                      <td>
                          @foreach ($amals as $amal)
                            @if ($amal->id == $ayumi->pivot->amal_yaumi_id)
                            {{-- {{$ayumi->pivot->amal_yaumi_id}} --}}
                              {{$amal->name}}
                            @endif
                          @endforeach
                      </td>
                      <td>{{$ayumi->pivot->Tanggal_amalyaumi}}</td>
                      <td>
                        <form action="{{ route('amal.destroy', $user, $ayumi->pivot->amal_yaumi_id) }}" method="POST">
                          {{-- <label for="">{{$ayumi->pivot->amal_yaumi_id}}</label> --}}
                          @csrf
                          @method('DELETE')
                          @can('amal-delete')
                          <button type="submit" class="btn btn-warning">Delete</button>
                          @endcan
                        </form>
                      </td>
                      {{-- <td>
                          <ul>
                          @foreach ($amal->user as $user)
                            <li>
                              <label>{{ $user->pivot->Tanggal_amalyaumi }}</label>
                            </li>
                          @endforeach
                        </ul>
                      </td> --}}
                    </tr>
                    @endforeach
                  </table>
              </div>
        </div>
      </div>
    </div>
  </div>                
</div>
@endsection