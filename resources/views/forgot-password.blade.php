@extends('layouts.form')
@section('title')
    Forgot Password
@endsection
@section('body')

    <body
        class="hold-transition login-page  hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a class="h1" href=""><b>FUTSAL</b></a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block" type="submit">Request new password</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <p class="mt-3 mb-1 text-center">
                        <a href="{{ route('login') }}">Login</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
    </body>
@endsection
