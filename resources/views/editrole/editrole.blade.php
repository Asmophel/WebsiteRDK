@extends('template.template')

@section('contentwithoutnavbar')
    <div class="container-fluid">
            <div class="row">
                <!-- personal info-->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title">Edit Data Akun</h2>
                        </div>
                    <div class="card-body">
                        {!! Form::model($user, ['method' => 'PUT','route' => ['users.updaterole', $user->id]]) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Nama</label>
                                        <div class="form-group">
                                            {{-- <textarea class="form-control" enabled placeholder="Joe Matthew Alwyn"></textarea> --}}
                                            {{-- <input type="text" name="Nama" value="{{ $user->name }}" class="form-control" placeholder="Nama"> --}}
                                            {!! Form::text('name', null, array('placeholder' => 'name','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Role:</strong>
                                        
                                        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
                                    </div>
                                </div>
                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple" >Kata Sandi</label>
                                        <div class="form-group">
                                            <input type="password" name="psswd" size="30" maxlength="25" class="form-control"></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Ketik Ulang Kata Sandi</label>
                                        <div class="form-group">
                                            <input type="password" name="psswd" size="30" maxlength="25" class="form-control"></li>
                                        </div>
                                    </div>
                                </div>
                            </div>  --}}
                        {{-- <input type="button" onclick="window.location.href='/akun';" value="Kembali" class="btn btn-primary pull-right"/> --}}
                        <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                    <div class="clearfix"></div>
                    {!! Form::close() !!}
                </div>
              </div>
            </div>
                <!-- end of data -->
                <!-- tabel -->
        </div>
    </div>
@endsection