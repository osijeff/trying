@extends('layouts.clientNav')
@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-uppercase">welcome to our blog post</h1>
    <p class="lead">Enjoy your ready</p>
  </div>
</div>
<div class="container shadow-sm p-3 mb-5 bg-white rounded">
    <div class="row">
        <div class="col-md-4">
            basic information
        </div>
        <div class="col-md-8">
          details information
        </div>
    </div>
</div>
@include('partials.foot')
@endsection