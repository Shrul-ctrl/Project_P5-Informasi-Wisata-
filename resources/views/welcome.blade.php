@extends('user_leyouts.app')


<div class="content-1 card text-bg-dark">
    <img src="{{ asset('images/banner.png') }}" class="card-img" alt="...">
    <div class="card-img-overlay">
        @include('user_leyouts.navbar')
        <div class="container">

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
                <h1 class=" display-1 text-light">JAWA </h1>
                <h1 class=" display-1 text-light">TENGAH</h1>
                <a href="{{ url('/wisatas') }}" class="btn btn-outline-light stretched-link text-light">Baca
                    Selengakpnya <i? class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="content-2 row justify-content-center">
        <div class="col-4 text-dark ">
            <div class="row">
                <h1 class="font col-12 display-6">AWESOME </h1>
                <h2 class="font col-12 display-6"> COUNTRY</h2>

                <div class="content-row row">
                    <div class="col display-6 text-secondary">
                        <span>715+</span>
                        <h6>bahasa</h6>
                    </div>
                    <div class="col order-5 display-6 text-secondary">
                        <span>17k+</span>
                        <h6>Pulau</h6>
                    </div>
                    <div class="col order-5 display-6 text-secondary">
                        <span>127+</span>
                        <h6>Pegunungan</h6>
                    </div>
                </div>
            </div>
            <a href="{{ url('/wisatas') }}" class="btn btn-outline-dark stretched-link">Baca Selengakpnya</a>
        </div>
        <div class="content-img col-4 text-dark">
            <img src="images/z-2.jpeg" class="rounded1 mx-auto d-block shadow-lg" alt="...">
            <img src="images/z-1.jpeg" class="rounded2 mx-auto d-block shadow-lg" alt="...">
            <img src="images/z-3.webp" class="rounded3 mx-auto d-block shadow-lg" alt="...">
        </div>
    </div>
</div>

<div class="container ">
    <div class="clearfix shadow-lg">
        <img src="images/slider-4.jpg" class="col-md-6 float-md-start pt-4" alt="...">
        <div class="content-2 pt-4" align="center">
            <h1 class="font col-12 display-6">JAWA </h1>
            <h2 class="font col-12 display-6"> TENGAH</h2>
        </div>

        <p class="m-4">
            Provinsi Jawa Tengah (disingkat Jateng, bahasa Jawa: ꦗꦮꦶꦩꦢꦾ, Pegon: جاوي مـديا, translit. Jawi Madya) adalah
            sebuah wilayah provinsi di Indonesia yang terletak di bagian tengah Pulau Jawa. Ibu kota Provinsi Jawa
            Tengah berada di Kota Semarang. Provinsi ini berbatasan dengan Provinsi Jawa Barat di sebelah barat, Samudra
            Hindia beserta Daerah Istimewa Yogyakarta di sebelah selatan, Provinsi Jawa Timur di sebelah timur dan Laut
            Jawa di sebelah utara. Luas total wilayahnya 32.800,69 km², atau sekitar 28,94% dari luas pulau Jawa.
            Provinsi Jawa Tengah juga meliputi Pulau Nusakambangan di sebelah selatan (dekat dengan perbatasan Jawa
            Barat), serta Kepulauan Karimun Jawa di Laut Jawa. Penduduk Provinsi Jawa Tengah berdasarkan Badan Pusat
            Statistik tahun 2021 berjumlah 37.516.035 jiwa dengan kepadatan 1.123,00 jiwa/km²
        </p>

        <p class="m-4">

        </p>

    </div>
</div>

<div class="content-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2 class="display-6">WISATA POPULER</h2>
                    <h6>Jelajahi Provinsi Jawa tengah dengan destinasi wisata populer</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="men-item-carousel">
                    <div class="owl-men-item owl-carousel">
                        @foreach ($wisata as $data)
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{ url('/show', $data->id) }}">
                                        <img src="{{ asset('images/wisata/' . $data->cover) }}" alt=""
                                            class="card-img-top" alt="...">
                                    </a>
                                </div>
                                <div class="down-content">
                                    <h4>{{ $data->nama_wisata }}</h4>
                                    {{-- <span>Tiket masuk 200rb</span> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- rhea template --}}
