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
                <h2 class=" display-5 text-light text-center">EVENT</h2>
                <p class=" display-5 text-light text-center">Ayok Segera ikut Eventnya Sebelum ditutup</p>
                


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
    <div class="content-4">
        <h1 class="font col-12 display-6 text-center">Event </h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            
            <div class="col">
                <div class="card h-100">
                    <img src="img/gunung.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
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
        </div>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="{{url('event_id_1')}}">1</a></li>
          <li class="page-item"><a class="page-link" href="{{url('event_id_2')}}">2</a></li>
          <li class="page-item"><a class="page-link" href="{{url('event_id_3')}}">3</a></li>
          <li class="page-item">
            <a class="page-link" href="{{url('id_2')}}">Next</a>
          </li>
        </ul>
      </nav>
      
     
</div>
</div>
 @include('user_leyouts.footer')