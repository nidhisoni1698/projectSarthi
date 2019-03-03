<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		include 'db.php';
		if(isset($_POST['add']))
		{
			$cont=$_POST['cont'];
			mysqli_query($con, "INSERT INTO `country_master`(`co_name`) VALUES ('".$cont."')");
			header("location:cont.php");
		}
		else
		{header("location:cont.php");}
	}
	else
	{header("location:index.php");}
?>