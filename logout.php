<html>
<head>
<meta charset="utf-8">
<title>Logout</title>
</head>

<body>
<?php
	session_start();
	session_unset();
	session_destroy();
	header("Location:homepage.php");
	?>
</body>
</html>