<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('img/logo/logo.png') }}" rel="icon">
    <title>WisataNusantara</title>
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ruang-admin.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome-free-6.3.0-web/css/all.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- Sidebar -->

        <!-- TopBar -->
        @include('layouts.navbar')
        <!-- Topbar -->


        <!---Content-->
        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Event</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active" aria-current="page">Event</li>
                </ol>
            </div>


            <!--Row-->
            <div class="card mb-3">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Ubah Data Event</h6>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                       
                        <div class="form-group">
                            <label class="form-label">Nama Objek Wisata</label>
                            <input class="form-control  mb-3" type="text" name="nama_wisata" value="{{ $wisata->nama_wisata }}" disabled>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Kategori</label>
                            <input class="form-control  mb-3" type="text" name="id_kategori" value="{{ $wisata->kategori->kategori }}" disabled>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Lokasi</label>
                            <input class="form-control  mb-3" type="text" name="id_lokasi" value="{{ $wisata->lokasi->nama_lokasi }}" disabled>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Deskripsi</label>
                            <input class="form-control  mb-3" type="text" name="deskripsi" value="{{ $wisata->deskripsi }}" disabled>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Cover</label>
                            <img class="" name="cover"src="{{ asset('images/wisata/' . $wisata->cover) }}" width="300" alt="">    
                        </div>

                        <div class="form-group">
                            <label class="form-label">Event</label>
                            <input class="form-control  mb-3" type="text" name="id_event" value="{{ $wisata->event->nama_event }}" disabled>
                        </div>

                        <div class="from-group">
                            <a href="{{ url('event') }}" class="btn btn-sm btn-outline-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal Logout -->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to logout?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                            <a href="login.html" class="btn btn-primary">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- Content --}}
    </div>



    <!-- Footer -->
    @include('layouts.footer')
    <!-- Footer -->

    {{-- @include('event.modal.show') --}}

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/ruang-admin.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>
