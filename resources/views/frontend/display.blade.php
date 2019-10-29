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
        {{-- <a style="float:left" class="button button-outline button-small" href="#" title="Create Schedule" data-toggle="modal" data-target="#create">+ Create</a> --}}
        <aside style="float:right" class="single_sidebar_widget search_widget">
            <form>
            <div class="form-group">
                <div class="input-group mb-3">
                <input type="text" id="search" class="form-control" autocomplete="off" placeholder="Search Schedule">
                <div class="input-group-append">
                    <button style="color:#90c73e" class="btn" type="button"><i class="ti-search"></i></button>
                </div>
                </div>
            </div>
            </form>
        </aside>
    </div>
        <br><br><br>
      <div class="row">
          @if ($events->count() > 0)
                @foreach ($events as $item)
                        <div class="col-lg-4 col-sm-6">
                            <div class="card-service">
                                <div class="service-icon text-center">
                                <img src="/assets/img/kategori/{{ $item->kategori->foto }}" width="70px">
                                </div>
                                <h3 id="title" style="color:black" class="text-center">{{ $item->title }}</h3>
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

                                <br>
                                <p class="text-right">By : {{ $item->user->name }}</p>
                                <br>

                                @if($item->user->id == Auth::user()->id)
                                <a class="edit-event-calendar" title="Edit" href="#" data-toggle="modal" data-target="#edit-data-calendar" data-id="{{ $item->id }}" data-title="{{ $item->title }}" data-color="{{ $item->color }}" data-description="{{ $item->description }}" data-id_kategori="{{ $item->id_kategori }}" data-tag_user="{{ $item->tag_user }}" data-start_date="{{ $item->start_date }}" data-end_date="{{ $item->end_date }}"><img src="/frontend/img/home/png/edit.png" width="12px"></a> |
                                <a class="hapus-event-calendar" title="Delete" href="#" data-toggle="modal" data-target="#hapus-data-calendar" data-id="{{ $item->id }}" data-title="{{ $item->title }}" data-color="{{ $item->color }}" data-description="{{ $item->description }}" data-id_kategori="{{ $item->id_kategori }}" data-start_date="{{ $item->start_date }}" data-end_date="{{ $item->end_date }}"><img src="/frontend/img/home/png/delete.png" width="12px"></a>
                                @endif
                            </div>
                        </div>
                @endforeach
            @elseif ($events->count() == 0)
                <div class="container">
                    <br><br>
                    <center><h1 style="color:black" class="display-4">Schedule Not Available</h1>
                    <p class="lead">Fill this page with a schedule that must be created on the calendar page.</p></center>
                </div>
          @endif
      </div>
    </div>
    {{-- {{$events->links()}} --}}
  </section>
    <div class="container not-search">
        <center>
            <img src="/frontend/img/home/png/not-search.png">
            <h5 style="color:black" class="display-5">No matching records found</h5>
            <p class="lead">Please enter your search data correctly.</p>
        </center>
    </div>
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

            $('.edit-event-calendar').on('click', function (){
                $('#edit-data-calendar').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget)
                    var id = button.data('id')
                    var title = button.data('title')
                    var color = button.data('color')
                    var description = button.data('description')
                    var id_kategori = button.data('id_kategori')
                    $.ajax({
                        url: '/group/category',
                        method: 'GET',
                        success:(res) => {
                            $.ajax({
                                url: '/group/categori/'+id_kategori,
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
                    var tag_user = button.data('tag_user')
                     $.ajax({
                        url: '/group/taguser',
                        method: 'GET',
                        success:(res) => {
                            $.ajax({
                                url: '/group/tag/'+id,
                                method: 'GET',
                                success:(bes) => {
                                    $('.select2').html('')
                                    $.each(tag_user, function (t,u) {
                                        $.each(res.data, function (k ,v) {
                                            if (u == v.id) {
                                                $('.select2').append(
                                            `<option value="${v.id}" ${ v.id==u ? 'selected':''}> ${v.name}</option>`
                                            )
                                            }
                                        })
                                    })
                                }
                            })
                            console.log(res.data);
                            $('.select2').html('')
                            $.each(res.data, function (k ,v) {
                                $('.select2').append(
                                `<option value="${v.name}">${v.name}</option>`
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
                    modal.find('#tag_user').val(tag_user)
                    modal.find('#start_date').val(start_date)
                    modal.find('#end_date').val(end_date)

                    console.log(id);

                })
            })

            //SweetAlert Edit
            $('#form-edit-calendar').on('submit', function (e) {
            e.preventDefault();
                $.ajax({
                    url: '/group/display/'+ $('#data-id').val(),
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
                    url: '/group/display/'+ $('#data-id-hapus').val(),
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

            $('#search').keyup(function(){
                var val = $(this).val().toLowerCase();
                $(".row .col-lg-4").hide();
                $(".row .col-lg-4").each(function(){
                    var text = $(this).text().toLowerCase();
                    if(text.indexOf(val) != -1)
                    {
                        $(this).show();
                    }
                });
            });
        });

  </script>
@endsection
