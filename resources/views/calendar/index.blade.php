@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

    {{-- <link rel="stylesheet" href="/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/adminlte/bower_components/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="/adminlte/bower_components/fullcalendar/dist/fullcalendar.print.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/skins/_all-skins.min.css"> --}}
@endsection

@section('js')
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

    {{-- <script src="/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/adminlte/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script src="/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="/adminlte/dist/js/adminlte.min.js"></script>
    <script src="/adminlte/dist/js/demo.js"></script>
    <script src="/adminlte/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script src="/adminlte/bower_components/moment/moment.js"></script>
    <script src="/adminlte/bower_components/fullcalendar/dist/fullcalendar.min.js"></script> --}}
@endsection


@section('content')
    @include('layouts.flash')
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
