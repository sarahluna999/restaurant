<?php
    $dsn = 'mysql:host=resto.ck4nkgx3zsuf.us-east-1.rds.amazonaws.com;dbname=resto';
	$user = 'admin';
	$pass = 'easy1999';
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	);
	try
	{
		$con = new PDO($dsn,$user,$pass,$option);
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		echo 'Good Very Good !';
	}
	catch(PDOException $ex)
	{
		echo "Failed to connect with database ! ".$ex->getMessage();
		die();
	}
?>
