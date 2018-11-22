@extends('layouts.clientNav')

@section('content')

<div id="myCarousel" class="carousel slide bg-inverse w-100 ml-auto mr-auto "  data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/hero-1.jpg" alt="First slide">
       <div class="carousel-caption">
          <h3> You are welcome</h3>
          <p>come as you</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/hero-2.jpg" alt="Second slide">
       <div class="carousel-caption">
          <h3>First slide</h3>
          <p>This is the first slide.</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/hero-5.jpg" alt="Third slide">
       <div class="carousel-caption">
          <h3>First slide</h3>
          <p>This is the first slide.</p>
        </div>
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="images/hero-4.jpg" alt="fouth slide">
       <div class="carousel-caption">
          <h3>First slide</h3>
          <p>This is the first slide.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
 </div>
 
<!--  about us section -->

@include('partials.aboutsection')
@include('partials.upcoming')
@include('partials.foot')
@endsection

