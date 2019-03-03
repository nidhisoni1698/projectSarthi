<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		include 'db.php';
		if(isset($_POST['add']))
		{
			$id=$_REQUEST['id'];
			$stat=$_POST['stat'];
			$city=$_POST['city'];
			$pin=$_POST['pin'];
			mysqli_query($con, "UPDATE `city_master` SET `st_id`='".$stat."', `ct_name`='".$city."', `ct_pin`='".$pin."' WHERE `ct_id`=".$id);
			header("location:city.php");
		}
		else
		{header("location:city.php");}
	}
	else
	{header("location:index.php");}
?>