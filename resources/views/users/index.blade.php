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

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
          <div class="card-header card-header-primary">
              <h4 class="card-title"><b>Pendaftaran Akun</b></h4>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table">
                      <thead class=" text-primary">
                          <th>Nama</th>
                          <th>Role</th>
                          <th></th>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $user)
                          <tr>
                              <td>{{$user->name}}</td>
                              <td>
                                @if(!empty($user->getRoleNames()))
                                  @foreach($user->getRoleNames() as $v)
                                    <label>{{ $v }}</label>
                                  @endforeach
                                 @endif
                              </td>
                              <td>
                                <a class="btn btn-info pull-right" href="{{ route('users.show',$user->id) }}">Show</a>
                                <a class="btn btn-primary pull-right" href="{{ route('editrole',$user->id) }}">Edit</a>
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
        </div>
      </div>
    </div>
  </div>                
</div>
@endsection