<div class="container">
    <div class="row mb-5">
        <div class="text-center">
            <h1 class="display-6">SEPUTAR VIEDO JAWA TENGAH</h1>
            <hr class="mx-auto border-danger border-4 opacity-100 my-4" style="width:150px;" />
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="carousel slide" id="carouselExampleIndicators" data-bs-touch="false" data-bs-interval="false">
                <div class="row align-items-center">
                    <div class="col-12 col-xxl-7 px-2">
                        <div class="carousel-inner">
                            <div class="carousel-item active h-100">
                                <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY">
                                    <iframe src="{{ asset('https://www.youtube.com/embed/zLeLttVbFs8') }}"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY">
                                    <iframe src="{{ asset('https://www.youtube.com/embed/YkEd_aorIiI') }}"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY">
                                    <iframe src="{{ asset('https://www.youtube.com/embed/xf86EzuLXu0') }}"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY">
                                    <iframe src="{{ asset('https://www.youtube.com/embed/YkEd_aorIiI') }}"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-xxl-2 pt-3 pt-md-0">
                        <div class="carousel-indicators">
                            <div class="row h-100 w-100">
                                <div class="video col-12 px-1">
                                    <button class="active" type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"><img
                                            class="d-block" src="{{ asset('images/maldives-v.png') }}"
                                            alt="..." /></button>
                                </div>
                                <div class="video col-12 px-1">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"><img class="d-block"
                                            src="{{ asset('images/tanzania.png') }}" alt="..." /></button>
                                </div>
                                <div class="video col-12 px-1">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"><img class="d-block"
                                            src="{{ asset('images/kathmandu-v.png') }}" alt="..." /></button>
                                </div>
                                <div class="video col-12 px-1">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="3" aria-label="Slide 4"><img class="d-block"
                                            src="{{ asset('images/chaina.png') }}" alt="..." /></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 px-xxl-0">
                        <div class="row">
                            <div class="gambar">
                                <div class="card border-0 shadow-none h-100 ">
                                    <div class="card-body">
                                        <p> Pemandangan Jawa Tengah</p>
                                        <p class="card-text">0.20</p>
                                    </div>
                                </div>
                            </div>
                            <div class="gambar">
                                <div class="card border-0 shadow-none h-100 ">
                                    <div class="card-body">
                                        <p>keragaman Jawa Tengah</p>
                                        <p class="card-text">05.24</p>
                                    </div>
                                </div>
                            </div>
                            <div class="gambar">
                                <div class="card border-0 shadow-none h-100 ">
                                    <div class="card-body">
                                        <p>gunuung di Jawa tengah</p>
                                        <p class="card-text">06.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="gambar">
                                <div class="card border-0 shadow-none h-100 ">
                                    <div class="card-body">
                                        <p>Wisata Di Jawa Tengah</p>
                                        <p class="card-text">0.20 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--
    <div class="container">
        <div class="content-4">
            <h1 class="font col-12 display-6 text-center">WISATA TERKENAL </h1>
            <div class="row row-cols-1 row-cols-md-3 g-4">
            
                @foreach ($wisata as $data)
                    
            
                    <div class="col">
                        <div class="card h-100">
                            <div class="img-hover-zoom">
                                <a href="{{ url('/show') }}">
<img src="{{ asset('images/wisata/' . $data->cover) }}" alt="" class="card-img-top" alt="...">
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
</div>


<div class="container">
    <div class="content-4">
        <h1 class="font col-12 display-6 text-center ">EVENT AKAN DATANG</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 shadow-lg">
                    <div class="img-hover-zoom">
                        <img src="img/gunung.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>

                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> --}}




@include('user_leyouts.footer')
