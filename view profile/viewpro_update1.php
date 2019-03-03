<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		include 'db.php';
		if(isset($_POST['add']))
		{
			$id=$_REQUEST['id'];
			$exam=$_POST['exam'];
			$board=$_POST['board'];
			$per=$_POST['per'];
			$yrs=$_POST['yrs'];

			mysqli_query($con, "UPDATE `edu_master` SET `em_title`='".$exam."', `em_uni`='".$board."', `em_score`='".$per."', `em_payrs`='".$yrs."' WHERE `em_id`=".$id) or die(mysqli_error($con));
			header("location:viewpro.php");
		}
		else
		{header("location:viewpro.php");}
	}
	else
	{header("location:index.php");}
?>