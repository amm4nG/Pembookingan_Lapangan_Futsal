@extends('layouts.app')
@section('title')
    Tentang Kami
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
                        <a class="nav-link active" href="{{ url('tentang-kami') }}">
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
                <div class="row">
                    <div class="col-md-4 my-3">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img my-3 img-fluid img-circle"
                                        src="../../dist/img/pemilik.png" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">FUTSAL</h3>

                                <p class="text-muted text-center">
                                    Pemilik
                                </p>

                                <ul class="list-group list-group-unbordered mb-4">
                                    <li class="list-group-item">
                                        <b>Nama</b> <a class="float-right">Arman</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email</b> <a class="float-right">arman@gmail.com</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Telp</b> <a class="float-right">082290762799</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Alamat</b> <a class="float-right">Sabang Subik</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-8 my-3">
                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Tentang Kami</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i> Sejarah</strong>

                                <p class="text-muted">
                                    Kata Futsal berasal dari bahasa Spanyol, yaitu Futbol (sepak bola) dan Sala (ruangan),
                                    yang jika digabung artinya menjadi “sepak bola dalam ruangan”. Menurut FIFA (Federation
                                    International de Football Association) (2000), asal mula Futsal mulai pada tahun 1930 di
                                    Montevideo, Uruguay.
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Lokasi</strong>

                                <p class="text-muted">Sabang Subik, Polewali Mandar</p>

                                <hr>

                                <strong><i class="icon fas fa-cogs mr-1"></i> Fasilitas</strong>

                                <p class="text-muted my-1">
                                    <span class="tag tag-danger">- Ruang ganti</span><br>
                                    <span class="tag tag-danger">- Mushollah</span><br>
                                    <span class="tag tag-danger">- Toilet</span><br>
                                    <span class="tag tag-danger">- Tempat parkir</span><br>
                                    <span class="tag tag-danger">- Kantin</span><br>
                                    <span class="tag tag-danger">- Kursi penonton</span>
                                </p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    @if (Auth::user()->role == 'admin')
                    @else
                        <div class="col-md-12 mb-4">
                            <div class="alert alert-success alert-dismissible fade show" id="info-success"
                                style="display: none" role="alert">
                                Terima kasih, komentar Anda telah terkirim.
                                <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="alert alert-warning alert-dismissible fade show" id="info-warning"
                                style="display: none" role="alert">
                                Harap isi kolom komentar!
                                <button type="button" class="close text-primary" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Hubungi Kami</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-tool" data-card-widget="collapse" type="button"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputDescription">Komentar</label>
                                        <textarea required class="form-control" name="komentar" id="komentar" rows="4"></textarea>
                                    </div>
                                    <button id="kirim" class="btn btn-primary btn-lg btn-flat">
                                        <i class="icon fas fa-send"></i> Kirim <div id="loading"
                                            class="spinner-border spinner-border-sm ml-1 text-white" style="display: none"
                                            role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </button>
                                    <a class="btn btn-success btn-lg btn-flat" href=""><i
                                            class="icon fab fa-whatsapp"></i>
                                        WhatsApp</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
        </section>
    </div>
@endsection
@section('content')
@endsection
@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#kirim').on('click', function() {
            var komentar = document.getElementById('komentar').value
            var id_user = "{{ Auth::user()->id }}"
            $('#loading').show()
            $.ajax({
                url: "{{ route('komentar.store') }}",
                type: "post",
                data: {
                    komentar: komentar,
                    id_user: id_user
                },
                success: function(response) {
                    $('#loading').hide()
                    $('#info-success').show()
                    document.getElementById('komentar').value = ""
                },
                error: function() {
                    $('#loading').hide()
                    $('#info-warning').show()
                }
            })
        })
    </script>
@endsection
