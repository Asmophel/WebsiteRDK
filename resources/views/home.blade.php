@extends('template.navbar')

@section('title')
  RDK ITS - Beranda
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <!-- untuk buat kotak ungu -->
        <div class="card" style="background-color:purple"> 
          <div class="card-header card-header-primary" style="background-color:white">
            <h2 class="card-title"><b>Selamat Datang!</b></h2>
          </div >
          <div class="card-body""  style="color:rgb(240,240,240)" >
            <h5>Terima kasih karena sudah berkunjung di laman milik Ramadhan di Kampus (RDK) ITS!
            Nantinya, laman ini akan digunakan untuk mengunggah artikel terkait Ramadhan, laporan kegiatan RDK ITS,
            dan rangkuman kajian yang diselenggarakan oleh RDK ITS. Selamat menikmati!
            </h5>
          </div>
        </div>
        <br>
        <div class="card"> 
          <div class="card-header card-header-primary">
            <h4 class="card-title" style="text-align: center;"><b>Tentang RDK</b></h4>
          </div>
          <div class="card-body">
              <h4 style="text-align: center; color:purple;" >
                <b>Tujuan</b>
              </h4> <br>
              <h5 style="text-align: center;">
                Membentuk kepanitiaan yang progresif, profesional, dan berbasil keumatan,
              </h5> <br>
              <h5 style="text-align: center;">
                Melaksanakan syiar Ramadhan yang inovativ guna meningkatkan ukhwah, wawasan islam, serta semangat beribadah civitas akademika ITS, dan
              </h5> <br>
              <h5 style="text-align: center;">
                Menjadikan bulan Ramadhan sebagai momentum pembinaan umat guna membentuk generasi qur'ani.
              </h5>
              <br>
          </div>
          <br>
          <div class="card-body">
              <h4 style="text-align: center; color:purple;" >
                <b>Tema</b>
              </h4> <br>
              <h5 style="text-align: center;">
                Bersinergi menngkatkan takwa menuju terciptanya umat madani
              </h5>
              <br>
          </div>

          <div class="card-body">
              <h4 style="text-align: center; color:purple;" >
                <b><i>Tagline</i></b>
              </h4> <br>
              <h5 style="text-align: center;">
                Bersinergi, Berbagi, Meraih Madani
              </h5>
              <br>
          </div>

          <div class="card-body">
              <h4 style="text-align: center; color:purple;" >
                <b>Pelaksanaan</b>
              </h4> <br>
              <h5 style="text-align: center;">
                Serangkaian kegiatan RDK 41 ITS InsyaAllah akan dilaksanakan pada
              </h5>
              <h5 style="text-align: center;">
                17 April 2020 hingga 24 Mei 2020
              </h5>
              <h5 style="text-align: center;">
                di Kampus Institut Teknologi Sepuluh Nopember
              </h5>
              <br>
          </div>
        </div>
        <br>
        <div class="card"> 
          <div class="card-header card-header-primary">
            <h4 class="card-title" style="text-align: center;"><b>Struktur Organisasi RDK</b></h4>
          </div>
          <br>
          <img class="img" src="{{asset('template')}}/assets/img/baganorganisasi.jpg" width="600" 
          style="display: block; margin-left: auto; margin-right: auto;"class="centerimage"/>
          <br>
        </div>
        <br>
        <div class="card"> 
          <div class="card-header card-header-primary">
            <h4 class="card-title" style="text-align: center;"><b>Hubungi Kami :</b></h4>
          </div>
          <div class="card-body">
              <h4 style="text-align: center; color:purple;" >
                <b>Instagram</b>
              </h4>
              <h5 style="text-align: center;">
                @ramadhanits
              </h5>
          </div>

          <div class="card-body">
              <h4 style="text-align: center; color:purple;" >
                <b>Email</b>
              </h4>
              <h5 style="text-align: center;">
              ramadhanits@gmail.com
              </h5>
          </div>

          <div class="card-body">
              <h4 style="text-align: center; color:purple;" >
                <b>Narahubung</b>
              </h4>
              <h5 style="text-align: center;">
              Reza Oktovian - 0812312462794
              </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
