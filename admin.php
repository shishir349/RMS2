<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Panel</title>
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/font-awesome.css"/>
<link rel="stylesheet" href="animate.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
  <style>
	  .abc{
		  font-style:italic;
	  }
  .bg-1 { 
      background-color: #1abc9c;
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d;
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff;
      color: #555555;
  }
	  .bg-4{
		  color: #ffffff;
      background-color:#ae82cc;
	  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
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
	  
	    .sidebar-offcanvas {
    position: absolute;
    top: 0;
    width: 80%;
			height: 80%;/* 6 columns */
  }
  </style>
<body>
<nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top justify-content-center nv">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <div class="collapse navbar-collapse" id="navbarNavAltMarkup nv">
    <div class="navbar-nav">
     <a class="navbar-brand" href="https://www.instagram.com/">
    <img src="logo.jpg" alt="logo" style="width:100px; height: 50px;">
          <a class="nav-item nav-link active btn btn-block btn-info hey3" href="homepage.php">Home</a>

  </a><a class="nav-item nav-link active btn btn-block btn-info hey2" href="#menu">Add menu</a>
      <a class="nav-item nav-link active btn btn-block btn-info hey2" href="#gallery">Add gallery</a>
                 <a class="nav-item nav-link active btn btn-block btn-info hey2" href="#messages">Messages</a>

            
	  </div>
  </div>
</nav>


<div class="animated rubberBand">
<?php
	
	if(!empty($_POST['s1']))
	{
		$usd=$_POST['itemname'];
		$ps=$_FILES['pic']['name'];
		
		$a=$_POST['price'];
		
		$i="insert into menu(item,image,rate)values('$usd','$ps','$a')";
		$con=mysqli_connect("127.0.0.1","root","","demo"); 
		if($con)
		{
			mysqli_query($con,$i);
			move_uploaded_file($_FILES['pic']['tmp_name'],"images/data/".$ps);
		}
		}
		if(!empty($_POST['s2']))
		{
			$gallery=$_FILES['gal']['name'];
			$b="insert into gall(image)values('$gallery')";
			$con=mysqli_connect("127.0.0.1","root","","demo"); 
			if($con)
			{
					mysqli_query($con,$b);
			move_uploaded_file($_FILES['gal']['tmp_name'],"images/data/".$gallery);
			}
		}
	
		
				
				
?>
		<div class="container-fluid bg-1 text-center">
		<h1 class="abc">Admin Control Panel</h1>
  <img src="adm.jpg" class="img-circle" alt="Bird" width="250" height="250">
  
</div>
		<div class="container-fluid bg-2 text-center" id="menu">
		<h2>Add items to menu page.</h2>
<form action="admin.php" method="post" enctype="multipart/form-data">
	Name of the Dish<input type="text" class="text-danger text-center bg-success" placeholder="enter item name" name="itemname"><br><br>
	<center>Image location<input type="file" name="pic" class="btn alert-info"></center><br><br>
	Price <input type="text" placeholder="enter rate" class="text-danger text-center bg-success" name="price"><br><br>
	<input type="submit" name="s1" class="btn btn-danger">
</form>
</div>
<hr>
	<div class="container-fluid bg-3 text-center" id="gallery">

	<section align="center">
<form action="admin.php" method="post" enctype="multipart/form-data">
<h1>Add Images to gallery section.</h1>
	<center><input type="file" name="gal" class="btn alert-info"></center><br><br>
	<input type="submit" name="s2" class="btn btn-danger">
</form>
</section>
</div>
<hr>
<div class="container-fluid bg-4 text-center success" id="messages">
<h3>Today's Messages</h3>
<?php
	$s="select * from messages";
		$con=mysqli_connect("127.0.0.1","root","","demo"); 
		if($con)
		{
			$rs=mysqli_query($con,$s);
			while($fr=mysqli_fetch_array($rs))
			{
				$a=$fr[0];
				$b=$fr[3];
	
	?>

	<h3><i><?php echo $a.":".$b ?></i></h3>
	<?php
			}
		}
		?>
		</div>
</div>
	</div>
</body>
</html>