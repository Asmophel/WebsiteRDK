@extends('template.template')

@section('contentwithoutnavbar')
<div class="container-fluid">
            <div class="row">
                <!-- personal info-->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title">Login</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName">Email</label>
                                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" aria-describedby="emailHelp" placeholder="Masukkan Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    <!-- <br> -->
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" aria-describedby="emailHelp" name="password" required autocomplete="current-password" placeholder="Masukkan Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    <br>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Log in</button>
                                <div class="clearfix"></div>
                                <p><a href="/register">Belum punya akun? Klik di sini</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection