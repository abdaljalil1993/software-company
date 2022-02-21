<!DOCTYPE html>
<html>
<head>
	<title>CitizenShips</title>
	<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css"/>
<!--Floating WhatsApp css-->
<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
<!--Floating WhatsApp javascript-->
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="CitizenShips">
  <meta name="description" content="What are you waiting for? Join us and Get new citizenships fast,easy and very safly">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title" content="What are you waiting for?">
<meta property="og:description" content="Join us and Get new citizenships fast,easy and very safly">
<meta property="og:url" content="https://www.citizenships.ae/">
<meta property="og:site_name" content="citizenships">

<meta name="keywords" content="Programming , 
software , 
php,
laravel , 
android , 
ios , 
website,
wordpress,
make website ,
 build android application , 
 building flutter application , 
 buoding ERB System , 
 Design App , 
 Building UI/UX , 
 Building IOS Application , " />


<style type="text/css">


      * {
  margin: 0;
  padding: 0;
}

body {
  position: relative;
  /*background: url('http://thecodeplayer.com/u/m/b1.png') no-repeat center center fixed;*/
  /*background-size: cover;*/
  min-width: 500px;
  min-height: 200px;
  /*color: #fff;*/
  font-family: 'Montserrat';
  height:100vmax;
}

.bars {
  /*   background-color:pink; */
  position: absolute;
  width: 27px;
  height: 27px;
  top: 30px;
  right: 30px;
  cursor: pointer;
  z-index: 101;
  padding-top:9px;
}

.bar {
  width: 100%;
  height: 4px;
  background-color: #fff;
  position: absolute;
}

span::before,
span::after {
  content: "";
  display: block;
  background-color: #fff;
  width: 100%;
  height: 4px;
  position: absolute;
}

.bar::before {
  transform: translateY(-9px);
}

.bar::after {
  transform: translateY(9px);
}

.bars.active .bar {
  background-color: transparent;
}

.bars.active span::before {
  animation: top-bar 1s;
  animation-fill-mode: forwards;
}

.bars.active span::after {
  animation: bottom-bar 1s;
  animation-fill-mode: forwards;
}


/* Navbar Links CSS */

#nav {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  transition: all 1s;
  z-index: -1;
  overflow: hidden;
  opacity: 0;
}

#nav a {
  color: #fff;
  text-decoration: none;
  line-height: 70vw;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  text-indent: 50vw;
  border-radius: 50%;
  transition: all .5s;
}

#nav a:hover {
  background: #357FFD;
}

ul {
  list-style: none;
}

.visible {
  z-index: 100 !important;
  opacity: 1 !important;
}

.shape-circle {
  border-radius: 50%;
  width: 20vw;
  height: 20vw;
  top: -10vw;
  right: -10vw;
  position: absolute;
  transition: all 1s ease-in-out;
  background: #2979FF;
  box-shadow: 0 0px 0px rgba(4, 26, 62, 0.5);
}

nav.visible li:first-child {
  width: 200vw;
  height: 200vw;
  top: -100vw;
  right: -100vw;
  z-index: 5;
  transition: all .5s ease-in-out;
  box-shadow: 0 0px 80px rgba(4, 26, 62, 0.5);
}

nav.visible li:nth-child(2) {
  width: 150vw;
  height: 150vw;
  top: -75vw;
  right: -75vw;
  z-index: 6;
  transition: all .6s ease-in-out;
  box-shadow: 0 0px 80px rgba(4, 26, 62, 0.5);
}

nav.visible li:nth-child(3){
  width: 100vw;
  height: 100vw;
  top: -50vw;
  right: -50vw;
  z-index: 7;
  transition: all .7s ease-in-out;
  box-shadow: 0 0px 80px rgba(4, 26, 62, 0.5);
}

nav.visible li:nth-child(4){
  width: 50vw;
  height: 60vw;
  top: -25vw;
  right: -25vw;
  z-index: 8;
  transition: all .7s ease-in-out;
  box-shadow: 0 0px 80px rgba(0, 0, 0, 0.5);
}


nav.visible li:nth-child(5){
  width: 25vw;
  height: 25vw;
  top: -0vw;
  right: -0vw;
  z-index: 9;
  transition: all .7s ease-in-out;
  box-shadow: 0 0px 80px rgba(0, 0, 0, 0.5);
}



nav.visible li:last-child{
  width: 50vw;
  height: 50vw;
  top: -25vw;
  right: -25vw;
  z-index: 8;
  transition: all .8s ease-in-out;
  box-shadow: 0 0px 80px rgba(4, 26, 62, 0.5);
}

nav.visible li:first-child a {
  line-height: 260vw !important;
    text-indent: 15vw !important;

}

nav.visible li:nth-child(2) a {
  line-height: 190vw !important;
  text-indent:17vw !important;
}

nav.visible li:nth-child(3) a {
  line-height: 167vw !important;
    text-indent: 17vw !important;
  
}

nav.visible li:nth-child(4) a {
  line-height: 147vw !important;
    text-indent: 17vw !important;
  
}

nav.visible li:nth-child(5) a {
  line-height: 107vw !important;
    text-indent: 17vw !important;
  
}

nav.visible li:last-child a {
  line-height: 90vw !important;
  text-indent:12vw !important;
}


/* Main Body CSS */

.container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
}

h1 {
  font-size: 60px;
  text-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
  text-transform: uppercase;
  font-size: 120px;
  letter-spacing:5px;
  padding-top:40px;
}

