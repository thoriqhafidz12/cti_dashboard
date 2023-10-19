@extends('landing.index')

@section('content')
  <h2 class="text-center">CATALOG</h2>
  
  <div class="container">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner text-center">
        <div class="carousel-item active">
          <img src="https://images.unsplash.com/photo-1502030818212-8601501607a6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5 class="car-h5">Coconut Shell Charcoal</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://www.coirindonesia.com/wp-content/uploads/2021/06/p.cocofiber-1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5 class="car-h5">Coconut Fiber</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://i.pinimg.com/564x/a2/f5/36/a2f5365611d51f80e6e4d71355be807f.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5 class="car-h5">Wood Pellet</h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="row text-center">
      <div class="col">
        <a href="{{ route('list') }}" class="btn btn-warning my-4 text-center" style="color:white">See More</a></div>
    </div>
  </div>

    <div class="container text-center">
      <div class="row justify-content-md-center">
        <div class="col">
          <img src="https://images.unsplash.com/photo-1617014608107-f7dd247f0275?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzd8fGNvYWx8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="" style="max-height: 500px; max-width:500px">
        </div>
        <div class="col">
          <img src="https://images.unsplash.com/photo-1585507002382-11e4878cffca?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNvYWx8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="" style="max-height: 500px; max-width:500px">
        </div>
        <div class="col">
          <img src="https://images.unsplash.com/photo-1602037348227-c874695ca678?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y29hbHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" style="max-height: 500px; max-width:500px">
        </div>
      </div>
    </div>  
    
@endSection
    