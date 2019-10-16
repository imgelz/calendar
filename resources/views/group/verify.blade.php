@extends('layouts.Halaman.verify')

@section('content')
<center>
<div class="login-box">
  <div class="login-logo">
    <a href="{{url('/')}}"><b>MEET SCHEDULE</b></a>
    <style>.login-logo a{color: #477008;}</style>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Masukkan kode jika sudah punya group</p>

    <form action="{{ route('gabung')}}" method="POST">
        @csrf
      <div class="form-group has-feedback">
          <input type="text" class="form-control" name="kode" autocomplete="off" placeholder="Masukan Kode Grup" required>
          <br>
          @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
          @endif
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
                <a href="{{url('/buat')}}">Buat Grup baru </a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Next</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
</center>
@endsection
