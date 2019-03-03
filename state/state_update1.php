<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		include 'db.php';
		if(isset($_POST['add']))
		{
			$id=$_REQUEST['id'];
			$cont=$_POST['cont'];
			$state=$_POST['state'];
			mysqli_query($con, "UPDATE `state_master` SET `co_id`='".$cont."', `st_name`='".$state."' WHERE `st_id`=".$id);
			header("location:state.php");
		}
		else
		{header("location:state.php");}
	}
	else
	{header("location:index.php");}
?>