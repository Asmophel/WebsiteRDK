@extends('template.navbar')

@section('title')
  RDK ITS - Kegiatan
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <input type="button" onclick="window.location.href='/posts/diikuti';" value="Lihat kegiatan yang kamu ikuti" class="btn btn-primary pull-right"/>
        
        <!-- untuk buat kotak ungu -->
        <div class="card" style="background-color:purple"> 
          <div class="card-body""  style="color:rgb(240,240,240)" >
            <h5> <br><br><b>
            Ramadhan di Kampus 1441 H (RK 41) ITS memiliki serangkaian kegaitan untuk menunjang ibadah dan amalan di bulan Ramdhan, baik yang dilaksanakan pada 
            bulan Ramadhan maupun di luar itu. Kegiatan yang InsyaAllah akan dijalankan oleh RDK ITS 41 dapat dilihat di halaman ini.
            </b><br><br>
            </h5>
          </div>
        </div>
        
        <br>
        <br>
        <br>
        <div class="card"> 
            @foreach ($posts as $post)
            <div class="card-body">
                <h4 style="text-align: center; color:purple;" >
                    <b>{{$post->title}}</b>
                </h4>
                <h5 style="text-align: center;">
                    {{$post->content}}
                </h5><br>
                <input type="button" onclick="window.location.href='posts/{{$post->id}}';" value="Selengkapnya" class="btn btn-primary centerbutton"/>
            </div>
            <br>
            @endforeach
            @hasrole('Admin|SC|IC|OC')
            <input type="button" onclick="window.location.href='/posts/create';" value="+" class="btn btn-primary centerbutton"/>
            @endhasrole
        </div>
        </div>
    </div>
</div>

<!-- //card bawah -->
        
@endsection
