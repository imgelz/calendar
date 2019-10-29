@extends('layouts.Halaman.datatable')
@section('content')
    @include('calendar.edit')
    @include('calendar.delete')
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-md-offset-">
                <div class="panel panel-default">
                    <center><div class="panel-heading" style="background:#abdb5a; color:#477008"><h4><b>DAFTAR JADWAL KEGIATAN</b></h4></div></center>
                    <div class="box-body">
                        <table id="dataTable" class="table table-striped">
                            <thead class="thead">
                                <tr class="warning">
                                    <th>No</th>
                                    <th>Judul Meeting</th>
                                    <th>Kode Warna</th>
                                    <th>Keterangan</th>
                                    <th>Kategori</th>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });
            //Data di Tabel
            var table = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('/admin/display') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title'},
                    {data: 'color', name: 'color'},
                    {data: 'description', name: 'description'},
                    {data: 'kategori.nama_kategori', name: 'kategori.nama_kategori'},
                    {data: 'start_date', name: 'start_date'},
                    {data: 'end_date', name: 'end_date'},
                    {data: 'aksi', name: 'aksi', orderable: false, searchable: false},
                ]
            });

            //Edit
            $('.data-jadwal').on('click', '.edit-jadwal',function (){
                $('#modal-edit').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget)
                    var id = button.data('id')
                    var title = button.data('title')
                    var color = button.data('color')
                    var description = button.data('description')
                    var id_kategori = button.data('id_kategori')
                    $.ajax({
                        url: '/admin/category',
                        method: 'GET',
                        success:(res) => {
                            $.ajax({
                                url: '/admin/categori/'+id_kategori,
                                method: 'GET',
                                success:(bes) => {
                                    $('.e-kategori').html('')
                                    $.each(res.data, function (k ,v) {
                                        $('.e-kategori').append(
                                        `<option value="${v.id}" ${ v.id==bes.data.id ? 'selected':''}> ${v.nama_kategori}</option>`
                                        )
                                    })
                                }
                            })
                            console.log(res.data);
                            $('.e-kategori').html('')
                            $.each(res.data, function (k ,v) {
                                $('.e-kategori').append(
                                `<option value="${v.nama_kategori}">${v.nama_kategori}</option>`
                                )
                            })
                        },
                        error: (err) => {
                            console.log(err);
                        }
                    })

                    var start_date = button.data('start_date')
                    var end_date = button.data('end_date')

                    var modal = $(this)
                    modal.find('#data-id').val(id)
                    modal.find('#title').val(title)
                    modal.find('#color').val(color)
                    modal.find('#description').val(description)
                    modal.find('#id_kategori').val(id_kategori)
                    modal.find('#start_date').val(start_date)
                    modal.find('#end_date').val(end_date)

                    console.log(id);

                })
            })
                //Hapus
                $('.data-jadwal').on('click', '.hapus-jadwal',function (){
                    $('#modal-hapus').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget)
                    var id = button.data('id')

                    var modal = $(this)
                    modal.find('#data-id-hapus').val(id)
                    console.log(id);

                    })
                })

                //SweetAlert Edit
                $('#form-edit').on('submit', function (e) {
                e.preventDefault();
                    $.ajax({
                        url: '/admin/display/'+ $('#data-id').val(),
                        method: 'PUT',
                        data: $('#form-edit').serialize(),
                        success: function (res) {
                            Swal.fire({
                                title: 'Berhasil !',
                                text: 'Edit Schedule Successfully',
                                type: 'success',
                                showConfirmButton: false,
                                timer: 15000
                            })
                            location.reload();
                        },
                        error: function (err) {
                            console.log(err);

                            if (err.status == 422) {
                                console.log(err.responseJSON);
                                $('#success_message').fadeIn().html(err.responseJSON.message);
                                console.warn(err.responseJSON.errors);

                                $.each(err.responseJSON.errors, function (i, error) {
                                    var el = $(document).find('[id="'+i+'"]');
                                    el.after($('<span style="color: red;">'+error[0]+'</span>'));
                                });
                            }
                        }
                    })
                })

                //SweetAlert Hapus
                $('#form-hapus').on('submit', function (e) {
                e.preventDefault();
                    $.ajax({
                        url: '/admin/display/'+ $('#data-id-hapus').val(),
                        method: 'DELETE',
                        data: $('#form-hapus').serialize(),
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
