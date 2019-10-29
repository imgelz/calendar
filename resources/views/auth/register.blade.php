@extends('layouts.Halamanfrontend.signup')

@section('content')

 <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="{{ route('register') }}" id="signup-form" class="signup-form">
                        @csrf
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input id="name" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required autocomplete="name" autofocus type="text" class="form-input @error('name') is-invalid @enderror"/>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email"  value="{{ old('email') }}" required />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" name="password" required autocomplete="new-password" class="form-input @error('password') is-invalid @enderror"  placeholder="Password"/>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            {{-- <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span> --}}
                        </div>
                        <div class="form-group">
                            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password"class="form-input" placeholder="Repeat your password"/>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="/login" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

{{-- <div class="register-box">
  <div class="register-logo">
    <a href="{{url('/')}}"><b>MEET SCHEDULE</b></a>
    <style>.register-logo a{color: #477008;}</style>
  </div>
  <!-- /.register-logo -->
    <div class="register-box-body">
        <p class="login-box-msg">Registrasi Keanggotaan Baru</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="form-group has-feedback">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Ulangi Password">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>


                <br>

                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <a href="/login">Masuk</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
        </form>
    </div>
  <!-- /.register-box-body -->
</div> --}}
@endsection

{{-- @section('js')
<script>
    $(document).ready(function(){
        $("#pilihan").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
            if ($("input[name='pilih']:checked").val() == "buat" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
            $("#form-input-radio").html(""); //Efek Slide Down (Menampilkan Form Input)
            $("#form-input-radio").append(`<label><small>Silahkan buat group anda</small></label>
                    <input type="text" name="nama_grup" class="form-control" placeholder="Nama Grup">`);
            } else {
            $("#form-input-radio").html("");
            $("#form-input-radio").append(`<label><small>Masukkan kode jika sudah punya grup</small></label>
                    <input type="text" name="kode" class="form-control" placeholder="Masukkan Kode Grup">`);
            }
            console.log();

        });
    });
</script>
@endsection --}}
{{-- <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #90c73e;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style> --}}
