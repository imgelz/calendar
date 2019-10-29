@extends('layouts.Halaman.buat')

@section('content')

    <div class="container-login100" style="background-image: url('/signin/images/newgroup.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" action="{{ route('grup.store')}}" method="POST">
                @csrf
				<span style="color:#90c73e" class="login100-form-title p-b-37">
					New Group
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter name group">
					<input class="input100" type="text" name="nama_grup" autocomplete="off" placeholder="Name Your Group" required>
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Buat Group
					</button>
                </div>

                <br><br>

				<div class="text-center">
					<a href="/verify-group" class="txt2 hov1">
						<u>Masuk grup</u>
					</a>
				</div>
			</form>


		</div>
	</div>

{{-- <center>
<div class="login-box">
  <div class="login-logo">
    <a href="{{url('/')}}"><b>MEET SCHEDULE</b></a>
    <style>.login-logo a{color: #477008;}</style>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Buat Grup Baru</p>

    <form action="{{ route('grup.store')}}" method="POST">
        @csrf
      <div class="form-group has-feedback">
          <input type="text" class="form-control" name="nama_grup" autocomplete="off" placeholder="Masukan Nama Grup" required>
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
</center> --}}
@endsection
