@extends('layouts.Halamanfrontend.display')

@section('content')
    @include('calendar.create')
    @include('frontend.modal')
    <section class="section-margin mb-5">
    <div class="container">
      <div class="section-intro pb-85px text-center">
        <h2 style="color:#90c73e">Scheduling List</h2>
        <div class="section-style"></div>
      </div>

    <div>
        <a style="float:left" class="button button-outline button-small" href="#" title="Create Schedule" data-toggle="modal" data-target="#create">+ Create</a>
        <aside style="float:right" class="single_sidebar_widget search_widget">
            <form action="">
            <div class="form-group">
                <div class="input-group mb-3">
                <input type="text" class="form-control" name="title" autocomplete="on" placeholder="Search Schedule">
                <div class="input-group-append">
                    <button style="color:#90c73e" class="btn" type="submit"><i class="ti-search"></i></button>
                </div>
                </div>
            </div>
            </form>
        </aside>
    </div>
        <br><br><br>
      <div class="row">

    @foreach ($events as $item)
        <div class="col-lg-4 col-sm-6">
          <div class="card-service">
            <div class="service-icon text-center">
              <img src="/assets/img/kategori/{{ $item->kategori->foto }}" width="70px">
            </div>
            <h3 style="color:black" class="text-center">{{ $item->title }}</h3>
            <p style="color:black" class="text-center">{{ $item->description }}</p>
            <br>
            <div>
                <img src="/frontend/img/home/png/startdate.png" width="20px" alt=""> {{ \Carbon\Carbon::parse($item->start_date)->format('l, d M Y')}} <b>|</b>
                <img src="/frontend/img/home/png/starttime.png" width="20px" alt=""> {{ \Carbon\Carbon::parse($item->start_date)->format('h:i')}}
            </div>
            <br>
            <div>
                <img src="/frontend/img/home/png/enddate.png" width="20px" alt=""> {{ \Carbon\Carbon::parse($item->end_date)->format('l, d M Y')}} <b>|</b>
                <img src="/frontend/img/home/png/endtime.png" width="20px" alt=""> {{ \Carbon\Carbon::parse($item->end_date)->format('H:i')}}
            </div>
            <br>
            <p class="text-right">By : {{ $item->user->name }}</p>
            <br>

             @if($item->user->id == Auth::user()->id)
            <a class="edit-event-calendar" title="Edit" href="#" data-toggle="modal" data-target="#edit-data-calendar" data-id="{{ $item->id }}" data-title="{{ $item->title }}" data-color="{{ $item->color }}" data-description="{{ $item->description }}" data-id_kategori="{{ $item->id_kategori }}" data-start_date="{{ $item->start_date }}" data-end_date="{{ $item->end_date }}"><img src="/frontend/img/home/png/edit.png" width="12px"></a> |
            <a class="hapus-event-calendar" title="Delete" href="#" data-toggle="modal" data-target="#hapus-data-calendar" data-id="{{ $item->id }}" data-title="{{ $item->title }}" data-color="{{ $item->color }}" data-description="{{ $item->description }}" data-id_kategori="{{ $item->id_kategori }}" data-start_date="{{ $item->start_date }}" data-end_date="{{ $item->end_date }}"><img src="/frontend/img/home/png/delete.png" width="12px"></a>
            @endif
          </div>
        </div>

    @endforeach
      </div>
    </div>
    {{ $events->links() }}
  </section>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });

            var tambah = $('#form-tambah');
            tambah.on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: '/calendar',
                    method: 'POST',
                    data: tambah.serialize(),
                    success: function (res) {
                        Swal.fire({
                            title: 'God Job!',
                            text: 'Schedule Successfully Added',
                            type: 'success',
                            showConfirmButton: false,
                            timer: 15000
                            })
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

            $('.edit-event-calendar').on('click', function (){
                $('#edit-data-calendar').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget)
                    var id = button.data('id')
                    var title = button.data('title')
                    var color = button.data('color')
                    var description = button.data('description')
                    var id_kategori = button.data('id_kategori')
                    $.ajax({
                        url: '/category',
                        method: 'GET',
                        success:(res) => {
                            $.ajax({
                                url: '/categori/'+id_kategori,
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

            //SweetAlert Edit
            $('#form-edit-calendar').on('submit', function (e) {
            e.preventDefault();
                $.ajax({
                    url: '/display/'+ $('#data-id').val(),
                    method: 'PUT',
                    data: $('#form-edit-calendar').serialize(),
                    success: function (res) {
                        Swal.fire({
                            title: 'God Job!',
                            text: 'Edit Successfully',
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

                //Hapus
            $('.hapus-event-calendar').on('click', function (){
                $('#hapus-data-calendar').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')

                var modal = $(this)
                modal.find('#data-id-hapus').val(id)
                console.log(id);

                })
            })

            //SweetAlert Hapus
            $('#form-hapus-calendar').on('submit', function (e) {
            e.preventDefault();
                $.ajax({
                    url: '/display/'+ $('#data-id-hapus').val(),
                    method: 'DELETE',
                    data: $('#form-hapus-calendar').serialize(),
                    success: function (res) {
                         Swal.fire({
                            title: 'God Job!',
                            text: 'Deleted Successfully',
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
