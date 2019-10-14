@extends('layouts.Halaman.contact')

@section('content')
@include('contact.modal')

<section class="content">
        <div class="row">
            <div class="col-md-12 col-md-offset-">
                <div class="panel panel-default">
                    <center><div class="panel-heading" style="background:#abdb5a; color:#477008"><h4><b>Message</b></h4></div></center>
                    <div class="box-body">
                        <table id="dataTable" class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody class="data-contact">

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
                ajax: "{{ url('/admin/contact') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'subject', name: 'subject'},
                    {data: 'message', name: 'message'},
                    {data: 'user.name', name: 'user.name'},
                    {data: 'user.email', name: 'user.email'},
                    {data: 'aksi', name: 'aksi', orderable: false, searchable: false},
                ]
            });

            //Hapus
                $('.data-contact').on('click', '.hapus-contact',function (){
                    $('#hapus-contact').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget)
                    var id = button.data('id')

                    var modal = $(this)
                    modal.find('#data-id-hapus').val(id)
                    console.log(id);

                    })
                })

            //SweetAlert Hapus
                $('#form-hapus-contact').on('submit', function (e) {
                e.preventDefault();
                    $.ajax({
                        url: '/admin/contact/'+ $('#data-id-hapus').val(),
                        method: 'DELETE',
                        data: $('#form-hapus-log').serialize(),
                        success: function (res) {
                            swal({
                                title: "Berhasil Menghapus",
                                icon: "success",
                            });

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
