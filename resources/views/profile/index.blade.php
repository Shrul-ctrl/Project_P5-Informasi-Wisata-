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
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </div>

        <div class="profile card mb-4 mx-auto items-center">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
              
            </div>
            <img class="img-profile rounded-circle" src="{{asset("img/boy.png")}}">
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="{{ Auth::user()->name }} " disabled> 
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      placeholder="{{ Auth::user()->email }} " disabled> 
                  </div> 
                <a href="{{route('home')}}" class="btn btn-primary">Back</a>
              </form>
            </div>
          </div>


    </div>
    {{-- Content --}}
</div>



<!-- Footer -->
@include('layouts.footer')
<!-- Footer -->

{{-- @include('kategori.modal.show') --}}

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
