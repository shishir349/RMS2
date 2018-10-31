<?php
	if(!empty($_POST['s1']))
	{
		$namer=$_POST['namv'];
		$mail=$_POST['mail'];
		$num=$_POST['num'];
		$message=$_POST['msg'];
			$i="insert into messages(name,email,number,message)values('$namer','$mail','$num','$message')";
		$con=mysqli_connect("127.0.0.1","root","","demo"); 
		if($con)
		{
			mysqli_query($con,$i);
		}
	}
	?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Buda:300' rel='stylesheet'>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="animate.css">

<title>Restaurant Management System</title>
<style>
	.hr{
	color:solid black;
	}
	.selector-for-some-widget {
  box-sizing: content-box;
}

	.btn-group button {
		margin-left: 270px;
		margin-right: 100px;
    background-color: #4CAF50; /* Green background */
    border: 1px solid green; /* Green border */
    color: white; /* White text */
    padding: 30px 60px; /* Some padding */
    cursor: pointer; /* Pointer/hand icon */
    float: left; /* Float the buttons side by side */

	}

.btn-group button:not(:last-child) {
    border-right: none; /* Prevent double borders */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
    content: "";
    clear: both;
    display: table;
}

/* Add a background color on hover */
.btn-group button:hover {
    background-color: #3e8e41;
}

	
	* {
    box-sizing: border-box;
}
		input[type='radio'] { transform: scale(2); }


body {
    font-family: Arial;
    margin: 0 auto; /* Center website */
    max-width: 1500px; /* Max width */
    padding: 20px;
}

.heading {
    font-size: 25px;
    margin-right: 25px;
}

.fa {
    font-size: 25px;
}

.checked {
    color: orange;
}

/* Three column layout */
.side {
    float: left;
    width: 15%;
    margin-top: 10px;
}

.middle {
    float: left;
    width: 70%;
    margin-top: 10px;
}

/* Place text to the right */
.right {
    text-align: right;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The bar container */
.bar-container {
    width: 100%;
    background-color: #f1f1f1;
    text-align: center;
    color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

	input[type=submit] {
  background-color: #0693cd;
  border: 0;
  border-radius: 5px;
  cursor: pointer;
  color: #fff;
  font-size:16px;
  font-weight: bold;
  line-height: 1.4;
  padding: 10px;
  width: 180px
}
/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
    .side, .middle {
        width: 100%;
    }
    /* Hide the right column on small screens */
    .right {
        display: none;
    }
}
	
	.abc{
      font-family: 'Bad Script';
}
	
	.parallax {
 background-image:url(poha.jpg);
 min-height: 400px;
 background-attachment: fixed;
 background-position: center;
 background-repeat: no-repeat;
 background-size: cover;
 
 }
	.caro{
		margin-left: 250px;
	}
	
	.in{
		margin-left: -120px;
	}
	
	
	/*Contact sectiom*/
.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}
	
	.content-header2{
  font-family: 'Oleo Script', cursive;
  color:#1fd3ef;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
#contact{
    
    font-family: 'Teko', sans-serif;
  padding-top: 60px;
  width: 100%;
  width: 100vw;
  height: 550px;
  background: #3a6186; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color : #fff;    
}
	
	#contact2{
   
    font-family: 'Teko', sans-serif;
  padding-top: 60px;
  width: 50%;
  width: 100vw;
  height: 300px;
  background: #3a6186; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #2ce8a8
 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color : #fff;    
}
	
	
.contact-section{
  padding-top: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}

.form-line{
  border-right: 1px solid #B29999;
}

.form-group{
  margin-top: 10px;
}
label{
  font-size: 1.3em;
  line-height: 1em;
  font-weight: normal;
}
.form-control{
  font-size: 1.3em;
  color: #080808;
}
textarea.form-control {
    height: 135px;
   /* margin-top: px;*/
}

.submit{
  font-size: 1.1em;
  float: right;
  width: 150px;
  background-color: transparent;
  color: #fff;

}
	.hey{
		margin-left: 550px;
		color: #F4FB86
	}
	.hey2{
		padding: 2px;
		margin-left: 10px;
		height: 50px;
		width: 100px;
	}
	.hey3{
		padding: 2px;
		margin-left: 10px;
		height: 50px;
		width: 100px;
		margin-top: 7px;
	}
	.nv{
		opacity: 0.9;
	}