article p {
  padding-bottom: 15px;
  text-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

article a {
  color: #fff;
  text-decoration: none;
  opacity: .2;
  font-size: 12px;
}

article a:hover {
  opacity: .8;
}

@keyframes top-bar {
  50% {
    transform: translateY(0);
  }
  100% {
    transform: rotate(45deg) translateY(0);
  }
}

@keyframes bottom-bar {
  50% {
    transform: translateY(0);
  }
  100% {
    transform: rotate(-45deg) translateY(0);
  }
}


@media screen and (max-width:800px) {

  h1 {
    padding-top:80px;
    font-size: 60px;
  }
}



	html {
  scroll-behavior: smooth;
}

	body{
		margin: 0;
		padding: 0;
	}

	.top-bar{
		width: 100%;
		background-color: #112159;
		height: 40px;
		padding: 3px;
		color: #D69B25;
		font-weight: bold;

	}
	.social1{
		float: left;
		padding: 5px;
		list-style-type: none;
	}
.social1 li {
		float: left;
		margin-right: 8px;
	}
	.social{
		float: right;
		padding: 5px;
		list-style-type: none;
	}
	.social li {
		float: left;
		margin-right: 8px;
	}

	.mynav{
		background-color:rgba(108,113,131,0.8);
		width: 100%;
	}

	.mynav nav{
		width: 100%;
	}
.a:hover{
	color: red;
}
.x:hover{
	background-color: rgb(214,155,37);


}

.x:focus{
	background-color: rgb(214,155,37);
}

.about{
	width: 100%;
	height: 300px;
	margin-top: 10px;
	display: block;
}


.image-container {
    position: relative;
    width: 100%;
    
}
.image-container .after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: block;
   background-color:rgba(10,54,108,0.8);
    color: #FFF;
}

.c{
	box-shadow: 0px 0px 3px 3px #cecece;
}
.c:hover{
	box-shadow: 0px 0px 4px 4px #D69B25;
	margin-top: -5px;
	transition: .4s ease;
}

.img-thumbnail{
	width: 190px;
	height: 100px;
}



</style>

</head>
<body>



<div class="container-fluid top-bar" >
		<span style="margin-left: 25px"> <i style="color:#D69B25;font-size: 21px; " class=" fab fa-whatsapp"></i> +971 253 654 888</span>

			&nbsp;	&nbsp;	&nbsp;


		

		<ul class="social">

			<li><a href="#"><i style="color:#D69B25;font-size: 20px; " class=" fab fa-facebook"></i></a></li>
			<li><a href="#"><i style="color:#D69B25;font-size: 20px; " class=" fab fa-twitter"></i></a></li>
			<li><a href="#"><i style="color:#D69B25;font-size: 20px; " class=" fab fa-youtube"></i></a></li>
			<li><a href="#"><i style="color:#D69B25;font-size: 20px; " class=" fab fa-instagram"></i></a></li>
		</ul>
		<a class="btn btn-outline-warning btn-sm" style="float: right;" href="login.php">Admin</a>

    <div class="bars" id="nav-action">
  <span class="bar"> </span>
</div>
	</div>

<div style="background-image: url('images/dominica-photo-1.jpg');background-repeat: no-repeat;background-size: cover;background-attachment: fixed;  ">
<div style="background-color:rgba(10,54,108,0.2);width: 100%">
	<div class="mynav">
	<nav id="nav" class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#" style="color: #E7E7E8; font-size: 23px;"> <img src="images/logo.png" alt="citizenships logo" style="width: 80px;height: 80px;"> CitizenShips</a>
  <button style="border-color: #D69B25;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" ></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="shape-circle circle-one" >
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
  
      <li class="shape-circle circle-two">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="#pro">Country</a>
      </li>
        <li class="shape-circle circle-three">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="#about">About Us</a>
      </li>
        <li class="shape-circle circle-five">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="#part">Partner</a>
      </li>

        <li class="shape-circle circle-six">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="#test">Testimonials</a>
      </li>
      <li class="shape-circle circle-seven">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="blog.php">Blog</a>
      </li>
    </ul>
  <!--   <a class="btn btn-outline-warning my-2 my-sm-0 mr-2" href="#book">Book Consultation</a>
         <a class="btn btn-outline-warning my-2 my-sm-0" href="#contact">Contact Us</a> -->

  </div>
</nav>
</div>

<div style="height: 8px;"></div>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div style="background-color: rgba(255,255,255,0.0);" id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
<!--   <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol> -->
  <div class="carousel-inner" >
    <div class="carousel-item active">
      
     <div class="text-center" >
       <img alt="citizenships logo" src="images/logo.png" style="width: 240px;height: 240px;">
       <br>
       
        <br>
        <br>
        <br>
      </div>
    </div>
    <div class="carousel-item">
     
      
     <div class="text-center" >
     <img alt="citizenships logo" src="images/logo.png" style="width: 240px;height: 240px;">
       <br>
       
        <br>
        <br>
        <br>
      </div>
    </div>
    <div class="carousel-item">
     
      
     <div class="text-center" >
       <img alt="citizenships logo" src="images/logo.png" style="width: 240px;height: 240px;">
       <br>
       
        <br>
        <br>
        <br>
      </div>
     
    </div>
  </div>
  
</div>
	</div>
	<div class="col-md-2"></div>
</div>



</div>
<!-- background-color:rgba(108,113,131,0.8); -->
</div>





<div>
<div class="container" style="height: 150px;margin-top: -60px;margin-bottom: 20px;position: relative;display: block;">

	<div class="row">
		<!-- sttart first item -->
		<div class="col-4 mb-3">
			<div style=" background-color:rgba(255,255,255,0.97);border-radius: 10px;padding: 10px;height: 190px;word-wrap: break-word;border:1px solid #D69B25; overflow: hidden;">
				<i class="fa fa-flag" style="color:#D69B25;font-size: 35px;"></i><br>
				<h3>Our Value</h3>
				<p>is to be a globally admired and locally trusted Citizenship by Investment partner by ensuring every client receives the world-class service we believe they deserve</p>

			</div>
		</div>
		<!-- end first item -->
		<!-- sttart first item -->
		<div class="col-4  mb-3">
			<div style=" background-color:rgba(255,255,255,0.97);border-radius: 10px;padding: 10px;height: 190px;word-wrap: break-word;border:1px solid #D69B25; overflow: hidden;">
				<i class="fa fa-book" style="color: #D69B25;font-size: 35px;"></i><br>
				<h3>Our Mision</h3>
				<p>Our Mission is to deliver first class citizenship to all our investors by doing things differently</p>

			</div>
		</div>
		<!-- end first item -->


		<!-- sttart first item -->
		<div class="col-4 mb-3">
			<div style=" background-color:rgba(255,255,255,0.97);border-radius: 10px;padding: 10px;height: 190px;word-wrap: break-word;border:1px solid #D69B25; overflow: hidden;">
				<i class="fa fa-edit" style="color: #D69B25;font-size: 35px;"></i><br>
				<h3>Our Vision</h3>
				<p>is to be a globally admired and locally trusted Citizenship by Investment partner by ensuring every client receives the world-class service we believe they deserve.</p>

			</div>
		</div>
		<!-- end first item -->
	</div>

</div>





































<div style="height: 60px;"></div>

<div  class=" container-fluid about" id="about" style="background-image: url('images/about-bg.png');background-size: cover;background-repeat: no-repeat;">
	<br>

	<h1 class="text-center text-uppercase" style="color: #21537C;font-size: 30px;font-weight: bold;">About Us</h1>
<div class="container" >
	<div class="row">
	<div class="col-md-6">
			<p class="text-justify" style="font-size: 20px;">Our business is helping our clients gain a second passport and become citizens of the world. Our services include taking care of all the details you need to take advantage of citizenship by investment, residency programs, legal services, and more.
</p>
	</div>
	<div class="col-md-6">
			<p class="text-justify" style="font-size: 20px;">We are a Citizen by Investment Unit “CBIU” Authorized Agent and since 2020 we have successfully filled several Dominica Second Citizenship Applications.
</p>
	</div>

	
</div>
</div>
</div>
<div style="height: 120px;"></div>
<div style="margin: 8px auto;height: 40px;text-align: center;">
	<a style=" font-weight: bold;" href="#" class="btn btn-outline-primary btn-lg">Contact  Us</a>
</div>


</div>

<div style="height: 100px;"></div>
<h1 class="text-center " style="color: #21537C;font-size: 30px;font-weight: bold;font-style: italic;"> Partners </h1>


<br>
<div class="container" id="part">
	<p class="text-justify text-center">We are always looking for ways to build relationships and partnerships with other businesses across the globe. If your clientele consists of high net worth individuals with a constant need to travel for business or pleasure, we can help you expand your offering to include citizenship. If you think we might be a good fit, please email us at info@citizenships.ae</p>
	<br>
	<div id="gallery" style="height: 150px;width: 100%" class="carousel slide" data-ride="carousel">

<ol class="carousel-indicators">
          <li style="color: red;background-color: #21537C" data-target="#gallery" data-slide-to="0" class="active"></li>
        
         
        </ol>


    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col">
                    <img alt="partner image" class="img-fluid img-thumbnail" src="images/111.jpg" alt="Image 1"/>
                </div>

                <div class="col">
                    <img alt="partner image"  class="img-fluid img-thumbnail" src="images/11.jpg" alt="Image 2"/>
                </div>

                <div class="col">
                    <img alt="partner image"  class="img-fluid img-thumbnail" src="images/1111.jpg" alt="Image 3"/>
                </div>

                <div class="col">
                    <img alt="partner image"  class="img-fluid img-thumbnail" src="images/11111.jpg" alt="Image 4"/>
                </div>

             
            </div>
        </div>

       
    </div>

    
</div>
</div>

<div style="height: 154px;"></div>
<div class="container">
	
	<h1 class="text-center text-uppercase" id="pro" style="color: #21537C;font-weight: bold;font-size: 30px;">Programs</h1>
	<br>




<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->


  <!-- The slideshow -->
  <div class="carousel-inner" style="box-shadow: 0px 0px 16px 16px #cecece;background-color: rgb(255,255,255);padding: 12px;border-radius: 9px;border:1px solid gold">
    <div class="carousel-item active text-center carousel-fade">
     <div style="">
     	<img src="images/dom.png" style="width: 300px;height: 200px;">
     	<h1>Commonwealth of Dominica</h1>
     	<p class="text-justify">Dominica, island country of the Lesser Antilles in the eastern Caribbean Sea. It lies between the French islands of Guadeloupe and Marie-Galante to the north and Martinique to the south. Dominica has been nicknamed the "Nature Isle of the Caribbean" for its natural environment, and known for its luscious vegetation, stunning national parks and beautiful white sandy beaches, making it the epitome of a tropical paradise</p>
     </div>
    </div>
   




