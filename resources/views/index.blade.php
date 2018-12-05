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
          <h3 class="animated slideInLeft delay-2s"> You are welcome</h3>
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
<!-- @include('partials.upcoming') -->
@include('partials.officers')
<div class=" text-center section-titles" >
  <h2 class="">Here Are Our Upcoming Events</h2> <img src="images/ruler.png" alt="" width="250px;">

</div>
<div class="container" style="margin-top:50px;">
  
<div class="wrapper">
  
<div class="owl-carousel owl-theme">
    <div class="item hvr-grow shadow  mb-5 bg-white rounded">
      <div class="container ">
        <div class="row card-image">
          <div class="time">
            <h4 class="date"><i class="fas fa-calendar-alt" style="margin-right:10px; margin-top:5px;"></i>4th-5th</h2>
            <h4 class="month">DEC-2018</h2>
          </div>
        </div>
        <div class=" ">
          <h1>this is our story</h1>
          <p>fgfuiasg f piuasgfiusdfgsiufgiusgsdgsiubr <br>rwiugrwpiugpwuigpiu </p>
        </div>
        <hr>
        <div class="minister">
          <img src="images/apostle.jpg" width="%" height="50px;" alt=" " style="border-radius:50px;">
          <p class="lead">Apostle G.O Akintola <br>Ministering</p>
        </div>
        <div class="text-center">
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
    <div class="item hvr-grow shadow  mb-5 bg-white rounded">
    <div class="container ">
      <div class="row card-image-1">
        <div class="time">
          <h4 class="date"><i class="fas fa-calendar-alt" style="margin-right:10px; margin-top:5px;"></i>5th-9th</h2>
          <h4 class="month">FEB-2019</h2>
        </div>
      </div>
      <div class=" ">
        <h1>this is our story</h1>
        <p>fgfuiasg f piuasgfiusdfgsiufgiusgsdgsiubr <br>rwiugrwpiugpwuigpiu </p>
      </div>
      <hr>
      <div class="minister">
        <img src="images/apostle.jpg" width="%" height="50px;" alt=" " style="border-radius:50px;">
        <p class="lead">Apostle G.O Akintola <br>Ministering</p>
      </div>
      <div class="text-center">
        <a href="#" class="btn btn-primary">Learn More</a>
      </div>
    </div>
      </div>
    <div class="item hvr-grow shadow  mb-5 bg-white rounded">
      <div class="container ">
        <div class="row card-image">
          <div class="time">
            <h4 class="date"><i class="fas fa-calendar-alt" style="margin-right:10px; margin-top:5px;"></i>21th-224th</h2>
            <h4 class="month">JUN-2019</h2>
          </div>
        </div>
        <div class=" ">
          <h1>this is our story</h1>
          <p>fgfuiasg f piuasgfiusdfgsiufgiusgsdgsiubr <br>rwiugrwpiugpwuigpiu </p>
        </div>
        <hr>
        <div class="minister">
          <img src="images/apostle.jpg" width="%" height="50px;" alt=" " style="border-radius:50px;">
          <p class="lead">Apostle G.O Akintola <br>Ministering</p>
        </div>
      <div class="text-center">
        <a href="#" class="btn btn-primary">Learn More</a>
      </div>
      </div>
    </div>
    <div class="item hvr-grow shadow  mb-5 bg-white rounded">
    <div class="container ">
      <div class="row card-image-1">
        <div class="time">
          <h4 class="date"><i class="fas fa-calendar-alt" style="margin-right:10px; margin-top:5px;"></i>6th-8th</h2>
          <h6 class="month">AUG-2019</h6>
        </div>
      </div>
      <div class=" ">
        <h3>National Convention </h3>
        <p>fgfuiasg f piuasgfiusdfgsiufgiusgsdgsiubr <br>rwiugrwpiugpwuigpiu </p>
      </div>
      <hr>
      <div class="minister">
        <img src="images/apostle.jpg" width="%" height="50px;" alt=" " style="border-radius:50px;">
        <p class="lead">Apostle G.O Akintola <br>Ministering</p>
      </div>
      <div class="text-center">
      <a href="#" class="btn btn-primary">Learn More</a>
      </div>
    </div>
    </div> 
</div>
</div>
</div>
 <!-- <slid-component></slid-component> -->
@include('partials.sermon')
@include('partials.foot') 
@endsection

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="OwlCarousel/dist/owl.carousel.min.js"></script> 
<script>
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    items: 1,
    merge: true,
    loop: true,
    margin: 20,
    video: true,
    lazyLoad: true,
    responsive: true,
    center: true,
    responsive: {
      480: {
        items: 2
      },
     
      600: {
        items: 3
      },
        1000: {
        items: 3
      }
     
    }
  })

});
</script>
<script>
  $(document).ready(function () {
    $('#owl-carousel').owlCarousel({
      items: 1,
      merge: true,
      loop: true,
      margin: 20,
      video: true,
      lazyLoad: true,
      responsive: true,
      center: true,
      responsive: {
        480: {
          items: 3
        },

        600: {
          items: 4
        },

      }
    })

  });
</script>

