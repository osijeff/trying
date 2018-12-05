<section id="feedback">
  <div class="container feedback">
    <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
      data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
      <div class="testimonial4_header">
        <h4>What are client are saying</h4>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#testimonial4" data-slide-to="0" class="active"></li>
        <li data-target="#testimonial4" data-slide-to="1"></li>
        <li data-target="#testimonial4" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="testimonial4_slide">
            <img src="images/f1.jpg" class="img-circle img-responsive" />
            <p>Lorem ipsum dolor sit amet adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis
              arcu ornare laoreet urabitur.</p>
            <h4>Rayan Hooda</h4>
          </div>
        </div>
        <div class="item">
          <div class="testimonial4_slide">
            <img src="images/f2.jpg" class="img-circle img-responsive" />
            <p>Lorem ipsum dolor sit amet adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis
              arcu ornare laoreet urabitur.</p>
            <h4>Debjyoti Das</h4>
          </div>
        </div>
        <div class="item">
          <div class="testimonial4_slide">
            <img src="images/f3.jpg" class="img-circle img-responsive" />
            <p>Lorem ipsum dolor sit amet adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis
              arcu ornare laoreet urabitur.</p>
            <h4>Teema Hanna</h4>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#testimonial4" role="button" data-slide="prev">
        <span class="fa fa-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#testimonial4" role="button" data-slide="next">
        <span class="fa fa-chevron-right"></span>
      </a>
    </div>

  </div>

</section>
<style>
csss========================================== #feedback{
width: 100%;
padding-top: 2em;
background: rgb(250, 250, 250) url(https://superdevresources.com/wp-content/uploads/2015/12/new-york-background.jpg)
no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
height: 600px;

}
.feedback{
text-align: center;
font-family: 'Open Sans', sans-serif;
color: #fff;
background: rgba(22,22,22, 0.5);
border-radius: 5px;
padding-bottom: 32px;
height: auto;
}


#testimonial4{
overflow: hidden;
min-height: 375px;
position: relative;
background:#63009E;
background: url(../image/background.jpg);
background-size:cover;

}
#testimonial4 .carousel-inner{
width: 75%;
margin: auto;
}
#testimonial4 .carousel-inner:hover{
cursor: -moz-grab;
cursor: -webkit-grab;
}
#testimonial4 .carousel-inner:active{
cursor: -moz-grabbing;
cursor: -webkit-grabbing;
}
#testimonial4 .carousel-inner .item{
overflow: hidden;
}

.testimonial4_indicators .carousel-indicators{
left: 0;
margin: 0;
width: 100%;
font-size: 0;
height: 20px;
bottom: 15px;
padding: 0 5px;
cursor: e-resize;
overflow-x: auto;
overflow-y: hidden;
position: absolute;
text-align: center;
white-space: nowrap;
}
.testimonial4_indicators .carousel-indicators li{
padding: 0;
width: 10px;
height: 10px;
border: none;
text-indent: 0;
margin: 2px 3px;
cursor: pointer;
display: inline-block;
background: #ffffff;
-webkit-border-radius: 100%;
border-radius: 100%;
}
.testimonial4_indicators .carousel-indicators .active{
padding: 0;
width: 10px;
height: 10px;
border: none;
margin: 2px 3px;
background-color: #965c10;
-webkit-border-radius: 100%;
border-radius: 100%;
}
.testimonial4_indicators .carousel-indicators::-webkit-scrollbar{
height: 3px;
}
.testimonial4_indicators .carousel-indicators::-webkit-scrollbar-thumb{
background: #eeeeee;
-webkit-border-radius: 0;
border-radius: 0;
}

