<?php 
	include '../db.php';
	
	$oldpass=md5($_REQUEST['oldpass']);
	$password=md5($_REQUEST['password']);
	$retypepass=md5($_REQUEST['retypepass']);
	$userid=$_REQUEST['userid'];
	
	if($password==$retypepass)
	{
		
		$result=mysqli_query($con, "UPDATE `user_master` SET `um_psw`='".$retypepass."' WHERE `um_id`='".$userid."' and um_psw='".$oldpass."'");
	}
	$response = array();
	
	if($result)
	{
		$response["success"] = 201;
	}
	else
	{
		$response["success"] = 200;
	}
	echo json_encode($response);
?>