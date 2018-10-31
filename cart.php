<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
</head>
<style>
table, th, td {
border: 1px solid black;
	padding: 40px;
}
	
	body, html {
  width: 100%;
  height: 100%;
  font-size: 20px;
   font-family: 'Della Respira';
  color: black;
  background-color: #ebf0fa;
}
	#men{
		align-content: flex-end;
		margin-left: 1000px;
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
    <img src="logo.jpg" alt="logo" style="width:400px;">
    <a class="nav-item nav-link active btn btn-block btn-success" href="homepage.php">Home</a>
          <a class="nav-item nav-link active btn btn-block btn-info"  href="menu2.php">Menu</a>

      <a class="nav-item nav-link active btn btn-block btn-danger" id="men" href="logout.php">Logout</a>
       	  </div>
  </div>
</nav>
<div class="animated rubberBand">
<br>
<br>
<br>

<center><h1>Reciept:</h1></center>
<br>
<br>
<br>
<?php
	session_start();
	$use=$_SESSION['uid'];
	$s="select * from menu_new where userid='$use'";	
		$con=mysqli_connect("127.0.0.1","root","","demo"); 
		if($con)
		{
			$rs=mysqli_query($con,$s);
		while($fr=mysqli_fetch_row($rs))
		{
			$a=$fr[0];
			$b=$fr[1];
			$c=$fr[3];
			/*echo $a."".$b."".$c;*/
		/*}
		}*/
	 $v="select sum(total)from menu_new where userid='$use';";
	$rr=mysqli_query($con,$v);
	$ff=mysqli_fetch_row($rr);
	/*echo $ff[0];*/
	
	?>
	<table align="center">
		
		<tr>
			<th>Item Name:</th>
			<th>Quantity</th>
			<th>Total</th>
		</tr>
		<tr>
		<td class="btn-info"><?php echo $a; ?></td>
		<td class="btn-danger"><?php echo $b; ?></td>
		<td class="btn-success"><?php echo $c; ?></td>
		</tr>
			<?php 
	}
	}
	?>
	<tr>
		<th>Subtotal:</th>
	</tr>
	<tr>
		<td class="alert-info"><?php echo $ff[0]; ?></td>
		</tr>	
	</table><br><br>
	<center><a href="address.php"><button id="button2id" name="button2id" class="btn btn-success">Proceed To Book</button></a>
	<center><a href="menu2.php"><button id="button2id" name="button2id" class="btn btn-danger">Go Back</button></a>


</div>
</body>
</html>