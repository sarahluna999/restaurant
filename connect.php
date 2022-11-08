<html>
	<body>
<?php

define('DB_SERVER', 'resto.ck4nkgx3zsuf.us-east-1.rds.amazonaws.com');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'easy1999');
define('DB_DATABASE', 'restaurant-website');
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
$database = mysqli_select_db($connection, DB_DATABASE);
?>
		
	</body>
</html>
