@extends('user_leyouts.app')
<div class="content-1 card text-bg-dark">
    <img src="images/services-1.jpg" class="card-img" alt="...">
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
                <h2 class=" display-5 text-light text-center">TENTANG KAMI</h2>
                <p class=" display-5 text-light text-center">Selamat Datang diEksplorasiJawaTengah.com
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="content-5">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
            <li class="breadcrumb-item">Tentang Kami</li>
            {{-- <li class="breadcrumb-item active" aria-current="page">Kategori</li> --}}
        </ol>
    </div>
    <div class="content-7">
        
        <section class="ftco-section services-section">
            <div class="container">
                <div class="row d-flex">
                    
                    <div class="col-md-6 order-md-last heading-section pl-md-4 d-flex align-items-center">
                        <div class="w-100">
                            
                            <h2 class="mb-4">apa itu Eksplorasi JawaTengah.com?</h2>
                            <p>Selamat datang di dunia wisata yang penuh dengan keajaiban alam dan kekayaan budaya! Kami
                                hadir untuk membantu Anda dalam perjalanan tak terlupakan melintasi
                                destinasi-destinasi menakjubkan di seluruh penjuru dunia. Dari puncak gunung yang
                                menjulang hingga lembah yang hijau, dari kota-kota bersejarah hingga desa-desa
                                terpencil, setiap sudut planet ini menyimpan cerita yang menarik dan pengalaman yang
                                mengesankan.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                <div class="services  services-1 d-block img"
                                    style="background-image: url(images/destination-1.jpg);filter: brightness(0.6);">
                                    <div class="m-5 d-flex align-items-center justify-content-center"></div>
                                    <div class="media-body">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                <div class="services services-1 d-block img"
                                    style="background-image: url(images/destination-2.jpg);filter: brightness(0.6);">
                                    <div class="m-5 d-flex align-items-center justify-content-center"></div>
                                    <div class="media-body">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                <div class="services services-1 d-block img"
                                    style="background-image: url(images/destination-3.jpg);filter: brightness(0.6);">
                                    <div class="m-5 d-flex align-items-center justify-content-center"></div>
                                    <div class="media-body">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                <div class="services services-1 d-block img"
                                    style="background-image: url(images/destination-4.jpg);filter: brightness(0.6);">
                                    <div class="m-5 d-flex align-items-center justify-content-center"></div>
                                    <div class="media-body">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    </div>
</div>
</div>
@include('user_leyouts.footer')
