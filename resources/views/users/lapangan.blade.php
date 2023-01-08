@extends('layouts.app')
@section('title')
    Lapangan
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
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('home') }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Beranda
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">MENU</li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('lapangan') }}">
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
                    @if (Auth::user()->role == 'admin')
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('profil') }}">
                                <i class="nav-icon fa fa-user"></i>
                                <p>
                                    Profil
                                </p>
                            </a>
                        </li>
                    @endif
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
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0" id="date">{{ date('l, Y-m-d') }}</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <h1 class="m-0" id="jam"></h1>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="col-12">
                                <img class="product-image" src="{{ asset('/') }}dist/img/4.jpg" alt="Product Image">
                            </div>
                            <div class="col-12 product-image-thumbs">
                                <div class="product-image-thumb active">
                                    <img src="{{ asset('/') }}dist/img/1.jpg" alt="Product Image">
                                </div>
                                <div class="product-image-thumb">
                                    <img src="{{ asset('/') }}dist/img/4.jpg" alt="Product Image">
                                </div>
                                <div class="product-image-thumb">
                                    <img src="{{ asset('/') }}dist/img/3.jpg" alt="Product Image">
                                </div>
                                <div class="product-image-thumb">
                                    <img src="{{ asset('/') }}dist/img/4.jpg" alt="Product Image">
                                </div>
                                <div class="product-image-thumb">
                                    <img src="{{ asset('/') }}dist/img/3.jpg" alt="Product Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <form method="post" action="">
                                @csrf
                                <h3 class="pt-4 text-center">Booking Lapangan</h3>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal main</label>
                                        @if (optional($bookingan)->count() > 0)
                                            <input class="form-control" id="tanggal-main" name="tanggal-main"
                                                type="date" value="{{ optional($bookingan)->tanggal_main }}" disabled>
                                        @else
                                            <input class="form-control" id="tanggal-main" name="tanggal-main"
                                                type="date" value="{{ optional($bookingan)->tanggal_main }}">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="exampleSelectRounded0">Jam
                                            main</label>
                                        @if (optional($bookingan)->count() > 0)
                                            <input class="form-control" id="" name="" type="text"
                                                value="{{ $bookingan->jam_main }}" disabled>
                                        @else
                                            <div class="input-group" id="select-jam-main">
                                                <select class="custom-select rounded-0" id="jam-main" name="jam-main">
                                                    <option value="08:00 - 09:00">08:00 - 09:00</option>
                                                    <option value="09:00 - 10:00">09:00 - 10:00</option>
                                                    <option value="10:00 - 11:00">10:00 - 11:00</option>
                                                    <option value="11:00 - 12:00">11:00 - 12:00</option>
                                                    <option value="13:00 - 14:00">13:00 - 14:00</option>
                                                    <option value="14:00 - 15:00">14:00 - 15:00</option>
                                                    <option value="15:00 - 16:00">15:00 - 16:00</option>
                                                    <option value="17:00 - 18:00">17:00 - 18:00</option>
                                                    <option value="20:00 - 21:00">20:00 - 21:00</option>
                                                    <option value="21:00 - 22:00">21:00 - 22:00</option>
                                                </select>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="bg-gray py-2 px-3">
                                        <h2 class="mb-0">
                                            Rp. 150,000/jam
                                        </h2>
                                    </div>
                                    <div class="mt-4">
                                        @if (optional($bookingan)->count() > 0)
                                            <a class="btn btn-primary btn-lg btn-flat btn-block"
                                                id="menunggu-persetujuan">
                                                @if ($bookingan->status_booking == 'no')
                                                    Menunggu persetujuan
                                                @else
                                                    Disetujui
                                                @endif
                                            </a>
                                            <a class="btn btn-primary btn-lg btn-flat btn-block" id="booking-ajax"
                                                href="" style="visibility: hidden">
                                                Booking
                                            </a>
                                        @else
                                            <button class="btn btn-primary btn-lg btn-flat btn-block" id="booking">
                                                Booking <div class="spinner-border spinner-border-sm text-white"
                                                    id="loading" role="status" style="display: none">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </button>
                                            <a class="btn btn-primary btn-lg btn-flat btn-block" id="menunggu-persetujuan"
                                                href="" style="visibility: hidden">
                                                Menunggu persetujuan
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
    </div>
    <!-- /.content -->

    <!-- modal validasi tanggal main -->
    <div class="modal" id="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-exclamation-triangle text-warning"></i> Perhatian</h5>
                    <button class="close" id="x" data-dismiss="modal" type="button" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="">
                        Minimal tanggal main satu hari dari hari ini
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="close" data-dismiss="modal" type="button">Oke</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal validasi tanggal main -->
    <!-- modal pengaturan tanggal main -->
    <div class="modal" id="modal1" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-exclamation-triangle text-warning"></i> Perhatian</h5>
                    <button class="close" id="x1" data-dismiss="modal" type="button" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Harap atur tanggal main
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="close1" data-dismiss="modal" type="button">Oke</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal pengaturan tanggal main -->
@endsection
@section('scripts')
    <!-- validasi inputan secara realtime -->
    <script>
        document.getElementById('tanggal-main').addEventListener("change", validasiTanggal)
        //validasi tanggal
        function validasiTanggal() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var tanggalSekarang = new Date();
            var tanggalMain = new Date(document.getElementById('tanggal-main').value)
            if (tanggalMain <= tanggalSekarang) {
                modal.style.display = "block"
                //menambahkan tanggal 1 hari
                tanggalSekarang.setDate(tanggalSekarang.getDate() + 1)
                document.getElementById('tanggal-main').value = tanggalSekarang.toISOString().substring(0, 10);
                $.ajax({
                    url: "{{ route('lapangan.create') }}",
                    type: "get",
                    data: {
                        tanggalMain: tanggalSekarang.toISOString().substring(0, 10)
                    },
                    success: function(response) {
                        let select = document.getElementById('jam-main')
                        // const opsi = ['09:30 - 10:30', '13:00 - 14:00']
                        $('#jam-main option').each(function() {
                            if (response.jamMain.includes(this.value)) {
                                let i = `${$(this).index()}`
                                select.options[i].disabled = true
                                $(this).prop('selected', false);
                                // console.log(this.value);
                            }
                        });
                    },
                    error: function(response) {
                        console.log(response)
                    }
                })
                /*
                          Pada kode di atas, substring(0, 10) digunakan untuk mengambil hanya
                          bagian tanggal dari string tanggal yang dihasilkan oleh toISOString.
                          Sebagai contoh, jika tanggal saat ini adalah 2022-12-19T14:30:00.000Z,
                          maka toISOString akan menghasilkan string "2022-12-19T14:30:00.000Z",
                          dan substring(0, 10) akan mengambil bagian "2022-12-19",
                          yang merupakan string tanggal dalam format ISO-8601.
                */
            } else {
                $.ajax({
                    url: "{{ route('lapangan.create') }}",
                    type: "get",
                    data: {
                        tanggalMain: tanggalMain.toISOString().substring(0, 10)
                    },
                    success: function(response) {
                        let select = document.getElementById('jam-main')
                        // const opsi = ['09:30 - 10:30', '13:00 - 14:00']
                        if (response.status) {
                            $('#jam-main option').each(function() {
                                //panggil setiap jam main yang ada pada tanggal tersebut
                                if (response.jamMain.includes(this.value)) {
                                    let i = `${$(this).index()}`
                                    select.options[i].disabled = true
                                    $(this).prop('selected', false);
                                    // console.log(this.value);
                                }
                            });
                        } else {
                            //jika jam main pada tanggal itu tidak ada
                            //buat semua options disabled sama dengan false
                            for (let index = 0; index < select.options.length; index++) {
                                select.options[index].disabled = false
                            }
                        }
                    },
                    error: function(response) {
                        console.log(response)
                    }
                })
            }

        }
        //menutup modal
        $('#close').on('click', function() {
            modal.style.display = "none";
        })
        $('#x').on('click', function(e) {
            modal.style.display = "none"
        })
    </script>
    <!-- end validasi inputan secara realtime -->
    <!-- booking lapangan -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#booking').on('click', function(e) {
            e.preventDefault()
            $('#loading').show()
            var tanggalMain = $('#tanggal-main').val()
            var jamMain = $('#jam-main').val()
            $.ajax({
                url: "{{ route('lapangan.store') }}",
                type: "post",
                data: {
                    tanggalMain: tanggalMain,
                    jamMain: jamMain
                },
                success: function(response) {
                    if (response.status == 'error') {
                        modal1.style.display = "block"
                        $('#x1').on('click', function(e) {
                            e.preventDefault()
                            modal1.style.display = "none"
                            $('#loading').hide()
                        })
                        $('#close1').on('click', function(e) {
                            e.preventDefault()
                            modal1.style.display = "none"
                            $('#loading').hide()
                        })
                    } else {
                        // console.log(response);
                        $('#booking').hide()
                        document.getElementById('menunggu-persetujuan').style.visibility = "visible"
                        document.getElementById('tanggal-main').disabled = true
                        document.getElementById('jam-main').disabled = true
                    }
                },
                error: function(response) {
                    console.log(response)
                }
            })
        })
    </script>
    <!-- end booking lapangan -->
    <!-- Membuat tanggal, jam dan validasi jadwal pembookingan -->
    <script>
        // mengambil elemen span dengan id "jam"
        var jamElement = document.getElementById('jam');
        setInterval(() => {
            // mendapatkan tanggal dan waktu saat ini
            var waktu = new Date();
            // mengupdate teks dalam elemen span dengan tanggal dan waktu saat ini
            jamElement.innerText = waktu.toLocaleTimeString()
        }, 1000);
        //ambil id bookingan saya
        var id = "{{ optional($bookingan)->id }}"
        //ambil tanggal main saya
        var tanggalMain = "{{ optional($bookingan)->tanggal_main }}"
        //ambil tahun dari tanggal main saya
        var tahunMain = tanggalMain.substring(0, 4)
        //ambil bulan dari tanggal main saya
        var bulanMain = tanggalMain.substring(5, 7)
        //ambil tanggal bookingan dari tanggal main saya
        var tanggalBooking = tanggalMain.substring(8, 10)
        //ambil jam main saya
        var jamMain = "{{ optional($bookingan)->jam_main }}"
        //ambil jam start
        var jamStart = jamMain.substring(0, 2)
        //ambil jam start
        var jamEnd = jamMain.substring(8, 10)
        //cek apakah saya punya bookingan
        if (id > 0) {
            //cek jadwal saya secara berkala
            var x = setInterval(function() {
                // mendapatkan tanggal dan waktu saat ini
                var waktu = new Date();
                //ambil tanggal dan jam sekarang
                var tahunSekarang = waktu.getFullYear()
                var bulanSekarang = waktu.getMonth() + 1
                var tanggalSekarang = waktu.getDate()
                var jamSekarang = waktu.getHours()
                var menitSekarang = waktu.getMinutes()
                //cek jadwal pembookingan secara berkala
                if (tahunSekarang >= tahunMain && bulanSekarang >= bulanMain && tanggalSekarang >= tanggalBooking &&
                    jamSekarang >= jamStart) {
                    document.getElementById('menunggu-persetujuan').innerText = "Berlangsung | " + menitSekarang +
                        " : " + waktu.getSeconds()
                    //lakukan penghapusan data bookingan jika jadwal bookingnya telah selesai
                    if (jamSekarang >= jamEnd) {
                        clearInterval(x)
                        document.getElementById('menunggu-persetujuan').innerText =
                            "Waktu Anda Habis"
                        $.ajax({
                            url: "lapangan/" + id,
                            type: 'delete',
                            data: {
                                id: id
                            },
                            success: function(response) {
                                setTimeout(() => {
                                    location.reload(true)
                                }, 2000);
                            },
                            error: function(response) {}
                        })

                    }
                }
            }, 1000)
        }
    </script>
    <script>
        $(document).ready(function() {
            $('.product-image-thumb').on('click', function() {
                var $image_element = $(this).find('img')
                $('.product-image').prop('src', $image_element.attr('src'))
                $('.product-image-thumb.active').removeClass('active')
                $(this).addClass('active')
            })
        })
    </script>
@endsection