<div class="carousel-item text-center carousel-fade" >
     <div style="">
     	<img src="images/st.png" style="width: 300px;height: 200px;">
     	<h1>Saint Kitts and Nevis</h1>
     	<p class="text-justify">Dominica, island country of the Lesser Antilles in the eastern Caribbean Sea. It lies between the French islands of Guadeloupe and Marie-Galante to the north and Martinique to the south. Dominica has been nicknamed the "Nature Isle of the Caribbean" for its natural environment, and known for its luscious vegetation, stunning national parks and beautiful white sandy beaches, making it the epitome of a tropical paradise</p>
     </div>
    </div>


  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<!-- <div class="row">
	<div class="col-md-6">
			<div class="card c mb-4" >
  <div class="card-body">
    <h5 class="card-title"><img src="images/dom.png" style="width: 150px;height: 75px;"></h5>
    <h4 class="card-subtitle mb-2" style="color:#D69B25 ">Commonwealth of Dominica</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    <a href="#pr" class="btn btn-outline-warning btn-lg">Read More</a>

  </div>
</div>
	</div>



<div class="col-md-6">
			<div class="card c mb-4" >
  <div class="card-body">
    <h5 class="card-title"><img src="images/st.png" style="width: 150px;height: 75px;"></h5>
    <h4 class="card-subtitle mb-2" style="color:#D69B25 ">Saint Kitts and Nevis</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     <a href="#pr" class="btn btn-outline-warning btn-lg">Read More</a>

  </div>
</div>
	</div> -->





<!-- <div class="col-md-6">
			<div class="card c mb-4" >
  <div class="card-body">
    <h5 class="card-title"><i class="fa fa-book" style="color: #D69B25;font-size: 50px;"></i></h5>
    <h4 class="card-subtitle mb-2" style="color:#D69B25 ">Our Values</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

  </div>
</div>
	</div>

	<div class="col-md-6">
			<div class="card c mb-4" >
  <div class="card-body">
    <h5 class="card-title"><i class="fa fa-edit" style="color: #D69B25;font-size: 50px;"></i></h5>
    <h4 class="card-subtitle mb-2" style="color:#D69B25 ">Partnership</h4>
    <p class="card-text">We are always looking for ways to build relationships and partnerships with other businesses across the globe.</p>

  </div>
</div>
	</div>

 -->

<!-- </div>
 -->
</div>




<!-- <div style="height: 300px;background-image: url('images/1.jpg');background-repeat: no-repeat;background-size: cover;">
	
</div> -->
<div style="height: 80px;"></div>
<div class="image-container" id="book">
    <img alt="book consultation image hero-bg" src="images/hero-bg.jpg" style="width: 100%;height: 340px;" />
    <div class="after">
    	<div class="container">
    		<div style="height: 80px;"></div>
    		<div class="row">
    			<div class="col-md-10">
    				<h2  class="text-warning">Book a Free Consultation</h2>
    				<p class="text-justify">set us apart from others operating in the same space. The standards by which we operate are based on the interests of our clients. They enable us to deliver what our brand promises.</p></div>
    			<div class="col-md-2">
    				<a  href="book.php" class="btn btn-outline-warning btn-lg" style="border-radius: 10px;">Book Now  </a>
    			</div>
    		</div>
    	</div>
    </div>
</div>

<div class="container">
	<div style="height: 100px;"></div>
<h1 class="text-center " id="pr" style="color: #21537C;font-size: 30px;font-weight: bold;">Our Programs </h1>
<br>
		<h4 class="" style="color: #21537C">Commonwealth of Dominica
Citizenship by Investment
</h4>
<br>
	<div class="row">


		<div class="col-md-6  ">
			
				<p class="text-justify" style="line-height: 28px;">
				<span style="color:#21537C;font-size: 20px;font-weight: bold; ">Dominica</span>, island country of the Lesser Antilles in the eastern Caribbean Sea.<br> It lies between the French islands of Guadeloupe and Marie-Galante to the north and Martinique to the south.<br> Dominica has been nicknamed the "Nature Isle of the Caribbean" for its natural environment, and known for its luscious vegetation, stunning national parks and beautiful white sandy beaches, making it the epitome of a tropical paradise. <br>
				Introduced in 1993 by the Government, the Commonwealth of Dominica citizenship by investment (Dominica’s passport) program is one of the longest-running programs in the world.
As an applicant, you must be at least 18 years of age, of good health and without a criminal record.
Additionally, you are required to make a non-refundable donation to the government or make an investment in government-approved real estate projects.

			</p>
			
		</div>
		<div class="col-md-6 ">

<img src="images/map.jpg" style="width: 100%;height: 400px;">
				
				
				<!-- <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d585475.4362585711!2d-61.15699428912953!3d15.41528173151624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c14d2faf2155a15%3A0x49b39109053afd3c!2z2K_ZiNmF2YrZhtmK2YPYpw!5e0!3m2!1sar!2s!4v1617837849812!5m2!1sar!2s" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
		</div>


<div style="height: 80px;"></div>

<div class="col-md-12">
<h4 style="color: #21537C">Why a Second Passport Program</h4>

	<p class="text-justify">a second citizenship is essential in today's world. it gives you options in life. It opens doors around the world. It gives you choices in how you travel, conducts business, pays taxes, and live your life.
