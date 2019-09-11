@extends('layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endsection
@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <center><div class="panel-heading" style="background:darkblue; color:aqua">Ubah Kegiatan Meeting</div></center>
                    <div class="box-body">
                        <form action="{{ route('event.update',$events->id) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="UPDATE">
                            <div class="form-group">
                                <label for="">Judul Meeting</label>
                                <input type="text" class="form-control" name="title" value="{{$events->title}}">
                            </div>
                            <div class="form-group">
                                <label for="">Pilihan Warna</label>
                                <input type="color" class="form-control" name="color" value="{{$events->color}}">
                            </div>
                            <div class="form-group">
                                <label for="">Waktu Awal</label>
                                <input type="date" class="form-control" name="start_date" value="{{$events->start_date}}">
                            </div>
                            <div class="form-group">
                                <label for="">Waktu Akhir</label>
                                <input type="date" class="form-control" name="end_date" value="{{$events->end_date}}">
                            </div>
                            {{ method_field('PUT') }}
                                <a href="{{route('event.index')}}" class="btn btn-danger">Kembali</a>
                                <button type="submit" class="btn btn-warning">Ubah Jadwal Kegiatan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

