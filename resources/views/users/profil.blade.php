@extends('layouts.app')
@section('title')
    Profil
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
                    <a class="d-block" href="{{ url('profil') }}">{{ Auth::user()->username }}</a>
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
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('profil') }}">
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
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-4 my-4">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="../../dist/img/avatar5.png"
                                        alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">{{ Auth::user()->username }}</h3>

                                <p class="text-muted text-center">
                                    @if (Auth::user()->role == 'user')
                                        Penggunna
                                    @endif
                                </p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Username</b> <a class="float-right">{{ Auth::user()->username }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email</b> <a class="float-right">{{ Auth::user()->email }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Telp</b> <a class="float-right">- - -</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Alamat</b> <a class="float-right">- - -</a>
                                    </li>
                                </ul>
                                <a class="btn btn-primary btn-block" data-toggle="modal" data-target="#lengkapi-profil"
                                    href="#"><b>Lengkapi profile</b></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="lengkapi-profil" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-pencil-alt mr-1"></i> Lengkapi Profil
                    </h5>
                    <button class="close" data-dismiss="modal" type="button" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <label for="">Nomor Telepon</label>
                        <input class="form-control" id="no-hp" name="no_hp" type="text">
                        <label for="">Alamat</label>
                        <textarea class="form-control" id="" name="alamat" cols="30" rows="2"></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" type="button">Cancel</button>
                    <button class="btn btn-primary" type="button">Save</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('#lengkapi-profil').on('shown.bs.modal', function() {
            $('#no-hp').focus()
        })
    </script>
@endsection
