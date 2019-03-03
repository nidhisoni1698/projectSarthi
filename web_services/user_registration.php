<?php
	include '../db.php';
	
	$name =$_REQUEST['name'];
	$sname =$_REQUEST['sname'];
	$emailid = $_REQUEST['mail'];
	$phone = $_REQUEST['phone'];
	$password = md5($_REQUEST['psw']);
	$result = mysqli_query($con, "INSERT INTO `user_master`(`um_name`,`um_sname`, `um_cnct`, `um_mail`, `um_psw`) VALUES ('".$name."','".$sname."', '".$phone."', '".$emailid."', '".$password."')");
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