</style>
<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
  
    xmlhttp=new XMLHttpRequest();
  } else {  
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>
<SCRIPT>
function passWord() {
var testV = 1;
var pass1 = prompt('Please Enter Your Password',' ');
while (testV < 3) {
if (!pass1) 
history.go(-1);
if (pass1.toLowerCase() == "23081997") {
alert('You Got it Right!');

break;
} 
testV+=1;
var pass1 = 
prompt('Access Denied - Password Incorrect, Please Try Again.','23081997');
}
if (pass1.toLowerCase()!="23081997" & testV ==3) 
history.go(-1);
return " ";
} 
</SCRIPT>
</head>

<body background="imgback2.jpg">

<nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top justify-content-center nv">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
     <a class="navbar-brand" href="homepage.php">
    <img src="logo.jpg" alt="logo" style="width:1000px; height: 50px;">
  </a><a class="nav-item nav-link active btn btn-block btn-info hey3" href="#About">About</a>
      <a class="nav-item nav-link active btn btn-block btn-info hey2" href="#contact">Contact Us</a>
      <a class="nav-item nav-link active btn btn-block btn-info hey2" href="login2.php">Order Online</a>
      <a class="nav-item nav-link active btn btn-block btn-info hey2" href="login2.php">Login</a>
            <a class="nav-item nav-link active btn btn-block btn-info hey2" href="gallery.php">Gallery</a>
            <a class="nav-item nav-link active btn btn-block btn-danger hey2" href="admin.php" onClick="passWord()">Admin</a>

      <a class="nav-item nav-link active btn btn-block btn-info hey" href="#contact2">Give Feedback</a>

    
      
	  </div>
  </div>
</nav>
<div class="container">
<div class="parallax"></div>
<br>
<br>
<div class="row">
<div class="col-sm-5 animated rubberBand">
<h1 class="abc" align="center"><i>Blue-Sea Restaurants</i></h1>
</div>
</div>
<div class="row">
<div class="col-sm-8">
<center>
<section class="caro animated rubberBand">
  <img class="mySlides" src="img1.jpg" style="height:400px; width:1000px;">
  <img class="mySlides" src="img2.jpg" style="height:400px; width:1000px;">
  <img class="mySlides" src="img3.jpg" style="height:400px; width:1000px;">
  <img class="mySlides" src="img4.jpg" style="height:400px; width:1000px;">
    <img class="mySlides" src="img5.jpg" style="height:400px; width:1000px;">
  <img class="mySlides" src="img6.jpg" style="height:400px; width:1000px;">
</section>
	</center>
	</div>
	</div>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}

</script>
<br>
<div class="btn-group">
  <a href="menu.php" class="in"><button><h3>Dine In</h3></button></a>
  <a href="login2.php" class="in"><button><h3>Order Online</h3></button></a>
	</div>
	</div>
	<hr>
	<section class="w3-container w3-center animated rubberBand" id="About" style="max-with:600px">
  <h2 class="w3-wide">Introduction</h2>
  <p class="w3-opacity" ><i>We love food</i></p>
<section class="w3-container w3-content w3-center"  style="max-with:600px" >
<h2><p class="w3-justify abc">
The voyage began in the winter of 2000 when deviating from the monotoneity of family business, a visionary stepped out in the ocean to create his own wave, and thus was visualized the concept "Shishir Foods". The first step to tingle the food gland of Andaman and Nicobar foodies was laid in Port blair with tryst with QSR, a novelty in Andaman and Nicobar and rarity in the state. One end destination for all the foodies seeking Indian cuisines like Punjabi, North Indian, Mughlai, South Indian to Global Cuisine like Chinese, Continental, Italian etc, with high standards of hygiene and quality, the venture has become torchbearer for future entrepreneurs and a benchmark of professionalism with personal touch. The initial edifice of the vision also harbors Boutique Banquet in the cellar for exhilarating dining experience. The journey evolved as a mission with addition of 2 more stores in 2004 and further voyage with addition of four more stores in 2007. It has to be something to attract the Project designers of Multinational brands like Pizza Hut, McDonald's, KFC etc to incorporate Blue-Sea Case Study to decide upon the viability and feasibility of their venture to step in Andaman and Nicobar.
</p></h2>
</section>
	</section>
<hr>
<div class="w3-container w3-center">
<h2>Locate Us: </h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3907.428475913808!2d92.73234621435996!3d11.664015991722966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x308895a697d5a94f%3A0x68e1cfe798bdd615!2sBlue+Sea+Hotels+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1529766443421" width="450" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<hr>


<section id="contact">
			<div class="section-content">
				<h1 class="section-header abc">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
			</div>
			<div class="contact-section">
			<div class="container">
				<form action="homepage.php" method="post">
					<div class="col-md-5 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Your name</label>
					    	<input type="text" name="namv" class="form-control" id="" placeholder=" Enter Name">
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Email Address</label>
					    	<input type="email" name="mail" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
					  	</div>	
					  	<div class="form-group">
					    	<label for="telephone">Mobile No.</label>
					    	<input type="tel" name="num" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
			  			</div>
			  		</div>
			  		<div class="col-md-5">
			  			<div class="form-group">
			  				<label for ="description"> Message</label>
			  			 	<textarea  class="form-control" name="msg" id="description" placeholder="Enter Your Message"></textarea>
			  			</div>
			  			<div>

			  				  <input type="submit" name="s1" value="Send Query">

			  			</div>
			  			
					</div>
				</form>
			</div>
		</section>
		<hr>
<div class="animated rubberBand">
<span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>
</div>
<hr>
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="https://facebook.com"><i class="fa fa-facebook-official"></i></a>
  <a href="https://pinterest.com"><i class="fa fa-pinterest-p"></i></a>
  <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
  <a href="https://flickr.com"><i class="fa fa-flickr"></i></a>
  <a href="https://likedin.in"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">
  </p>
</footer>
<br>
<section id="contact2">
<div id="poll" align="center">
<div class="section-content">
<h1 class="section-header abc">Feedback: <span class="content-header2 wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Are you satisfied with our service or not? </span></h1>
</div>
<form>
<h2 class="abc">Yes: </h2>
<input type="radio" name="vote" class="abc" value="0" onclick="getVote(this.value)"/>
<br>
<br><h2 class="abc">No: </h2>
<input type="radio" class="abc" name="vote" value="1" onclick="getVote(this.value)"/>
</form>
</div>
</section>
</body>
</html>