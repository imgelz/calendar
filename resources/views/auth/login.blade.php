@extends('layouts.Halamanfrontend.signin')

@section('content')

<div class="container-login100" style="background-image: url('/signin/images/monitor.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="{{ route('login') }}" method="POST">
                @csrf
				<span style="color:#90c73e" class="login100-form-title p-b-37">
					SIGN IN
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter email">
                    <input class="input100 @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" type="email" name="email" placeholder="Email" autocomplete="email" autofocus required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                    <input class="input100 @error('password') is-invalid @enderror" value="{{ old('password') }}"  placeholder="Password" id="password" type="password" name="password" autocomplete="current-password" reqiured>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button type="submit" style="color:#ededed" class="login100-form-btn">
						Sign In
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">

				</div>
				<div class="text-center">
          <p>Do not have an Account ?
					<a href="/register" class="txt2 hov1"><u><b>Sign Up</b></u></a>
        </p>
				</div>
			</form>


		</div>
	</div>
<center>
{{-- <div class="login-box">
  <div class="login-logo">
    <a href="{{url('/')}}"><b>MEET SCHEDULE</b></a>
    <style>.login-logo a{color: #477008;}</style>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{{ route('login') }}" method="POST">
        @csrf
      <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="/register" class="text-center">Daftar disini</a>

  </div>
  <!-- /.login-box-body -->
</div> --}}
</center>
@endsection
