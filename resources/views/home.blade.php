<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/logoo.png" rel="icon">
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

        <!-- Content -->
        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </div>

            <div class="row mb-3">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">TABEL WISATA</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{route('wisata.index')}}">LIHAT TABEL</a></div>
                            <div class="mt-2 mb-0 text-muted text-x">
                              <span class="text-success mr-2"> Jumlah tabel:</span>
                              <span>{{$wisata}}</span>
                            </div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-user fa-2x text-info"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">TABEL EVENT</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{route('event.index')}}">LIHAT TABEL</a></div>
                            <div class="mt-2 mb-0 text-muted text-x">
                              <span class="text-success mr-2"> Jumlah tabel:</span>
                              <span>{{$event}}</span>
                            </div>
                          </div>
                          <div class="col-auto">
                            <i class="fa-regular fa-calendar-days fa-2x fa-solid text-secondary"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">TABEL KATEGORI</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{route('kategori.index')}}">LIHAT TABEL</a></div>
                            <div class="mt-2 mb-0 text-muted text-x">
                              <span class="text-success mr-2"> Jumlah tabel:</span>
                              <span>{{$kategori}}</span>
                            </div>
                          </div>
                          <div class="col-auto">
                            <i class="fa-soild fa-layer-group fa-2x fa-solid text-warning"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">TABEL LOKASI</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{route('lokasi.index')}}">LIHAT TABEL</a></div>
                            <div class="mt-2 mb-0 text-muted text-x">
                              <span class="text-success mr-2"> Jumlah tabel:</span>
                              <span>{{$lokasi}}</span>
                            </div>
                          </div>
                          <div class="col-auto">
                            <i class="fa-solid fa-location-dot fa-2x fa-solid text-success"></i>
                          </div>
                        </div>
                      </div>
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
            <!---Content-->
        </div>

        <!-- Footer -->
        @include('layouts.footer')
        <!-- Footer -->
    </div>
    </div>

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
