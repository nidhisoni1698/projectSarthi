<?php
	include '../db.php';
	
	$pro_rate=$_REQUEST['pm_id'];


	$response=array();
	
	$data=mysqli_query($con, "select * from rating_master where pm_id=".$pro_rate) or die(mysqli_error($con));

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