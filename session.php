<?php 
	session_start();
	$name=$_SESSION['name'];
	$uid=$_SESSION['uid'];

	if(!(isset($uid)))
	{
		header('location:index.php');
	}


?>