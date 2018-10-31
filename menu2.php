<?php
		session_start();
					
	if(!empty($_POST['s2']))
			{
				$user=$_SESSION['uid'];
				$rate=$_GET['rate'];
				$ite=$_GET['it'];
            $qua=$_POST['qt'];
				$image=$_GET['img'];
				
				$total=$rate*$qua;
				
				$i="insert into menu_new (item,quantity,rate,total,userid,image)values('$ite','$qua','$rate','$total','$user','$image')" ;
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
<meta charset="utf-8">
<title>Order Online</title>
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

<style>
	body {
  font-family: Arial, Helvetica, sans-serif;
}
	.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px 0 30px 0;
} 
	#img{
		margin-left: 100px;
	padding: inherit;
		
	}
	.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}
	.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
	width: 10%;
	margin-left: 140px;
}
	.h{
		background-color: aqua;
	}
	
	#drop{
		align-content: center;
		
}
	.h3{
		margin-left: 130px;
	}
	

	.im{
		margin-left: 170px;
		padding: 10px;
}
	#buton{
		margin-right: 50px;
	}
	
	#crt{
		margin-left: 700px;
	}
	
	#nv{
		opacity: 0.8;
	}
	
	.abc{
      font-family: 'Bad Script';
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
<nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top justify-content-center " id="nv">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
     <a class="navbar-brand" href="homepage.php">
    <img src="logo.jpg" alt="logo" style="width:120px;">
    <a class="nav-item nav-link active btn btn-block btn-success hey3" href="homepage.php">Home</a>
      <a class="nav-item nav-link active btn btn-block btn-danger hey2" href="logout.php">Logout</a>
       <a class="fa fa-cart-arrow-down fa-2x btn-success" id="crt" href="cart2.php"> Cart</a>
       	  </div>
  </div>
</nav>
		<br>
		<br>
		<br>
			<div class="container-fluid">
				<div class="row animated rubberBand" style="margin-top: 60px;">
<?php

	$s="select * from menu";
		$con=mysqli_connect("127.0.0.1","root","","demo"); 
		if($con)
		{
			$rs=mysqli_query($con,$s);
			while($fr=mysqli_fetch_array($rs))
			{
				$a=$fr[0];
				$b=$fr[1];
				$c=$fr[2];
			
				
				?>
				<div class="col-sm-4" style="margin-top: 40px;">
				<div class="row">
				
				<div class="col-sm-12">
					<img src="images/data/<?php echo $b ; ?>" style="height: 150px" class="img-thumbnail animated fadeInUp" name="img" />
				</div>	
				</div>
				<div class="row">
				<div class="col-sm-12 fadeInUp">
					<h4 class="abc"><?php echo $a; ?></h4>
				</div>	
				</div>
				<div class="row">
				<div class="col-sm-3">
					<h4 class="abc"><?php echo $c; ?></h4>
				</div>	
				<div class="col-sm-3">
						<form action="<?php echo "menu2.php?it=$a&rate=$c&img=$b";  ?>" method="post">
				<select class="form-control fadeInUp" id="quant" name="qt">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
							</select>
				</div>
				</div>
				<div class="row" style="margin-top: 15px;">
				<div class="col-sm-1"></div>
				<div class="col-sm-4">
					<input class="btn btn-success btn-block fadeInUp"  type="submit" name="s2"  value="QUICK ADD">
				</form>
				</div>
				</div>
				</div>
				
				
	
			
				
				<?php
			}	
			
		}
	
	?>	
	  </div>
	</div>
</body>
</html>