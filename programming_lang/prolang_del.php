<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		include 'db.php';
		
		$id=$_REQUEST['id'];
		mysqli_query($con, "DELETE FROM `pro_lang` WHERE `pl_id`=".$id);
		header("location:prolang.php");
		
	}
	else
	{header("location:index.php");}
?>