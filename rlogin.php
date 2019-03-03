<?php
	session_start();
	include 'db.php';
	if(isset($_POST['login']))
	{
		$user=$_POST['user'];
		$psw=md5($_POST['psw']);

		$login=mysqli_query($con, "select * from user_master where um_cnct='".$user."' or um_mail='".$user."' and um_psw='".$psw."'");
		if(mysqli_num_rows($login)!=0)
		{
			$log=mysqli_fetch_array($login);
			$_SESSION['userid']=$log['um_id'];
			header("location:dashboard.php");
		}
		else
		{header("location:index.php?login=failed");}
	}
	else if(isset($_POST['register']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$cnct=$_POST['cnct'];
		$mail=$_POST['mail'];
		$psw=md5($_POST['psw']);	

		$register=mysqli_query($con, "INSERT INTO `user_master`(`um_name`, `um_sname`, `um_cnct`, `um_mail`, `um_psw`, `um_regdate`) VALUES ('".$fname."', '".$lname."', '".$cnct."', '".$mail."', '".$psw."', now())");

		$_SESSION['userid']=mysqli_insert_id($con);
		header("location:dashboard.php");
	}
	else
	{
		header("location:index.php");
	}
?>