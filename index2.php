<!DOCTYPE html>
<html>
<head>
	<title>CitizenShips</title>
	<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css"/>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
	}

	.top-bar{
		width: 100%;
		background-color: #21537C;
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
		background-color:rgba(10,54,108,0.6);
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
}


.image-container {
    position: relative;
    width: 100%;
    height: 300px;
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



 /* The side navigation menu */
.sidenav {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: rgba(3,34,88,0.95); /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
} 
</style>

</head>
<body>
	<div class="container-fluid top-bar" >
     <a class="btn btn-warning" style="position: fixed;top:30px;left: 10px;"  onclick="openNav()">Menu</a>
		<span style="margin-left: 30px"> <i style="color:#D69B25;font-size: 21px; " class=" fab fa-whatsapp"></i> +971 253 654 888</span>

			&nbsp;	



		

		<ul class="social">
			<li><a href="#"><i style="color:#D69B25;font-size: 21px; " class=" fab fa-facebook"></i></a></li>
			<li><a href="#"><i style="color:#D69B25;font-size: 21px; " class=" fab fa-twitter"></i></a></li>
			<li><a href="#"><i style="color:#D69B25;font-size: 21px; " class=" fab fa-youtube"></i></a></li>
			<li><a href="#"><i style="color:#D69B25;font-size: 21px; " class=" fab fa-instagram"></i></a></li>
		</ul>
	</div>


   <div id="mySidenav" class="sidenav">



 
   <a href="javascript:void(0)"  class="closebtn" onclick="closeNav()">&times;</a>

  <div class="text-center" style="background-color: #D69B25;color: white">
     <img src="images/logo.png" style="width: 130px; height: 90px;">
   <h3>CitizenShips</h3>
   <hr>
  </div>
  
    <ul style="list-style-type: none;">
      <li class="nav-item active x" >
        <a class="nav-link a" style="color: #fff; font-size: 17px;" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <br>
      <li class="nav-item x">
        <a class="nav-link a" style="color: #fff; font-size: 17px;" href="#">Services</a>
      </li>
        <br>
      <li class="nav-item x">
        <a class="nav-link a" style="color: #fff; font-size: 17px;" href="#">Country</a>
      </li>
        <br>
        <li class="nav-item x">
        <a class="nav-link a" style="color: #fff; font-size: 17px;" href="#">About Us</a>
      </li>
        <br>
        <li class="nav-item x">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="#">Partner</a>
      </li>
        <br>

        <li class="nav-item x">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="#">Our Team</a>
      </li>
        <br>
    </ul>
         <a class="btn btn-outline-warning" href="#">Contact Us</a>


    
</div>

<!-- Use any element to open the sidenav -->


<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

<div style="background-color: #21537C;height: 600px;width: 100%">

<!-- 
	<div class="mynav">
	<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#" style="color: #E7E7E8; font-size: 17px;"> <img src="images/logo.png" style="width: 100px;height: 80px;"> CitizenShips</a>
  <button style="border-color: #D69B25;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" ></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active x" >
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item x">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="#">Services</a>
      </li>
      <li class="nav-item x">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="#">Country</a>
      </li>
        <li class="nav-item x">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="#">About Us</a>
      </li>
        <li class="nav-item x">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="#">Partner</a>
      </li>

        <li class="nav-item x">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="#">Our Team</a>
      </li>
    </ul>
         <a class="btn btn-outline-warning my-2 my-sm-0" href="#">Contact Us</a>

  </div>
</nav>
 </div>
 -->

<div style="height: 8px;"></div>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div style="background-color: rgba(255,255,255,0.0);" id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      
     <div class="text-center" >
       <img src="images/logo.png" style="width: 300px;height: 300px;">
       <br>
        <p style="color:#E7E7E8;font-weight: bold; ">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        <br>
        <br>
        <br>
      </div>
    </div>
    <div class="carousel-item">
     
      
     <div class="text-center" >
     <img src="images/logo.png" style="width: 300px;height: 300px;">
       <br>
        <p style="color:#E7E7E8;font-weight: bold; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure.</p>
        <br>
        <br>
        <br>
      </div>
    </div>
    <div class="carousel-item">
     
      
     <div class="text-center" >
       <img src="images/logo.png" style="width: 300px;height: 300px;">
       <br>
        <p style="color:#E7E7E8;font-weight: bold; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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

<div style="height: 50px;"></div>

<div  class=" container-fluid about" style="background-image: url('images/about-bg.png');background-size: cover;background-repeat: no-repeat;">
	<br>

	<h1 class="text-center text-uppercase" style="color: #21537C;font-size: 30px;font-weight: bold;">About Us</h1>
<div class="container" >
	<div class="row">
	<div class="col-md-6">
			<p class="text-justify">Our business is helping our clients gain a second passport and become citizens of the world. Our services include taking care of all the details you need to take advantage of citizenship by investment, residency programs, legal services, and more.
</p>
	</div>
	<div class="col-md-6">
			<p class="text-justify">We are a Citizen by Investment Unit “CBIU” Authorized Agent and since 2020 we have successfully filled several Dominica Second Citizenship Applications.
</p>
	</div>

	<a style="margin: 2px auto;" href="#" class="btn btn-outline-primary">Contact with Us</a>
</div>
</div>
</div>



<div style="height: 100px;"></div>
<div class="container">
	<hr>
	<h1 class="text-center text-uppercase" style="color: #21537C;font-weight: bold;font-size: 30px;">Services</h1>
	<br>


<div class="row">
	<div class="col-md-6">
			<div class="card c mb-4" >
  <div class="card-body">
    <h5 class="card-title"><i class="fa fa-book" style="color: #D69B25;font-size: 50px;"></i></h5>
    <h4 class="card-subtitle mb-2" style="color:#D69B25 ">Our Vision</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

  </div>
</div>
	</div>



<div class="col-md-6">
			<div class="card c mb-4" >
  <div class="card-body">
    <h5 class="card-title"><i class="fa fa-book" style="color: #D69B25;font-size: 50px;"></i></h5>
    <h4 class="card-subtitle mb-2" style="color:#D69B25 ">Our Mission</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

  </div>
</div>
	</div>





<div class="col-md-6">
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



</div>
</div>




<!-- <div style="height: 300px;background-image: url('images/1.jpg');background-repeat: no-repeat;background-size: cover;">
	
</div> -->
<div style="height: 80px;"></div>
<div class="image-container">
    <img src="images/hero-bg.jpg" style="width: 100%; height: 300px;" />
    <div class="after">
    	<div class="container">
    		<div style="height: 120px;"></div>
    		<div class="row">
    			<div class="col-md-10">
    				<h2  class="text-warning">Book Consultation</h2>
    				<p class="text-justify">set us apart from others operating in the same space. The standards by which we operate are based on the interests of our clients. They enable us to deliver what our brand promises.</p></div>
    			<div class="col-md-2">
    				<a  href="#" class="btn btn-outline-warning" style="border-radius: 10px;">Book a Free Consultation  </a>
    			</div>
    		</div>
    	</div>
    </div>
</div>

<div style="height: 100px;"></div>
<h1 class="text-center " style="color: #21537C">Our Partners <i class="fa fa-users"></i></h1>
<br>
<div class="container">
	<div id="gallery" style="height: 150px;width: 100%" class="carousel slide" data-ride="carousel">

<ol class="carousel-indicators">
          <li style="color: red;background-color: #21537C" data-target="#gallery" data-slide-to="0" class="active"></li>
          <li style="color: red;background-color: #21537C" data-target="#gallery" data-slide-to="1"></li>
         
        </ol>


    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col">
                    <img class="img-fluid img-thumbnail" src="images/1.jpg" alt="Image 1"/>
                </div>

                <div class="col">
                    <img class="img-fluid img-thumbnail" src="images/why-us.jpg" alt="Image 2"/>
                </div>

                <div class="col">
                    <img class="img-fluid img-thumbnail" src="images/cta-bg.jpg" alt="Image 3"/>
                </div>

                <div class="col">
                    <img class="img-fluid img-thumbnail" src="images/cta-bg.jpg" alt="Image 4"/>
                </div>

                <div class="col">
                    <img class="img-fluid img-thumbnail" src="images/1.jpg" alt="Image 5"/>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="row">
                <div class="col">
                    <img class="img-fluid img-thumbnail" src="images/cta-bg.jpg" alt="Image 6"/>
                </div>

                <div class="col">
                    <img class="img-fluid img-thumbnail" src="images/1.jpg" alt="Image 7"/>
                </div>

                <div class="col">
                    <img class="img-fluid img-thumbnail" src="images/cta-bg.jpg" alt="Image 8"/>
                </div>

                <div class="col">
                    <img class="img-fluid img-thumbnail" src="images/hero-bg.jpg" alt="Image 9"/>
                </div>

                <div class="col">
                    <img class="img-fluid img-thumbnail" src="images/1.jpg" alt="Image 10"/>
                </div>
            </div>
        </div>
    </div>

    
</div>
</div>

<div class="container">
	<div style="height: 100px;"></div>
<h1 class="text-center " style="color: #21537C">Our Programs </h1>
<br>
		<h4 class="" style="color: #21537C">Commonwealth of Dominica
Citizenship by Investment
</h4>
<br>
	<div class="row">


		<div class="col-md-6  ">
			
				<p class="text-justify" style="line-height: 38px;">
				<span style="color:#21537C;font-size: 20px;font-weight: bold; ">Dominica</span>, island country of the Lesser Antilles in the eastern Caribbean Sea.<br> It lies between the French islands of Guadeloupe and Marie-Galante to the north and Martinique to the south.<br> Dominica has been nicknamed the "Nature Isle of the Caribbean" for its natural environment, and known for its luscious vegetation, stunning national parks and beautiful white sandy beaches, making it the epitome of a tropical paradise. <br>
				Introduced in 1993 by the Government, the Commonwealth of Dominica citizenship by investment (Dominica’s passport) program is one of the longest-running programs in the world.
As an applicant, you must be at least 18 years of age, of good health and without a criminal record.
Additionally, you are required to make a non-refundable donation to the government or make an investment in government-approved real estate projects.

			</p>
			
		</div>
		<div class="col-md-6 ">
				
				
				<iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1368447.5257524396!2d-69.58722460290905!3d18.671264721272305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf8838def1b6f5%3A0xa6020f24060df7e0!2z2KzZhdmH2YjYsdmK2Kkg2KfZhNiv2YjZhdmK2YbZitmD2KfZhg!5e0!3m2!1sar!2s!4v1617800285106!5m2!1sar!2s" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
<img src="images/t.png">
	<div style="height: 70px;"></div>
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



<div style="width: 100%;height: 700px;  background-color:rgba(10,54,108,0.8);" >
		<div class="container-fluid">
			<div style="height: 30px;"></div>
		<div class="row">

			<div class="col-md-1"></div>
			<div class="col-md-10 ">
				<h1 class="text-center text-white">Testimonials</h1>
				<div class="row">
					<div class="col-md-6">
						<div class="card mb-3">
							<div class="card-header">
								<img src="images/1.jpg" style="width: 100px;height: 100px;" class="rounded-circle">
								<span style="font-size: 20px;font-weight: bold;color: #21537C">Fadi Debow</span>
								
							</div>
							<div class="card-body"><p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi .</p></div>
						</div>
					</div>
					<div class="col-md-6"><div class="card mb-3">
							<div class="card-header">
								<img src="images/1.jpg" style="width: 100px;height: 100px;" class="rounded-circle">
								<span style="font-size: 20px;font-weight: bold;color: #21537C">Adam Ajib</span>
								
							</div>
							<div class="card-body"><p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi .</p></div>
						</div>
					</div>





<div class="col-md-6"><div class="card mb-3">
							<div class="card-header">
								<img src="images/why-us.jpg" style="width: 100px;height: 100px;" class="rounded-circle">
								<span style="font-size: 20px;font-weight: bold;color: #21537C">Nadia</span>
								
							</div>
							<div class="card-body"><p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi .</p></div>
						</div>
					</div>






<div class="col-md-6"><div class="card mb-3">
							<div class="card-header">
								<img src="images/t.png" style="width: 100px;height: 100px;" class="rounded-circle">
								<span style="font-size: 20px;font-weight: bold;color: #21537C">Lama</span>
								
							</div>
							<div class="card-body"><p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi .</p></div>
						</div>
					</div>

















				</div>
				
			
			</div>
			<div class="col-md-1"></div>
			
		</div>
	</div>
</div>

<div style="background-image: url('images/contact-bg.png');background-repeat: no-repeat;">
	<div style="height: 40px"></div>
<div class="container">
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
	</div>
</div>
</div>




<div style="height: 80px;"></div>
<div class="image-container">
    <img src="images/hero-bg.jpg" style="width: 100%; height: 300px;" />
    <div class="after">
    	<div class="container">
    		<div style="height: 30px;"></div>
    		<div class="row">
    			<div class="col-md-3">
    				<h3>UseFull Links</h3>
    				<ul style="list-style-type: none;">
	<li ><i class="fa fa-angle-double-right"></i> <a style="color: white;" href="">Home</a> </li>
	<li><i class="fa fa-angle-double-right"></i> <a href=""><a style="color: white;" href="">About Us</a></a></li>
	<li><i class="fa fa-angle-double-right"></i> <a style="color: white;" href="">Book Consultation</a></li>
	<li><i class="fa fa-angle-double-right"></i><a style="color: white;" href="">Our Programs</a></li>
	<li><i class="fa fa-angle-double-right"></i><a style="color: white;" href="">Contact Us</a></li>

</ul>
    			</div>

    			<div class="col-md-3">
    						<h3>Our Services</h3>
    				<ul style="list-style-type: none;">
	<li ><i class="fa fa-angle-double-right"></i>New Passport </li>
	<li><i class="fa fa-angle-double-right"></i> New CitizenShips</li>
	<li><i class="fa fa-angle-double-right"></i>New Life Start</li>
	<li><i class="fa fa-angle-double-right"></i>Full Support</li>
	<li><i class="fa fa-angle-double-right"></i>100% Secure and Safty</li>

</ul>
    			</div>

    			<div class="col-md-3">
    				<h3>About Us </h3>
    				<p class="text-justify">
    					Our business is helping our clients gain a second passport and become citizens of the world. Our services include taking care of all the details you need to take advantage of citizenship by investment, residency programs, legal services, and more.
    				</p>
    				<a href="" class="btn btn-outline-warning">Read More</a>
    			</div>

    			<div class="col-md-3">
    				
    					<h3>Contact Us </h3>
    				<p class="text-justify">
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

<div style="height: 40px;background-color:#20507a; ">
	<p class="text-center text-warning">All Right Reserved To CitizenShips <i class="fa fa-heart"></i> 2021</p>

</div>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/all.js"></script>
<script type="text/javascript">
  /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(10,54,108,0.6)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.body.style.backgroundColor = "white";
} 
</script>
</body>
</html>