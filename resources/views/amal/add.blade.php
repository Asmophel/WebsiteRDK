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
                        {{-- {!! Form::model($user, ['method' => 'PUT','route' => ['updaterole', $user->id]]) !!} --}}
                        <form encype='mutipart/form-data' action="{{ route('storeamalyaumi') }}" method="POST">
                            @csrf    
                            <div class="row">
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Nama</label>
                                        <div class="form-group">
                                            {{-- <textarea class="form-control" enabled placeholder="Joe Matthew Alwyn"></textarea> --}}
                                            {{-- <input type="text" name="Nama" value="{{ $user->name }}" class="form-control" placeholder="Nama"> --}}
                                            {{-- {!! Form::text('name', null, array('placeholder' => 'name','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Tanggal:</strong>
                                        <input type="date" name="Tanggal" placeholder="Tanggal">    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Role:</strong>
                                        
                                        {{-- {!! Form::select('roles[]', $amalibadah, array('class' => 'form-control','multiple')) !!} --}}
                                        <select name="roles" id="roles">
                                            <option value="1">Shalat Shubuh</option>
                                            <option value="2">Shalat Dzuhur</option>
                                            <option value="3">Shalat Ashar</option>
                                            <option value="4">Shalat Maghrib</option>
                                            <option value="5">Shalat Isya</option>
                                            <option value="6">Tilawah Al-Quran</option>
                                            <option value="7">Qiyamulail</option>
                                            <option value="8">Shalat Dhuha</option>
                                            <option value="9">Shalat Rawatib</option>
                                            <option value="10">Riyadhoh (olah raga)</option>
                                            <option value="11">Dzikir Pagi dan Petang</option>
                                            <option value="12">Infaq dan Sedekah</option>
                                            <option value="13">Mengikuti Kajian</option>
                                            <option value="14">Membantu Orang</option>
                                            <option value="15">Murajaah</option>
                                            <option value="16">Membaca Buku</option>
                                            <option value="17">Komunikasi dengan Orang Tua</option>
                                          </select>
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
                    {{-- {!! Form::close() !!} --}}
                    </form>
                </div>
              </div>
            </div>
                <!-- end of data -->
                <!-- tabel -->
        </div>
    </div>
@endsection