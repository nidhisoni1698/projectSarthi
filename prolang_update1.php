<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		include 'db.php';
		if(isset($_POST['add']))
		{
			$id=$_REQUEST['id'];
			$lang=$_POST['lang'];
			mysqli_query($con, "UPDATE `pro_lang` SET `pl_name`='".$lang."' WHERE `pl_id`=".$id);
			header("location:prolang.php");
		}
		else
		{header("location:prolang.php");}
	}
	else
	{header("location:index.php");}
?>