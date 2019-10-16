@extends('layouts.Halaman.buat')

@section('content')
<center>
<div class="login-box">
  <div class="login-logo">
    <a href="{{url('/')}}"><b>MEET SCHEDULE</b></a>
    <style>.login-logo a{color: #477008;}</style>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Buat Grup Baru</p>

    <form action="{{ route('group.store')}}" method="POST">
        @csrf
      <div class="form-group has-feedback">
          <input type="text" class="form-control" name="nama_grup" autocomplete="off" placeholder="Masukan Nama Grup" required>
          <small style="float:left">kode akan otomatis di random</small>
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
                <a href="{{url('/verify-group')}}">Gabung grup </a>
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
