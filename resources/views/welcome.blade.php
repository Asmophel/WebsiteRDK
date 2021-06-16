@extends('template.template')

@section('contentwithoutnavbar')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div>
        <h2 style="text-align:center;"><b>Selamat Datang di Website <br>Ramadhan di Kampus ITS Surabaya</b></h2>
        <h4 style="text-align:center;">Masuk atau buat akun sekarang</h4><br>
        @auth
            <input type="button" onclick="window.location.href='/home';" value="Home" class="btn btn-primary centerbutton"/>
        @else
            <input type="button" onclick="window.location.href='/login';" value="Masuk" class="btn btn-primary centerbutton"/>
            <br>
            @if (Route::has('register'))
            <input type="button" onclick="window.location.href='/register';" value="Daftar Akun" class="btn btn-primary centerbutton" />
            @endif
        @endauth
        <br>
        <br>
        <br>
        <br>    
    </div>
@endsection

{{-- @if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
        @endif
    @endauth
</div>
@endif --}}