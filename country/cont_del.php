<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		include 'db.php';
		
		$id=$_REQUEST['id'];
		mysqli_query($con, "DELETE FROM `country_master` WHERE `co_id`=".$id);
		header("location:cont.php");
		
	}
	else
	{header("location:index.php");}
?>