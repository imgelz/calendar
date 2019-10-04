@extends('layouts.Halamanfrontend.display')

@section('content')
    <section class="section-margin mb-5">
    <div class="container">
      <div class="section-intro pb-85px text-center">
        <h2>Hight Quality Service</h2>
        <div class="section-style"></div>
      </div>
      @php
          $events = \App\Event::all();
      @endphp

      <div class="row">

    @foreach ($events as $item)
        <div class="col-lg-4 col-sm-6">
          <div class="card-service">
            <div class="service-icon text-center">
              <img src="/frontend/img/home/png/006-server.png" alt="">
            </div>
            <h3 style="color:black" class="text-center">{{ $item->title }}</h3>
            <p style="color:black" class="text-center">{{ $item->description }}</p>
            <br>
            <div>
                <img src="/frontend/img/home/png/startdate.png" width="20px" alt=""> {{ \Carbon\Carbon::parse($item->start_date)->format('d M Y')}} <b>|</b>
                <img src="/frontend/img/home/png/starttime.png" width="20px" alt=""> {{ \Carbon\Carbon::parse($item->start_date)->format('h:m')}}
            </div>
            <br>
            <div>
                <img src="/frontend/img/home/png/enddate.png" width="20px" alt=""> {{ \Carbon\Carbon::parse($item->end_date)->format('d M Y')}} <b>|</b>
                <img src="/frontend/img/home/png/endtime.png" width="20px" alt=""> {{ \Carbon\Carbon::parse($item->end_date)->format('h:m')}}
            </div>
            <br>
            <p class="text-right">By : {{ $item->user->name }}</p>
          </div>
        </div>

    @endforeach
      </div>
    </div>
  </section>
@endsection
