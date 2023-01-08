<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- icheck bootstrap -->
    <link href="{{ asset('/') }}plugins/icheck-bootstrap/icheck-bootstrap.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link href="{{ asset('/') }}dist/css/adminlte.min.css" rel="stylesheet">
</head>

@yield('body')

</html>
