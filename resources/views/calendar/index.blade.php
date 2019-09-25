@extends('layouts.Halaman.calendars')

@section('content')
    @include('calendar.create')
        <br>

    <section class="content">
        <div class="box-title"></div>
            <div class="row">
                <div class="col-md-12 col-md-offset-">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:slategray;">
                            <!-- Button trigger modal -->
                            @if(Auth::check())
                                <button type="button" title="Buat" style="background:cornflowerblue" class="btn btn-lg fa fa-plus" data-toggle="modal" data-target="#create"> <b>Create</b></button>
                                <div class="bd-highlight pull-right">
                                    <form>
                                        <select class="form-control-lg highlight" style="width:120px" name="id_kategori" id="nama_kategori">
                                            @php
                                                $kategori = \App\Kategori::all();
                                            @endphp
                                                <option value="">All</option>
                                            @foreach ($kategori as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" style="background:lightblue" class="btn btn-sm highlight">Search</button>
                                    </form>
                                </div>
                            @else

                            @endif
                        </div>
                        <div id="calendar" class="panel-body" style="background:silver">
                            {!! $calendar->calendar() !!}
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    {{-- <link rel="stylesheet" href="/adminlte/bower_components/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="/adminlte/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print"> --}}
@endsection

@section('js')
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    {{-- <script src="/adminlte/bower_components/moment/moment.js"></script>
    <script src="/adminlte/bower_components/fullcalendar/dist/fullcalendar.min.js"></script> --}}
    {!! $calendar->script() !!}
    <script type="text/javascript">
        $(function (){
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
        });
    </script>
@endsection

