@extends('layouts.halamanfrontend.activity')

@section('content')
    <section class="section-margin">
        <div class="container">
            <div>
                <aside style="float:right" class="single_sidebar_widget search_widget">
                    <form action="">
                    <div class="form-group">
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" name="subject" autocomplete="on" placeholder="Search Activities">
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
                @foreach ($logActivity as $log)
                @if($log->user->id == Auth::user()->id)
                <div class="col-md-6 col-lg-4">
                    <div class="card-feature text-center">
                        {{-- <div class="feature-icon">
                            <img src="/assets/img/kategori/{{ $data->foto }}" width="95px" alt="">
                        </div> --}}
                        <h3 style="color:#90c73e">{{ $log->subject }}</h3>
                        <p style="color:black">{{ $log->method }}</p>
                        <p>{{ \Carbon\Carbon::parse($log->created_at)->format('l, d M Y')}} | {{ \Carbon\Carbon::parse($log->created_at)->format('H:i')}}</p>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
            {{-- {{ $logActivity->links() }} --}}
  </section>
@endsection
