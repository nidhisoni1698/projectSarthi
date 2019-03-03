<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		include 'db.php';
		
		$id=$_REQUEST['id'];
		mysqli_query($con, "DELETE FROM `city_master` WHERE `ct_id`=".$id);
		header("location:city.php");
	}
	else
	{header("location:index.php");}
?>