<!doctype html>
<html>
<head>
<meta charset="utf-8">
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
<link rel="stylesheet" href="animate.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<title>Seat Reservation</title>
   <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Caviar - Premium Restaurant Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
<style>
	/* Fonts */

@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Work+Sans:400,500,600,700');

/* Import CSS */

@import 'css/bootstrap/bootstrap.min.css';
@import 'css/others/animate.css';
@import 'css/others/magnific-popup.css';
@import 'css/others/owl.carousel.min.css';
@import 'css/others/font-awesome.min.css';
@import 'css/others/pe-icon-7-stroke.css';
	/* Reservation Area CSS */

.caviar-reservation-area,
.caviar-contact-area {
    overflow-x: hidden;
}

.reservation-form-area,
.contact-form-area {
    width: calc(50% - 100px);
}

.reservation-side-thumb {
    width: calc(50% + 100px);
}

.reservation-form,
.contact-form {
    width: 390px;
    margin-right: 67.5px;
}

.reservation-form .form-control,
.contact-form .form-control {
    border: none;
    border-bottom: 1px solid #c1c1c1;
    border-radius: 0;
    margin-bottom: 15px;
    padding: 15px 0;
    font-size: 14px;
    line-height: 1;
    background-color: transparent;
    color: rgba(51, 51, 51, 0.60);
}

.reservation-form .form-control:focus,
.contact-form .form-control:focus {
    box-shadow: none;
    color: rgba(51, 51, 51, 1);
}

.reservation-form textarea.form-control,
.contact-form textarea.form-control {
    border: none;
    height: 120px;
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
	</style>
</head>

<body>
 <?php 
	session_start();
	if(!empty($_POST['s1']))
	{
		$a=$_POST['fname'];
		$b=$_POST['phone'];
		$c=$_POST['mail'];
		$d=$_POST['date'];
		$e=$_POST['time'];
		$f=$_POST['persons'];
		$g=$_POST['msg'];
		$i="insert into reservation(name,number,email,date,time,people,message)values('$a','$b','$c','$d','$e','$f','$g')";
		$con=mysqli_connect("127.0.0.1","root","","demo"); 
		if($con)
		{
			mysqli_query($con,$i);
		}
		
		   $_SESSION['name']=$a;
	$_SESSION['number']=$b;
	$_SESSION['email']=$c;
		header("Location:seatconfirm.php");
	
	}
	
	
	?>
  <nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top justify-content-center">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
     <a class="navbar-brand" href="https://www.instagram.com/">
    <img src="logo.jpg" alt="logo" style="width:100px;">
           <a class="nav-item nav-link active btn btn-block btn-success hey3" href="homepage.php">Home</a>

      <a class="nav-item nav-link active btn btn-block btn-danger hey2" href="menu2.php">Order Online</a>
      <a class="nav-item nav-link active btn btn-block btn-dark hey2" href="login2.php">Login</a>
      
	  </div>
  </div>
</nav>
   <br>
   <br>
   <br>
      <br>
   <br>
    <!-- ****** Reservation Area Start ****** -->
<div class="animated swing">
    <section class="caviar-reservation-area d-md-flex align-items-center" id="reservation">
        <div class="reservation-form-area d-flex justify-content-end">
            <div class="reservation-form">
                <div class="section-heading">
                    <h2>Reservation</h2>
                </div>
                <form action="reservation.php" method="post">
                    <div class="row">
                       <div class="col-12 col-lg-6">
                            <input type="text" class="form-control border-dark " required placeholder="First name" name="fname">
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="number" class="form-control border-dark" required placeholder="Phone number" name="phone">
                        </div>
                          <div class="col-12 col-lg-6">
                            <input type="email" class="form-control border-dark"required placeholder="Enter email" name="mail">
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="date" class="form-control border-dark" required name="date">
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="time" class="form-control border-dark" required name="time">
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control border-dark" required placeholder="Select Persons" name="persons">
                        </div>
                        
                        <div class="col-12">
                            <textarea name="msg"  class="form-control border-dark" id="reservationMessage" cols="30" rows="10" required placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-12">
                            <input type="submit" class="btn caviar-btn btn-success" name="s1" value="Reserve Your Desk"><span></span> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="reservation-side-thumb wow fadeInRightBig" data-wow-delay="0.5s">
            <img src="img5.jpg" alt="" height="500px" width="500px">
        </div>
    </section>
	</div>
</body>
</html>