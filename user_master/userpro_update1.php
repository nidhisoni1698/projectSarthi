<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		include 'db.php';
		if(isset($_POST['add']))
		{
			$id=$_REQUEST['userid'];
			$fname=$_POST['fname'];
			$sname=$_POST['sname'];
			$cnct=$_POST['cnct'];
			$mail=$_POST['mail'];
			$psw=$_POST['psw'];
			$add=$_POST['add'];
			$bdate=$_POST['bdate'];
			$gen=$_POST['gen'];
			$lang=$_POST['lang'];
			$linkedin=$_POST['linkedin'];
			$occp=$_POST['occp'];
			
			mysqli_query($con, "UPDATE `user_master` SET `um_id`='".$fname."', `um_sname`='".$sname."', `um_cnct`='".$cnct."', `um_mail`='".$mail."',`um_psw`='".$psw."',`um_add`='".$add."',`um_gen`='".$gen."',`um_lang`='".$lang."',`um_linkedin`='".$linkedin."',`um_occp`='".$occp."'  WHERE `um_id`=".$id);
			header("location:userpro_update.php");
		}
		else
		{header("location:userpro_update.php");}
	}
	else
	{header("location:index.php");}
?>