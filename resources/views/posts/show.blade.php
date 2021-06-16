@extends('template.navbar')

@section('title')
  RDK ITS - Kegiatan
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          
            <input type="button" onclick="window.location.href='/posts/daftarkegiatan/{{$post->id}}';" value="Daftar" class="btn btn-primary pull-right"/><br><br><br>
            @hasrole('Admin|SC|IC|OC')
            <input type="button" onclick="window.location.href='/posts/{{$post->id}}/edit';" value="Edit Post" class="btn btn-primary pull-right"/><br><br><br>
            @endhasrole
            {{-- <input type="button" onclick="window.location.href='/posts/daftarkegiatan/{{$post->id}}';" value="Lihat kegiatan yang kamu ikuti" class="btn btn-primary pull-right"/><br><br><br> --}}
            <!-- untuk buat kotak ungu -->
        <div class="card"> 
          <div class="card-header card-header-primary">
            <h4 class="card-title" style="text-align: center;"><b>{{$post->title}}</b></h4>
          </div><br>
          <div class="card-body">
            <h5 style="text-align: center;">
                {{$post->content}}  
            </h5>
            <br>
            <h4 style="text-align: center;">
                Tanggal Pelaksanaan  
            </h4>
            <h3 style="text-align: center;">
                {{$post->waktu_acara}}  
            </h3>
          </div>
        </div>
        <input type="button" onclick="window.location.href='/kegiatan/bokar/ubah';" value="Ubah Informasi Kegiatan"  class="btn btn-primary centerbutton"/>
      </div>
      {{-- <div class="col-md-4">
        <!-- untuk buat kotak ungu -->
        <div class="card"> 
          <div class="card-header card-header-primary">
            <h4 class="card-title" style="text-align: center;"><b>Daftar Yuk</b></h4>
          </div><br>
          <label for="cars" style="text-align: center;">Pilih Tanggal:</label>
            <select name="cars" id="cars" style="color:purple;">
                <option value="volvo">1 Januari 2021</option>
                <option value="saab">2 Januari 2021</option>
                <option value="mercedes">3 Januari 2021</option>
                <option value="audi">4 Januari 2021</option>
            </select>
            <button type="submit" class="btn btn-primary" style="background-color:white; color:purple;">Daftar</button>
          <input type="button" onclick="window.location.href='/kegiatan/peserta/bokar';" value="Lihat Peserta" style="background-color:white; color:purple;" class="btn btn-primary pull-right"/>
        </div>
      </div> --}}
      <div class="col-md-12">
        <!-- untuk buat kotak ungu -->
        <div class="card"> 
          <div class="card-header card-header-primary">
            <h4 class="card-title" style="text-align: center;"><b>Dokumentasi</b></h4>
          </div><br>
          @foreach ($photos as $key => $photo)
            <img class="img" src="{{asset('/' . $photo->path)}}" width="600" 
            style="display: block; margin-left: auto; margin-right: auto;"class="centerimage"/><br>
          @endforeach
        </div>
      </div>
    </div>
</div>


@endsection
