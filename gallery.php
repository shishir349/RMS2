<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Restaurant Gallery</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="animate.css">
</head>
<style>
		#nv{
		opacity: 0.8;
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
<body>
<nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top justify-content-center " id="nv">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
     <a class="navbar-brand" href="https://www.instagram.com/">
    <img src="logo.jpg" alt="logo" style="width:150px;">
    <a class="nav-item nav-link active btn btn-block btn-success hey3" href="homepage.php">Home</a>
           <a class="nav-item nav-link active btn btn-block btn-info hey2" href="menu.php">Book a Seat</a>
      <a class="nav-item nav-link active btn btn-block btn-dark hey2" href="login2.php">Order Online</a>

      <a class="nav-item nav-link active btn btn-block btn-danger hey2" href="login2.php">Login</a>
      
      
       	  </div>
  </div>
</nav>
		<br>
		<br>
		<br>
			<div class="container-fluid">
				<div class="row animated rubberBand" style="margin-top: 60px;">
<?php
	$s="select * from gall";
		$con=mysqli_connect("127.0.0.1","root","","demo"); 
		if($con)
		{
			$rs=mysqli_query($con,$s);
			while($fr=mysqli_fetch_array($rs))
			{
				$a=$fr[0];
	?>
	<div class="col-sm-4" style="margin-top: 40px;">
				<div class="row">
				
				<div class="col-sm-12">
					<img src="images/data/<?php echo $a ; ?>" style="height: 150px" class="img-thumbnail animated fadeInUp" name="img" />
				</div>	
				</div>
					</div>
				
						<?php
			}
		}
					?>
</body>
</html>