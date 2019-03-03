<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		include 'db.php';
		
		$id=$_REQUEST['id'];
		mysqli_query($con, "DELETE FROM `state_master` WHERE `st_id`=".$id);
		header("location:state.php");
	}
	else
	{header("location:index.php");}
?>