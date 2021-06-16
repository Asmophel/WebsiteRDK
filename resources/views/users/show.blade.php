@extends('template.template')

@section('contentwithoutnavbar')
    <div class="container-fluid">
            <div class="row">
                <!-- personal info-->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title">Akun</h2>
                        </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Nama</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">{{ $user->name }}</label>
                                            <textarea class="form-control" disabled></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Email</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">{{ $user->email }}</label>
                                            <textarea class="form-control" disabled></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Alamat</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">{{ $user->alamat }}</label>
                                            <textarea class="form-control" disabled></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Nomor Telepon / HP</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">{{ $user->phone }}</label>
                                            <textarea class="form-control" disabled></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Jenis Kelamin</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">{{ $user->jenis_kelamin }}</label>
                                            <textarea class="form-control" disabled></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- <button onclick="window.location.href='/page2'" class="btn btn-primary pull-right">Edit Data Akun</button> -->
                        <input type="button" onclick="window.location.href='/home';" value="Kembali" class="btn btn-primary pull-right"/>
                        <input type="button" onclick="window.location.href='{{ route('users.edit',$user->id) }}';" value="Edit Data Akun" class="btn btn-primary pull-right"/>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
                <!-- end of data -->
                <!-- tabel -->
            </div>
        </div>
@endsection