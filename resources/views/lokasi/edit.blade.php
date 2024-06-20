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
                <h1 class="h3 mb-0 text-gray-800">Lokasi</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item">Lokasi</li>
                    <li class="breadcrumb-item active" aria-current="page">Ubah Data Lokasi</li>
                </ol>
            </div>


            <!--Row-->
            <div class="card mb-3">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Ubah Data Lokasi</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('lokasi.update', $lokasi->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="form-label">Nama Lokasi</label>
                            <input class="form-control  mb-3" type="text" name="nama_lokasi" value="{{ $lokasi->nama_lokasi }}" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Provinsi</label>
                            <input class="form-control  mb-3" type="text" name="provinsi" value="{{ $lokasi->provinsi }}" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Kabupaten</label>
                            <input class="form-control  mb-3" type="text" name="kabupaten" value="{{ $lokasi->kabupaten }}" required>
                        </div>



                        <div class="from-group">
                            <a href="{{ url('lokasi') }}" class="btn btn-sm btn-outline-secondary">Cancle</a>
                            <button type="sumbit" class="btn btn-sm btn-success">Simpan</button>
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

    {{-- @include('lokasi.modal.show') --}}

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a> 