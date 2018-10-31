<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	if(isset($_GET['item']))
	{
		$item=$_GET['item'];
		$user=$_GET['user'];
		$qua=$_GET['qua'];
		$de="delete from menu_new where item='$item' and quantity='$qua' and userid='$user'";
		$con=mysqli_connect("127.0.0.1","root","","demo");
			
		if($con)
		{
			mysqli_query($con,$de);
			header("Location:cart2.php");
		}
	}

	?>
</body>
</html>