<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- overlayScrollbars -->
    <link href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <!-- Theme style -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <style>
        input[type="date"]::-webkit-calendar-picker-indicator {
            color: white;
        }
    </style>
</head>

<body class="@yield('class-body')">
    @yield('content')
    <div class="wrapper">
        @yield('navbar')
        @yield('sidebar')
        <footer class="main-footer">
            <strong>Copyright &copy; 2021-2022 <a href="">RPLTeam</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <div id="modal-tolak"></div>
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    {{-- <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script> --}}
    {{-- <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script> --}}
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production  
        Pusher.logToConsole = true;

        var pusher = new Pusher('0cd4d4febf966acc1a49', {
            cluster: 'ap1'
        });
        //update table bookingan secara realtime
        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            $.ajax({
                url: "{{ route('pembookingan.create') }}",
                type: 'get',
                data: {},
                success: function(response) {
                    var modal = ''
                    $('#example1 tbody tr').remove()
                    var table = ''
                    table += "<tbody>"
                    var no = 0
                    for (const key in response.bookingan) {
                        modal +=
                            `<div class="modal fade" id="tolak-` + response.bookingan[key].id +
                            `" tabindex="-1" aria-labelledby="exampleModalLabel"` +
                            `aria-hidden="true">` +
                            `<div class="modal-dialog">` +
                            `<div class="modal-content">` +
                            `<form action="{{ url('pembookingan') }}/` + response.bookingan[key].id +
                            `"` +
                            `method="post">` +
                            `@csrf` +
                            `@method('delete')` +
                            `<div class="modal-header">` +
                            `<h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>` +
                            `<button type="button" class="close" data-dismiss="modal" aria-label="Close">` +
                            `<span aria-hidden="true">&times;</span>` +
                            `</button>` +
                            `</div>` +
                            `<div class="modal-body">` +
                            `Yakin menolak bookingan dari ` + response.bookingan[key].username + ` ?` +
                            `</div>` +
                            `<div class="modal-footer">` +
                            `<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>` +
                            `<button type="submit" class="btn btn-danger">Ya</button>` +
                            `</div>` +
                            `</form>` +
                            `</div>` +
                            `</div>` +
                            `</div>`
                        no += 1
                        if (response.bookingan[key].status_booking == 'no') {
                            table += "<tr><td>" + no + "</td>" +
                                "<td>" + response.bookingan[key].username + "</td>" +
                                "<td>" + response.bookingan[key].tanggal_main + "</td>" +
                                "<td>" + response.bookingan[key].jam_main + "</td>" +
                                "<td align='center'><span class='badge bg-warning mr-1'>Menunggu Konfirmasi</span>" +
                                "<span class='badge bg-success mr-1'><a href='" +
                                "{{ url('pembookingan') }}/" + response.bookingan[key]
                                .id + "'>Setujui</a></span>" +
                                "<span class='badge bg-danger mr-1'><a href='' data-toggle='modal' data-target='#tolak-" +
                                response.bookingan[key].id + "'>Tolak</a></span>" +
                                "</td></tr>"
                        } else {
                            table += "<tr><td>" + no + "</td>" +
                                "<td>" + response.bookingan[key].username + "</td>" +
                                "<td>" + response.bookingan[key].tanggal_main + "</td>" +
                                "<td>" + response.bookingan[key].jam_main + "</td>" +
                                "<td align='center'><span class='badge bg-success mr-1'>Disetujui</span>" +
                                "</td></tr>"
                        }
                    }
                    table += "</tbody>"
                    $('#example1').append(table)
                    $('#modal-tolak').append(modal)
                },
                error: function() {
                    console.log('Error')
                }
            })
        });
        //update status bookingan secara realtime
        var setujuiChannel = pusher.subscribe('setujui-channel')
        setujuiChannel.bind('setujui-event', function(data) {
            $.ajax({
                url: "{{ route('lapangan.show', Auth::user()->id) }}",
                type: 'get',
                data: {},
                success: function(response) {
                    if (response.bookingan != null) {
                        if (response.bookingan.status_booking == 'yes') {
                            document.getElementById('menunggu-persetujuan').innerText = "Disetujui"
                        }
                    }
                },
                error: function() {
                    console.log('Error')
                }
            })
        })
    </script>
    @yield('scripts')
</body>

</html>
