<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		include 'db.php';
		if(isset($_POST['add']))
		{
			$id=$_REQUEST['id'];
			$cont=$_POST['cont'];
			mysqli_query($con, "UPDATE `country_master` SET `co_name`='".$cont."' WHERE `co_id`=".$id);
			header("location:cont.php");
		}
		else
		{header("location:cont.php");}
	}
	else
	{header("location:index.php");}
?>