@extends('layouts.app')
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
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                <h1 class="h3 mb-0 text-gray-800">Lokasi</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active" aria-current="page">Lokasi</li>
                </ol>
            </div>

            <div class="row">
                <div class="col-lg-12 mb-4">
                    <!-- Simple Tables -->
                    <div class="card">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Tables</h6>
                            <a href="{{ route('lokasi.create') }}" class="btn btn-sm btn-primary">Tambah Data Lokasi</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Aksi</th>
                                        <th>No</th>
                                        <th>Nama Lokasi</th>
                                        <th>Alamat Lengkap</th>
                                        <th>Provinsi</th>
                                        <th>Kabupaten</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1;
                                    @endphp
                                    @foreach ($lokasi as $data)
                                    <tr>
                                        <form action="{{ route('lokasi.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td class="dropdown nav-item no-arrow">
    
                                                <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa-solid fa-list-ul"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                                                    <a class="dropdown-item" href="{{ route('lokasi.edit', $data->id) }}">
                                                        <i class="fa-solid fa-pen-to-square "></i> Edit
                                                    </a>
    
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="{{ route('lokasi.show', $data->id) }}" class="btn btn-sm btn-primary">
                                                        <i class="fa-solid fa-eye "></i> Lihat
                                                    </a>
    
                                                    <div class="dropdown-divider"></div>
                                                    <button type="submit" class="dropdown-item" onclick="return confirm('Apakah anda yakin??')">
                                                        <i class="fa-solid fa-trash "></i> Hapus
                                                    </button>
                                                </div>
                                            </td>
                                        </form>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_lokasi }}</td>
                                        <td>{{ $data->alamat_lengkap }}</td>
                                        <td>{{ $data->provinsi }}</td>
                                        <td>{{ $data->kabupaten }}</td>

                                        <form action="{{ route('lokasi.destroy', $data->id) }}" method="POST">
                                          @csrf
                                          @method('DELETE')

                                       
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

    {{-- @include('lokasi.modal.show') --}}

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a> 