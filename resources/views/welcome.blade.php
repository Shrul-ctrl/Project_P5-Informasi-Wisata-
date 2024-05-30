<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .content-1 img {
        width: 210vh;
        height: 100vh;
        object-fit: cover;
        filter: brightness(0.6);
    }

    .font h1 {
        font-size: 120px;
        position: relative;
        top: 4rem;
        margin-bottom: -45px;
    }

    .font a {
        position: relative;
        top: 8rem;
    }

    .font hr {
        position: relative;
        top: 13rem;
    }

    .content-2 {
        margin-top: 100px;
    }

    .content-2 h1 {
        position: relative;
        left: -110px;

    }

    .content-2 h2 {
        position: relative;
        margin-bottom: 30px;
    }

    .content-row span {
        position: relative;
        left: -110px;
        font-size: 32px;

    }

    .content-row h6 {
        position: relative;
        left: -110px;
        font-size: 13px;
    }

    .content-2 a {
        margin-top: 80px;
        margin-left: 3rem;
    }

    .content-img .rounded1 {
        height: 300px;
        width: 200px;
        object-fit: cover;
        position: absolute;
        z-index: 3;
    }

    .content-img .rounded2 {
        height: 250px;
        width: 200px;
        object-fit: cover;
        position: absolute;
        top: 48rem;
        right: 20rem;
        z-index: 2;
    }

    .content-img .rounded3 {
        height: 200px;
        width: 200px;
        object-fit: cover;
        position: absolute;
        position: absolute;
        top: 50rem;
        right: 13rem;
        z-index: 1;
    }

    .clearfix {
        margin-top: 200px;
    }

    .clearfix img {
        width: 40rem;
        padding-right: 30px;
    }

    .content-4 {
        margin-top: 100px;
        margin-bottom: 100px;
    }

</style>
<body>



    {{-- navbar --}}



    <div class="content-1 card text-bg-dark">
        <img src="img/Gunung.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
            <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed">
                <div class="container">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Event</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tentang Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
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
                    <a href="#" class="btn btn-outline-light stretched-link">Baca Selengakpnya <i class="fa-solid fa-arrow-right"></i></a>


                    <div class="row gx-0">
                        <div class="col">
                            <hr class="border-danger border-2 ">
                        </div>
                        <div class="col">
                            <hr class="border-light border-2 ">
                        </div>
                        <div class="col">
                            <hr class="border-danger border-2 ">
                        </div>
                    </div>
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
                <a href="#" class="btn btn-outline-dark stretched-link">Baca Selengakpnya</a>
            </div>
            <div class="content-img col-4 text-dark">
                <img src="img/Gunung.jpg" class="rounded1 mx-auto d-block" alt="...">
                <img src="img/Gunung.jpg" class="rounded2 mx-auto d-block" alt="...">
                <img src="img/Gunung.jpg" class="rounded3 mx-auto d-block" alt="...">
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="clearfix">
            <img src="img/Gunung.jpg" class="col-md-6 float-md-start mb-3 ms-md-3" alt="...">
            <div class="content-2" align="center">
                <h1 class="font col-12 display-6">TENTANG </h1>
                <h2 class="font col-12 display-6"> INDONESIA</h2>
            </div>

            <p>
                A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're adding quite a few meaningless phrases here to demonstrate how the columns interact here with the floated image.
            </p>

            <p>
                gracefully wrap around the floated image. As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with some actual content in here, rather than just this boring placeholder text that goes on and on, but actually conveys no tangible information at. It simply takes up space and should not really be read.
            </p>

        </div>
    </div>

    <div class="container">
        <div class="content-4">
            <h1 class="font col-12 display-6 text-center">WISATA TERKENAL </h1>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="img/gunung.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-body row">
                            <div class="col-sm-8 text-secondary">Tiket Masuk</div>
                            <div class="col-sm-3 text-secondary"><a href="" class="btn-outline-dark" >Detail</a></div>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/gunung.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/gunung.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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

    <footer class="sticky-footer bg-dark text-light">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>copyright &copy; <script>
                        document.write(new Date().getFullYear());
    
                    </script> - developed by
                    <b><a href="" target="_blank">Faiz</a></b>
                </span>
            </div>
        </div>
    </footer>


    {{-- script --}}
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
