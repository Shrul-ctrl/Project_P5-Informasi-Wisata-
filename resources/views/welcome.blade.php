@extends('user_leyouts.app')


<div class="content-1 card text-bg-dark">
    <img src="img/Gunung.jpg" class="card-img" alt="...">
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
                <a href="{{url('/wisatas')}}" class="btn btn-outline-light stretched-link text-light">Baca Selengakpnya <i?
                        class="fa-solid fa-arrow-right"></i></a>
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
            <a href="{{url('/wisatas')}}" class="btn btn-outline-dark stretched-link">Baca Selengakpnya</a>
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
            A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're adding
            quite a few meaningless phrases here to demonstrate how the columns interact here with the floated Lorem
            ipsum dolor sit amet consectetur adipisicing elit. Expedita veniam id magnam cum illo itaque. Sed dolore
            tempora voluptatibus neque ipsum autem ipsam deserunt vero nostrum ut, aperiam dolorum? Tempore, adipisci.
            Quaerat magni maxime ex exercitationem vel, at voluptas dicta aperiam! Tempore ducimus aliquid numquam
            facere, exercitationem rem blanditiis quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet similique iste dignissimos corrupti inventore eos animi molestias? Quia harum amet ratione reprehenderit illum, itaque nihil accusamus repellendus sequi aspernatur laboriosam deleniti autem incidunt corporis eveniet, ut exercitationem eum sit ipsum.
        </p>

        <p class="m-4">
            gracefully wrap around the floated image. As you can see the paragraphs gracefully wrap around the floated
            image. Now imagine how this would look with some actual content in here, rather than just this boring
            placeholder text that goes on and on, but actually conveys no tangible information at. It simply takes up
            space and should not really be read.
        </p>

    </div>
</div>

<div class="container">
    <div class="content-4">
        <h1 class="font col-12 display-6 text-center">WISATA TERKENAL </h1>
        {{-- <div class="row row-cols-1 row-cols-md-3 g-4">
         
                <div class="col">
                    <div class="card h-100">
                        <div class="img-hover-zoom">
                            <a href="{{ url('/show') }}">
                                <img src="{{ asset('images/wisata/' . $welcome->cover) }}" alt=""
                                    class="card-img-top" alt="...">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $welcome->nama_wisata }}</h5>
                        </div>
                    </div>
                </div>
            
        </div> --}}
        
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
</div>
</div>

@include('user_leyouts.footer')

{{-- script --}}
