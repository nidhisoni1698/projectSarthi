<?php
	include '../db.php';
	
	$user=$_REQUEST['user'];
	$psw=md5($_REQUEST['psw']);
	$response=array();
	
	$data=mysqli_query($con, "select * from user_master where um_cnct='".$user."' or um_mail='".$user."' and um_psw='".$psw."'") or die(mysqli_error($con));
	if(mysqli_num_rows($data)!=0)
	{
		$response['success']=201;
		$row=mysqli_fetch_array($data);
		$response['data']=$row;
		$response['message']="Login Successfull";
	}
	else
	{
		$response['success']=200;
		$response['message']="UserID or Password Incorrect";
	}
	echo json_encode($response);
?>