.testimonial4_control_button .carousel-control{
top: 175px;
opacity: 1;
width: 40px;
bottom: auto;
height: 40px;
font-size: 10px;
cursor: pointer;
font-weight: 700;
overflow: hidden;
line-height: 38px;
text-shadow: none;
text-align: center;
position: absolute;
background: transparent;
border: 2px solid #ffffff;
text-transform: uppercase;
-webkit-border-radius: 100%;
border-radius: 100%;
-webkit-box-shadow: none;
box-shadow: none;
-webkit-transition: all 0.6s cubic-bezier(0.3,1,0,1);
transition: all 0.6s cubic-bezier(0.3,1,0,1);
}
.testimonial4_control_button .carousel-control.left{
left: 7%;
right: auto;
}
.testimonial4_control_button .carousel-control.right{
right: 7%;
left: auto;
}
.testimonial4_control_button .carousel-control.left:hover,
.testimonial4_control_button .carousel-control.right:hover{
color: #000;
background: #fff;
border: 2px solid #fff;
}

.testimonial4_header{
top: 0;
left: 0;
bottom: 0;
width: 550px;
display: block;
margin: 30px auto;
text-align: center;
position: relative;
}
.testimonial4_header h4{
color: #ffffff;
font-size: 30px;
font-weight: 600;
position: relative;
letter-spacing: 1px;
text-transform: uppercase;
}

.testimonial4_slide{
top: 0;
left: 0;
right: 0;
bottom: 0;
width: 70%;
margin: auto;
padding: 20px;
position: relative;
text-align: center;
}
.testimonial4_slide img {
top: 0;
left: 0;
right: 0;
width: 100px;
height: 100px;
margin: auto;
display: block;
color: #f2f2f2;
font-size: 18px;
line-height: 46px;
text-align: center;
position: relative;
}

.testimonial4_slide p {
color: #ffffff;
font-size: 16px;
margin: 40px 0 20px 0;
}

.testimonial4_slide h4 {
color: #ffffff;
font-size: 24px;
font-weight: bold;
margin-bottom: 30px;
}


@media only screen and (max-width: 480px){
.testimonial4_control_button .carousel-control{
display: none ; /* for prevent dispaly neviagrion button */
}
.testimonial4_header{
width: 95%;
}
.testimonial4_header h4{
font-size: 20px;
}
.testimonial4_slide{
width: 98%;
padding: 5px;
}
}

@media (min-width: 481px) and (max-width: 767px){
.testimonial4_control_button .carousel-control.left{
left: 2%;
}
.testimonial4_control_button .carousel-control.right{
right: 2%;
}
.testimonial4_header{
width: 95%;
}
.testimonial4_slide{
width: 98%;
padding: 5px;
}
}

@media (min-width: 768px) and (max-width: 991px){
.testimonial4_control_button .carousel-control.left{
left: 5%;
}
.testimonial4_control_button .carousel-control.right{
right: 5%;
}
}


@-webkit-keyframes psBoxShadowEffect_2{
0% {
opacity: 0.3;
}
40% {
opacity: 0.5;
-webkit-box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px #ffffff, 0 0 0 10px rgba(255,255,255,0.5);
}
100% {
-webkit-box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 5px 5px #ffffff, 0 0 0 5px rgba(255,255,255,0.5);
-webkit-transform: scale(1.5);
opacity: 0;
}
}
@keyframes psBoxShadowEffect_2{
0% {
opacity: 0.3;
}
40% {
opacity: 0.5;
box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px #ffffff, 0 0 0 10px rgba(255,255,255,0.5);
}
100% {
box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 5px 5px #ffffff, 0 0 0 5px rgba(255,255,255,0.5);
transform: scale(1.5);
opacity: 0;
}
}
@media (max-width: 767px){
.testimonial4_indicators .carousel-indicators li {margin-top: 10px;}
}
.address-icon i{
font-size: 36px;
line-height: 32px;
}
.icons i{
color: #fff;
padding: 8px 0px;
text-align: center;
height: 30px;
width: 30px;
margin-right: 5px;
}
.fa-facebook{
background-color: #3A5A99;
}
.fa-twitter{
background-color: #39CBFA;
}
.fa-linkedin{
background-color: #3D99C0;
}
.fa-github{
background-color: #000;
}
</style>