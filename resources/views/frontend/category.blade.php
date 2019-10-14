@extends('layouts.halamanfrontend.category')

@section('content')
    <section class="section-margin">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-6 col-lg-4">
                    <div class="card-feature text-center">
                        <h2 style="color:#90c73e">FAQ Categories</h2>
                        <p style="color:black">We provide several categories to choose from. Enjoy online meeting tools such as screen sharing, conference calls. Leverage integration with Laravel's Complete Calendar. for an easy invitation.</p>
                    </div>
                </div> --}}
                @foreach ($kategori as $data)
                <div class="col-md-6 col-lg-4">
                    <div class="card-feature text-center">
                        <div class="feature-icon">
                            <img src="/assets/img/kategori/{{ $data->foto }}" width="85px" alt="">
                        </div>
                        <h3 style="color:#90c73e">{{ $data->nama_kategori }}</h3>
                        <p style="color:black">{{ $data->keterangan }}</p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
  </section>
@endsection
