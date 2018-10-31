
<?php
session_start();
	
	if(!empty($_POST['s3']))
	{
		$usd2=$_POST['username'];
				$ps2=$_POST['password'];

	$s="select * from user where userid='$usd2' and password='$ps2'";	
		$con=mysqli_connect("127.0.0.1","root","","demo"); 
		if($con)
		{
			$rs=mysqli_query($con,$s);
			$fr=mysqli_fetch_row($rs);
			$us=$fr[0];
			$ps=$fr[1];
			if($usd2==$us && $ps2==$ps)
			{
				$_SESSION['uid']=$us;
				header("Location:menu2.php");
			}
			else{
				echo "<script>alert('invalid id')</script>";
			}
		
		}
	}
	?>

<!DOCTYPE html>
<html>
<head>
<title>Log In</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/font-awesome.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
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
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
	width: 75%;
	margin-left: 170px;
}
/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
.bg { 
    /* The image used */
    background-image: url(img2.jpg);

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

	.container{
		height: 500px;
		width: 1000px;
		opacity: 0.9;
	}
	
	
</style>
</head>
<body class="bg">
<nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top justify-content-center" id="nv">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
     <a class="navbar-brand" href="https://www.instagram.com/">
    <img src="logo.jpg" alt="logo" style="width:300px;">
        <a class="nav-item nav-link active btn btn-block btn-info" href="homepage.php">Home</a>
    <a class="nav-item nav-link active btn btn-block btn-success" href="reg3.php">Signup</a>
      <a class="nav-item nav-link active btn btn-block btn-danger" style="text-align: left" href="login2.php">Logout</a>
       	  </div>
  </div>
</nav>	
<br>
  <br>
  <br>
  <div class="animated rubberBand">
<div class="container">
 <center><h2 class="alert-success">LOGIN</h2></center>
  <br>
  <br>
  <i><p class="bg-info">You have to first Login or Create an accout to access the menu.</p></i>
  <form action="login2.php" method="post">
    <div class="row">
     


      <div class="col">
       

        <input type="text" name="username" class="alert-primary" placeholder="Username" required>
        <br>
  <br>
  <br>
        <input type="password" name="password" class="alert-dark" placeholder="Password" required>
        <br>
  <br>
  <br>
        <input type="submit" value="Login" name="s3">
      </div>
      
    </div>
  </form>
</div>
<div class="bottom-container">
  <div class="row">
    <div class="col">
     <a href="reg3.php" style="color:white"  class="btn btn-info">Sign up</a>
    </div>
    <div class="col">
      <a href="forgot.php" style="color:white" class="btn btn-danger">Forgot password?</a>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>
