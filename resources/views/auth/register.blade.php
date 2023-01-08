@extends('layouts.form')
@section('title')
    Register
@endsection
@section('body')

    <body
        class="hold-transition register-page  hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="register-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a class="h1" href=""><b>FUTSAL</b></a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Register a new membership</p>
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input class="form-control @error('username') is-invalid @enderror" name="username"
                                type="text" value="{{ old('username') }}" placeholder="username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input class="form-control @error('email') is-invalid @enderror" name="email" type="email"
                                value="{{ old('email') }}" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input class="form-control @error('password') is-invalid @enderror" name="password"
                                type="password" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" type="password" placeholder="Retype password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input id="agreeTerms" name="terms" type="checkbox" value="agree">
                                    <label for="agreeTerms">
                                        I agree to the <a href="">terms</a>
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button class="btn btn-primary btn-block" type="submit">Register</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <div class="social-auth-links text-center">
                        <a class="btn btn-block btn-primary" href="#">
                            <i class="fab fa-facebook mr-2"></i>
                            Sign up using Facebook
                        </a>
                        <a class="btn btn-block btn-danger" href="#">
                            <i class="fab fa-google-plus mr-2"></i>
                            Sign up using Google+
                        </a>
                    </div>
                    <p class="text-center mb-0">
                        <a class="" href="{{ url('login') }}">I already have a membership</a>
                    </p>
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        <!-- /.register-box -->
    @endsection
