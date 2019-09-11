@extends('layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection

@section('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
@endsection
@section('content')
@include('layouts.flash')
    <section class="content">
        <center><div class="box-title">
            <a href="{{ route('event.create')}}" class="btn btn-info">Tambah</a>
            <a href="{{ url('/display')}}" class="btn btn-info">Daftar Meeting</a>
        </div></center>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <center><div class="panel-heading" style="background:darkblue; color:aqua"> Calendar Meeting</div></center>
                        <div class="box-body">
                            {!! $calendar->calendar()!!}
                            {!! $calendar->script()!!}
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
