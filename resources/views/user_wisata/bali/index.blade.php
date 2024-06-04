@extends('user_leyouts.app')
<div class="content-1 card text-bg-dark">
    <img src="{{asset('images/header-bali-nusa-tenggara.avif')}}" class="card-img" alt="...">
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
                <li class="breadcrumb-item">Bali</li>
                {{-- <li class="breadcrumb-item active" aria-current="page">Kategori</li> --}}
            </ol>
        </div>

        <div class="judul">
            <h1 class="a">Bali & Nusa Tenggara: The Charm of Indonesia's Southeastern Archipelago</h1>
            <p>Dengan bentangan gugusan pulau dari Sabang hingga Merauke, Indonesia memiliki keberagaman wisata alam,
                budaya, hingga kuliner yang menggoda. Ramah tamah warga lokal yang membuat wisatawan nyaman dan merasa di
                kampung halaman juga semakin indah ketika unsur adat istiadat tradisional yang masih autentik dikenalkan.
                Selain itu, kekayaan flora serta fauna langka nan memesona pun tak kalah seru untuk menambah daftar
                pengalaman terbaik yang bisa dirasakan saat menjelajahi Indonesia. Semua keindahan ini cuma bisa ditemukan
                #DiIndonesiaAja.</p>
            <hr class="border-dark border-2 ">
            <h1 class="b">Telusuri Wisata diBali</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-5 g-4">
            @foreach ($bali as $data)
                <div class="col">
                    <div class="card h-100">
                        <div class="img-hover-zoom">
                            <a href="{{ url('wisatas/bali/show' , $data->id) }}">
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
