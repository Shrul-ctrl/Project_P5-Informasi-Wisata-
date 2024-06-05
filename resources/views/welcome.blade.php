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
                <h1 class=" display-1 text-light">VISIT </h1>
                <h1 class=" display-1 text-light"> INDONESIA</h1>
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
            <h1 class="font col-12 display-6">TENTANG </h1>
            <h2 class="font col-12 display-6"> INDONESIA</h2>
        </div>

        <p class="m-4">
            Indonesia adalah negara kepulauan terbesar di dunia. Indonesia memiliki lebih dari 17.000 pulau, di mana
            hanya sekitar 7.000 pulau yang berpenghuni. Kalimantan, Jawa, Sulawesi, Sumatra dan Papua merupakan pulau
            utama di Indonesia. Selain itu Indonesia juga memiliki pulau-pulau kecil seperti Bali, Karimunjawa, Gili dan
            Lombok yang merupakan tujuan wisata lokal maupun internasional. Ibukota negara Indonesia adalah Jakarta,
            yang terletak di Pulau Jawa.
        </p>

        <p class="m-4">
            Dilihat dari segi geografis, kepulauan Indonesia terletak antara 5° 54′ 08″ bujur utara hingga 11° 08′ 20″
            bujur selatan dan 95°00'38“ sampai 141°01'12“ bujur timur. Beberapa pulau terletak di garis ekuator. Karena
            itu, siang dan malam memiliki waktu yang hampir sama, yaitu 12 jam. Atas dasar letak geografis yang luas,
            wilayah Indonesia dibagi menjadi 3 zona waktu yaitu WIB (Waktu Indonesia Barat), WITA (Waktu Indonesia
            Tengah) dan WIT (Waktu Indonesia Timur). Dari satu pulau ke pulau lainnya dapat terjadi perbedaan waktu
            hingga 8 jam.
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
                        @foreach ( $wisata as $data)
                        <div class="item">
                            <div class="thumb">
                                <a href="{{ url('/show' , $data->id) }}">
                                    <img src="{{ asset('images/wisata/' . $data->cover) }}" alt=""
                                        class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="down-content">
                                <h4>{{$data->nama_wisata}}</h4>
                                <span>Tiket masuk 200rb</span>
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
            <h1 class="display-6">VIEDO INDONESIA</h1>
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
                                    <iframe src="{{ asset('https://www.youtube.com/embed/zLeLttVbFs8') }}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY">
                                    <iframe src="{{ asset('https://www.youtube.com/embed/YkEd_aorIiI') }}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY">
                                    <iframe src="{{ asset('https://www.youtube.com/embed/xf86EzuLXu0') }}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY">
                                    <iframe src="{{ asset('https://www.youtube.com/embed/YkEd_aorIiI') }}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-xxl-2 pt-3 pt-md-0">
                        <div class="carousel-indicators">
                            <div class="row h-100 w-100">
                                <div class="video col-12 px-1">
                                    <button class="active" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"><img class="d-block" src="{{ asset('images/maldives-v.png') }}" alt="..." /></button>
                                </div>
                                <div class="video col-12 px-1">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"><img class="d-block" src="{{ asset('images/tanzania.png') }}" alt="..." /></button>
                                </div>
                                <div class="video col-12 px-1">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"><img class="d-block" src="{{ asset('images/kathmandu-v.png') }}" alt="..." /></button>
                                </div>
                                <div class="video col-12 px-1">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"><img class="d-block" src="{{ asset('images/chaina.png') }}" alt="..." /></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 px-xxl-0">
                        <div class="row">
                            <div class="gambar">
                                <div class="card border-0 shadow-none h-100 py-md-2">
                                    <div class="card-body">
                                        <p> When go to maldives</p>
                                        <p class="card-text">0.20</p>
                                    </div>
                                </div>
                            </div>
                            <div class="gambar">
                                <div class="card border-0 shadow-none h-100 py-md-2">
                                    <div class="card-body">
                                        <p>Tanzania’s deadly pink lake</p>
                                        <p class="card-text">05.24</p>
                                    </div>
                                </div>
                            </div>
                            <div class="gambar">
                                <div class="card border-0 shadow-none h-100 py-md-2">
                                    <div class="card-body">
                                        <p> Top things to do in Kathmandu</p>
                                        <p class="card-text">06.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="gambar">
                                <div class="card border-0 shadow-none h-100 py-md-2">
                                    <div class="card-body">
                                        <p> Exploring China’s creative capital</p>
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