Dominica grants you 
a lifetime citizenship that can be passed on to future generations by descent. 
No language or residency requirement in order to get its Citizenship. 
you won’t need to denounce your current nationality 
</p>


</div>


<div style="height:140px;"></div>

<div class="col-md-6">
	<div style="height: 40px;"></div>
<h4 style="color: #21537C">Key Program Highlights</h4>

<ul style="list-style-type: none;">
	<li ><i class="fa fa-angle-double-right"></i> Single applicant starts from $100,000.</li>
	<li><i class="fa fa-angle-double-right"></i> 34th passport rank worldwide.</li>
	<li><i class="fa fa-angle-double-right"></i> 143+ Visa-free countries.</li>
	<li><i class="fa fa-angle-double-right"></i> 3-4 months to complete.</li>
	<li><i class="fa fa-angle-double-right"></i> No restrictions on nationality.</li>
</ul>


</div>
<div style="height: 70px;"></div>
<div class="col-md-6">
	<div style="height: 40px;"></div>
<h4 style="color: #21537C">Dominica’s passport, Citizenship by Investment (CBI) options:</h4>

<ul style="list-style-type: none;">
	<li ><i class="fa fa-angle-double-right"></i> Non-refundable donation starts with 100.000$ to the government</li>
	<li><i class="fa fa-angle-double-right"></i> Real-estate investment starts with 200.000$.</li>

</ul>

</div>

<div class="col-md-12">
	<div style="height: 70px;"></div>
<h4 style="color: #21537C">Dominica’s passport TimeLine .</h4>
<img alt="dominica passport time line"  src="images/t.png" style="width: 100%">
	<div style="height: 70px;"></div>
	<h1>Benefits</h1>
</div>

<br>
<br>


<div class="col-md-6">
	
<h4 style="color: #21537C">Commonwealth Country</h4>

<p class="text-justify">Meaning that Citizens of Dominica will reap related benefits to commonwealth countries such as a strong passport and access to some of the best international education and health institutes.</p>

</div>

<div class="col-md-6">
<h4 style="color: #21537C">Visa-free travel</h4>

<p class="text-justify">The 34th passport ranking (Henley passport index) visa-free and visa-on-arrival travel to over 143 countries and territories including The Schengen area, and the United Kingdom..</p>

</div>



<div class="col-md-6">
	<div style="height: 30px;"></div>
<h4 style="color: #21537C">Guaranteed by law</h4>

<p class="text-justify">The program is 100% legit and it’s guaranteed by the government since 1993.</p>

</div>



<div class="col-md-6">
	<div style="height: 30px;"></div>
<h4 style="color: #21537C">Straightforward process</h4>

<p class="text-justify">Smooth and straightforward process with a time frame from 4 to 6 months to your new citizenship and passport.</p>

</div>
		


<div class="col-md-6">
	<div style="height: 30px;"></div>
<h4 style="color: #21537C">Tax relief</h4>

<p class="text-justify">No personal or worldwide income tax</p>

</div>
		
	<div class="col-md-6">
	<div style="height: 30px;"></div>
<h4 style="color: #21537C">Minimal residency required</h4>

<p class="text-justify">There are no landing or residency required, you are entitled to apply instantly.</p>

</div>
			




	<div class="col-md-6">
	<div style="height: 30px;"></div>
<h4 style="color: #21537C">Dual Citizenship permitted</h4>

<p class="text-justify">Dual citizenship permitted, there is no need to renounce your current citizenship, and your home authorities are not notified of your new citizenship.</p>

</div>



	<div class="col-md-6">
	<div style="height: 30px;"></div>
<h4 style="color: #21537C">No special requirements</h4>

<p class="text-justify">No education or management experience required</p>

</div>






<div class="col-md-6">
	<div style="height: 30px;"></div>
<h4 style="color: #21537C">The most economic citizenship invest</h4>

<p class="text-justify">The investment amount is very low in comparison to other citizenship by investment programs</p>

</div>











	<!-- row -->
	</div>


	<div class="row">
		
<div style="height:140px;"></div>

<div class="col-md-6">
	<div style="height: 40px;"></div>
<h4 style="color: #21537C">Program eligibility and requirements:</h4>

<ul style="list-style-type: none;">
	<li ><i class="fa fa-angle-double-right"></i> 	+18 years.</li>
	<li><i class="fa fa-angle-double-right"></i> Good health.</li>
	<li><i class="fa fa-angle-double-right"></i> No criminal record.</li>
	<li><i class="fa fa-angle-double-right"></i>To pass security checks.</li>
	<li><i class="fa fa-angle-double-right"></i>	Receive government approval.</li>

		<li><i class="fa fa-angle-double-right"></i>12 months bank statement stamped or a confirmed source of the investment.</li>
	<li><i class="fa fa-angle-double-right"></i>Spouse of the main applicant .</li>
	<li><i class="fa fa-angle-double-right"></i>Dependent children under 30 years.</li>
	<li><i class="fa fa-angle-double-right"></i>Dependent parents +55 years.</li>
</ul>


</div>
<div style="height: 70px;"></div>
<div class="col-md-6">
	<div style="height: 40px;"></div>
<h4 style="color: #21537C">Required Documents:</h4>

