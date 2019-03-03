<?php
	include '../db.php';
	
	$user=$_REQUEST['um_id'];


	$response=array();
	
	$data=mysqli_query($con, "select * from feedback_help where um_id=".$user) or die(mysqli_error($con));

	if(mysqli_num_rows($data)!=0)
	{
		$response['success']=201;
		while($row=mysqli_fetch_array($data))
		{$response['data'][]=$row;}
		$response['message']="Login Successfull";
	}
	else
	{
		$response['success']=200;
		$response['message']="UserID or Password Incorrect";
	}
	echo json_encode($response);
?>