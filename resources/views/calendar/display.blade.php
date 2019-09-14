@extends('layouts.datatable')
@section('content')
    @include('calendar.edit')
    @include('calendar.delete')
    <section class="content">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <center><div class="panel-heading" style="background:darkblue; color:aqua"><b>Daftar Kegiatan</b></div></center>
                    <div class="box-body">
                        <table id="dataTable" class="table table-striped">
                            <thead class="thead">
                                <tr class="warning">
                                    <th>No</th>
                                    <th>Judul Meeting</th>
                                    <th>Kode Warna</th>
                                    <th>Keterangan</th>
                                    <th>Waktu Mulai</th>
                                    <th>Waktu Selesai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                                <tbody class="data-jadwal">
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
                ajax: "{{ url('/display') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title'},
                    {data: 'color', name: 'color'},
                    {data: 'description', name: 'description'},
                    {data: 'start_date', name: 'start_date'},
                    {data: 'end_date', name: 'end_date'},
                    {data: 'aksi', name: 'aksi', orderable: false, searchable: false},
                ]
            });

            $('.data-jadwal').on('click', '.edit-jadwal',function (){
                $('#modal-edit').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget)
                    var id = button.data('id')
                    var title = button.data('title')
                    var color = button.data('color')
                    var description = button.data('description')
                    var start_date = button.data('start_data')
                    var end_date = button.data('end_date')

                    var modal = $(this)
                    modal.find('#data-id').val(id)
                    modal.find('#data-title').val(title)
                    modal.find('#data-color').val(color)
                    modal.find('#data-description').val(description)
                    modal.find('#data-start_date').val(start_date)
                    modal.find('#data-end_date').val(end_date)

                    console.log(id);

                })
            })

                $('.data-jadwal').on('click', '.hapus-jadwal',function (){
                    $('#modal-hapus').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget)
                    var id = button.data('id')
                    // var title = button.data('title')
                    // var color = button.data('color')
                    // var start_date = button.data('start_date')
                    // var end_date = button.data('end_date')

                    var modal = $(this)
                    modal.find('#data-id-hapus').val(id)
                    // modal.find('#data-title').val(title)
                    // modal.find('#data-color').val(color)
                    // modal.find('#data-start_date').val(start_date)
                    // modal.find('#data-end_date').val(end_date)

                    console.log(id);

                    })
                })
        });
    </script>
@endsection
