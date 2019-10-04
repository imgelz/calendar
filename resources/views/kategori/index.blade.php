@extends('layouts.Halaman.kategori')
@section('content')

@include('kategori.edit')
@include('kategori.delete')
@include('kategori.create')

    <section class="content">
        <div class="row">
            <div class="col-md-12 col-md-offset">
                <div class="panel panel-default">
                    <center><div class="panel-heading" style="background:#abdb5a">
                                <h3 class="box-title">
                                    <button type="button" style="background:#477008; color:#d9fca4" class="btn btn-block fa fa-plus-circle" data-toggle="modal" data-target="#create-kategori"> Tambah</button>
                                </h3>
                            </div></center>
                    <div class="box-body">
                        <table id="dataTable" class="table table-striped">
                            <thead class="thead">
                                <tr class="warning">
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Slug</th>
                                    <th>Foto</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                                <tbody class="data-kategori">
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
            //Data di Tabel
            var table = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('kategori.index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'nama_kategori', name: 'nama_kategori'},
                    {data: 'slug', name: 'slug'},
                    {data: 'img', name: 'img', orderable: false, searchable: false},
                    {data: 'keterangan', name: 'keterangan'},
                    {data: 'aksi', name: 'aksi', orderable: false, searchable: false},
                ]
            });

            //Tambah
            var tambah = $('#form-tambah-kategori');
            tambah.on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData($(this)[0]);
                $.ajax({
                    url: '/admin/kategori',
                    method: 'POST',
                    contentType: false,
                    processData: false,
                    cache: false,
                    data: formData,
                    dataType: "text",
                    success: function (res) {
                        swal({
                            title: "Berhasil Menambah",
                            icon: "success",
                        });

                        location.reload();

                    },
                    error: function (err) {
                        console.log(err)

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

            //Edit
            $('.data-kategori').on('click', '.edit-kategori',function (){
                $('#edit-kategori').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget)
                    var id = button.data('id')
                    var nama_kategori = button.data('nama_kategori')
                    var foto = button.data('foto')
                    var keterangan = button.data('keterangan')

                    var modal = $(this)
                    modal.find('#data-id').val(id)
                    modal.find('#nama_kategori').val(nama_kategori)
                    modal.find('#foto').attr('src','/assets/img/kategori/'+foto)
                    modal.find('#keterangan').val(keterangan)

                    console.log(id);

                })
            })
                //Hapus
                $('.data-kategori').on('click', '.hapus-kategori',function (){
                    $('#hapus-kategori').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget)
                    var id = button.data('id')

                    var modal = $(this)
                    modal.find('#data-id-hapus').val(id)
                    console.log(id);

                    })
                })

                //SweetAlert Edit
                $('#form-edit-kategori').on('submit', function (e) {
                e.preventDefault();
                    $.ajax({
                        url: '/admin/kategori/'+ $('#data-id').val(),
                        method: 'PUT',
                        data: $('#form-edit-kategori').serialize(),
                        success: function (res) {
                            swal({
                                title: "Berhasil Mengubah",
                                icon: "success",
                            });

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
                $('#form-hapus-kategori').on('submit', function (e) {
                e.preventDefault();
                    $.ajax({
                        url: '/admin/kategori/'+ $('#data-id-hapus').val(),
                        method: 'DELETE',
                        data: $('#form-hapus-kategori').serialize(),
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
