@extends('layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endsection
@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <center><div class="panel-heading" style="background:darkblue; color:aqua">Add Jadwal Meeting</div></center>
                    <div class="box-body">
                        <form action="{{ route('event.store') }}" method="POST">
                            {{ csrf_field() }}

                            <label for="">Judul Meeting</label>
                            <input type="text" class="form-control" name="title" placeholder="Ketik Judul">
                            <br><br>
                            <label for="">Pilihan Warna</label>
                            <input type="color" class="form-control" name="color" placeholder="Pilih Warna">
                            <br><br>
                            <label for="">Waktu Awal</label>
                            <input type="datetime-local" class="form-control" name="start_date" class="date" placeholder="Ketik Judul">
                            <br><br>
                            <label for="">Waktu Akhir</label>
                            <input type="datetime-local" class="form-control" name="end_date" class="date" placeholder="Ketik Judul">
                            <br><br>
                            <a href="{{route('event.index')}}" class="btn btn-danger">Kembali</a>
                            <input type="submit" name="submit" class="btn btn-primary" value="Add Jadwal Meeting">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
