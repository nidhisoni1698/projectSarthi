<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		include 'db.php';
		if(isset($_POST['add']))
		{
	
			$exam = "";
			$newCount = count($_POST["exam"]);
			$newValues=0;

			for ($i=0; $i <newCount ; $i++) 
			{ 
				$exam=$_POST["exam"][$i];
				$board=$_POST["board"][$i];
				$per=$_POST["per"][$i];
				$yrs=$_POST["yrs"][$i];

				mysqli_query($con, "INSERT INTO `edu_master`(`um_id`, `em_title`, `em_uni`, `em_score`, `em_payrs`) VALUES ('".$_SESSION['userid']."', '".$exam."', '".$board."', '".$per."', '".$yrs."')");


			}
			header("location:viewpro.php");
		}
		else
		{header("location:viewpro.php");}
	}
	else
	{header("location:index.php");}
?>