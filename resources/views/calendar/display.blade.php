@extends('layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endsection
@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <center><div class="panel-heading" style="background:darkblue; color:aqua">Daftar Meeting</div></center>
                    <div class="box-body">
                        <table class="table table-striped dataTables">
                            <thead class="thead">
                                <tr class="warning">
                                    <th>No</th>
                                    <th>Judul Meeting</th>
                                    <th>Kode Warna</th>
                                    <th>Waktu Mulai</th>
                                    <th>Waktu Selesai</th>
                                    <th colspan="2">Aksi</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @php $no = 1; @endphp
                            @foreach ($events as $key)
                                <tbody>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $key->title }}</td>
                                        <td>{{ $key->color }}</td>
                                        <td>{{ $key->start_date }}</td>
                                        <td>{{ $key->end_date }}</td>
                                        <td><a href="{{route('event.edit',$key->id)}}" class="btn btn-warning">Edit</a></td>
                                        <td><form action="{{route('event.destroy',$key->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
