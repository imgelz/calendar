@extends('layouts.halamanfrontend.activity')

@section('content')
    <section class="section-margin">
        <div class="text-center">
            <h2 style="color:#90c73e">User Activities</h2>
            <div class="section-style"></div>
        </div>
        <br><br><br>
        <div class="container">
                <aside style="float:right" class="single_sidebar_widget search_widget">
                    <form action="">
                    <div class="form-group">
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" id="search" autocomplete="on" placeholder="Search Activities">
                        <div class="input-group-append">
                            <button style="color:#90c73e" class="btn" type="button"><i class="ti-search"></i></button>
                        </div>
                        </div>
                    </div>
                    </form>
                </aside>
                <br><br><br>

            <div class="row">
                @if ($logActivity->count() > 0)
                    @foreach ($logActivity as $log)
                        @if($log->user->id == Auth::user()->id)
                        <div class="col-md-6 col-lg-4">
                            <div class="card-feature">
                                <center><h5 style="color:#000000">{{ $log->subject }}</h5>
                                <p style="color:#be0029">{{ $log->method }}</p></center>
                                <br>
                                <p><b style="color:#90C73E">{{ \Carbon\Carbon::parse($log->created_at)->format('l, d M Y')}} | {{ \Carbon\Carbon::parse($log->created_at)->format('H:i')}}</b></p>
                                <p style="float:right; color:black">By : {{$log->user->name}}</p>
                            </div>
                        </div>
                        @endif
                    @endforeach
                @elseif ($logActivity->count() == 0)
                    <div class="container">
                        <br><br>
                        <center><h1 style="color:black" class="display-4">Activities Not Available</h1>
                        <p class="lead">Fill this page with a schedule that must be created on the calendar page.</p></center>
                    </div>
                @endif
            </div>
        </div>
            {{-- {{ $logActivity->links() }} --}}
  </section>
@endsection

@section('js')
  <script type="text/javascript">
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });

            $('#search').keyup(function(){
                var val = $(this).val().toLowerCase();

                $(".row .col-md-6").hide();

                $(".row .col-md-6").each(function(){

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
