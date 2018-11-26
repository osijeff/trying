


<template>
<div>
    <nav class="navbar navbar-expand-lg navbar-light clientnav bg-light">
  <a class="navbar-brand" href="#">THE APOSTOLIC CHURCH LAWNA <br>SOUTH AFRICA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">	History</a>
          <a class="dropdown-item" href="#">Our believes</a>
          <a class="dropdown-item" href="#">Leadership</a>
          <a class="dropdown-item" href="#">National excutives</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Ministries
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Men's movement</a>
          <a class="dropdown-item" href="#">women's movement</a>
          <a class="dropdown-item" href="#">youth's movement</a>
          <a class="dropdown-item" href="#">chlidren's movement</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Resources
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">National Subscription</a>
          <a class="dropdown-item" href="#">gallery</a>
          <a class="dropdown-item" href="#">Events</a>
          <a class="dropdown-item" href="#">Audio Podcast</a>
          <a class="dropdown-item" href="#">Announcement</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">News</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li> 
    </ul>
     <ul class="navbar-nav ml-auto">
       <li class="nav-item">
          <button class="btn btn-outline-success my-2 my-sm-0">
        <a class="nav-link" href="">
           Online Giving
        </a>
        </button>
      </li>
    </ul>
  </div>
 </nav>
</div>

</template>

<script>
    export default {
       data: function () {
    return {
       
      }
  }
    }
</script>

<style>

.clientnav{
  text-transform: uppercase;
  background-color: grey!important;
  color: whitesmoke!important;
  transition-duration: 4s;
  transition-delay: 2s;

}
.clientnav ul li a{
  color: white!important;
  
}
.clientnav ul li a:hover{
  background-color: rgb(104, 96, 96)!important;
}
.dropdown-menu{
  background-color: darkgray!important;
}
.dropdown-menu a:hover{
color: rgb(37, 34, 34)!important;
}
</style> 



