@extends('user_leyouts.app')
<div class="content-1 card text-bg-dark">
    <img src="images/banner-sumatera-3.avif" class="card-img" alt="...">
    <div class="card-img-overlay">

        <div class="container">
            @include('user_leyouts.navbar')
            <div class="row gx-0">
                <div class="col">
                    <hr class="border-light border-2 ">
                </div>
                <div class="col">
                    <hr class="border-danger border-2 ">
                </div>
                <div class="col">
                    <hr class="border-light border-2 ">
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="content-4">
        <div class="">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ url('wisatas') }}">Wisata</a></li>
                <li class="breadcrumb-item"> Sumatra: Satwa Liar & Keajaiban Alam</li>
                {{-- <li class="breadcrumb-item active" aria-current="page">Kategori</li> --}}
            </ol>
        </div>

        <div class="judul">
            <h1 class="a">Sumatera: Negeri Pegunungan, Pantai dan Ombak
            </h1>
            <p>Sumatra memberi Anda paket tantangan alam yang lengkap, mulai dari kawasan pegunungan Ngarai Sianok hingga pemandangan alam Bintan yang menakjubkan.
                .</p>
            <hr class="border-dark border-2 ">
            <h1 class="b">Telusuri Wisata diSumatera</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-5 g-4">
            @foreach ($sumatera as $data)
                <div class="col">
                    <div class="card h-100">
                        <div class="img-hover-zoom">
                            <a href="{{ url('/show') }}">
                                <img src="{{ asset('images/wisata/' . $data->cover) }}" alt=""
                                    class="card-img-top" alt="...">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->nama_wisata }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="{{ url('event_id_1') }}">1</a></li>
    <li class="page-item"><a class="page-link" href="{{ url('event_id_2') }}">2</a></li>
    <li class="page-item"><a class="page-link" href="{{ url('event_id_3') }}">3</a></li>
    <li class="page-item">
        <a class="page-link" href="{{ url('id_2') }}">Next</a>
    </li>
    </ul>
    </nav> --}}


</div>
</div>
@include('user_leyouts.footer')
