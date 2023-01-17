@extends('layouts.app')
@section('title')
    Bookingan Saya
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
                    <a class="d-block">{{ Auth::user()->username }}</a>
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
                    <!-- Add icons to the links using the .nav-icon class
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('home') }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Beranda
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">MENU</li>
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
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('profil') }}">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                Profil
                            </p>
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('bookingan-saya') }}">
                            <i class="nav-icon fa fa-calendar"></i>
                            <p>
                                Bookingan Saya
                            </p>
                        </a>
                    </li>
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
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="table-bookingan-saya" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Main</th>
                                            <th>Jadwal Main</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookingan as $booking)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $booking->tanggal_main }}</td>
                                                <td>{{ $booking->jam_main }}</td>
                                                <td align="center">
                                                    @if ($booking->status_booking == 'no')
                                                        <span class="badge bg-warning mr-1"
                                                            id="menunggu-persetujuan">Menunggu
                                                            persetujuan</span>
                                                    @else
                                                        <span class="badge bg-warning mr-1">Disetujui</span>
                                                    @endif
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
                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script>
        $(function() {
            $("#table-bookingan-saya").DataTable({
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
