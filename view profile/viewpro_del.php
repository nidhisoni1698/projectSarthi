<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		include 'db.php';
		
		$id=$_REQUEST['id'];

		mysqli_query($con, "DELETE FROM `edu_master` WHERE `em_id`=".$id);
		header("location:viewpro.php");
		
	}
	else
	{header("location:index.php");}
?>