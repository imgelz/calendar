@extends('layouts.Halamanfrontend.group')

@section('content')

<section class="container">
    <br>
    <div>
        @php
            $code = \App\Group::find(Auth::user()->id_group)->get();
        @endphp
        @foreach ($code as $copy)
            @if ($copy->id == Auth::user()->id_group)
                <center><h1 style="color:#be0029">{{$copy->nama_grup}}</h1></center>
                    <br>
                    <h6 style="color:#90c73e">Group Code :</h6>
                    <input type="text" id="copy-code" value=" {{ $copy->kode }}" readonly> <button title="Copy to Clipboard" onclick="myFunction()"><img src="/frontend/img/home/png/copy.png" width="20px"></button>
            @endif
        @endforeach
    </div>
                <br>
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default"><br>
                <center><div class="panel-heading" style="background:#90c73e;"><h4><b style="color:#ededed">List of Group Members</b></h4></div></center>
                <div class="box-body">
                    <table id="dataTable" class="table table-striped table-bordered">
                    <thead>
                        <th>No</th>
                        <th>Nama Anggota</th>
                        <th>Email</th>
                        <th>Tanggal Bergabung</th>
                        {{-- <th>Aksi</th> --}}
                    </thead>
                    <tbody class="data-user-group">

                    </tbody>
                    </table>
                </div>
            </div>
            <br>
        </div>
    </div>
    <br>
</section>

@endsection

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

@endsection

@section('js')
    {{-- <script src="//code.jquery.com/jquery-1.10.2.min.js"></script> --}}
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });
            var table = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('/group/') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'created_at', name: 'created_at', orderable: false, searchable: false}
                    // {data: 'aksi', name: 'aksi', orderable: false, searchable: false},
                ]
            });
        });
    </script>
    <script>
        function myFunction() {
            var copyText = document.getElementById("copy-code");
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
        }
    </script>
@endsection
