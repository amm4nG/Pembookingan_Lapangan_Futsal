@extends('layouts.form')
@section('title')
    Welcome
@endsection
@section('body')

    <body
        class="hold-transition login-page hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        {{-- <div class="login-box"> --}}
        <div>
            <p class="text-center">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            </p>
        </div>
        {{-- </div> --}}
        <script>
            setTimeout(function() {
                window.location.href = 'login';
            }, 3000);
        </script>
    </body>
@endsection
