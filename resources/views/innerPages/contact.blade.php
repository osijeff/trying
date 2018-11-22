@extends('layouts.clientNav')
@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-uppercase" >GET IN TOUCH WITH US</h1>
    <p class="lead">We will be glad to meet you</p>
  </div>
</div>
<div class="container shadow-sm p-3 mb-5 bg-white rounded">
    <div class="row">
        <div class="col-md-8">
<form>
    <div class="form-row">
        <div class="col">
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="col">
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" name="messagebody" id="exampleFormControlTextarea1" placeholder="Message" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary ">Submit</button>
 </form>
</div>
 <div class="col-md-4" style="background:rgb(197, 189, 182)">
    <Address>
        <i class="fas fa-map-marker-alt"></i><br>
        110 High Street <br>
        Cnr Kennedy<br>
        Turffontein
        Johannesburg <br>
        South Africa
        2091
    </Address>
    <h4>PLEASE FOLLOW & LIKE US</h4>
    <a href="http://"><i class="fab fa-facebook-square social">
    </i></a>
    <a href="http://"><i class="fab fa-twitter social"></i></a>
    <a href="http://"><i class="fab fa-instagram social"></i></a>
 </div>
 </div>
</div>
 @include('partials.foot')
@endsection


