@extends('user_leyouts.app')
<div class="content-1 card text-bg-dark">
    <img src="images/destination-5.jpg" class="card-img" alt="...">
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

            <div class="font">
                <h2 class=" display-5 text-light text-center">DESTINASI WISATA</h2>
                <p class=" display-5 text-light text-center">Nikmati Keindahan Alam DiIndonesia</p>



                
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="content-4">
        <div class="">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                <li class="breadcrumb-item">Wisata</li>
                {{-- <li class="breadcrumb-item active" aria-current="page">Kategori</li> --}}
            </ol>
        </div>

        <div class="judul">
            <h1 class="a">Apa yang menjadikan negara ini tempat yang indah untuk dikunjungi.</h1>
            <p>Bersinggah di berbagai tempat di Indonesia menjadikan negara ini tempat yang indah untuk dikunjungi.
                Keindahan pemandangan alam yang indah berpadu dengan berbagai keunikan budaya masyarakatnya. Nikmati
                pantai-pantai yang belum terjamah, gunung-gunung, danau-danau, dan masih banyak lagi destinasi menarik
                lainnya serta pemandangan kota-kota yang indah di seluruh negeri. Dan ketika Anda memutuskan untuk
                melihat semuanya, kunjungan saja tidak akan cukup untuk menikmati keajaiban Indonesia.</p>
            <hr class="border-dark border-2 ">
            <h1 class="b">Jelajahi Berbagai Wisata diIndonesia sesuai kategori</h1>
        
     
            
      
        <div class="row row-cols-1 row-cols-md-3 g-4">
               @foreach ($kategori as $data )
            <div class="col">
                <div class="card h-100">
                    <div class="img-hover-zoom">
                        <a href="{{ url('wisatas/sumatera/show' , $data->id) }}">
                            <img src="{{ asset('images/kategori/' . $data->gambar) }}" alt=""
                                class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">{{$data->kategori}}</h5>
                    </div>
                </div>
            </div>
             @endforeach
        </div>
     
        {{-- <h1 class="b">Jelajahi Berbagai Wisata diIndonesia sesuai provinsi</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <div class="img-hover-zoom">
                        <a href="{{ url('wisatas/jawa') }}">
                            <img src="images/java.jpg" alt="" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">JAWA</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="img-hover-zoom">
                        <a href="{{ url('wisatas/bali') }}">
                            <img src="images/bali.jpg" alt="" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">BALI & NUSA TENGGARA</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="img-hover-zoom">
                        <a href="{{ url('wisatas/maluku') }}">
                            <img src="images/maluku.jpg" alt="" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Maluku & Papua</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="img-hover-zoom">
                        <a href="{{ url('wisatas/kalimantan') }}">
                            <img src="images/kalimantan.jpg" alt="" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Kalimantan</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="img-hover-zoom">
                        <a href="{{ url('wisatas/sulawesi') }}">
                            <img src="images/Sulawesi.jpg" alt="" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Sulawesi</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="img-hover-zoom">
                        <a href="{{ url('wisatas/sumatera') }}">
                            <img src="images/Sumatera.jpg" alt="" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Sumatera</h5>
                    </div>
                </div>
            </div>
        </div> --}}
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
