<?php
		if(!empty($_POST['s1']))
	{
		$usd=$_POST['usr'];
		$ps=$_POST['psw'];
		$r=$_POST['num'];
		$a=$_POST['mail'];
		$i="insert into user(userid,password,number,email)values('$usd','$ps','$r','$a')";
		$con=mysqli_connect("127.0.0.1","root","","demo"); 
		if($con)
		{
			mysqli_query($con,$i);
							header("Location:login2.php");

		}
	}
		
		
		?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
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
<title>Sign Up</title>
<style>
	h1{
		text-align: center;
		font-style: italic;
	}
.signupbtn{
		background-color:#07F76D;
		height: 25%;
		padding: 1%;
		width: 200px;
		float: right;
	}
	.cancelbtn{
		background-color:#07F76D;
		height: 25%;
		padding: 1%;
		width: 200px;
		float: left;
	}
	
	
		* {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
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
</head>

<body background="imgback2.jpg">
<nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top justify-content-center nv " id="nv">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
     <a class="navbar-brand" href="https://www.instagram.com/">
    <img src="logo.jpg" alt="logo" style="width:90px;">
    <a class="nav-item nav-link active btn btn-block btn-success hey3" href="homepage.php">Home</a>
      	      <a class="nav-item nav-link active btn btn-block btn-info hey2" href="login2.php">Login</a>

       	  </div>
  </div>
</nav>
		<br>
		<br>
		<br>

		 <div class="container animated bounceIn">
		<h1>Sign Up</h1>

		
		<form action="reg3.php" style="border:1px solid #ccc" method="post">
 
    
    <i><p class="bg-danger">Please fill in this form to create an account.</p></i>
    <hr>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="usr" required>

   <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
   
   <label for="number"><b>Number</b></label>
    <input type="text" placeholder="Enter Number" name="num" required>
   
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="mail" required>

   

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p class="alert-danger">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <a href="login2.php"><button type="button" class="cancelbtn">Cancel</button></a>
      <input type="submit" class="signupbtn" name="s1" value="sign up" />
    </div>
  </div>
</form>
</body>
</html>