<ul style="list-style-type: none;">
	<li ><i class="fa fa-angle-double-right"></i>Copy of your: Passport, ID, Driver’s License, and Birth Certificate</li>
	<li><i class="fa fa-angle-double-right"></i>Copy of Proof of Address (Utility bill, Tenancy Contract or House registration)</li>

	<li><i class="fa fa-angle-double-right"></i>Copy of Marriage Certificate/Dissolution of Marriage (if required)</li>

	<li><i class="fa fa-angle-double-right"></i>Police Certificate from (Country of birth, Citizenship, and Residence)</li>

	<li><i class="fa fa-angle-double-right"></i>Letter of Employment or Trade License and company registration</li>

	<li><i class="fa fa-angle-double-right"></i>Twelve (12) passport size photos for each applicant (white background)</li>

	<li><i class="fa fa-angle-double-right"></i>One Professional reference letter (Doctor, Lawyer, or Certified Accountant)</li>

	<li><i class="fa fa-angle-double-right"></i>Two (2) Personal references letters</li>

		<li><i class="fa fa-angle-double-right"></i>12 Months Bank Statement stamped (original)</li>


<li><i class="fa fa-angle-double-right"></i>	Medical Exams Report</li>

	<li><i class="fa fa-angle-double-right"></i>All Government Forms (We will supply you with them to be signed)</li>

		<li><i class="fa fa-angle-double-right"></i>	Copy of University Degree/ College Diploma</li>

			<li><i class="fa fa-angle-double-right"></i>	Copy of your Resume</li>

		<li><i class="fa fa-angle-double-right"></i>	School/University enrollment confirmation for dependents</li>

</ul>

</div>


<!-- row -->
	</div>


	<!-- container -->
</div>

<div style="height: 30px;"></div>
<div class="container" id="cc">
	<h2>Free Visa Countries  </h2>
	<br>
	<div class="row">

		<div class="col-md-5">
			<div class="card">
				<div class="card-header">
					<h3>Commonwealth of Dominica</h3>
					<img src="images/ff.jpg" style="width: 100%;height: 200px;">
				</div>
				<div class="card-body">
					<h4>Ranked 34th in 2021</h4>
					<hr>
					more than 140+ free visa access

				</div>
			</div>
		</div>

		<div class="col-md-7 text-center">
			<div id="xx" class="row" style="display: none;">
				<div class="col-md-3">
					
					<p>
						
<span class="text-white bg-primary" style="font-size: 20px; padding: 6px; font-weight: bold;border-radius: 5px;">Middle East</span>
<hr>


Armenia 
<hr>
Iran 
<hr>
Israel
<hr>
Jordan
<hr>
Palestinian Territory
<hr>
<span class="text-white bg-primary" style="font-size: 20px; padding: 6px; font-weight: bold;border-radius: 5px;">America</span>
<hr>
Argentina
<hr>
Belize
<hr>
Bermuda
<hr>
Bolivia 
<hr>
Brazil
<hr>
Colombia
<hr>
Costa Rica
<hr>
Ecuador
<hr>
French Guiana
<hr>
Guyana
<hr>
Nicaragua 
<hr>
Panama
<hr>
Peru
<hr>
Suriname
<hr>
Uruguay
<hr>
Venezuela
<hr>

					</p>


				</div>





				<div class="col-md-3">
					<p>
						
<span class="text-white bg-primary" style="font-size: 20px; padding: 6px; font-weight: bold;border-radius: 5px;">caribbean</span>
<hr>

Anguilla<hr>
Antigua and Barbuda<hr>
Aruba<hr>
Bahamas<hr>
Barbados<hr>
Bonaire; St. Eustatius and Saba<hr>
British Virgin Islands<hr>
Cayman Islands<hr>
Cuba<hr>
Curacao<hr>
Dominican Republic<hr>
French West Indies<hr>
Grenada<hr>
Haiti<hr>
Jamaica<hr>
Montserrat<hr>
St. Kitts and Nevis<hr>
St. Lucia<hr>
St. Maarten<hr>
St. Vincent and the Grenadines<hr>
Trinidad and Tobago<hr>
Turks and Caicos Islands<hr>



						
<span class="text-white bg-primary" style="font-size: 20px; padding: 6px; font-weight: bold;border-radius: 5px;">asia</span>
<hr>

Bangladesh<hr>
Cambodia <hr>
Hong Kong (SAR China)<hr>
Indonesia<hr>
Laos<hr>
Macao (SAR China)<hr>
Malaysia<hr>
Maldives <hr>
Nepal <hr>
Philippines<hr>
Singapore<hr>
South Korea<hr>
Sri Lanka<hr>
Timor-Leste <hr>
Uzbekistan<hr>
					</p>
				</div>






				<div class="col-md-3">
<span class="text-white bg-primary" style="font-size: 20px; padding: 6px; font-weight: bold;border-radius: 5px;">africa</span>
<hr>
					
Botswana<hr>
Cape Verde Islands<hr>
Comores Islands<hr>
Egypt<hr>
Eswatini (Swaziland)<hr>
Gambia<hr>
Guinea-Bissau <hr>
Kenya<hr>
Lesotho<hr>
Madagascar<hr>
Malawi
Mauritania <hr>
Mauritius<hr>
Mayotte<hr>
Mozambique <hr>
Reunion<hr>
Rwanda <hr>
Senegal <hr>
Seychelles <hr>
Sierra Leone <hr>
Somalia <hr>
St. Helena <hr>
Tanzania<hr>
Togo <hr>
Uganda <hr>
Zambia<hr>
oceania<hr>
Cook Islands<hr>
Fiji<hr>
French Polynesia<hr>
Micronesia<hr>
New Caledonia<hr>
Niue<hr>
Palau Islands <hr>
Samoa <hr>
Solomon Islands<hr>
Tonga <hr>
Tuvalu <hr>
Vanuatu<hr>
				</div>


				<div class="col-md-3">
