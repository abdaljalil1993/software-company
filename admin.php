<?php
session_start();
ob_start();

if(!isset($_SESSION['id']))
header("Location: index.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>CitizenShips</title>
	<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css"/>
<!--Floating WhatsApp css-->
<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
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
<meta  lang="en">
<meta name="keywords" content="
Programming , 
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
	html {
  scroll-behavior: smooth;
}

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










<div style="background-image: url('images/r.jpg');background-repeat: no-repeat;background-size: cover;background-attachment: fixed; height:430px; ">
<div style="background-color:rgba(10,54,108,0.5);width: 100%;height: 430px;">
	<div class="mynav">
	<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#" style="color: #E7E7E8; font-size: 23px;"> <img src="images/logo.png" alt="citizenships logo" style="width: 100px;height: 80px;"> Maali Al khir</a>
  <button style="border-color: #D69B25;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" ></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active x" >
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
  
      <li class="nav-item x active">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="admin.php">Add Post</a>
      </li>
        <li class="nav-item x">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="mp.php">Manage Blogs</a>
      </li>
        <li class="nav-item x">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="mr.php">Manage Consultation</a>
      </li>

       <li class="nav-item x">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="mm.php">Manage Message</a>
      </li>

   
    </ul>


  </div>
</nav>
</div>

<div class="text-center" style="margin: 30px auto;">
  <h1 class="text-warning ">Admin DashBoard</h1>
  <h2 class=" text-capitalize" style="color: #E7E7E8">Publish New Post</h2>
  <i style="font-size: 40px;" class="fa fa-plus-circle text-warning"></i>
</div>



</div>

</div>

<div style="background-color: #fefefe;height: 490px;">
  <div style="height:33px;"></div>
<div class="container" >
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="box-shadow: 0px 0px 10px 10px #c8c8c8">
        <div style="border-radius: 10px;background-color: rgba(255,255,255,0.6);padding:30px;">
    <h1 class="text-warning">Add New Post</h1> 
    <hr>
   <form action="admin.php" method="post" enctype="multipart/form-data">
      <input type="text" placeholder="Post Title" class="form-control" name="title"> <br>
      <label>Post Image : </label>
     <input type="file" class="form-control" name="img"> <br>
     <textarea class="form-control" name="post" placeholder="your post here"></textarea><br>
     <input type="submit" name="btn" class="btn btn-warning btn-lg" value="Add Post">
     <a href="mp.php" class="text-warning pull-right" style="text-decoration: none;float: right;margin-top: 12px;font-size: 18px;font-family: cursive;">View All Post</a>
   </form>
    </div>
    </div>

    <div class="col-md-2"></div>
  </div>
</div>
</div>



<div style="height: 25px;"></div>
<div style="background-image: url('images/544.jpg');background-size: cover;background-attachment: fixed;background-repeat: no-repeat;">
  
<div style="width: 100%;  background-color:rgba(10,54,108,0.7);" >
    <div class="container-fluid" style="padding-bottom:8px;">
        <div style="height: 30px;"></div>
        <div class="row">
          
          <div class="col-md-3 col-sm-12">
            <h3 style="color: white;">Navigation</h3>
            <ul style="list-style-type: none;">
  <li ><i class="fa fa-angle-double-right text-warning"></i> <a style="color: white" class=" " href=""> Home</a> </li>
  <li><i class="fa fa-angle-double-right text-warning"></i> <a href=""><a style="color: white;" href=""> About Us</a></a></li>
  <li><i class="fa fa-angle-double-right text-warning"></i> <a style="color: white;" href=""> Book Consultation</a></li>
  <li><i class="fa fa-angle-double-right text-warning"></i><a style="color: white;" href=""> Our Programs</a></li>
  <li><i class="fa fa-angle-double-right text-warning"></i><a style="color: white;" href=""> Contact Us</a></li>

</ul>
          </div>

          <div class="col-md-3 col-sm-12" style="height: 240px;">
                    <h3 class="text-white">Programs</h3>
            <ul style="list-style-type: none;">
  <li style="color: white;"><i class="fa fa-angle-double-right text-warning"></i> Commonwealth of Dominica </li>
  <li style="color: white;"><i class="fa fa-angle-double-right text-warning"></i>Saint Kitts and Nevis</li>

</ul>
          </div>

        
          <div class="col-md-3 col-sm-12" style="height: 240px;">
                <h3 class="text-white">Contact Us </h3>
            <p class="text-justify text-white">
            
            </p>
            <span style="color: white"> <i style="color:#D69B25;font-size: 20px; " class=" fa fa-phone"></i> +971 582 491 660</span><br>
            <br>
             <span><a href="#"  style="color: white"><i style="color:#D69B25;font-size: 20px; " class=" fa fa-phone"></i> +971 4447 0880</a></span><br><br>

              <span><a href="#"  style="color: white"><i style="color:#D69B25;font-size: 20px; " class=" fab fa-whatsapp"></i> +971 581 084 728</a></span><br><br>
             

              <span style="color: white"> <i style="color:#D69B25;font-size: 20px; " class=" fa fa-envelope"></i> info@citizenships.ae</span>
              <br>
              <br>
            
                
          </div>
          

          <div class="col-md-3 col-sm-12">
            <ul class="social1">
              <h3 class="text-white">Follow Us</h3>
      <li><a href="https://www.facebook.com/Citizenships-104622184526249" style="color: white"><i style="color:#D69B25;font-size: 28px; " class=" fab fa-facebook"></i> Citizenships</a></li><br>
      <li><a href="https://www.twitter.com/Citizenshipsae"  style="color: white"><i style="color:#D69B25;font-size: 28px; " class=" fab fa-twitter"></i> @Citizenships.ae</a></li><br>
      
      <li><a href="https://www.instagram.com/Citizenships.ae"  style="color: white"><i style="color:#D69B25;font-size: 28px; " class=" fab fa-instagram"></i> Citizenshipsae</a></li><br>
      
      <li><a href="#"  style="color: white"><i style="color:#D69B25;font-size: 28px; " class=" fab fa-linkedin"></i> LinkeIn</a></li><br>
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

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up"></i></button>

 </div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!--Floating WhatsApp javascript-->
<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script type="text/javascript">
  $(function() {
  $('#WAButton').floatingWhatsApp({
    phone: '009647517863790', //WhatsApp Business phone number International format-
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

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
      document.getElementById("navbar").style.height = "auto";
    document.getElementById("logo").style.height = "69px";
     document.getElementById("logo").style.width = "95px";
     document.getElementById("nn").style.fontSize = "20px";
  } else {
  document.getElementById("navbar").style.height = "auto";

   document.getElementById("logo").style.height = "100px";
     document.getElementById("logo").style.width = "150px";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>




</body>
</html>

<?php
include'conn.php';

$title=isset($_POST['title'])?$_POST['title']:'';

$post=isset($_POST['post'])?$_POST['post']:'';
$imagename=isset($_FILES['img']['name'])?$_FILES['img']['name']:'';
$image=isset($_FILES['img']['tmp_name'])?$_FILES['img']['tmp_name']:'';
if(isset($_POST['btn']))
{
  $dt=date("Y-m-d H:i:s");
move_uploaded_file($image, "uploads/$imagename");

$r=mysqli_query($con,"insert into posts(title,post,image,dt)
  values('$title','$post','$imagename','$dt')");


if(isset($r))
{
echo '<script type="text/javascript">toastr.success("Add Post Successfully");</script>';

}
else{
  echo '<script type="text/javascript">toastr.error("Add Post failed");</script>';

}
}

ob_end_flush();

?>
