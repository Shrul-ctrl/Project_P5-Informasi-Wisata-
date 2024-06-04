@extends('user_leyouts.app')
<div class="content-1 card text-bg-dark">
    <img src="{{asset('images/bromo-header-2.avif')}}" class="card-img" alt="...">
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
    <div class="content-5">
        <div class="">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ url('wisatas') }}">Wisata</a></li>
                <li class="breadcrumb-item"><a href="{{ url('jawa') }}">Jawa</a></li>
                <li class="breadcrumb-item">Candi Borobudur di Indonesia: monumen Budha terbesar</li>
                {{-- <li class="breadcrumb-item active" aria-current="page">Kategori</li> --}}
            </ol>
        </div>

        <div class="judul">
            <h1 class="a">Candi Borobudur di Indonesia: monumen Budha terbesa</h1>
            <hr class="border-dark border-2 ">
            <h2 class="c">{{ $wisata->nama_wisata }}</h2>
        </div>

    </div>
</div>

<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <div class="img-show">
                                <img src="{{ asset('images/wisata/' . $wisata->cover) }}" alt="" class="card-img-top" alt="...">
                            </div>
                           
                        </div>

                        <section id="sejarah">
                            <div class="blog_details">
                                <h1 class="d-inline-block">Sejarah</h1>
                                <p>{{ $wisata->deskripsi }}</p>
                            </div>
                        </section>

                    </article>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">

                    {{-- des --}}
                    @include('user_leyouts.ket_provinsi.deskripsi')
                    {{-- des --}}

                    <section id="event">
                        <aside class="single_sidebar_widget popular_post_widget shadow">
                            <h3 class="widget_title">Events</h3>
                            <div class="media post_item">
                                <img src="{{ asset('images/event/' . $event->foto) }}" alt="">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <a>{{$event->nama_event}}</a>
                                    </a>
                                    <p>{{$event->tanggal}}</p>
                                </div>
                            </div>
                        </aside>
                    </section>

                    {{-- lain --}}
                    @include('user_leyouts.ket_provinsi.lainnay')
                    {{-- lain --}}

                    <section id="galeri">
                       {{-- galeri --}}
                        @include('user_leyouts.ket_provinsi.galeri')
                       {{-- galeri --}}
                    </section>

                </div>
            </div>
        </div>
    </div>

</section>
@include('user_leyouts.footer')
