@extends('user_leyouts.app')
<div class="content-1 card text-bg-dark">
    <img src="img/Gunung.jpg" class="card-img" alt="...">
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
                <p class=" display-5 text-light text-center">Selamat Datang di<span class="text-danger"> Wisata</span> Nusantara</p>



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
    <div class="content-2">
        <section class="ftco-section services-section">
            <div class="container">
              <div class="row d-flex">
                <div class="col-md-6 order-md-last heading-section pl-md-5 d-flex align-items-center">
                 <div class="w-100">
                  <h3>Tentang Kami</h3>
                  <h2 class="mb-4">Apa itu <span class="text-danger">Wisata</span> Nusantara?</h2>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                  A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                 
                </div>
              </div>
              <div class="col-md-6">
               <div class="row">
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                  <div class="services  services-1 d-block img" style="background-image: url(img/gunung.jpg);filter: brightness(0.6);">
                    <div class="m-5 d-flex align-items-center justify-content-center"></div>
                    <div class="media-body">
                      <h3 class="heading mb-3">Destinasi Wisata</h3>
                      
                    </div>
                  </div>      
                </div>
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                  <div class="services services-1 d-block img" style="background-image: url(img/gunung.jpg);filter: brightness(0.6);">
                    <div class="m-5 d-flex align-items-center justify-content-center"></div>
                    <div class="media-body">
                      <h3 class="heading mb-3">Event</h3>
                      
                    </div>
                  </div>    
                </div>
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                  <div class="services services-1 d-block img" style="background-image: url(img/gunung.jpg);filter: brightness(0.6);">
                    <div class="m-5 d-flex align-items-center justify-content-center"></div>
                    <div class="media-body">
                      <h3 class="heading mb-3">Kebudayaan</h3>
                      
                    </div>
                  </div>      
                </div>
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                  <div class="services services-1 d-block img" style="background-image: url(img/gunung.jpg);filter: brightness(0.6);">
                    <div class="m-5 d-flex align-items-center justify-content-center"></div>
                    <div class="media-body">
                      <h3 class="heading mb-3">Kuliner</h3>
                      
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