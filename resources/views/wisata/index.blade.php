<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
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
                <h1 class="h3 mb-0 text-gray-800">Wisata</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active" aria-current="page">Wisata</li>
                </ol>
            </div>

            <div class="row">
                <div class="col-lg-12 mb-4" >
                    <!-- Simple Tables -->
                    <div class="card">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                            <h6 class="m-0 font-weight-bold text-primary">Tables</h6>
                            <a href="{{ route('wisata.create') }}" class="btn btn-sm btn-primary">Tambah Data Wisata</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Wisata</th>
                                        <th>Kategori</th>
                                        <th>Lokasi</th>
                                        <th>Deskripsi</th>
                                        <th>Cover</th>
                                        <th>Event</th>
                                        <th>Aksi</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1;
                                    @endphp
                                    @foreach ($wisata as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_wisata }}</td>
                                        <td>{{ $data->kategori->kategori }}</td>
                                        <td>{{ $data->lokasi->nama_lokasi }}</td>
                                        <td class="col">{{ $data->deskripsi}}</td>
                                        <td>
                                            <img src="{{ asset('images/wisata/' . $data->cover) }}" width="100" alt="">
                                        </td>
                                        <td>{{ $data->event->nama_event}}</td>


                                        <form action="{{ route('wisata.destroy', $data->id) }}" method="POST">
                                          @csrf
                                          @method('DELETE')

                                        <td class="row">
                                            <div class="row p-1">
                                            <a href="{{ route('wisata.edit', $data->id) }}" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="{{ route('wisata.show', $data->id) }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i></a>
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin??')"><i class="fa-solid fa-trash"></i></button>
                                        </div>
                                        </td>
                                      </form>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
            <!--Row-->

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

    {{-- @include('wisata.modal.show') --}}

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
