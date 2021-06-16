@extends('template.template')

@section('contentwithoutnavbar')
    <div class="container-fluid">
            <div class="row">
                <!-- personal info-->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title">Daftar?</h2>
                        </div>
                    <div class="card-body">
                        {{-- {!! Form::model($user, ['method' => 'PUT','route' => ['updaterole', $user->id]]) !!} --}}
                        <form encype='mutipart/form-data' action="{{ route('userkegiatan',$post->id) }}" method="POST">
                            @csrf    
                            <div class="clearfix"></div>
                            {{-- {!! Form::close() !!} --}}
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </form>
                </div>
              </div>
            </div>
                <!-- end of data -->
                <!-- tabel -->
        </div>
    </div>
@endsection