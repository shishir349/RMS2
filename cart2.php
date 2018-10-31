<!doctype html>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
<meta charset="utf-8">
<title>Your Cart</title>
</head>
<style>
	.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}
	
	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}
	
	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}
	
	
	
	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}
	
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
    <img src="logo.jpg" alt="logo" style="width:90px;">
    <a class="nav-item nav-link active btn btn-block btn-info hey3" href="homepage.php">Home</a>
      	        <a class="nav-item nav-link active btn btn-block btn-danger hey2" href="logout.php">Logout</a>

       	  </div>
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>
<?php
	$mtot="";
	session_start();
	$use=$_SESSION['uid'];
	$s="select * from menu_new where userid='$use'";	
		$con=mysqli_connect("127.0.0.1","root","","demo"); 
		if($con)
		{
			$rs=mysqli_query($con,$s);
		while($fr=mysqli_fetch_array($rs))
		{
			$a=$fr[0];
			$b=$fr[1];
			$c=$fr[2];
			$d=$fr[3];
			$e=$fr[5];
			/*echo $a."".$b."".$c;*/
		/*}
		}*/
	 $v="select sum(total)from menu_new where userid='$use';";
	$rr=mysqli_query($con,$v);
	$ff=mysqli_fetch_row($rr);
	$mtot=$ff[0];
	
	?>
	<div class="animated jackInTheBox">
<div class="container">
	<table id="cart" class="table  table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="images/data/<?php echo $e ; ?>" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?php echo $a ?></h4>
									
									</div>
								</div>
							</td>
							<td data-th="Price"><?php echo $c ?></td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="<?php echo $b ?>">
							</td>
							<td data-th="Subtotal" class="text-center"><?php echo $c*$b ?></td>
							<td data-th="Remove" class="text-center">
					<a href="<?php  echo "del.php?item=$a&user=$use&qua=$b"; ?>" class="btn btn-danger" ><span class="fa fa-trash-o"></span></a>
							</td>
					
						
						</tr>
					</tbody>
								<?php 
	}
	}
	
	
	?>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong><?php echo $mtot; ?></strong></td>
						</tr>
						<tr>
							<td><a href="menu2.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong><?php echo $mtot; ?></strong></td>
							<td><a href="address.php" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a>
</td>
						</tr>
					</tfoot>
				</table>
</div>
</div>
</body>
</html>