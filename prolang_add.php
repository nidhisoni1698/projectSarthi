<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		include 'db.php';
		if(isset($_POST['add']))
		{
			$lang=$_POST['lang'];
			mysqli_query($con, "INSERT INTO `pro_lang`(`pl_name`) VALUES ('".$lang."')");
			header("location:prolang.php");
		}
		else
		{header("location:prolang.php");}
	}
	else
	{header("location:index.php");}
?>