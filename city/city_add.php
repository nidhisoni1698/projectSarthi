<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		include 'db.php';
		if(isset($_POST['add']))
		{
			$stat=$_POST['stat'];
			$city=$_POST['city'];
			$pin= $_POST['pin'];
			mysqli_query($con, "INSERT INTO `city_master`(`st_id`, `ct_name`, `ct_pin`) VALUES ('".$stat."', '".$city."', '".$pin."')");
			header("location:city.php");
		}
		else
		{header("location:city.php");}
	}
	else
	{header("location:index.php");}
?>