<span class="bg-primary text-white" style="font-size: 20px; padding: 6px; font-weight: bold;border-radius: 5px;">europe</span>
<hr>
					
Andorra<hr>
Austria<hr>
Belarus<hr>
Belgium<hr>
Bosnia and Herzegovina<hr>
Bulgaria<hr>
Croatia<hr>
Cyprus<hr>
Czech Republic<hr>
Denmark<hr>
Estonia<hr>
Faroe Islands<hr>
Finland<hr>
France<hr>
Germany<hr>
Gibraltar<hr>
Greece<hr>
Greenland<hr>
Hungary<hr>
Iceland<hr>
Ireland<hr>
Italy<hr>
Kosovo<hr>
Latvia<hr>
Liechtenstein<hr>
Lithuania<hr>
Luxembourg<hr>
Malta<hr>
Moldova<hr>
Monaco<hr>
Montenegro<hr>
Netherlands<hr>
Norway<hr>
Poland<hr>
Portugal<hr>
Romania<hr>
Russian Federation<hr>
San Marino<hr>
Serbia<hr>
Slovakia<hr>
Slovenia<hr>
Spain<hr>
Sweden<hr>
Switzerland<hr>
Ukraine<hr>
United Kingdom<hr>
Vatican City<hr>
				</div>
			</div>
			<br>
			<button id="bb" class="btn btn-outline-primary btn-block btn-lg">Read More</button>
		</div>

	</div>
</div>

<div style="height: 30px;"></div>
<div style="background-image: url('images/rrr.jpg');background-size: cover;background-attachment: fixed;background-repeat: no-repeat;">
	
<div style="width: 100%;  background-color:rgba(10,54,108,0.7);" >
		<div class="container-fluid">
			<div style="height: 30px;"></div>
		<div class="row">

			<div class="col-md-1"></div>
			<div class="col-md-10 col-sm-12" id="test">
				<h1 class="text-center text-white" >Testimonials</h1>
				<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class=" mb-3">
							
								<!-- <img alt="testimonails image" src="images/11111.jpg" style="width: 100px;height: 100px;" class="rounded-circle"> -->
								<span style="font-size: 20px;font-weight: bold;color: #fff">Fadi </span>
								
							
									<p class="text-justify text-white">" Thanks For Grate service "</p></div>
						
									</div>


								<div class="col-md-6 col-sm-12">
									<div class=" mb-3">
							
								<!-- <img alt="testimonails image" src="images/1111.jpg" style="width: 100px;height: 100px;" class="rounded-circle"> -->
								<span style="font-size: 20px;font-weight: bold;color: #fff">Nadia</span>
								
							
							<p class="text-justify text-white">" your company is the best "</p></div>
								
							</div>




							<div class="col-md-6 col-sm-12">
								<div class=" mb-3">
							
								<!-- <img alt="testimonails image" src="images/111.jpg" style="width: 100px;height: 100px;" class="rounded-circle"> -->
								<span style="font-size: 20px;font-weight: bold;color: #fff">Adam </span>
								
							
							<p class="text-justify text-white">" thansk good job. i'm happy to work with your company "</p></div>
									
							</div>



							<div class="col-md-6 col-sm-12">
							<div class=" mb-3">
								
									<!-- <img alt="testimonails image" src="images/11.jpg" style="width: 100px;height: 100px;" class="rounded-circle"> -->
									<span style="font-size: 20px;font-weight: bold;color: #fff">jony</span>
									
								
								<p class="text-justify text-white">" the best service in the best company "</p></div>
							
							</div>















				</div>
				
			
			</div>
			<div class="col-md-1"></div>
			
		</div>
	</div>
</div>
</div>
<div style="height: 50px;"></div>
<div style="background-image: url('images/contact-bg.png');background-repeat: no-repeat;">
	<div style="height: 40px"></div>
<div class="container" id="contact">
	<h1 class="text-center" style="color: #21537C">Contact Us</h1>
	<div class="row">
		<div class="col-md-6">
			<i class="fa fa-map-marker-alt" style="font-size: 30px;color:#21537C "></i>
			<span style="font-size: 30px;color:#21537C;letter-spacing: 3px; ">&nbsp; Dubai-Ontariow Tower</span>
			<hr>

			<i class="fa fa-envelope" style="font-size: 30px;color:#21537C "></i> 
			<span style="font-size: 30px;color:#21537C;letter-spacing: 3px; ">&nbsp; info@citizenships.ae</span>
			<hr>

				<i class="fa fa-phone" style="font-size: 30px;color:#21537C "></i> 
			<span style="font-size: 30px;color:#21537C;letter-spacing: 3px; ">&nbsp; +971 235 588 888</span>
			<hr>


				<i class="fab fa-facebook" style="font-size: 30px;color:#21537C "></i> 
			<span style="font-size: 30px;color:#21537C;letter-spacing: 3px; "> <a style="color:#21537C " href="#">&nbsp; Citizenships</a></span>
			<hr>
		</div>
		<div class="col-md-6">
			<form>
						
						
			 <input type="text" placeholder="Your name  " class="form-control" name="n"><br>


			 <input type="text" placeholder="Email : email@example.com " class="form-control" name="e"><br>
		
			 <input type="text" placeholder="Subject of Message " class="form-control" name="s"><br>
					  <textarea class="form-control" name="msg" placeholder="your message "></textarea><br>

					  <input type="submit" name="btn" class="btn btn-primary" value="Send Message">

			</form>
		</div>

		<div class="col-12">
			<div style="height: 20px;"></div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2146.8398945733625!2d55.26353254472015!3d25.185007562600976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f69d1072028f7%3A0x19654903c833b04!2sBACT%20Training!5e0!3m2!1sar!2s!4v1618095933938!5m2!1sar!2s"  style="border:0;width: 100%;height: 400px;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>
