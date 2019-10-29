@extends('layouts.Halaman.logactivity')

@section('content')
@include('logactivity.delete')

<section class="content">
        <div class="row">
            <div class="col-md-12 col-md-offset-">
                <div class="panel panel-default">
                    <center><div class="panel-heading" style="background:#abdb5a; color:#477008"><h4><b>LOG ACTIVITY</b></h4></div></center>
                    <div class="box-body">
                        <table id="dataTable" class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Subject</th>
                            <th>URL</th>
                            <th>Method</th>
                            <th>IP</th>
                            <th width="300px">User Agent</th>
                            <th>User</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody class="data-log">

                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection
@section('js')
    <script src="/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                ajax: "{{ route('logActivity.index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'subject', name: 'subject'},
                    {data: 'url', name: 'url'},
                    {data: 'method', name: 'method'},
                    {data: 'ip', name: 'ip'},
                    {data: 'agent', name: 'agent'},
                    {data: 'user.name', name: 'user.name'},
                    {data: 'aksi', name: 'aksi', orderable: false, searchable: false},
                ]
            });

            //Hapus
                $('.data-log').on('click', '.hapus-log',function (){
                    $('#hapus-log').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget)
                    var id = button.data('id')

                    var modal = $(this)
                    modal.find('#data-id-hapus').val(id)
                    console.log(id);

                    })
                })

            //SweetAlert Hapus
                $('#form-hapus-log').on('submit', function (e) {
                e.preventDefault();
                    $.ajax({
                        url: '/admin/logActivity/'+ $('#data-id-hapus').val(),
                        method: 'DELETE',
                        data: $('#form-hapus-log').serialize(),
                        success: function (res) {
                            Swal.fire({
                                title: 'Berhasil !',
                                text: 'Delete Schedule Successfully',
                                type: 'success',
                                showConfirmButton: false,
                                timer: 15000
                            })
                            location.reload();
                        },
                        error: function (err) {
                            console.log(err)
                        }
                    })
                })
        });
    </script>
@endsection
