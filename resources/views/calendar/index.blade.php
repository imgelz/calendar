@extends('layouts.app')

@section('content')
    @include('calendar.create')

    <!-- Button trigger modal -->
    <center>
        <button type="button" class="btn btn-primary btn-lg fa fa-plus-square" data-toggle="modal" data-target="#create"> Create</button>

    </center>
        <br>

    <section class="container">
        <div class="box-title"></div>
            <div class="row">
                <div class="col-md-12 col-md-offset-1">
                    <div class="panel panel-default">
                        <center><div class="panel-heading" style="background:darkblue; color:aqua"> Calendar Meeting</div></center>
                        <div id="calendar" class="panel-body" style="background:darkseagreen">
                            {!! $calendar->calendar() !!}
                            {!! $calendar->script() !!}
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection

@section('js')
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
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
                    url: '/event',
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