</div>
</div>




<div style="height: 80px;"></div>
<div style="background-image: url('images/rrr.jpg');background-size: cover;background-attachment: fixed;background-repeat: no-repeat;">
	
<div style="width: 100%;  background-color:rgba(10,54,108,0.7);" >
		<div class="container-fluid" style="padding-bottom:8px;">
    		<div style="height: 30px;"></div>
    		<div class="row">
    			<div class="col-md-3 col-sm-12">
    				<h3 style="color: white;">UseFull Links</h3>
    				<ul style="list-style-type: none;">
	<li ><i class="fa fa-angle-double-right text-warning"></i> <a style="color: white" class=" " href="">Home</a> </li>
	<li><i class="fa fa-angle-double-right text-warning"></i> <a href=""><a style="color: white;" href="">About Us</a></a></li>
	<li><i class="fa fa-angle-double-right text-warning"></i> <a style="color: white;" href="">Book Consultation</a></li>
	<li><i class="fa fa-angle-double-right text-warning"></i><a style="color: white;" href="">Our Programs</a></li>
	<li><i class="fa fa-angle-double-right text-warning"></i><a style="color: white;" href="">Contact Us</a></li>

</ul>
    			</div>

    			<div class="col-md-3 col-sm-12">
    						<h3 style="color: white;">Our Services</h3>
    				<ul style="list-style-type: none;">
	<li style="color: white;"><i class="fa fa-angle-double-right text-warning"></i>New Passport </li>
	<li style="color: white;"><i class="fa fa-angle-double-right text-warning"></i> New CitizenShips</li>
	<li style="color: white;"><i class="fa fa-angle-double-right text-warning"></i>New Life Start</li>
	<li style="color: white;"><i class="fa fa-angle-double-right text-warning"></i>Full Support</li>
	<li style="color: white;"><i class="fa fa-angle-double-right text-warning"></i>100% Secure and Safty</li>

</ul>
    			</div>

    			<div class="col-md-3 col-sm-12">
    				<h3 style="color: white;">About Us </h3>
    				<p class="text-justify" style="color: white;">
    					Our business is helping our clients gain a second passport and become citizens of the world. Our services include taking care of all the details you need to take advantage of citizenship by investment, residency programs, legal services, and more.
    				</p>
    				<a href="" class="btn btn-outline-warning">Read More</a><br>
    			</div>

    			<div class="col-md-3 col-sm-12">
    				
    					<h3 style="color: white;">Contact Us </h3>
    				<p style="color: white;" class="text-justify">
    					you can Contact Us Via Emai , Phone 
    					Or You Can Follow Us On Social Media To Keep In Touch

    				</p>
    						<ul class="social1">
			<li><a href="#"><i style="color:#D69B25;font-size: 21px; " class=" fab fa-facebook"></i></a></li>
			<li><a href="#"><i style="color:#D69B25;font-size: 21px; " class=" fab fa-twitter"></i></a></li>
			<li><a href="#"><i style="color:#D69B25;font-size: 21px; " class=" fab fa-youtube"></i></a></li>
			<li><a href="#"><i style="color:#D69B25;font-size: 21px; " class=" fab fa-instagram"></i></a></li>
			<li><a href="#"><i style="color:#D69B25;font-size: 21px; " class=" fab fa-youtube"></i></a></li>
			<li><a href="#"><i style="color:#D69B25;font-size: 21px; " class=" fab fa-linkedin"></i></a></li>
		</ul>
    			</div>
    		
    		</div>
    	</div>
    </div>
</div>

<div style="height: 40px;background-color:#10305a;padding-top: 6px; ">
	<p class="text-center text-warning">All Right Reserved To CitizenShips <i class="fa fa-heart"></i> 2021</p>

</div>

 <div id="WAButton"></div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!--Floating WhatsApp javascript-->
<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
<script type="text/javascript">
	$(function() {
  $('#WAButton').floatingWhatsApp({
    phone: '00963988582010', //WhatsApp Business phone number International format-
    //Get it with Toky at https://toky.co/en/features/whatsapp.
    headerTitle: 'Chat with us on WhatsApp!', //Popup Title
    popupMessage: 'Hello, how can we help you?', //Popup Message
    showPopup: true, //Enables popup display
    buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
    //headerColor: 'crimson', //Custom header color
    //backgroundColor: 'crimson', //Custom background button color
    position: "left"    
  });
});



	$(document).ready(function(){
		$("#bb").click(function(){
			$("#xx").slideToggle(1000);
		});
	});
</script>

<script type="text/javascript">
  // Setting up the Variables
var bars = document.getElementById("nav-action");
var nav = document.getElementById("nav");


//setting up the listener
bars.addEventListener("click", barClicked, false);


//setting up the clicked Effect
function barClicked() {
  bars.classList.toggle('active');
  nav.classList.toggle('visible');
}
</script>
</body>
</html>