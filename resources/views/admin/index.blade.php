@extends('layouts.Halaman.admin')

@section('content')
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-md-offset-1">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <center>
            <div class="widget-user-header" style="background:#90c73e">
              <h1><b> Welcome to the Dashboard, Admin! </b></h1>
              <small>You are logged in and can access all pages, and those who enter other than you cannot access all pages !</small>
            </div>
            </center>
            <div class="box-footer" style="background:gainsboro">
              <div class="row">
                  <center>
                  <img src="/adminlte/dist/img/universalaccesss.png" height="220px" width="250px">
                  <br>
                  <br>
                  <h3 style="color:green">All Pages That You Can Access</h3>
                  </center>
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
    </div>
</div>
@endsection
