@extends('layouts.app')
@section('title')
    Beranda
@endsection
@section('class-body')
    hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed
@endsection
@section('navbar')
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" aria-label="Search"
                                placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" data-widget="navbar-search" type="button">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
@endsection
@section('sidebar')
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a class="brand-link text-center" href="{{ url('tentang-kami') }}">
            <span class="brand-text font-weight-light"><b>FUTSAL</b></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img class="img-circle elevation-2" src="dist/img/avatar5.png" alt="User Image">
                </div>
                <div class="info">
                    <a class="d-block" href="{{ route('profil.index') }}">{{ Auth::user()->username }}</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" aria-label="Search"
                        placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" data-accordion="false"
                    role="menu">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('home') }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Beranda
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">MENU UTAMA</li>
                    @if (Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pembookingan.index') }}">
                                <i class="nav-icon far fa-calendar"></i>
                                <p>
                                    Pembookingan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pengguna.index') }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Pengguna
                                </p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    Laporan
                                </p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('setelan.index') }}">
                                <i class="nav-icon fa fa-cog"></i>
                                <p>
                                    Setelan
                                </p>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('lapangan') }}">
                                <i class="nav-icon fa fa-futbol"></i>
                                <p>
                                    Lapangan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('cara-booking') }}">
                                <i class="nav-icon fa fa-book"></i>
                                <p>
                                    Cara Booking
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('tentang-kami') }}">
                                <i class="nav-icon fa fa-question-circle"></i>
                                <p>
                                    Tentang Kami
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('profil') }}">
                                <i class="nav-icon fa fa-user"></i>
                                <p>
                                    Profil
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('bookingan-saya') }}">
                                <i class="nav-icon fa fa-calendar"></i>
                                <p>
                                    Bookingan Saya
                                </p>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <form class="d-none" id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        {{-- <h1 class="m-0">FUTSAL</h1> --}}
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    @if (Auth::user()->role == 'admin')
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i
                                        class="nav-icon far fa-calendar"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text"><b>Pembookingan</b></span>
                                    <span class="info-box-number"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i
                                        class="nav-icon fas fa-users"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text"><b>Pengguna</b></span>
                                    <span class="info-box-number"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-primary elevation-1"><i class="nav-icon fa fa-cog"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text"><b>Setelan</b></span>
                                    <span class="info-box-number"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Komentar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($komentar as $komen)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $komen->username }}</td>
                                                    <td>
                                                        {{ $komen->komentar }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    @else
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Disukai</span>
                                    <span class="info-box-number">200</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>

                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Pengguna</span>
                                    <span class="info-box-number">2,000</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    @endif
                </div>

                <div class="row">
                    @if (Auth::user()->role == 'admin')
                    @else
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Aturan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    Menggunakan sepatu futsal atau sepatu khusus untuk bermain di lapangan
                                                    futsal. Sepatu yang digunakan harus bersih dan tidak menyebabkan gesekan
                                                    atau
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    Menjaga kebersihan dan keselamatan lapangan. Pengguna harus memastikan
                                                    bahwa
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    Menjaga ketertiban dan menghormati pengguna lain. Pengguna harus
                                                    menghargai
                                                    hak
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    Mematuhi aturan dan peraturan yang berlaku di lapangan futsal. Pengguna
                                                    harus
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    Membayar biaya pemakaian lapangan sesuai dengan tarif yang ditetapkan.
                                                    Pengguna harus membayar biaya pemakaian lapangan sesuai dengan jumlah
                                                    waktu
                                                    yang
                                                    telah dipakai, sesuai dengan ketentuan yang berlaku.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    @endif

                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
