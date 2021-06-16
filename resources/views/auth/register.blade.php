@extends('template.template')

@section('contentwithoutnavbar')
<div class="container-fluid">
            <div class="row">
                <!-- personal info-->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title">Daftar Akun</h2>
                        </div>
                    <div class="card-body">
                        <div class="container">

                            <form class="well form-horizontal" action="{{ route('register') }}" method="post"  id="contact_form">
                                @csrf
                                <fieldset>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">E-Mail</label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                <input id="email" placeholder="Contoh : joealwyn13@gmail.com" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nama</label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                <input id="name" type="text" placeholder="Contoh : Joe Matthew Alwyn" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Text input-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Alamat</label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input id="alamat" type="alamat" placeholder="Contoh Jl. Cornelia / 13. Surabaya" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat">

                                                @error('alamat')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nomor Telepon / HP</label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input id="phone" placeholder="Masukkan nomor telepon / HP" class="form-control @error('phone') is-invalid @enderror" name="phone">

                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror   
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" >Kata Sandi</label> 
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input id="password" type="password" placeholder="Min. 8 Karakter" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Text input-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" >Ulang Kata Sandi</label> 
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input id="password-confirm" placeholder="Konfirmasi kata sandi" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Jenis Kelamin</label>
                                        <br>
                                        {{-- <div class="col-md-4 inputGroupContainer"> --}}
                                            {{-- <div class="input-group"> --}}
                                                {{-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> --}}
                                        <input style="margin-left: 17px" type="radio" id="ikhwan" name="jenis_kelamin" value="Ikhwan">
                                        <label for="ikhwan" class="col-md-4 control-label">Ikhwan</label>
                                        <br>
                                        <input style="margin-left: 17px" type="radio" id="keluar" name="jenis_kelamin" value="Akhwat">
                                        <label for="akhwat" class="col-md-4 control-label">Akhwat</label>
                                        <br>
                                            {{-- </div> --}}
                                        {{-- </div> --}}
                                    </div>


                                    <!-- Select Basic -->

                                    <!-- Success message -->
                                    <!-- <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div> -->

                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-primary" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT 
                                            <span class="glyphicon glyphicon-send">
                                            </span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                                            <p><a href="/login">Already have an account? Click here!</a></p>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                        </div>
                        </div><!-- /.container -->
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