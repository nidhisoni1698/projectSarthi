<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		include 'db.php';
		if(isset($_POST['add']))
		{
			$cont=$_POST['cont'];
			$state=$_POST['state'];
			mysqli_query($con, "INSERT INTO `state_master`(`co_id`, `st_name`) VALUES ('".$cont."', '".$state."')");
			header("location:state.php");
		}
		else
		{header("location:state.php");}
	}
	else
	{header("location:index.php");}
?>