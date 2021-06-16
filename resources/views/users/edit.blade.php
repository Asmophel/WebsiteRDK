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
                        {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
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
                                        <label class="bmd-label-floating" style="color:purple">Email</label>
                                        <div class="form-group">
                                            {{-- <textarea class="form-control" value="{{ $user->email }}" enabled placeholder="email"></textarea> --}}
                                            {{-- <input type="text" name="Email" value="{{ $user->email }}" class="form-control" placeholder="Email"> --}}
                                            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Alamat</label>
                                        <div class="form-group">
                                            {{-- <textarea class="form-control" enabled placeholder="Jl. Cornelia/13, Surabaya "></textarea> --}}
                                            {{-- <input type="text" name="Alamat" value="{{ $user->alamat }}" class="form-control" placeholder="Alamat"> --}}
                                            {!! Form::text('alamat', null, array('placeholder' => 'Alamat','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple" >Nomor Telepon / HP</label>
                                        <div class="form-group">
                                            {{-- <textarea class="form-control" enabled placeholder="081535245151"></textarea> --}}
                                            {{-- <input type="text" name="Phone" value="{{ $user->phone }}" class="form-control" placeholder="Phone"> --}}
                                            {!! Form::text('phone', null, array('placeholder' => 'Phone','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Jenis Kelamin</label>
                                        <div class="form-group">
                                            {{-- <label class="bmd-label-floating" name="Jenis_kelamin" value="{{ $user->jenis_kelamin }}" style="color:rgb(220,220,220)" placeholder="Jenis_kelamin"></label> --}}
                                            <input type="text" name="Nama" value="{{ $user->jenis_kelamin }}" disabled class="form-control" placeholder="Nama">
                                            <!-- <textarea class="form-control" enabled></textarea> -->
                                        </div>
                                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="{{$user->jenis_kelamin}}" <?php if($user['jenis_kelamin']=='Ikhwan') echo 'checked'?>>
                                        <label for="male">Ikhwan   </label>
                                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="{{$user->jenis_kelamin}}" <?php if($user['jenis_kelamin']=='Akhwat') echo 'checked'?>>
                                        <label for="male">Akhwat  </label>
                                    </div>
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